<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Imagen_Caratula'=>faker->sentence(),
            'titulo'=>faker->sentence(),
            'descripcion'=>faker->sentence(),
            'duracion'=>faker->sentence(),
            'url_youtube'=>faker->sentence(),
            'fecha_estreno'=>faker->sentence(),
            'id_categoria'=>1
        ];
    }
}
