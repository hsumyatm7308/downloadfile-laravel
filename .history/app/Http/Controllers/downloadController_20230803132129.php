<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class downloadController extends Controller
{
    public function download(Request $request){
          $url = $request->input('download_url');
          $fileread = file-get-contents($url);

    }
}
