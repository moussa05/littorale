<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $publications = Publication::where('idUser', $user->id)->get();
        $articles = array();

        foreach ($publications as $pub) 
        {
            $art = Article::where('idPub', $pub->id)->first();
            if($art != null)
            {
                array_push($articles, $art);
            }
        }

        return view('admin.all_articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('admin.add_article', compact('categories')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pub = new Publication;
        $dateDuJour = Carbon::now()->toDateTimeString();
        $user = Auth::user();

        $pub->iduser = $user->id;
        $pub->titre = $request->titre;
        $pub->datePublication = $dateDuJour;
        $pub->idcat = $request->category_id; 
        $pub->actifYN = 1;
        $pub->save();
        $idpub = $pub->id;
        Article::create([
            'idPub' => $idpub,
            'description' => $request->description
        ]) ;
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
