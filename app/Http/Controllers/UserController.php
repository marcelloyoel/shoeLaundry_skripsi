<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use App\Models\LaundrySepatu;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile.profile', [
            'title' => 'profile',
            'users' => User::all(),
            'javascript'   => 'profile.js'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create', [
            'title' => 'Create User'
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
        $validatedData = $request->validate([
            'username' => ['unique:users', 'required'],
            'displayName' => ['required'],
            'address' => ['nullable'],
            'email' => ['unique:users', 'required'],
            'phoneNumber' => ['nullable'],
            'status'    => ['required'],
            'group_id'  => ['required'],
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $uploadedPicture = $request->file('picture');
            $pictureFileName = $uploadedPicture->getClientOriginalName();
            $uploadedPicture->storeAs('images', $pictureFileName, 'public');
            $validatedData['picture'] = $pictureFileName; // Store the filename in the 'picture' field
        }

        $validatedData['password'] = bcrypt('12345');
        // dd($validatedData);

        // User::create($validatedData);
        $user = User::create($validatedData);

        if ($user->group_id == 2) {
            $laundryData = [
                'user_id' => $user->id, // Associate the user with the laundry
                // Add any other relevant data for the laundry
            ];

            LaundrySepatu::create($laundryData);
        }

        return redirect('/profile')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $profile)
    {
        return $profile;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        return view('admin.profile.edit', [
            'user' => $profile,
            'title' => 'Edit',
            'role' => Group::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {
        $uploadedPicture = $request->file('picture');

        $rules = [
            'username' => 'max:255|unique:users,id,' . $profile->id,
            'displayName' => ['required'],
            'email' => ['required'],
            'address' => ['nullable'],
            'status' => ['string'],
            'phoneNumber' => ['string'],
            'group_id' => ['string']
        ];

        if ($uploadedPicture) {
            $rules['picture'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
            $validatedData = $request->validate($rules);
            $pictureFileName = $uploadedPicture->getClientOriginalName();
            $uploadedPicture->storeAs('images', $pictureFileName, 'public');
            $validatedData['picture'] = $pictureFileName;
        } else {
            $validatedData = $request->validate($rules);
        }

        User::where('id', $profile->id)->update($validatedData);
        return redirect('/home')->with('update', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $profile)
    {
        User::destroy($profile->id);
        return redirect('/profile')->with('delete', 'Data berhasil dihapus!');
    }
}
