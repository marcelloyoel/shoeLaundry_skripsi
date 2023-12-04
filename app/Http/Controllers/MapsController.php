<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;

class MapsController extends Controller
{
    public function updateAddress(Request $request)
    {
        $user = auth()->user();

        if ($user) {
            try {
                $updatedAddress = $request->input('address');

                // Store the updated address in the session
                session(['temp_address' => $updatedAddress]);

                return redirect()->back()->with('success', 'Address updated successfully!');
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'User not authenticated');
        }
    }


    public function calculateDistance(Request $request)
    {
        $ip = $request->getRemoteAddr();
        // $ip = $_SERVER['REMOTE_ADDR'];
        // $ip = '49.35.41.195'; // contoh ip address public
        $currentUserInfo = Location::get($ip);

        // $users = User::all();
        $user = auth()->user();
        if ($user) {

            if ($currentUserInfo === false) {
                // if ip address is private
                $origin = session('temp_address') ?? $user->address;
            } else {
                // if ip address is public
                $origin = session('temp_address') ?? $currentUserInfo->latitude . ', ' . $currentUserInfo->longitude;
            }

            // echo "Logged-in User Address: $origin";
        } else {
            // echo "User not authenticated";
        }

        dd($ip, $currentUserInfo, $currentUserInfo->longitude, $currentUserInfo->latitude, $origin);

        // $origin = 'Jl. Pintu Air Raya No.2-F, RT.7/RW.1, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710';
        // $origin = 'Jl. Jalur Sutera Bar. No.Kav. 21, RT.001/RW.004, Panunggangan, Kec. Pinang, Kota Tangerang, Banten 15143';
        $users = User::whereHas('laundrySepatu', function ($query) {
            $query->whereNotNull('Address');
        })->get();

        $apiKey = 'AIzaSyAU6fB6SZ4eAQUMyMyXsVgcJzkRMjXNbeQ';
        $client = new Client();
        $distances = [];

        foreach ($users as $user) {
            // Retrieve the associated LaundrySepatu for the current user
            $laundrySepatu = LaundrySepatu::where('user_id', $user->id)->first();

            // If a LaundrySepatu is found, get the associated address
            if ($laundrySepatu) {
                $address = $laundrySepatu->Address;
                $destination = $address;
                // Output or use the $destination as needed
                // echo "User: $user->displayName, Address: $address\n";

                $response = $client->get('https://maps.googleapis.com/maps/api/distancematrix/json', [
                    'query' => [
                        'origins' => $origin,
                        'destinations' => $destination,
                        'key' => $apiKey,
                    ],
                ]);

                $data = json_decode($response->getBody(), true);

                // Check if the necessary keys exist
                if (isset($data['rows'][0]['elements'][0]['distance']['text'])) {
                    // Handle the response
                    $distance = $data['rows'][0]['elements'][0]['distance']['text'];

                    // Store the distance in the array
                    $distances[$user->id] = $distance;

                    // If you want to store the distance in the $laundrySepatu model, you can do so here
                    // $laundrySepatu->update(['distance' => $distance]);
                } else {
                    // Handle the case where the expected keys are not present
                    // echo "Invalid response structure for user: $user->displayName\n";
                }
            } else {
                // Handle the case where LaundrySepatu is not found
                // echo "User: $user->name does not have associated LaundrySepatu.\n";
            }
        }

        // dd($data, $distance, $distances);

        // Store the distances in the session or perform other actions
        Session::put('calculated_distances', $distances);

        // If you want to return a response after processing all users, you can do it here
        return response()->json(['message' => 'Distance calculation completed']);
    }

    public function showDistance(Request $request)
    {
        // Call calculateDistance to ensure the distance is calculated
        $this->calculateDistance($request);

        // Retrieve the calculated distances from the session
        $calculatedDistances = Session::get('calculated_distances');

        return view('your_view', compact('calculatedDistances'));
    }
}
