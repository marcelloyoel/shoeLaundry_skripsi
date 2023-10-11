<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\Service;
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
        $services = Service::where('laundry_sepatu_id', $laundry->id)->get();
        return view('buyer.laundry', [
            'title' => $laundry->laundrySepatuName,
            'laundry'   => $laundry,
            'services' => $services
        ]);
    }

    public function serviceLaundry($id)
    {
        $service = Service::find($id);
        return view('laundry.servicelist.service', [
            'title' => $service->serviceName,
            'service'   => $service
        ]);
    }

    public function serviceLaundryBuyer($id)
    {
        $service = Service::find($id);
        return view('buyer.servicedetail', [
            'title' => $service->serviceName,
            'service'   => $service
        ]);
    }
}
