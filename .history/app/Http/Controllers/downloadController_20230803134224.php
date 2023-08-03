<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
    //     $url = $request->input('download_url');
    //     $filename = basename($url);

    //     $client = new Client();

    //     try {
    //         $response = $client->get($url, [
    //             'headers' => [
    //                 'Accept' => 'application/octet-stream',
    //             ],
    //         ]);

    //         // Set the appropriate headers for the download response
    //         header('Content-Type: application/octet-stream');
    //         header("Content-Disposition: attachment; filename=\"$filename\"");

    //         // Output the remote file content directly to the response
    //         echo $response->getBody();
    //         exit;
    //     } catch (\Exception $e) {
    //         // Handle any errors (e.g., invalid URL, connection issues) here
    //         return response('Download failed: ' . $e->getMessage(), 500);
    //     }
    return view('filetype');
    }
}
