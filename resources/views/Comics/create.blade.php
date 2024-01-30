@extends('layouts.app')

@section('content')
<div class="container-sm text-light">
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
     <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}} ">
                @error('title')
                 <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
        </div>
     </div>
        
        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type')}} ">
                  @error('type')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series')}} ">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description')}} ">
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price')}} ">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="thumb" class="form-label">IMG</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb')}} ">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date')}} ">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
            </div>
        </div>     
        <div class="col text-center">  
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
      </form>
</div>
@endsection