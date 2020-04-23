@extends('layouts.index')
@section('content')
<div class="text-center mt-5 mb-5">
    <h1 class="mb-2">Show Projets</h1>
</div>
<div class="container">
    <div class="row m-5 d-flex">
        <div class="col-12 mt-2 mb-2 d-flex justify-content-center align-items-center flex-column border border-dark">
            <h1>Ce projet appartient à :{{$projet->user->name}}</h1>
            <h2>Nom du projet :{{$projet->nom}}</h2>
            <h3>Description du projet :{{$projet->description}}</h3>
            <h2>Les taches du projet: 
                @foreach ($projet->taches as $task)
                <ul>
                    <li>{{ $task->nom }}</li>
                </ul>
                @endforeach
            </h2>
        </div>
    </div>
</div>
@endsection