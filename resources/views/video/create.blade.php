@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('video')}}">Regresar</a>
<form action="{{url('/video')}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    @include('video.form',['modo'=> 'Create']);
    
    
</form>
</div>