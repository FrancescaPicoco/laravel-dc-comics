@extends('layouts.app')

@section('content')
    <div class="container-sm d-flex flex-wrap">
        <div class="row m-auto">
            <h1>COMICS DC</h1>
            <a href="{{ route('comics.create') }}" class="btn btn-primary">add your comics</a>
        </div>
        <div class="row">
            @foreach ($comicsItems as $singleComics)
                {{-- comicsItems è il nome nella function index --}}
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <form action="{{route('comics.destroy', $singleComics->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="&#9249;" class="btn btn-outline-danger align-text-bottom" onclick="myFunction(delete)">
                        </form>
                        {{-- gestisco lassenza di img del create --}}
                            @if($singleComics->thumb)
                            <img src="{{ $singleComics->thumb }}" class="card-img-top" alt="{{ $singleComics->title }}">
                        @else
                            <img src="https://ceraduevolte.it/wp-content/uploads/2022/04/nondisponibile-15.png" class="card-img-top" alt="{{ $singleComics->title }}">
                        @endif 
                        {{-- end --}}
                            <div class="card-body">
                            <h5 class="card-title">{{ $singleComics->title }}</h5>
                            <p class="card-text">
                                {{-- <p class="card-text">{{ $singleComics->description }}</p> --}}
                                {{-- <p>series: {{ $singleComics->series }}</p>
                                    <p>type: {{ $singleComics->type}}</p> --}}
                            <p><b>price: {{ $singleComics->price }}</b></p>
                            <em>sale date: {{ $singleComics->sale_date }}</em>
                            </p>
                            <a href="{{ route('comics.show', $singleComics->id) }}" class="btn btn-primary">show details</a>
                            <a href="{{ route('comics.edit', $singleComics->id) }}" class="btn btn-outline-info">edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
