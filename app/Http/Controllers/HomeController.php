<?php

namespace App\Http\Controllers;

use App\Models\LaundrySepatu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Halaman Home',
            'laundries' => LaundrySepatu::all()
        ]);
    }
}
