
@extends('layouts.app')
@section('main')
    <h1>Ultime uscite</h1>
    <div class="container">

        <ul>
            @foreach ($comics->slice(0, 12) as $comic)
            <li>
            <img src="{{ $comic->thumb }}">
           <p> <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></p>
        </li>
          
            
            
            @endforeach
        </ul>
    </div>
@endsection
 