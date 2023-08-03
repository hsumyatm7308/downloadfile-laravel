<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download($filename)
    {
        $filePath = storage_path('app/' . $filename);

        if (!Storage::exists($filename)) {
            abort(404, 'File not found');
        }

        return response()->download($filePath);
    }
}
