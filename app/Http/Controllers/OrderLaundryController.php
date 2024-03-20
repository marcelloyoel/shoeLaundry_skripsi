<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderLaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // dd($user);
        $laundrySepatu = $user->laundrySepatu;
        // dd($laundrySepatu);
        if ($laundrySepatu) {
            $orders = Order::where('laundry_sepatu_id', $laundrySepatu->id)->where('status', '>', 0)->get();
            // dd($orders);
            return view('laundry.orderlist.index', [
                'title' => 'Order List',
                'orders' => $orders
            ]);
        }
        return "bukan laundry ini mah";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $laundryorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $laundryorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $laundryorder)
    {
        $orderToServices = $laundryorder->orderToService;
        $services = [];

        // Loop through the related OrderToService records and get the ServiceName
        foreach ($orderToServices as $orderToService) {
            // Access the related Service and get the serviceName attribute
            $servicesNih = $orderToService->service;

            // Add the serviceName to the array
            $services[] = $servicesNih;
        }

        // Assuming you have an instance of the LaundrySepatu model
        // $laundrySepatu = $order->laundrySepatu;
        // dd($order->laundrySepatu->service);
        // Get the related services
        // $relatedServices = $laundrySepatu->services;

        // // Initialize an array to store service names
        // $allServices = [];

        // // Loop through the related services and get the service names
        // foreach ($relatedServices as $service) {
        //     $allServices[] = $service->serviceName;
        // }

        // Get the related LaundrySepatu instance for the order
        $laundrySepatu = [];
        $laundrySepatu = $laundryorder->laundrySepatu->service;
        // dd($laundrySepatu);

        // Check if a LaundrySepatu instance exists for the order
        // if ($laundrySepatu) {
        //     // Get the related services for the LaundrySepatu instance
        //     $relatedServices = $laundrySepatu->service;

        //     // Initialize an array to store service names
        //     $serviceNames = [];

        //     // Loop through the related services and get the service names
        //     foreach ($relatedServices as $service) {
        //         $serviceNames[] = $service->serviceName;
        //     }
        //     dd($serviceNames);

        //     // Now $serviceNames contains the names of services related to the given Order's LaundrySepatu
        // }
        // dd($orderToService->service);
        // $total = 0;
        // foreach ($orderToServices as $orderToService) {
        //     // Access the related Service and get the serviceName attribute
        //     $servicesNih = $orderToService->service;
        //     $total += $servicesNih->servicePrice;
        // }

        return view('laundry.orderlist.detail', [
            'order' => $laundryorder,
            'title' => 'View Order',
            'services'  => $services,
            'allService' => $laundrySepatu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $laundryorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $laundryorder)
    {
        // dd($request->group_id);
        $laundryorder->status = $request->group_id;
        $laundryorder->save();
        return redirect('/laundryorder')->with('update', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $laundryorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $laundryorder)
    {
        //
    }
}
