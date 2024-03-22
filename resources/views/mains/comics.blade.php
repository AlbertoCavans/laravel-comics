@extends('GenStructure.GenStructure')

@section('title', 'Comics')

@section('main')
<div class="container-fluid container-main">
<div class="container py-5">

    <div class="row">
    @foreach ($comics as $index => $comic)

        <div class="col-2">
            <a href="{{ route('singleComics', [
            'index' => $index,
            ]) }}">
              <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}" height="300px" class="object-fit-cover w-100">        
            </a>
            <h5 class="text-light">{{ $comic["series"] }}</h5>
        </div>
    <!-- @dump($comic) -->
    @endforeach

    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="button-bluewhite">LOAD MORE</button>
    </div>
</div>
</div>
@endsection