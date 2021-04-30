<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;
class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Video::factory(10)->create();
    }
}
