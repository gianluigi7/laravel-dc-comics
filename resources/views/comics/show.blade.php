@extends('layouts.app')
@section('main')
    <h1>{{ $comics->title }}</h1>
    <p>{{ $comics->description }}</p>
    <a href="{{ route('comics.index')}}">Torna alla home</a>
@endsection
