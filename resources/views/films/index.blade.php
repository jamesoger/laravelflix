<x-layout>
    <x-nav/>
    <section>
        @foreach ($films as $film)
            <div>
                <a href="{{ route('films.show', ['id' => $film['id']]) }}">{{ $film->titre }}</a>
                <img src="{{ $film->poster }}" alt="film">
            </div>
        @endforeach
    </section>
    <x-footer />

</x-layout>
