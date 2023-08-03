<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class downloadController extends Controller
{
    public function download(Request $request){
          $url = $request->input('download_url');
          $fileread = file_get_contents($url);
        //   echo $fileread;

    }
}
