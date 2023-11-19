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
            $mapsController = new MapsController();
            $mapsController->calculateDistance($request);
            $calculatedDistances = Session::get('calculated_distances');

            // Get all laundries
            $laundriesQuery = LaundrySepatu::query();

            // Sort the laundries by distance
            $laundries = $laundriesQuery->get()->sortBy(function ($laundry) use ($calculatedDistances) {
                return (float) str_replace(',', '', $calculatedDistances[$laundry->user_id] ?? PHP_INT_MAX);
            });

            // Paginate the sorted laundries with 8 items per page
            $perPage = 8;
            $currentPage = $request->query('page') ?? 1;
            $offset = ($currentPage - 1) * $perPage;
            $currentPageItems = $laundries->slice($offset, $perPage)->values();
            $total = $laundries->count();

            $paginatedLaundries = new \Illuminate\Pagination\LengthAwarePaginator(
                $currentPageItems,
                $total,
                $perPage,
                $currentPage,
                ['path' => $request->url()]
            );

            return view('home', [
                'title' => 'Halaman Home',
                'calculatedDistances' => $calculatedDistances,
                'laundries' => $paginatedLaundries,
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
