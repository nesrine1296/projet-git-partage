@extends('layouts.index')

@section('content')
<h1 class="text-center m-5">Tache Create</h1>
<div class="text-center">
    <form action="/taches" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">tache nom : </label>
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
</div>
@endsection