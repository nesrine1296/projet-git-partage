

@extends('layouts.index')

@section('content')

<form action="/users" method="post" enctype="multipart/form-data">
    @csrf
   
    <input  value="description" type="text" name="description" id="">
    <input  value="name" type="text" name="name" id="">
    <input  value="email" type="text" name="email" id="">

    


    
    <button type="submit">submit</button>
   <div class="form-group">
    
    

   </div>
  </form>
  

@endsection


