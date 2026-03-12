@extends('layouts.app')

@section('title', 'Liste des animaux')

@section('content')
    <h1 class="page-title">Nos animaux</h1>

    <section class="animals-grid">
        @foreach ($animals as $animal)
            <x-animal-card :animal="$animal" />
        @endforeach
    </section>
@endsection
