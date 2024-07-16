@extends('layouts.app')

@section('main')
 <img src="{{ Vite::asset('resources/img/Batman-Robin-DC-Comics.avif') }}" class="batman">
   <h1>Ultime uscite</h1>

   
   <div class="container">


    @foreach ($comics->slice(1, 3) as $comic)
    <div class="d-flex">
        
        <a href="{{ route('comics.show', $comic->id) }}">
            <img src="{{ $comic->thumb }}" class="home-img">
        </a>
        <div>

            <p>
            {{ $comic->title }}
    </p>
            <p>
            {{ $comic->description }}
    </p>
        </div>
</div>
  
    
    
    @endforeach

</div>
<a href="{{  route('comics.index')  }}"><button>Vai allo shop</button></a>
   
@endsection