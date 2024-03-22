<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function show($filename)
    {
        $filePath = storage_path('app/public/' . $filename);

        if (!Storage::exists($filePath)) {
            abort(404);
        }

        return response()->file($filePath);
    }
}
