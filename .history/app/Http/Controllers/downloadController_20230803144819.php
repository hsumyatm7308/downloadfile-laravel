<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download()
    {
        $fileContent = file_get_contents(public_path('pdf/guitar.pdf'));

        $response = response($fileContent);

        $response->header('Content-Type', 'application/octet-stream');
        $response->header('Content-Disposition', 'attachment; filename="download.pdf"');

        return $response;
    }
}
