<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use DB;
class VideoController extends Controller
{
    public function index(){

    	$datos['videos'] = Video::paginate(10);
    	return view('video.index',$datos);
    }

    public function create(){
    
    	$categoria = DB::table("categorias")->pluck('categoria','id');
    	return view('video.create')->with('categoria', $categoria);;

    }
    public function store(){

    	$datosVideo = request()->except('_token');
        Video::insert($datosVideo);       

        $datos['videos'] = Video::paginate(10);
        $mensaje ="Registro  creado exitosamente";

        return redirect('video')->with('mensaje','Video Registrado con exito');
        
    }
    public function edit($id){
    	$categoria = DB::table("categorias")->pluck('categoria','id');
    	$video = Video::findOrFail($id);
    	$mensaje ="Registro  creado exitosamente";

    	return view('video.edit', ['mensaje' => $mensaje,'categoria'=>$categoria,'video'=>$video]);
    	#return view('video.edit',compact('video'));
    }
    public function update(Request $request, $id){
    	$datosVideo = request()->except('_token','_method');
        Video::where('id','=',$id)->update($datosVideo);
        $categoria = DB::table("categorias")->pluck('categoria','id');

        $video = Video::findOrFail($id);
        return view('video.edit',['video'=>$video,'categoria'=>$categoria]);

    }
    public function destroy($id){
    	Video::destroy($id);

    	return redirect('video')->with('mensaje','Registro Borrado');
    }
    public function show(){
    	return view('video.index');
    }
}
