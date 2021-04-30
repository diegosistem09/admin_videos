@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('categoria')}}">Regresar</a>
<form action="{{url('/categoria')}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    @include('categoria.form',['modo'=> 'Create']);
    
    
</form>
<div>