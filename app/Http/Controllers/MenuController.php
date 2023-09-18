<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
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
        // $service = Service::find($id);
        $laundry = LaundrySepatu::find($id);
        // $user = Auth::user();
        // $laundry = $user->laundrySepatu;
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
        return view('laundry.servicelist.detailservice', [
            'title' => $service->serviceName,
            'service'   => $service
        ]);
    }

    public function serviceLaundryBuyer($id)
    {
        $service = Service::find($id);
        return view('buyer.detailservice', [
            'title' => $service->serviceName,
            'service'   => $service
        ]);
    }

}
