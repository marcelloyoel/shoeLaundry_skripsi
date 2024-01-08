<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Http;

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

        $latitude = session('latitude');
        $longitude = session('longitude');

        info('calculate distance: ' . $latitude);
        info('calculate distance: ' . $longitude);

        // $users = User::all();
        $user = auth()->user();
        if ($user) {

            $origin = session('temp_address') ?? $latitude . ', ' . $longitude;

        } else {

        }

        $users = User::whereHas('laundrySepatu', function ($query) {
            $query->whereNotNull('Address');
        })->get();

        $apiKey = 'jh5AUrRs2p3fHyW8x50CKcHhbHwYLGhstZbBW43CeHCMn16JlyyJ7TmuMFVdXE7l';
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

                $response = $client->get('https://api.distancematrix.ai/v1/distancematrix', [
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

                } else {

                }
            } else {

            }
        }

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
