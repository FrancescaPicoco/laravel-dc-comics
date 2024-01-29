@extends('layouts.app')

@section('content')
<div class="container-sm bg-light text-dark">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        {{-- @if($errors->any())
         <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
         </div>
        @endif  --}}

        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control @error('title') is-invalide @enderror" id="title" name="title" >
          @error('title')
           <div class="invalid-feedback">404</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" class="form-control @error('type') is-invalide @enderror" id="type" name="type">
        @error('type')
            <div class="invalid-feedback">404</div>
        @enderror
        </div>
        
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalide @enderror" id="series" name="series">
        @error('series')
            <div class="invalid-feedback">404</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalide @enderror" id="description" name="description">
        @error('description')
            <div class="invalid-feedback">404</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalide @enderror" id="price" name="price">
        @error('price')
            <div class="invalid-feedback">404</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">img:src</label>
            <input type="text" class="form-control @error('thumb') is-invalide @enderror" id="thumb" name="thumb">
        @error('thumb')
            <div class="invalid-feedback">404</div>
        @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="text" class="form-control @error('sale_date') is-invalide @enderror" id="sale_date" name="sale_date">
        @error('sale_date')
            <div class="invalid-feedback">404</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection