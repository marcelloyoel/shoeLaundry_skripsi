<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // dd('hello');
        if (Auth::user()->group_id == 1) {
            return view('home', [
                'title' => 'Halaman Home',
                'laundries' => LaundrySepatu::simplePaginate(12)
            ]);
        } else if (Auth::user()->group_id == 2) {
            $user = Auth::user();
            $laundry = $user->laundrySepatu;
            return view('homeLaundry', [
                'title' => 'Halaman Home',
                'laundry'   => $laundry
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
