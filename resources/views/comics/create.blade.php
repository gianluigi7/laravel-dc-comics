@extends('layouts.app')
@section('main')
<h1>crea nuovo fumetto</h1>
<div>
    @if ($errors->any())
     <div class="alert alert-danger">
        <ul>

            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
     </div>
</div>
<div class="container">

    <form action="{{ route('comics.store') }}" method="post"> 
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nome Fumetto</label>
            <input type="text" class="form-control"  name="title" value="{{ old('title') }}">
        </div>
        
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <input type="text" class="form-control"  name="description" value="{{ old('description') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">link img</label>
        <input type="text" class="form-control"  name="thumb" value="{{ old('thumb') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="text" class="form-control"  name="price" value="{{ old('price') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date" value="{{ old('sale_date') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" class="form-control"  name="type" value="{{ old('type') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" class="form-control"  name="series" value="{{ old('series') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Disegnatore</label>
        <input type="text" class="form-control"  name="artists" value="{{ old('artists') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Scrittore</label>
        <input type="text" class="form-control"  name="writers" value="{{ old('writers') }}">
    </div>
    
    
    <button class="btn btn-primary">crea fumetto</button>
</form>
</div>
@endsection