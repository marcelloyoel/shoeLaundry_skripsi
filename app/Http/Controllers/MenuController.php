<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\User;

class MenuController extends Controller
{
    // public function index()
    // {

    // }

    // public function profile()
    // {
    //     return view('admin.profile', [
    //         'title' => 'profile',
    //         'users' => User::all(),
    //         'javascript'   => 'profile.js'
    //     ]);
    // }
    public function homeLaundry($id)
    {
        $laundry = LaundrySepatu::find($id);
        return view('buyer.laundry', [
            'title' => $laundry->laundrySepatuName,
            'laundry'   => $laundry
        ]);
    }
}
