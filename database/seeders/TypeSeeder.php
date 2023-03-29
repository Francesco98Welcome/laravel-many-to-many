<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'News',
            'Recensioni',
            'Eventi',
            'Off Topic',
        ];
        foreach ($types as $type) {
            $newType = Type::create([
                'name' => $type
            ]);
        };
    }
}
