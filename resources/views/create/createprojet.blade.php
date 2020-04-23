@extends('layouts.index')

@section('content')
<h1 class="text-center m-5">Projet Create</h1>
<div class="text-center">
    <form action="/projets" method="post">
        @csrf
        <div class="form-group">
            <label for="nom">Projet nom : </label>
            <input name="nom" id="nom" type="text">
        </div>
        <div class="form-group">
            <label for="description">Description : </label>
            <input name="description" id="description" type="text">
        </div>
        <div class="form-group">
            <label for="user_id">Users : </label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button class=" btn btn-success" type="submit">Ajouter Projet</button>
    </form>
</div>
@endsection