<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    public function add()
    {
        Animal::firstOrCreate([
            'name' => 'Coquillette',
        ], [
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
            'photo' => '/images/animals/coquillette.png',
        ]);

        return redirect()->route('animals.index');
    }

    public function edit(Animal $animal)
    {
        $name = preg_replace('/\s*modifié\s*$/u', '', $animal->name);

        $animal->update([
            'name' => trim($name) . ' modifié',
        ]);

        return redirect()->route('animals.index');
    }

    public function delete(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animals.index');
    }
}
