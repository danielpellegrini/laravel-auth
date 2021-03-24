@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="">
        <h1 class="text-center">Guitars store</h1>
      </div>
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id#</th>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
      <th scope="col">Strings</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($guitars as $guitar)
    <tr>
      <th scope="row">{{ $guitar->id }}</th>
      <td><a href="{{ route('public.guitars.show', compact('guitar')) }}">{{ $guitar->brand }}</a></td>
      <td>{{ $guitar->model }}</td>
      <td>{{ $guitar->type }}</td>
      <td>{{ $guitar->strings }}</td>
      <td class="image"><img src="{{ $guitar->url }}" alt="guitar!"></td>
      <td>
            {{-- VIEW --}}
          <a href="{{ route('public.guitars.show', compact('guitar')) }}"><i class="fas fa-eye"></i></a>

            {{-- EDIT --}}
          {{-- <a href="{{ route('guitars.edit', compact('guitar')) }}"><i class="fas fa-edit"></i></a> --}}

            {{-- DESTROY --}}
          {{-- <form action="{{ route('beers.destroy', compact('beer')) }}" method="post">
            @csrf
            @method('DELETE')

            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter{{$beer->id }}" >
                <i class="fas fa-trash-alt"></i>
            </button>

            @include('beers.modal',['beer'=> $beer->id])
          </form> --}}

      </td>

    </tr>
    @endforeach
  </tbody>
</table>
    @if (Auth::check())

        <div class="mb-3">
            <a href="{{ route('guitars.create', compact('guitar')) }}" class="btn btn-success"><i class="fas fa-plus"> Add</i></a>
        </div>
    @endif
    </div>
  </div>
</div>
@endsection
