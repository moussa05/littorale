<?php

namespace App\Http\Controllers\Admin;
use App\Models\Categorie;
use App\Models\Evenement;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::all();
        foreach($evenements as $event){
            echo($event);
        } ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categorie::all();
        return view('admin.add_event', compact('categories')) ;
       // return view('admin.add_event') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $request->validate([
            'eventName' => 'required|max:100',
            'eventDate' => 'required',
        ]);
        $pub = new Publication;
        $pub->titre = $request->eventName;
        $pub->datePublication = $request->eventDate;
        $pub->idcat = $request->id; 
        $pub->actifYN = 1;
        $idpub = $pub->save();
        Evenement::create([
            'idPub' => $idpub,
            'date_evenement' => $request->eventDate
        ]) ;
        return redirect()->route('category.index');
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
