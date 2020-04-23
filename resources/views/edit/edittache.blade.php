@extends('layouts.index')

@section('content')
<h1 class="text-center m-5">Edit Tache</h1>
<div class="text-center">
    <form action="{{ route('taches.update',$tache->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nom">Nom : </label>
            <input value="{{$tache->nom}}" name="nom" id="nom" type="text">
        </div>
        <div class="form-group">
            <label for="description">Description : </label>
            <input value="{{$tache->description}}" name="description" id="description" type="text">
        </div>
        <div class="form-group">
            <label for="projet_id">Projets : </label>
            <select name="projet_id" id="projet_id">
                @foreach ($projets as $projet)
                    <option value="{{$projet->id}}">{{$projet->nom}}</option>
                @endforeach
            </select>
        </div>
        <button class=" btn btn-success" type="submit">Edit Tache</button>
    </form>
</div>
@endsection