<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            'Javascript',
            'CSS',
            'Vue',
            'Laravel',
            'HTML'
        ];
        foreach ($technologies as $technology) {
            $newTechnology = Technology::create([
                'name' => $technology
            ]);
        };
    }
}
