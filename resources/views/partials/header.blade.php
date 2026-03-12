<header>
    <div class="container site-header">
        <a href="{{ route('animals.index') }}" aria-label="Accueil Refuge Connect">
            <img src="{{ asset('images/logo.png') }}" alt="Logo RefugeConnect" width="170">
        </a>

        <nav class="header-nav">
            <a href="{{ route('animals.index') }}">Accueil</a>
            <a href="{{ route('animals.add') }}">Ajouter un animal</a>
        </nav>
    </div>
</header>
