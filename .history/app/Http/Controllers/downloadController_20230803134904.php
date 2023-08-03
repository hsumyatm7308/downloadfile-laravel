<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        if ($request->isMethod('get')) {
            $url = $request->input('download_url');
            $filename = basename($url);

            $client = new Client();

            try {
                $response = $client->get($url, [
                    'headers' => [
                        'Accept' => 'application/octet-stream',
                    ],
                ]);

                // Save the file to the local server
                $filePath = public_path($filename); // Adjust the path as needed
                file_put_contents($filePath, $response->getBody());

                return response()->download($filePath, $filename);
            } catch (\Exception $e) {
                // Handle any errors (e.g., invalid URL, connection issues) here
                return response('Download failed: ' . $e->getMessage(), 500);
            }
        }

        return view('filetype');
    }
}
