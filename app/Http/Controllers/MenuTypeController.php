<?php

namespace App\Http\Controllers;

use App\Models\MenuType;
use App\Http\Requests\StoreMenuTypeRequest;
use App\Http\Requests\UpdateMenuTypeRequest;

class MenuTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreMenuTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMenuTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuType  $menuType
     * @return \Illuminate\Http\Response
     */
    public function show(MenuType $menuType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuType  $menuType
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuType $menuType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuTypeRequest  $request
     * @param  \App\Models\MenuType  $menuType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuTypeRequest $request, MenuType $menuType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuType  $menuType
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuType $menuType)
    {
        //
    }
}
