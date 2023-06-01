@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Add a New File</h1>
    @include('partials.validation_errors')
    <form class="my-3" action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="title" class="col-2 col-form-label text-white">Name</label>
            <div class="col-10">
                <input value="{{old('title')}}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Add a Title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="thumb" class="col-2 col-form-label text-white">Image</label>
            <div class="col-10">
                <input type="text" value="{{old('thumb')}}" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" placeholder="Add an image">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-2 col-form-label"></label>
            <div class="col-10">
                <textarea class="w-100 form-control @error('description') is-invalid @enderror" name="description" id="description" cols="10" rows="1" placeholder="Add a description"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="price" class="col-2 col-form-label text-white">Price</label>
            <div class="col-10">
                <input type="text" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Add a price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="series" class="col-2 col-form-label text-white">Series</label>
            <div class="col-10">
                <input type="text" value="{{old('series')}}" class="form-control @error('series') is-invalid @enderror" name="series" id="series" placeholder="Add the series">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="sale_date" class="col-2 col-form-label text-white">Sale date</label>
            <div class="col-10">
                <input type="text" value="{{old('sale_date')}}" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" placeholder="Add a sale date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-2 col-form-label text-white">Type</label>
            <div class="col-10">
                <input type="text" value="{{old('type')}}" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Add a type">
            </div>
        </div>
        <div class="mb-3 row d-flex justify-content-between align-items-center">
            <div class="text-center d-flex justify-content-center align-items-center">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Action</button>
            </div>
        </div>
    </form>
</div>
@endsection