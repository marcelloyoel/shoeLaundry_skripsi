<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // dd('hello');
        if (Auth::user()->group_id == 1) {
            // // $user = Auth::user();
            // // $laundry = $user->laundrySepatu;
            // // $services = Service::where('laundry_sepatu_id', $laundry->id)->get();
            // // Assuming MapsController is in the same namespace
            // $mapsController = new MapsController();

            // // Call the calculateDistance method internally
            // $mapsController->calculateDistance($request);

            // // Retrieve the calculated distance from the session
            // $calculatedDistances = Session::get('calculated_distances');

            // // You may pass the calculated distance to your view
            // // return view('home', compact('calculatedDistance'));
            // return view('home', compact('calculatedDistances'), [
            //     'title' => 'Halaman Home',
            //     'laundries' => LaundrySepatu::all(),
            //     // 'services' => $services
            // ]);
            $mapsController = new MapsController();
            $mapsController->calculateDistance($request);
            $calculatedDistances = Session::get('calculated_distances');

            // Paginate the LaundrySepatu model with 8 items per page
            $laundries = LaundrySepatu::all();

            return view('home', compact('calculatedDistances', 'laundries'), [
                'title' => 'Halaman Home',
            ]);
        } else if (Auth::user()->group_id == 2) {
            // dd($laundry->id);
            $user = Auth::user();
            $laundry = $user->laundrySepatu;
            $services = Service::where('laundry_sepatu_id', $laundry->id)->get();
            return view('homeLaundry', [
                'title' => 'Halaman Home',
                'laundry'   => $laundry,
                'services' => $services
            ]);
        } else {
            return view('homeAdmin', [
                'title' => 'Halaman Home',
                'users' => User::all(),
                'javascript'   => 'profile.js'
            ]);
        }

    }
}
// $laundry = LaundrySepatu::find($id);
// return view('buyer.laundry', [
//     'title' => $laundry->laundrySepatuName,
//     'laundry'   => $laundry
// ]);
