


@extends('layouts.index')

@section('content')

<form action="/users" method="post" enctype="multipart/form-data">
    @csrf
   
   
    <input  placeholder="name" type="text" name="nom" id="">
    <input  placeholder="mail" type="text" name="email" id="">
    <input  placeholder="password" type="password" name="password" id="">
    

    


    
    <button type="submit">submit</button>
   <div class="form-group">
    
    

   </div>
  </form>
  

@endsection


