@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Comic Editing</h1>
    
    @include('partials.validation_errors')
    <form action="{{ route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3 row">
            <label for="title" class="col-4 col-form-label">Add a comic title</label>
            <input type="text" value="{{old('title', $comic->title)}}" name="title" id="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Name">
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-4 col-form-label">Add a comic description</label>
            <textarea class="@error('description') is-invalid @enderror" value="{{$comic->description}}" name="description" id="description" cols="30" rows="10">{{old('description', $comic->description)}}</textarea>
        </div>
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <div>
                <img width="200" class="img-fluid" src="{{$comic->thumb}}" alt="">
            </div>
            <div class="w-100">
                <label for="thumb" class="col-4 col-form-label">Add a comic thumb</label>
                <input type="text" value="{{old('thumb', $comic->thumb)}}" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" placeholder="thumb" value="{{$comic->thumb}}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-4 col-form-label">Add a comic price</label>
            <input type="text" name="price" id="price" value="{{old('price', $comic->price)}}" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3 row">
            <label for="series" class="col-4 col-form-label">Add a comic series</label>
            <input type="text" name="series" id="series" value="{{old('series', $comic->series)}}" class="form-control @error('series') is-invalid @enderror" name="series" id="series" placeholder="Series" value="{{$comic->series}}">
        </div>
        <div class="mb-3 row">
            <label for="sale_date" class="col-4 col-form-label">Add a comic sale date</label>
            <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" placeholder="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-4 col-form-label">Add a comic type</label>
            <input type="text" name="type" id="type" value="{{old('type', $comic->type)}}" class="form-control @error('type') is-invalid @enderror" name="type" id="inputType" placeholder="type" value="{{$comic->type}}">
        </div>
        <div class="text-center my-3">
            <button class="btn btn-secondary" type="reset">Reset</button>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection