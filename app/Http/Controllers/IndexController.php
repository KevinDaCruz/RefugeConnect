<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class IndexController extends Controller
{
    public function index()
    {
        $animals = Animal::orderBy('id')->get();

        return view('animals.index', compact('animals'));
    }
}
