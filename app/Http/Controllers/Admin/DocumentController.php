<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    /**
     * uploading file
     */
    public function uploadFile(Request $request){

        $path       = "";
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $mime = $name ;//mime_content_type($name);
        if($this->isVideo($name)){
            $path = $file->storeAs('videos', $name);
        }else if($this->isImage($name)){
            $path = $file->storeAs('images', $name);
        }else{
            $path = $file->storeAs('documents', $name);
        }
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
            'path'         =>  $path,
        ]);


    }
}
