@extends('layouts.app')

@section('content')

    <div class="container ">

        <div class="card" style="width: 25rem;">
            <img src="{{$guitar->url}}" class="card-img-top" alt="guitar!">
            <div class="card-body">
                <h5 class="card-title">Brand: <span>{{$guitar->brand}}</span></h5>
                <p class="card-text">Model: <span>{{$guitar->model}}</span></p>
                <p class="card-text">Type: <span>{{$guitar->type}}</span></p>
                <p class="card-text">Strings: <span>{{$guitar->strings}}</span></p>
                <a href="{{ route('public.guitars.index', compact('guitar')) }}" class="btn btn-light"><i class="fas fa-home">Home</i></a>
                {{-- <a href="{{ route('guitars.edit', compact('guitar')) }}" class="btn btn-primary"><i class="fas fa-edit">Edit</i></a> --}}
                {{-- <a href="{{ route('guitars.destroy', compact('guitar')) }}" class="btn btn-danger"><i class="fas fa-trash-alt">Delete</i></a> --}}
            </div>
        </div>

    </div>


@endsection
