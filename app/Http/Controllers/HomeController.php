<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // dd('hello');
        if (Auth::user()->group_id == 1) {
            // $user = Auth::user();
            // $laundry = $user->laundrySepatu;
            // $services = Service::where('laundry_sepatu_id', $laundry->id)->get();
            return view('home', [
                'title' => 'Halaman Home',
                'laundries' => LaundrySepatu::simplePaginate(8),
                // 'services' => $services
            ]);
        } else if (Auth::user()->group_id == 2) {
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
                'title' => 'Halaman Home'
            ]);
        }
    }
}
// $laundry = LaundrySepatu::find($id);
// return view('buyer.laundry', [
//     'title' => $laundry->laundrySepatuName,
//     'laundry'   => $laundry
// ]);
