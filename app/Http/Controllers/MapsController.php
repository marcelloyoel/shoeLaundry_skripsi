<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\LaundrySepatu;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\LengthAwarePaginator as PaginationLengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class MapsController extends Controller
{

    // public function getUserLocation(Request $request)
    // {
    //     try {
    //         $latitude = $request->input('latitude');
    //         $longitude = $request->input('longitude');
    //         return response()->json(['message' => 'User location received']);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }

    public function calculateDistance(Request $request)
{
    // $latitude = $request->input('latitude');
    // $longitude = $request->input('longitude');
    // $origin = "$latitude,$longitude";
    // dd($latitude, $longitude);
    // $origin = 'Jl. Pintu Air Raya No.2-F, RT.7/RW.1, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710';
    $origin = 'Jl. Jalur Sutera Bar. No.Kav. 21, RT.001/RW.004, Panunggangan, Kec. Pinang, Kota Tangerang, Banten 15143';
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
                $laundrySepatu->update(['distance' => $distance]);
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

