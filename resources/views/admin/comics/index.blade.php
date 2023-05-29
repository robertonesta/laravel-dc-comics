@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-dark" href="{{route('comics.create')}}">Add New File</a>
    <table class="table-responsive table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td><img class="img-fluid" src="{{$comic->thumb}}" alt=""></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td class="text-center">
                    <a href="{{route('comics.show', $comic->id)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection