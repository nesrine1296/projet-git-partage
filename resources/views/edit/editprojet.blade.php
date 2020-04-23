@extends('layouts.index')

@section('content')
<h1 class="text-center m-5">Edit Projet</h1>
<div class="text-center">
    <form action="{{ route('projets.update',$projet) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nom">Nom : </label>
            <input value="{{$projet->nom}}" name="nom" id="nom" type="text">
        </div>
        <div class="form-group">
            <label for="description">Description : </label>
            <input value="{{$projet->description}}" name="description" id="description" type="text">
        </div>
        <div class="form-group">
            <label for="user_id">User : </label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button class=" btn btn-success" type="submit">EDIT Projet</button>
    </form>
</div>
@endsection