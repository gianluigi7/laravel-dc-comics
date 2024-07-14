@extends('layouts.app')
@section('main')
<h1>crea nuovo fumetto</h1>
<div class="container">

    <form action="{{ route('comics.store') }}" method="post"> 
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nome Fumetto</label>
            <input type="text" class="form-control"  name="title">
        </div>
        
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <input type="text" class="form-control"  name="description">
    </div>
    <div class="mb-3">
        <label class="form-label">link img</label>
        <input type="text" class="form-control"  name="thumb">
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="text" class="form-control"  name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Data di uscita</label>
        <input type="text" class="form-control"  name="sale_date">
    </div>
    <div class="mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" class="form-control"  name="type">
    </div>
    <div class="mb-3">
        <label class="form-label">Serie</label>
        <input type="text" class="form-control"  name="series">
    </div>
    <div class="mb-3">
        <label class="form-label">Disegnatore</label>
        <input type="text" class="form-control"  name="artists">
    </div>
    <div class="mb-3">
        <label class="form-label">Scrittore</label>
        <input type="text" class="form-control"  name="writers">
    </div>
    
    
    <button class="btn btn-primary">crea fumetto</button>
</form>
</div>
@endsection