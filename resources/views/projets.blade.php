@extends('layouts.index')
@section('content')
<div class="container">
        <h2 class="text-center mb-4">Projets</h2>
        @foreach ($projets as $projet)
        <div class="row ">
            
            <div class="col-1 text-center">ID : {{$projet->id}} </div>
            <div class="col-3 text-center">Name : {{$projet->nom}}</div>
            <div class="col-4 text-center">Description: {{$projet->description}}</div>
            <div class="col-4 text-center"> 
                <div class="row">
                    {{-- bouton delete --}}
                    
                    <div class="col-4">
                        <form action="projets/{{$projet->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mt-4">Delete</button>
                        </form>
                    </div>
                    
                    {{-- bouton update --}}
                    <div class="col-4">
                        <form  action="projets/{{$projet->id}}/edit">
                            @csrf
                            <button class="btn-warning btn mt-4" type="submit">Update</button> 
                        </form>
                    </div>
                    {{-- btn show --}}
                    <div class="col-4">
                        <form  action="projets/{{$projet->id}}">
                            @csrf
                            <button class="btn-primary btn mt-4" type="submit">Show</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <form class="text-center" action="projets/create">@csrf<button class="btn-success btn mt-4" type="submit">Create</button> </form>
</div>
@endsection