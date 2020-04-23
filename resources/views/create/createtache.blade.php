@extends('layouts.index')

@section('content')
<h1 class="text-center m-5">Tache Create</h1>
<div class="text-center">
    @if (isset($projets[0]))
    <form action="/taches" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Tache nom : </label>
            <input name="nom" id="nom" type="text">
        </div>
        <div class="form-group">
            <label for="description">Description : </label>
            <input name="description" id="description" type="text">
        </div>
        <div class="form-group">
            <label for="projet_id">Projet : </label>
            <select name="projet_id" id="projet_id">
                @foreach ($projets as $projet)
                    <option value="{{$projet->id}}">{{$projet->nom}}</option>
                @endforeach
            </select>
        </div>
        <button class=" btn btn-success" type="submit">Ajouter tache</button>
    </form>
        @else
            <h1 class="text-danger">Il n'y pas de projet</h1>
            <form class="text-center" action="{{route('projets.create')}}">@csrf<button class="btn-success btn mt-4" type="submit"><h1>Cliquez ici si vous voulez créer un projet </h1></button> </form>
        @endif
</div>
@endsection