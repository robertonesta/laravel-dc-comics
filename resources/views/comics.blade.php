@extends('layouts.app')

@section('content')
<section class="card_section bg-dark">
    <div class="container">
        <div class="row row-cols-6">
            @foreach( $comics as $comic )
            <div class="col g-3">
                <div class="card border-0 bg-transparent">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{$comic['title']}} Logo">
                    <p class="text-white text-uppercase py-3">{{$comic['title']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection