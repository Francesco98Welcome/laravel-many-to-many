<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Project;
use App\Models\Type;

//Helpers
use Faker\Generator as Faker;
//use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $progetto = new Project();
            $progetto->title = $faker->sentence(5);
            $progetto->description = $faker->paragraph(5);
            $progetto->img = $faker->imageUrl(640, 480, 'progetto random', true);
            //  $progetto->type_id = $type_id;
            $progetto->save();
        }
    }
}
