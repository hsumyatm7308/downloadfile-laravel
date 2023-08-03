<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class downloadController extends Controller
{
    public function download(Request $request){
        if (!$request->isMethod('post')) {
            abort(405, 'Method not allowed');
        }
          $url = $request->input('download_url');
          $fileread = file_get_contents($url);
        //   echo $fileread;

    }
}
