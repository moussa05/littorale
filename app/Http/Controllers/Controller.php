<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Publication;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use function GuzzleHttp\normalize_header_keys;

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
     * check if file is video
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

    function accueil()
    {
        $articles = Article::take(2)->get();
        $bloc_2_articles = array();
        $bloc_4_articles = array();
        foreach ($articles as $article)
        {
            $categorie = Categorie::find($article->publication->idcat);
            $nomCategorie = $categorie->libellle;
            $auteur = User::find($article->publication->iduser);
            $nomAuteur = $auteur->prenom." ".$auteur->nom;
            $publication = [
                "publication" => $article->publication,
                "article" => $article,
                "categorie" => $nomCategorie,
                "auteur" => $nomAuteur,
            ];
            array_push($bloc_2_articles, $publication);
        }
        
        return view('welcome', compact('bloc_2_articles'));
    }    
}
