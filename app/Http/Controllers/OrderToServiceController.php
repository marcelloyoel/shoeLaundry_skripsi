<?php

namespace App\Http\Controllers;

use App\Models\OrderToService;
use App\Http\Requests\StoreOrderToServiceRequest;
use App\Http\Requests\UpdateOrderToServiceRequest;

class OrderToServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreOrderToServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderToServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderToService  $orderToService
     * @return \Illuminate\Http\Response
     */
    public function show(OrderToService $orderToService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderToService  $orderToService
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderToService $orderToService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderToServiceRequest  $request
     * @param  \App\Models\OrderToService  $orderToService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderToServiceRequest $request, OrderToService $orderToService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderToService  $orderToService
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderToService $orderToService)
    {
        //
    }
}
