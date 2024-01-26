@extends('layouts.app')

@section('content')
<div class="container-sm">
    <form action="{{ route('comics.update',$comic->id) }}" method="POST"> {{-- deve connettersi all'update per la modifica --}}
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">img:src</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection