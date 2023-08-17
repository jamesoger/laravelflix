<x-layout>
    <x-nav />
    @foreach ($films as $film)
        <div class="show_search">
            <div class="infos_search">
                <h1 class="show_titre">{{ $film->titre }}</h1>
                <p class="date">Date de sortie: {{ $film->date_sortie }}</p>
                <p class="vote">Vote: {{ $film->vote_moyen }}/10</p>
                <p class="nb_vote">Nombre de votes: {{ $film->votes }}</p>
                <img class="background" src="{{ $film->poster_arriere_plan }}" alt="film">
            </div>
            <div class="un_film">
                <div><img src="{{ $film->poster }}" alt=""></div>
                <p class="synopsis">{{ $film->synopsis }}</p>

            </div>
        </div>
    @endforeach
    <footer>
        <a class="retour" href="{{ route('films.index') }}">Retour</a>
    </footer>

</x-layout>
