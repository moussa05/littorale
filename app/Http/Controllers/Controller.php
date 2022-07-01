<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function isImage($file){
        $mage = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
        $explodeImage = explode('.', $file);
        $extension = end($explodeImage);
        if(in_array($extension, $mage))
        {
            return true;
        }else
        {
            return false;
        }
    }
    /***
     * check if file is vieo
     */
    public function isVideo($filePath){
        $video = ['flv','mp4','m3u8','ts','3gp','mov','avi','wmv'];
        $explodeVideo = explode('.', $filePath);
        $extension = end($explodeVideo);
        if(in_array($extension, $video))
        {
            return true;
        }else
        {
            return false;
        }
    }
}
