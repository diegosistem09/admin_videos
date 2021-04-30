<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Video;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /*$categoria = new Categoria();
        $categoria->nombre_categoria ='Docuemntal';
        $categoria->save();*/

        $video = new Video();
        $video->Imagen_Caratula ='imge1.jpg';
        $video->titulo ='Docuemntal juegos';
        $video->descripcion='Video docuemtal';
        $video->duracion = '2 horas';
        $video->url_youtube ='NO APLICA';
        $video->fecha_estreno = '24/03/2022';
        $video->id_categoria =1;
        $video->save();
    }
}


