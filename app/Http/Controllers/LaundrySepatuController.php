<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use App\Http\Requests\StoreLaundrySepatuRequest;
use App\Http\Requests\UpdateLaundrySepatuRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class LaundrySepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $laundrySepatu = $user->laundrySepatu;
        // dd($laundrySepatu);
        return view('homeLaundry', [
            'title' => 'Halaman Home',
            'laundrySepatu' => $laundrySepatu
        ]);

        // $this->authorize('view-orders');
        // $user = Auth::user();
        // // dd($user);
        // $laundrySepatu = $user->laundrySepatu;
        // // dd($laundrySepatu);
        // if ($laundrySepatu) {
        //     $orders = Order::where('laundry_sepatu_id', $laundrySepatu->id)->get();
        //     // dd($orders);
        //     return view('laundry.orderlist.index', [
        //         'title' => 'Order List',
        //         'orders' => $orders
        //     ]);
        // }
        // return "bukan laundry ini mah";
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
     * @param  \App\Http\Requests\StoreLaundrySepatuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaundrySepatuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaundrySepatu  $laundrySepatu
     * @return \Illuminate\Http\Response
     */
    public function show(LaundrySepatu $laundrySepatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaundrySepatu  $laundrySepatu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laundry = LaundrySepatu::find($id);

        if (!$laundry) {
            return redirect()->route('laundrysepatu.index')->with('error', 'Laundry not found.');
        }

        return view('laundry.laundryedit.editlaundry', [
            'title' => 'Edit Service',
            'laundry' => $laundry,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaundrySepatuRequest  $request
     * @param  \App\Models\LaundrySepatu  $laundrySepatu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaundrySepatuRequest $request, LaundrySepatu $laundrySepatu)
    {
        //
        $rules = [
            'laundrySepatuName' => ['required'],
            'laundrySepatuSlug' => ['required'],
            'bio' => ['required'],
            'Address' => ['required'],
            'Contact' => ['required'],
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        $validatedData = $request->validate($rules);

        if ($request->hasFile('picture')) {
            $uploadedFile = $request->file('picture');
            $fileName = $uploadedFile->getClientOriginalName();
            $uploadedFile->storeAs('images', $fileName, 'public');
            $validatedData['picture'] = $fileName;
        }

        $user = Auth::user();
        $laundrySepatu = $user->laundrySepatu;
        // dd($laundrySepatu->id);

        LaundrySepatu::where('id', $laundrySepatu->id)->update($validatedData);
        return redirect('/home')->with('update', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaundrySepatu  $laundrySepatu
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaundrySepatu $laundrySepatu)
    {
        //
    }
}
