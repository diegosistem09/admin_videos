@if (Session::has('mensaje'));
{{Session::get('mensaje')}}
    
@endif

@extends('layouts.app')
@section('content')
<div class="container">
	
<a href="{{url('categoria/create')}}">Registrar nuevo empleado</a>
<table class="table">
	<thead>
		<th>#</th>
		<th>Categoria</th>		
	</thead>
	<tbody>
		@foreach($categoria as $categorias)
		<tr>
			<td>{{$categorias->id}}</td>
			<td>{{$categorias->categoria}}</td>
			
			<td>
				<a href="{{url('/categoria/'.$categorias->id.'/edit')}}">Editar</a>
                | 
                
                <form action="{{url('/categoria/'.$categorias->id)}}" method="post">
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