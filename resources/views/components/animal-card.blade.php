@props(['animal'])

<article class="animal-card">
    <a href="{{ route('animals.show', $animal) }}">
        <img src="{{ asset(ltrim($animal->photo, '/')) }}" alt="Photo de {{ $animal->name }}" class="animal-card__image">
    </a>

    <h2 class="animal-card__title">{{ $animal->name }}</h2>
    <p class="animal-card__meta">Espèce : {{ $animal->species }}</p>
    <p class="animal-card__meta">Age : {{ $animal->age }} ans</p>
    <p class="animal-card__description">{{ $animal->description }}</p>

    <p class="animal-card__actions">
        <a href="{{ route('animals.edit', $animal) }}">Modifier</a>
        <a href="{{ route('animals.delete', $animal) }}">Supprimer</a>
    </p>
</article>
