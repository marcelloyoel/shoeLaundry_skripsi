<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use App\Models\LaundrySepatu;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nonlogin.register', [
            'title' => 'Halaman Register'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nonlogin.register', [
            'title' => 'Register New user'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'username' => ['unique:users', 'required'],
            'displayName' => ['required'],
            'address' => ['nullable'],
            'email' => ['unique:users', 'required'],
            'phoneNumber' => ['nullable'],
            'group_id' => ['required'],
            'password' => 'required',
            'picture' => 'image',
        ];

        if ($request->input('group_id') == 2) {
            $rules['laundry-laundrySepatuName'] = ['required'];
            $rules['laundry-laundrySepatuSlug'] = ['required'];
            $rules['laundry-bio'] = ['required'];
            $rules['laundry-address'] = ['required'];
            $rules['laundry-contact'] = ['required'];
            $rules['laundry-picture'] = ['nullable'];
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->hasFile('picture')) {
            $uploadedPicture = $request->file('picture');
            $pictureFileName = $uploadedPicture->getClientOriginalName();
            $uploadedPicture->storeAs('images', $pictureFileName, 'public');
            $validatedData['picture'] = $pictureFileName;
        }

        $user = User::create($validatedData);

        if ($user->group_id == 2) {
            $laundryData = [
                'user_id' => $user->id,
                'laundrySepatuName' => $validatedData['laundry-laundrySepatuName'],
                'laundrySepatuSlug' => $validatedData['laundry-laundrySepatuSlug'],
                'bio' => $validatedData['laundry-bio'],
                'Address' => $validatedData['laundry-address'],
                'Contact' => $validatedData['laundry-contact'],
                // 'distance' => '200 m',
            ];

            if ($request->hasFile('laundry-picture')) {
                $uploadedLaundryPicture = $request->file('laundry-picture');
                $laundryPictureFileName = $uploadedLaundryPicture->getClientOriginalName();
                $uploadedLaundryPicture->storeAs('images', $laundryPictureFileName, 'public');
                $laundryData['picture'] = $laundryPictureFileName;
            }

            LaundrySepatu::create($laundryData);
        }

        return redirect('/');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
