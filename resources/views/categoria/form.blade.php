
<h1>{{$modo}} Categoria</h1>

<label for="categoria">Nombre de la categoria</label>
<input type="text" name="categoria" value="{{isset($categoria->categoria) ? $categoria->categoria : ''}}">
<br>




<!--<label for="Nombre">Ciudad de Nacimiento</label>
<input type="text" name="ciudad_nacimiento" value="{{isset($empleado->ciudad_nacimiento) ?  $empleado->ciudad_nacimiento : ''}}">-->

<input type="submit" value="{{$modo}}">
