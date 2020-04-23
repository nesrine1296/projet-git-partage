<?php

namespace App\Http\Controllers;

use App\Tache;
use App\Projet;
use Illuminate\Http\Request;

class TacheController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $taches = Tache::all();
        return view( 'taches', compact( 'taches' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $projets = Projet::all();
        return view( 'create.createtache', compact( 'projets' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $tache = new Tache();
        $tache->nom = request( 'nom' );
        $tache->description = request( 'description' );
        $tache->projet_id = request( 'projet_id' );
        $tache->save();
        return redirect()->route( 'taches.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Tache  $tache
    * @return \Illuminate\Http\Response
    */

    public function show( Tache $tache ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Tache  $tache
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $tache = Tache::find($id);
        $projets = Projet::all();
        return view( 'edit.edittache', compact( 'tache','projets' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Tache  $tache
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $tache = Tache::find($id);
        $tache->nom = request( 'nom' );
        $tache->description = request( 'description' );
        $tache->projet_id = request( 'projet_id' );
        $tache->save();
        return redirect()->route( 'taches.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Tache  $tache
    * @return \Illuminate\Http\Response
    */

    public function destroy( Tache $tache,$id ) {
        Tache::find($id)->delete();
        return redirect()->back();
    }
}
