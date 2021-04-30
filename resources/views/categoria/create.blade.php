<a href="{{url('categoria')}}">Regresar</a>
<form action="{{url('/categoria')}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    @include('categoria.form',['modo'=> 'Create']);
    
    
</form>