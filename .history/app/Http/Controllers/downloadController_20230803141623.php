<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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

$fileContent = file_get_contents('path/to/your/example.pdf');
Storage::put('example.pdf', $fileContent);
