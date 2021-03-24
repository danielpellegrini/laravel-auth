@extends('layouts.app')

@section('content')
    <div class="container">

        @if (!$logged)

            User not logged

        @endif

        @if (!empty($name))

            User logged: {{$name}}

        @endif

    </div>
@endsection
