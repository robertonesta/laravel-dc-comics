@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <img src="{{$comic->thumb}}" alt="">
            <h3>{{$comic->id}} : {{$comic->title}}</h3>
            <p> <strong>Description: </strong>{{$comic->description}}</p>
            <p> <strong>Price: </strong>{{$comic->price}}</p>
            <p> <strong>Series: </strong>{{$comic->series}}</p>
            <p> <strong>Sale Date: </strong>{{$comic->sale_date}}</p>
            <p> <strong>Comic type: </strong>{{$comic->type}}</p>
        </div>
    </div>
</div>

@endsection