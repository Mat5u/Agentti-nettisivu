<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    protected function showImage($filename)
    {
        $exists = Storage::disk('public')->exists('img/'.$filename);
        
        if($exists) {
            $content = Storage::get('public/img/'.$filename);
            
            $mime = Storage::mimeType('public/img/'.$filename);
            $response = Response::make($content, 200);
            $response->header("Content-Type", $mime);
            return $response;
        }
         
        else {
            abort(404);
        }
    }
}
