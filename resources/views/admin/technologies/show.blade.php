@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-3">Dettagli di {{ $technology->name }}</h2>

    <div class="container w-25 mt-5">
        <h6>ID: {{ $technology->id }}</h6>
        <h6>Slug: {{ $technology->slug }}</h6>
        <h6>Color: <span class="badge"
                style="background-color: {{ $technology->hex_color }}">{{ $technology->hex_color }}
        </span></h6>

    </div>
@endsection
