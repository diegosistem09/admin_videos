
<h1>{{$modo}} Video</h1>

<label for="Caratula">Imagen Caratua</label>
<input type="text" name="caratula" value="{{isset($video->caratula) ? $video->caratula : ''}}">
<br>
<label for="Titulo">Titulo</label>
<input type="text" name="titulo" value="{{isset($video->titulo) ? $video->titulo : ''}}">
<br>
<label for="Nombre">Identidad</label>
<input type="text" name="descripcion" value="{{isset($video->descripcion) ? $video->descripcion : ''}}">
<br>
<label for="Nombre">Descripcion</label>
<input type="text" name="duracion" value="{{isset($video->duracion) ? $video->duracion : ''}}">
<br>
<label for="Nombre">url_youtube</label>
<input type="text" name="url_youtube" value="{{isset($video->url_youtube) ? $video->url_youtube : ''}}">

<label for="Nombre">Fecha Estreno</label>
<input type="text" name="fecha_estreno" value="{{isset($video->fecha_estreno) ? $video->fecha_estreno : ''}}">
<br>

<div class="form-group">
    <label for="title">Categoria:</label>
    <select name="id_categoria" class="form-control">
        <option value="">Seleccione Categoria</option>
        @foreach ($categoria as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>


<!--<label for="Nombre">Ciudad de Nacimiento</label>
<input type="text" name="ciudad_nacimiento" value="{{isset($empleado->ciudad_nacimiento) ?  $empleado->ciudad_nacimiento : ''}}">-->

<input type="submit" value="{{$modo}}">
