
@extends('layouts.app')
@section('main')
    <h1>Tutti i fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
        <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        

        @endforeach
    </ul>
@endsection
 