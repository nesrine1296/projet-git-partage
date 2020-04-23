

@extends('layouts.index')

@section('content')

<form action="{{ route('users.update',$users->id) }}" method="post" enctype="multipart/form-data">
    @csrf
   @method("put")
   
   
    <input  value="{{$users->name}}" type="text" name="name" id="">
    <input  value="{{$users->email}}" type="text" name="email" id="">
    <input  value="{{$users->password}}" type="password" name="password" id="">


    

    
    <button type="submit">submit</button>
   <div class="form-group">
    
    

   </div>
  </form>
  

@endsection


