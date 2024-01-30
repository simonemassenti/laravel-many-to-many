@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-2">Modifica la Tecnologia</h2>


    <div class="container w-25">
       <form action="{{ route('admin.technologies.update', ['technology' => $technology->slug]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $technology->name }}">
        </div>

        <div class="mb-3">
            <label for="hex_color" class="form-label">Colore</label>
            <input type="color" class="form-control" id="hex_color" name="hex_color" value="{{ $technology->hex_color }}">
        </div>
    

        <button type="submit" class="btn btn-warning">Modifica</button>
    </form> 
    </div>
    
@endsection