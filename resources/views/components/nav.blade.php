<nav>
    <h1>LaravelFlix</h1>

    <form action="{{ route('films.search') }}" method="GET">
        <input type="search" name="requete" placeholder="Rechercher un film...">
        <button type="submit">Rechercher</button>
    </form>



</nav>
