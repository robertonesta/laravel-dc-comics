@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-dark my-3" href="{{route('comics.create')}}">Add New File</a>
    <div class="table-responsive">
        <table class="table table-primary">
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
                        <a class="btn-primary" href="{{route('comics.show', $comic->id)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a class="btn-secondary" href="{{route('comics.edit', $comic->id)}}"><i class="fa-solid fa-pencil"></i></a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$comic->id}}">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                            
                        </button>
                        
                        <div class="modal fade" id="modal-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header d-flex flex-column">
                                        <h5 class="modal-title" id="modalTitle-{{$comic->id}}">Delete {{$comic->title}}</h5>
                                        <img width="100" src="{{$comic->thumb}}" alt="">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want delete this element? This is a no-return action.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </form>
                                    </div>

                                </div>

                            </div>

                        </div>
                            
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection