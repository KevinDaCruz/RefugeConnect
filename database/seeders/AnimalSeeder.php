<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        $jsonPath = database_path('seeders/data/animals.json');

        if (! File::exists($jsonPath)) {
            return;
        }

        $animals = collect(json_decode(File::get($jsonPath), true))
            ->take(3)
            ->values();

        foreach ($animals as $animal) {
            Animal::updateOrCreate(
                ['name' => $animal['name']],
                [
                    'species' => $animal['species'],
                    'age' => $animal['age'],
                    'description' => $animal['description'],
                    'photo' => $animal['photo'],
                ]
            );
        }
    }
}
