<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use DB;
class CategoriaController extends Controller
{
    public function index(){
    	$datos['categoria'] = Categoria::paginate(10);
    	return view('categoria.index',$datos);
    }
    public function create(){
    	return view('categoria.create');
    }
    public function store(){

    	$datosCategoria = request()->except('_token');
    	Categoria::insert($datosCategoria);
    	
    	return redirect('categoria')->with('mensaje','Registrado con exito');
    	#return view();
    }
    public function edit($id){
    	$categoria = Categoria::findOrFail($id);
    	return view('categoria.edit',compact('categoria'));
    }
    public function update(Request $request, $id){
    	$datosCategoria = request()->except('_token','_method');
    	Categoria::where('id','=',$id)->update($datosCategoria);
    	$categoria = Categoria::findOrFail($id);
    	return view('categoria.edit',compact('categoria'));
    }
    public function destroy(){
    	return view();
    }
}
