@extends('layouts.app')

@section('page_title', 'Ciaoo')

@section('content')
    <main class="d-flex flex-wrap justify-content-around">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{$movie->original_title}}</h6>
                    <p class="card-text">Nazionalita: {{$movie->nationality}}</p>
                    <p class="card-text">Data uscita:{{$movie->date}}</p>
                    <p class="card-text">Voto: {{$movie->vote}}</p>
                </div>
            </div>
        @endforeach
    </main>
@endsection