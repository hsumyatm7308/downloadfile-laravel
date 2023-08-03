<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        $url = $request->input('url');
    
        // You may want to add validation for the URL here to ensure it is a valid URL.
    
        $client = new Client();
        $response = $client->get($url);
    
        $headers = $response->getHeaders();
        $fileData = $response->getBody()->getContents();
    
        return response($fileData, 200, $headers);
    }
    

    
}
