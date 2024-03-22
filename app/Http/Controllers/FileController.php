<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function show($filename)
    {
        $filePath = storage_path('app/public/' . $filename);

        dd($filePath);
        if (!Storage::exists('public/' . $filename)) {
            abort(404);
        }
        return response()->file($filePath);
    }
}
