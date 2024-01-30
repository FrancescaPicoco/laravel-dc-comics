@extends ('layouts.app')
@section('content')
{{-- <div class="card" style="width: 18rem;">
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
</div> --}}
<div class="row">
    <div class="col-7 offset-2">
        <h3 class="">{{ $comic->title }}</h3>
        <div class="MygreenArea col-5 d-flex justify-content-between">
            <div>
                <p>U.S. Price:<b>{{ $comic->price }}&dollar;</b></p>
            </div>
            <div class="d-flex">
                <p>AVAILABLE</p>
                <select>
                    <option>
                        <p>select</p>
                    </option>
                </select>
            </div>
        </div>        
        {{-- <div class="col-2">
            <p>select</p>
        </div>          --}}
    </div>
    <div class="col-3">
      <h1 class="text-light">prova</h1>
    </div>
</div>
@endsection