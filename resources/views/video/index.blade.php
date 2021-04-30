@if (Session::has('mensaje'));
{{Session::get('mensaje')}}
    
@endif

@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{url('video/create')}}">Registrar nuevo empleado</a>
<table class="table">
	<thead>
		<th>Iagen/Caratula</th>
		<th>Titulo</th>
		<th>Descripción</th>
		<th>Duración</th>
		<th>Link youtube </th>
		<th>Fecha de estreno</th>
		<th>Categoria</th>
		<th>Acciones</th>
	</thead>
	<tbody>
		@foreach($videos as $video)
		<tr>
			<td>{{$video->caratula}}</td>
			<td>{{$video->titulo}}</td>
			<td>{{$video->descripcion}}</td>
			<td>{{$video->duracion}}</td>
			<td>{{$video->url_youtube}}</td>
			<td>{{$video->fecha_estreno}}</td>
			<td>{{$video->id_categoria}}</td>
			<td>
				<a href="{{url('/video/'.$video->id.'/edit')}}">Editar</a>
                | 
                
                <form action="{{url('/video/'.$video->id)}}" method="post">
                    @csrf
                    
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Desceas BORRAR?')" value="BORRAR">
                </form>
			</td>
		</tr>
		@endforeach
		
	</tbody>
</table>				
</div>