@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <img src="{{$comic->thumb}}" alt="">
            <h3>{{$comic->id}} : {{$comic->title}}</h3>
            <p>{{$comic->description}}</p>
            <p>{{$comic->price}}</p>
            <p>{{$comic->series}}</p>
            <p>{{$comic->sale_date}}</p>
            <p>{{$comic->type}}</p>
        </div>
    </div>
</div>

@endsection