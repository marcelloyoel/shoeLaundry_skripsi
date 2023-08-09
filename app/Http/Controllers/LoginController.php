<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('nonlogin.login', [
            'title' => 'Halaman Login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //code di atas cuman untuk membuat website lebih aman
            return redirect()->intended('/home');
            //code di atas supaya ngeredirect tapi lewat middleware dulu
        }

        return back()->with('loginError', 'Login Failed');
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
