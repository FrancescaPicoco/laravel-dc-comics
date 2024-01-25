@extends('layouts.app')

@section('content')
<div class="container-sm d-flex flex-wrap">
    <div class="row m-auto">
        <h1>COMICS DC</h1>
    </div>
    <div class="row">
        @foreach($comicsItems as $singleComics)  {{--comicsItems è il nome nella function index--}}
        <div class="col-3">
            <div class="card" style="width: 18rem;">
               <img src="{{ $singleComics->thumb }}" class="card-img-top" alt="{{ $singleComics->title }}">
               <div class="card-body">
                   <h5 class="card-title">{{ $singleComics->title }}</h5>
               <p class="card-text">
                   <p class="card-text">{{ $singleComics->description }}</p>
                   <p>series: {{ $singleComics->series }}</p>
                   <p>type: {{ $singleComics->type}}</p>
                   <p><b>price: {{ $singleComics->price }}</b></p>
                   <em>sale date: {{ $singleComics->sale_date }}</em>
               </p>
                    {{-- <a href="{{ route('pastas.show', $item->id) }}" class="btn btn-primary">Mostra dettagli</a> --}}
               </div>
            </div>
        </div>
        @endforeach
    </div>
</div>    
@endsection