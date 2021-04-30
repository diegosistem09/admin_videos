@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('video')}}">Regresar</a>
<form action="{{url('/video/'.$video->id)}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    {{method_field('PATCH')}}
    @include('video.form',['modo'=> 'Editar']);    
    
</form>
</div>