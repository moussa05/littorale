<?php

namespace App\Http\Controllers\Admin;

use App\Events\TestEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Article;
use App\Models\Document;
use App\Models\DocumentArticle;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use phpDocumentor\Reflection\Project;
use phpDocumentor\Reflection\ProjectFactory;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $publications = Publication::all();
        $articles = array();

        foreach ($publications as $pub)
        {
            $art = Article::where('idPub', $pub->id)->first();
            /**/
            if($art != null)
            {
                $art['titre'] = $pub->titre;
                $art['datePublication'] = $pub->datePublication;
                $art['idUser'] = $pub->idUser;
                array_push($articles, $art);
            }
        }
        event(new TestEvent("bonjour mr") );
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
        $user = $request->user();
        //$pub->iduser = $user->id;
        $pub->titre = $request->titre;
        $pub->datePublication = $dateDuJour;
        $pub->idcat = $request->category_id;
        $pub->actifYN = 1;
        $pub->save();
        $idpub = $pub->id;
        $article = Article::create([
            'idPub' => $idpub,
            'description' => $request->description
        ]) ;
        foreach ($request->input('document', []) as $file) {
            $types = 'document';
            if($this->isVideo($file)){
                $types = 'video';

            }elseif($this->isImage($file)){
                $types = 'image';
            }
            $document = Document::create([
                Document::ID_PUB => $idpub,
                Document::CHEMIN => $file,
                Document::TYPE   => $types,
            ]);
            $document_article = DocumentArticle::create([
                DocumentArticle::ID_ARTICLE  => $article->id,
                DocumentArticle::ID_DOCUMENT => $document->id
            ]);
        }
        return redirect()->route('article.index');
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
        $categories = Categorie::all();
        $publication = Article::find($id)->publication;
        $article = Article::find($id);
        if($article)
            $article['title'] = $publication->titre;
        return view('admin.update_article', compact('article','categories','publication'));
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
        $publication = Article::find($id)->publication;
        $publication->titre = $request->titre ;
        $publication->idcat = $request->idCat ;
        $publication->update();

        $article = Article::find($id);
        $article->description = $request->description ;
        $article->update();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete() ;
        return redirect()->route('article.index');
    }
}
