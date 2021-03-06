@extends('layouts.index')
@section('content')
<div class="container">
        <h2 class="text-center mb-4">Registre utilisateurs</h2>
        @foreach ($users as $user)
        <div class="row ">
            
            <div class="col-1 text-center">ID : {{$user->id}} </div>
            <div class="col-3 text-center">Name : {{$user->name}}</div>
            <div class="col-4 text-center">Email: {{$user->email}} </div>
            <div class="col-2 text-center">Password: {{$user->password}} </div>
            <div class="col-2 text-center"> 
                <div class="row">
                    {{-- bouton delete --}}
                    
                    <form action="/users/{{$user->id}}" method="POST">
                        @csrf 
                        @method('delete')
                        <button class="btn-danger btn mt-4" type="submit">Delete</button> 
                    </form>
                    
                    {{-- bouton update --}}
                    <div class="col-6">
                        
                        <form action="users/{{$user->id}}/edit" method="get">
                            @csrf 
                            <button class="btn-warning btn mt-4" type="submit">Update</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <form class="text-center" action="/users/create">@csrf<button class="btn-success btn mt-4" type="submit">Create</button> </form>
</div>
@endsection


