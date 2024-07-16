
@extends('layouts.app')
@section('main')
    <h1>Best Seller</h1>
    <div class="container">

        <ul class="d-flex">
            @foreach ($comics->slice(0, 12) as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}">
                </a>
                <p>
                {{ $comic->title }}
    </p>
        </li>
          
            
            
            @endforeach
        </ul>
    </div>
@endsection
 