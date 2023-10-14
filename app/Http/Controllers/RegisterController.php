<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
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
        // dd('test');
        $validatedData = $request->validate([
            'username' => ['unique:users', 'required'],
            'displayName' => ['required'],
            'address' => ['nullable'],
            'email' => ['unique:users', 'required'],
            'phoneNumber' => ['nullable'],
            'group_id'  => ['required'],
            'password' => ['required'],
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $uploadedPicture = $request->file('picture');
            $pictureFileName = $uploadedPicture->getClientOriginalName();
            $uploadedPicture->storeAs('images', $pictureFileName, 'public');
            $validatedData['picture'] = $pictureFileName; // Store the filename in the 'picture' field
        }

        if ($request->input('password')) {
            $validatedData['password'] = Hash::make($request->input('password'));
        }

        User::create($validatedData);
        // dd('test2');
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
