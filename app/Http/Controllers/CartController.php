<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function showCart()
    {
        $items = Cart::getContent();
        $isEmpty = Cart::isEmpty();
        $databaseCart = DB::table('carts')->get();
        return view('buyer.shoppingcart', [
            'title' => 'Shopping Cart',
            'items'   => $items,
            'isEmpty'   => $isEmpty,
            'database' => $databaseCart
        ]);
    }

    public function addToCart(Request $request)
    {
        $service = $request->input('service');
        $authId = $request->input('userId');
        // Add the service to the cart
        Cart::add(array(
            'id' => $service['id'],
            'name' => $service['serviceName'],
            'price' => $service['servicePrice'],
            'quantity' => 1,
            'attributes' => array()
        ));
        // $request->session()->save();
        DB::table('carts')->insert([
            'service_id' => $service['id'],
            'user_id' => $authId,
            'name' => $service['serviceName'],
            'price' => $service['servicePrice'],
            'quantity' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return response()->json(['success' => true]);
    }
}
