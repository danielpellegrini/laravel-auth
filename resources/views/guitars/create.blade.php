@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Insert a new guitar</h1>

    <form class="needs-validation" action="{{ route('guitars.store') }}" method="post" novalidate>
        @csrf
        @method('POST')

        <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Guitar brand</label>
        <input type="text" name="brand" class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}"
            id="validationCustomUsername" placeholder="Brand name">
        {{-- VALIDATION: FIELD **REQUIRED** --}}
        <div class="invalid-feedback">
            {{ $errors->first('brand') }}
        </div>
        </div>

        <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Guitar model</label>
        <input type="text" name="model" class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}"
            id="validationCustomUsername" placeholder="Model name">
        {{-- VALIDATION: FIELD **REQUIRED** --}}
        <div class="invalid-feedback">
            {{ $errors->first('model') }}
        </div>
        </div>

        <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Guitar type</label>
        <input type="text" name="type" class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}"
            id="validationCustomUsername" placeholder="Type">
        {{-- VALIDATION: FIELD ** NOT REQUIRED** --}}
        <div class="invalid-feedback">
            {{ $errors->first('type') }}
        </div>
        </div>

        <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Strings</label>
        <input type="text" name="strings" class="form-control {{ $errors->has('strings') ? 'is-invalid' : '' }}"
            id="validationCustomUsername" placeholder="Strings">
        {{-- VALIDATION: FIELD ** NOT REQUIRED** --}}
        <div class="invalid-feedback">
            {{ $errors->first('strings') }}
        </div>
        </div>

        <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Guitar image</label>
        <input type="text" name="url" class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}"
            id="validationCustomUsername" placeholder="URL">
        {{-- VALIDATION: FIELD ** NOT REQUIRED** --}}
        <div class="invalid-feedback">
            {{ $errors->first('url') }}
        </div>
        </div>

        <div class="mb-3">
        <label for="validationCustomUsername" class="form-label">Guitar price</label>
        <input type="text" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}"
            id="validationCustomUsername" placeholder="Price">
        {{-- VALIDATION: FIELD ** NOT REQUIRED** --}}
        <div class="invalid-feedback">
            {{ $errors->first('price') }}
        </div>
        </div>




        <div class="mb-3">
        <a href="{{ route('guitars.index', compact('guitars')) }}" class="btn btn-danger"><i
            class="fas fa-undo">Undo</i></a>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

  </div>

@endsection
