<?php

namespace App\Http\Controllers;

use App\Projet;
use App\User;
use Illuminate\Http\Request;

class ProjetController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $projets = Projet::all();
        return view( 'projets', compact( 'projets' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $users = User::all();
        return view( 'create.createprojet', compact( 'users' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $projet = new Projet();
        $projet->nom = request( 'nom' );
        $projet->description = request( 'description' );
        $projet->user_id = request( 'user_id' );
        $projet->save();
        return redirect()->route( 'projets.index' );
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Projet  $projet
    * @return \Illuminate\Http\Response
    */

    public function show($id) {
        $projet = Projet::find($id);
        return view('show.showprojet',compact('projet'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Projet  $projet
    * @return \Illuminate\Http\Response
    */

    public function edit( Projet $projet ) {
        $users = User::all();
        return view( 'edit.editprojet', compact( 'projet','users' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Projet  $projet
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Projet $projet ) {
        $projet->nom = request( 'nom' );
        $projet->description = request( 'description' );
        $projet->user_id = request( 'user_id' );
        $projet->save();
        return redirect()->route( 'projets.index' );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Projet  $projet
    * @return \Illuminate\Http\Response
    */

    public function destroy( Projet $projet ) {

        $projet->delete();
        return redirect()->back();
    }
}
