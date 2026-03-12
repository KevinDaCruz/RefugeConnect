@extends('layouts.app')

@section('title', 'Fiche animal')

@section('content')
    <h1 class="page-title">{{ $animal->name }}</h1>

    <section class="animal-detail">
        <img src="{{ asset(ltrim($animal->photo, '/')) }}" alt="Photo de {{ $animal->name }}" class="animal-detail__image">
        <div>
            <p class="animal-detail__meta">Espèce : {{ $animal->species }}</p>
            <p class="animal-detail__meta">Age : {{ $animal->age }} ans</p>
            <p class="animal-detail__description">{{ $animal->description }}</p>
        </div>
    </section>
@endsection
