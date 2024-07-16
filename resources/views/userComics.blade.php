@extends('layouts.app')
@section('main')

<h1>I tuoi fumetti</h1>

<div class="container">

    <ul class="d-flex">
        @foreach ($comics->slice(12, 20) as $comic)
    <li>
        @if ($comic->thumb) <img src="{{ $comic->thumb }}"> @endif
        <p> <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></p>
        <p>{{ $comic->description }}</a></p>
        <a href="{{ route('comics.edit', $comic->id) }}"><button class="btn btn-primary">edit</button></a>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-primary">Delete</button>
        </form>
    </li>
    
    
    @endforeach
</ul>


<a href="{{  route('comics.create')  }}">
<button class="btn btn-primary">
        Crea il tuo fumetto

        </button>
    </a>
</div>


@endsection