


@extends('layouts.index')

@section('content')

<form action="/users" method="post" class="text-center">
    @csrf
    <input  placeholder="name" type="text" name="nom" id="">
    <input  placeholder="mail" type="text" name="email" id="">
    <input  placeholder="password" type="password" name="password" id="">
    <button type="submit">Submit</button>
  </form>
  

@endsection


