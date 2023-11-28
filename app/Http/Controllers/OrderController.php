<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\LaundrySepatu;
use App\Models\Service;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.order.orderlist', [
            'title' => 'Order List',
            'orders' => Order::all()
        ]);
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        // $this->authorize('update-orders');
        $orderToServices = $order->orderToService;
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
        $laundrySepatu = $order->laundrySepatu->service;
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

        return view('admin.order.view', [
            'order' => $order,
            'title' => 'View Order',
            'services'  => $services,
            'allService' => $laundrySepatu
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
        $orderToServices = $order->orderToService;
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
        $laundrySepatu = $order->laundrySepatu->service;
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
        $total = 0;
        foreach ($orderToServices as $orderToService) {
            // Access the related Service and get the serviceName attribute
            $servicesNih = $orderToService->service;
            $total += $servicesNih->servicePrice;
        }

        return view('laundry.orderlist.detail', [
            'order' => $order,
            'title' => 'View Order',
            'services'  => $services,
            'allService' => $laundrySepatu,
            'total'     => $total
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $this->authorize('update', $order);
        dd($request->group_id);
        // Order::where('id', $order->id)->update($request->status);
        return redirect('/profile')->with('update', 'Data berhasil diupdate!');
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
