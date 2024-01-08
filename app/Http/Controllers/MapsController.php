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
        public function calculateDistance(Request $request)
        {
            $latitude = session('latitude');
            $longitude = session('longitude');

            info('calculate distance: ' . $latitude);
            info('calculate distance: ' . $longitude);

            $user = auth()->user();

            if ($user) {
                $origin = session('temp_address') ?? $latitude . ',' . $longitude;
            } else {
                return response()->json(['error' => 'User not authenticated']);
            }

            $users = User::whereHas('laundrySepatu', function ($query) {
                $query->whereNotNull('Address');
            })->get();

            $apiKey = 'jh5AUrRs2p3fHyW8x50CKcHhbHwYLGhstZbBW43CeHCMn16JlyyJ7TmuMFVdXE7l'; // Replace with your distancematrix.ai API key
            $client = new Client();
            $distances = [];

            foreach ($users as $user) {
                $laundrySepatu = LaundrySepatu::where('user_id', $user->id)->first();

                if ($laundrySepatu) {
                    $address = urlencode($laundrySepatu->Address);
                    $destination = $address;

                    $url = 'https://api.distancematrix.ai/v1/distancematrix';
                    $url .= '?origins=' . urlencode($origin);
                    $url .= '&destinations=' . $destination;
                    $url .= '&key=' . $apiKey;

                    $response = $client->get($url);

                    $data = json_decode($response->getBody(), true);

                    if (isset($data['rows'][0]['elements'][0]['distance']['text'])) {
                        $distance = $data['rows'][0]['elements'][0]['distance']['text'];
                        $distances[$user->id] = $distance;
                    } else {
                        // Handle the case where distance information is not available
                    }
                } else {
                    // Handle the case where LaundrySepatu is not found for the user
                }
            }

            Session::put('calculated_distances', $distances);

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
