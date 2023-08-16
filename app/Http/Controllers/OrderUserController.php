<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $orders = Order::where('user_id', $user->id)->get();
            // dd($orders);
            return view('buyer.orders', [
                'title' => 'Order List',
                'orders' => $orders
            ]);
        }
        return "Elu siapa bang";
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
    public function show(Order $orderlist)
    {
        // $this->authorize('update-orders');
        // dd($orderlist);
        $orderToServices = $orderlist->orderToService;
        $services = [];

        // Loop through the related OrderToService records and get the ServiceName
        foreach ($orderToServices as $orderToService) {
            // Access the related Service and get the serviceName attribute
            $servicesNih = $orderToService->service;

            // Add the serviceName to the array
            $services[] = $servicesNih;
        }

        // Assuming you have an instance of the LaundrySepatu model
        // $laundrySepatu = $orderlist->laundrySepatu;
        // dd($orderlist->laundrySepatu->service);
        // Get the related services
        // $relatedServices = $laundrySepatu->services;

        // // Initialize an array to store service names
        // $allServices = [];

        // // Loop through the related services and get the service names
        // foreach ($relatedServices as $service) {
        //     $allServices[] = $service->serviceName;
        // }

        // Get the related LaundrySepatu instance for the orderlist
        $laundrySepatu = [];
        $laundrySepatu = $orderlist->laundrySepatu->service;
        // dd($laundrySepatu);

        // Check if a LaundrySepatu instance exists for the orderlist
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
        $total = 0;
        foreach ($orderToServices as $orderToService) {
            // Access the related Service and get the serviceName attribute
            $servicesNih = $orderToService->service;
            $total += $servicesNih->servicePrice;
        }

        return view('buyer.detail', [
            'order' => $orderlist,
            'title' => 'View Order',
            'services'  => $services,
            'allService' => $laundrySepatu,
            'total'     => $total
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
