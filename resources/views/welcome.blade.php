@extends('layouts.index')
@section('content')
<div class="container">
        <h3 class="text-center mb-4">Registre utilisateurs</h3>
        @foreach ($users as $user)
        <div class="row ">
            
            <div class="col-1 text-center">ID : {{$user->id}} </div>
            <div class="col-3 text-center">Name : {{$user->name}}</div>
            <div class="col-4 text-center">Email: {{$user->email}} </div>
            <div class="col-4 text-center"> 
                <div class="row">
                    {{-- bouton delete --}}
                    
                    <div class="col-6">
                        
                        <form class="text-center" action="">@csrf<button class="btn-danger btn mt-4" type="submit">delete</button> </form>
                        
                    </div>
                    
                    {{-- bouton update --}}
                    <div class="col-6">
                        
                        <form class="text-center" action="">@csrf<button class="btn-warning btn mt-4" type="submit">update</button> </form>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
        <form class="text-center" action="">@csrf<button class="btn-success btn mt-4" type="submit">create</button> </form>
</div>
@endsection