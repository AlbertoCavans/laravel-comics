@extends('GenStructure.GenStructure')

@section('title', 'Single Comics')

@section('main')

<div class="container-fluid single-comics-container pt-5">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>{{ $comic["title"] }}E</h1>
                <div class="buy-bar d-flex align-items-center">
                    <div class="buy-info d-flex align-items-center justify-content-between px-3">
                        <h5>U.S. Price: {{ $comic["price"] }}</h5>
                        <h5>Avaiable</h5>
                    </div>
                    <div class="buy d-flex align-items-center">
                        <div class="check-availability d-flex align-items-center px-3">
                            <h5><a href="#">Check Availability</a></h5>
                        </div>
                    </div>
                </div>
                <p class="py-4">
                    {{ $comic["description"] }}
                </p>
            </div>
            <div class="col-4">
                <img src="{{ $comic["thumb"] }}" alt="">

            </div>
        </div>
    </div>
</div>

@endsection