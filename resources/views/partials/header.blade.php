<header>
    <div class="container site-header">
        <a href="{{ route('animaux.index') }}" aria-label="Accueil Refuge Connect">
            <img src="{{ asset('images/logo.png') }}" alt="Logo RefugeConnect" width="170">
        </a>

        <nav class="header-nav">
            <a href="{{ route('animaux.index') }}">Accueil</a>
            <a href="{{ route('animaux.ajouter') }}">Ajouter un animal</a>
        </nav>
    </div>
</header>
