<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download()
    {
        // Replace 'path/to/your/download.pdf' with the actual path to your download.pdf file.
        $fileContent = file_get_contents('path/to/your/download.pdf');
    
        // Create a new response with the file content.
        $response = response($fileContent);
    
        // Set the appropriate headers for the download.
        $response->header('Content-Type', 'application/octet-stream');
        $response->header('Content-Disposition', 'attachment; filename="download.pdf"');
    
        // Optionally, you can return the response to initiate the download.
        return $response;
    }
    
}


$fileContent = file_get_contents('pdf/guitar.pdf');
Storage::put('guitar.pdf', $fileContent);
