@extends('layouts.index')
@section('content')
<div class="text-center mt-5 mb-5">
    <h1 class="mb-2">Show Projets</h1>
</div>
<div class="container">
    <h1 class="text-center">Nom du projet : <u>{{$projet->nom}}</u></h1>
    <div class="row m-5 d-flex">
        <div class="col-12 mt-2 mb-2 d-flex justify-content-center align-items-center flex-column border border-dark">
            <h1>Ce projet appartient à : {{$projet->user->name}}</h1>
            <h3>Description du projet : {{$projet->description}}</h3>
            <h2>Les taches du projet : 
                @if(isset($task[0]))
                @foreach ($projet->taches as $task)
                <ul>
                    <li>{{ $task->nom }}</li>
                </ul>
                @endforeach
                @else
                <h2 class="text-danger">Il n'y a pas encore de taches pour ce projet</h2>
                @endif
            </h2>
        </div>
    </div>
</div>
@endsection