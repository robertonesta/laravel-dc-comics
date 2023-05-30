@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="container py-3">
        <div class="card card-img text-center">
            <div class="card-header">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="card-body text-start">
                    <h3 class="text-center">{{$comic->id}} : {{$comic->title}}</h3>
                    <p> <strong>Description: </strong>{{$comic->description}}</p>
                    <p> <strong>Price: </strong>{{$comic->price}}</p>
                    <p> <strong>Series: </strong>{{$comic->series}}</p>
                    <p> <strong>Sale Date: </strong>{{$comic->sale_date}}</p>
                    <p> <strong>Comic type: </strong>{{$comic->type}}</p>
            </div>
        </div>
    </div>
</div>

@endsection