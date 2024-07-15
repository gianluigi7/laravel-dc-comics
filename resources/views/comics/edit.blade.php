@extends('layouts.app')
@section('main')
<h1>Modifica fumetto</h1>
<a href="userComics"><button>Indietro</button></a>
<div class="container">

    <form action="{{ route('comics.update', $comics->id) }}" method="post"> 
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nome Fumetto</label>
            <input type="text" class="form-control"  name="title" value="{{old('title', $comics->title)}}">
        </div>
        
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <input type="text" class="form-control"  name="description" value="{{old('description', $comics->description)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">link img</label>
        <input type="text" class="form-control"  name="thumb" value="{{old('thumb', $comics->thumb)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="text" class="form-control"  name="price" value="{{old('price', $comics->price)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date" value="{{old('sale_date', $comics->sale_date)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" class="form-control"  name="type" value="{{old('type', $comics->type)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" class="form-control"  name="series" value="{{old('series', $comics->series)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Disegnatore</label>
        <input type="text" class="form-control"  name="artists" value="{{old('artists', $comics->artists)}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Scrittore</label>
        <input type="text" class="form-control"  name="writers" value="{{old('writers', $comics->writers)}}">
    </div>
    
    
    <button class="btn btn-primary">Modifica</button>
</form>
</div>
@endsection