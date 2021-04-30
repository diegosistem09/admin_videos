<a href="{{url('video')}}">Regresar</a>
<form action="{{url('/video/'.$video->id)}}" method="post">
    <!--llave de seguridad interno delaravel-->
    @csrf
    {{method_field('PATCH')}}
    @include('video.form',['modo'=> 'Editar']);    
    
</form>