
@extends('layouts.app')
@section('main')
    <div class="container">

        <ul>
            @foreach ($comics as $comic)
            <li>
            <img src="{{ $comic->thumb }}">
           <p> <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></p>
        </li>
            
            
            @endforeach
        </ul>
    </div>
@endsection
 