@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('categoria')}}">Regresar</a>
<form action="{{url('/categoria/'.$categoria->id)}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    {{method_field('PATCH')}}
    @include('categoria.form',['modo'=> 'Editar']);    
    
</form>
</div>