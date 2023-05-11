@extends('layouts.app')

@section('page_title', 'Ciaoo')

@section('content')
    <main class="d-flex flex-wrap justify-content-around">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Titolo: {{$movie->title}}</h5>
                </div>
            </div>
        @endforeach
    </main>
@endsection