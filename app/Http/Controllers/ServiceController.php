<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
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
        if ($laundrySepatu) {
            $services = Service::where('laundry_sepatu_id', $laundrySepatu->id)->get();
            // dd($services);
            return view('laundry.servicelist.servicelist', [
                'title' => 'Service List',
                'services'  => $services
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laundry.servicelist.addservice', [
            'title' => 'Add Service'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $laundry = $user->laundrySepatu;
        $laundryid = $laundry->id;

        $validatedData = $request->validate([
            'serviceName' => ['required'],
            // 'serviceSlug' => ['unique:services', 'required'],
            'status' => ['required'],
            'servicePrice' => ['nullable'],
            'serviceDescription' => ['required'],
            'servicePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('servicePicture')) {
            $uploadedFile = $request->file('servicePicture');
            $fileName = $uploadedFile->getClientOriginalName();
            $uploadedFile->storeAs('images', $fileName, 'public');
            $validatedData['servicePicture'] = $fileName;
        }

        // dd($validatedData);
        $validatedData['laundry_sepatu_id'] = $laundryid;

        Service::create($validatedData);
        return redirect('/laundryservice')->with('new', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $laundryservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $laundryservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $laundryservice)
    {
        // dd($laundryservice);

        return view('laundry.servicelist.editservice', [
            'title' => 'Edit Service',
            'service'   => $laundryservice
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $laundryservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $laundryservice)
    {
        $uploadedPicture = $request->file('picture');
        
        $rules = [
            'serviceName'   => ['required'],
            'status'   => ['required'],
            'servicePrice'   => ['required'],
            'serviceDescription'   => ['required'],
            'serviceSlug' => ['required'],
            // 'servicePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
        dd("3");
        if ($uploadedPicture) {
            $rules['servicePicture'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
            $validatedData = $request->validate($rules);
            $pictureFileName = $uploadedPicture->getClientOriginalName();
            $uploadedPicture->storeAs('images', $pictureFileName, 'public');
            $validatedData['servicePicture'] = $pictureFileName;
        } else {
            $validatedData = $request->validate($rules);
        }
        dd("4");
        // $validatedData = $request->validate($rules);

        // if ($request->hasFile('servicePicture')) {
        //     $uploadedFile = $request->file('servicePicture');
        //     $fileName = $uploadedFile->getClientOriginalName();
        //     $uploadedFile->storeAs('images', $fileName, 'public');
        //     $validatedData['servicePicture'] = $fileName;
        // }

        Service::where('id', $laundryservice->id)->update($validatedData);
        return redirect('/laundryservice')->with('update', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $laundryservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $laundryservice)
    {
        Service::destroy($laundryservice->id);
        return redirect('/laundryservice')->with('delete', 'Data berhasil dihapus!');
    }
}
