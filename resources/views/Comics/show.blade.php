@extends ('layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
    <div class="card-body">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">
            <p class="card-text">{{ $comic->description }}</p>
            <p>series: {{ $comic->series }}</p>
            <p>type: {{ $comic->type}}</p>
            <p><b>price: {{ $comic->price }}</b></p>
            <em>sale date: {{ $comic->sale_date }}</em>
        </p>
    </div>
  </div>
@endsection