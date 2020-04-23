


@extends('layouts.index')

@section('content')

<form action="/users" method="post" enctype="multipart/form-data">
    @csrf
   
    <input  placeholder="description" type="text" name="description" id="">
    <input  placeholder="name" type="text" name="name" id="">
    <input  placeholder="value" type="text" name="email" id="">

    


    
    <button type="submit">submit</button>
   <div class="form-group">
    
    

   </div>
  </form>
  

@endsection


