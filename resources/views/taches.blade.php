@extends('layouts.index')
@section('content')
<div class="container">
        <h2 class="text-center mb-4">Taches du projet </h2>
        @foreach ($taches as $tache)
        <div class="row ">
            
            <div class="col-1 text-center">ID : {{$tache->id}} </div>
            <div class="col-3 text-center">Name : {{$tache->nom}}</div>
            <div class="col-4 text-center">Description: {{$tache->description}} </div>
            <div class="col-4 text-center"> 
                <div class="row">
                    {{-- bouton delete --}}
                    
                    <div class="col-6">
                        
                        <form action="/taches/{{$tache->id}}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mt-4">Delete</button>
                        </form>
                        
                    </div>
                    
                    {{-- bouton update --}}
                    <div class="col-6">
                        
                        <form  action="taches/{{$tache->id}}/edit">
                            <button class="btn-warning btn mt-4" type="submit">Update</button> 
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <form class="text-center" action="taches/create">@csrf<button class="btn-success btn mt-4" type="submit">Create</button> </form>
</div>
@endsection