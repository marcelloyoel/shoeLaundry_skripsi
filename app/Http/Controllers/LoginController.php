<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\DB;

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
            // Load their cart from the database
            // Cart::clear();
            Cart::session(Auth::id());
            $cartItems = DB::table('carts')->where('user_id', Auth::id())->get();
            if ($cartItems != null) {
                foreach ($cartItems as $item) {
                    Cart::add([
                        'id' => $item->service_id,
                        'name' => $item->name,  // Replace with actual service name
                        'price' => $item->price,  // Replace with actual service price
                        'quantity' => $item->quantity,
                        'attributes' => array()
                    ]);
                }
            }
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
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
