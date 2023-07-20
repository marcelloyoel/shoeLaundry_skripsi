<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('nonlogin.login', [
            'title' => 'Halaman Login'
        ]);
    }
    public function register()
    {
        return view('nonlogin.register', [
            'title' => 'Halaman Register'
        ]);
    }
    public function forget()
    {
        return view('nonlogin.forget', [
            'title' => 'Forget Password'
        ]);
    }
}
