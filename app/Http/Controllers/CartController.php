<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart as ModelsCart;
use App\Models\LaundrySepatu;
use App\Models\Order;
use App\Models\OrderToService;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Midtrans\Config as Midtrans;
use Midtrans\Snap as Snap;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $serverKey;
    private $isProduction;
    private $isSanitized;
    private $is3ds;
    public function __construct()
    {
        $this->serverKey = config('midtrans.serverKey');
        $this->isProduction = config('midtrans.isProduction');
        $this->isSanitized = config('midtrans.isSanitized');
        $this->is3ds = config('midtrans.is3ds');
    }
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
        // dd($items);
        $shops = [];
        foreach ($items as $item) {
            $shopName = $item->attributes->laundrySepatuName;
            $shopSlug = $item->attributes->laundrySepatuSlug;
            if (!isset($shops[$shopName])) {
                $shops[$shopName] = [
                    'shopSlug' => $shopSlug,
                    'items' => [],
                ];
            }
            $shops[$shopName]['items'][] = $item;
        }
        // dd($shops);

        return view('buyer.shoppingcart', [
            'title' => 'Shopping Cart',
            'shops'   => $shops,
            'isEmpty'   => $isEmpty,
            'database' => $databaseCart,
            'javascript' => 'shoppingcart.js',
            'subtotal'     => Cart::getSubTotal(),
            'total'        => Cart::getTotal()
        ]);
    }

    public function addToCart(Request $request)
    {
        $service = $request->input('service');
        $authId = $request->input('userId');
        $laundrySepatuName = $request->input('laundrySepatuName');
        $laundrySepatuSlug = $request->input('laundrySlug');
        // Add the service to the cart
        Cart::add(array(
            'id' => $service['id'],
            'name' => $service['serviceName'],
            'price' => $service['servicePrice'],
            'quantity' => 1,
            'attributes' => array(
                'laundrySepatuName' => $laundrySepatuName,
                'laundrySepatuSlug' => $laundrySepatuSlug
            )
        ));
        // $request->session()->save();
        DB::table('carts')->insert([
            'service_id' => $service['id'],
            'user_id' => $authId,
            'name' => $service['serviceName'],
            'price' => $service['servicePrice'],
            'quantity' => 1,
            'laundrySepatuName' => $laundrySepatuName,
            'laundrySepatuSlug' => $laundrySepatuSlug,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return response()->json(['success' => true]);
    }

    public function decreaseCart(Request $request)
    {
        $id = $request->input('id');
        $serviceId = $request->input('item');

        Cart::update($serviceId, array(
            'quantity' => -1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
        ));
        ModelsCart::where('user_id', $id)->where('service_id', $serviceId)->first()->delete();
        // Get the updated cart content
        $updatedCart = Cart::getContent();

        // Find the updated item
        $updatedItem = $updatedCart->get($serviceId);

        // Return the new quantity
        return response()->json(['newQuantity' => $updatedItem->quantity]);
    }

    public function increaseCart(Request $request)
    {
        $id = $request->input('id');
        $itemJson = $request->input('item');
        $item = json_decode($itemJson);

        Cart::update($item->id, array(
            'quantity' => 1, // so if the current product has a quantity of 4, it will subtract 1 and will result to 3
        ));

        DB::table('carts')->insert([
            'service_id' => $item->id,
            'user_id' => $id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'laundrySepatuName' => $item->attributes->laundrySepatuName,
            'laundrySepatuSlug' => $item->attributes->laundrySepatuSlug,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // Get the updated cart content
        $updatedCart = Cart::getContent();

        // Find the updated item
        $updatedItem = $updatedCart->get($item->id);

        // Return the new quantity
        return response()->json(['newQuantity' => $updatedItem->quantity]);
    }

    public function deleteItem($id, $idUser)
    {
        Cart::remove($id);
        ModelsCart::where('user_id', $idUser)->where('service_id', $id)->delete();
        return redirect('cart')->with('delete', 'Service berhasil dihapus!');
    }

    // public function checkoutPage(Request $request)
    // {
    //     $items = $request->input('orderShop');
    //     $itemsUnjson = json_decode($items);
    //     return view('buyer.checkout', [
    //         'title' => 'Checkout',
    //         'shops'   => $itemsUnjson,
    //         'mentah'    => $items
    //     ]);
    // }
    public function checkoutPage(Request $request)
    {
        $items = $request->input('shopOrders');
        $total = $request->input('totalOrder');
        $itemsUnjson = json_decode($items, true); // Convert JSON string to PHP array
        // dd($itemsUnjson);
        return view('buyer.checkout', [
            'title' => 'Checkout',
            'shops'   => $itemsUnjson,
            'total'     => $total,
            'javascript' => 'checkout.js',
        ]);
    }

    public function makeOrder(Request $request)
    {
        // dd($this->serverKey);
        try {
            DB::beginTransaction();
            $jumlahToko = $request->input('jumlahToko');
            $hargaTotal = $request->input('totalOrderValue');
            $user_id = Auth::user()->id;
            //deskripsinya belom ditambahin di table order lupa hehe

            for ($i = 1; $i <= $jumlahToko; $i++) {
                $phoneNumber = Auth::user()->phoneNumber;
                $address = $request->input('address-' . $i);
                $status = $request->input('paymentStatus');
                $merkSepatu = $request->input('merkSepatu-' . $i);
                $jenisSepatu = $request->input('jenisSepatu-' . $i);
                $jsonServiceId = $request->input('service_ids-' . $i);
                $service_ids = json_decode($jsonServiceId);
                $service = Service::find($service_ids[0]);
                $laundrySepatuId = $service->laundrySepatu->id;
                $harga = $request->input('tokoPrice-' . $i);
                $deskripsi = $request->input('description-' . $i);
                $orderArray = array(
                    'user_id' => $user_id,
                    'laundry_sepatu_id' => $laundrySepatuId,
                    'status'    => $status,
                    'phoneNumber'   => $phoneNumber,
                    'address'   => $address,
                    'jenisSepatu' => $jenisSepatu,
                    'merkSepatu' => $merkSepatu,
                    'harga' => $harga,
                    'description'   => $deskripsi
                );

                $order = Order::create($orderArray);
                $orderId = $order->id;
                for ($j = 0; $j < count($service_ids); $j++) {
                    $orderToService = array(
                        'order_id'  =>  $orderId,
                        'service_id'    => $service_ids[$j]
                    );
                    OrderToService::create($orderToService);
                    Cart::remove($service_ids[$j]);
                    ModelsCart::where('user_id', $user_id)->where('service_id', $service_ids[$j])->first()->delete();
                }
            }
            DB::commit();
            return redirect('/home')->with('submitted', 'Order berhasil dibuat!');
        } catch (\Exception $e) {
            DB::rollback();
            throw new \Exception('Transaction failed: ' . $e->getMessage());
            return redirect('/home')->with('failed', 'Order gagal dibuat!');
        }
    }

    public function buyNow(Request $request)
    {
        $service = json_decode($request->input('service'));
        // dd($service);
        $shops = array();
        $id = $service->id;
        $laundry = LaundrySepatu::where('id', $service->laundry_sepatu_id)->first();
        // dd($laundry);
        $shopName = $laundry->laundrySepatuName;
        $price = $service->servicePrice;
        $quantity = 1;
        $name = $service->serviceName;

        if (!isset($shops[$shopName])) {
            $shops[$shopName] = array();
        }

        $shops[$shopName][] = array(
            'idService' => $id,
            'price' => $price,
            'quantity' => $quantity,
            'name' => $name
        );

        return view('buyer.checkout', [
            'title' => 'Checkout',
            'shops'   => $shops,
            'total'     => $price,
            'javascript' => 'checkout.js',
        ]);
    }

    public function generateToken(Request $request)
    {
        $price = intval($request->input('price'));
        Midtrans::$serverKey = $this->serverKey;
        Midtrans::$isProduction = $this->isProduction;
        Midtrans::$isSanitized = $this->isSanitized;
        Midtrans::$is3ds = $this->is3ds;

        $transaction_details = array(
            'order_id'  => 'ORDER-' . time(),
            'gross_amount'  => $price
        );
        $transaction = array(
            'transaction_details'   => $transaction_details
        );

        $token = Snap::getSnapToken($transaction);
        return $token;
    }
}
