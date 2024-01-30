@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-3">Crea una nuova tecnologia</h2>

    <div class="container w-25 mt-5">
       <form action="{{ route('admin.technologies.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="hex_color" class="form-label">Colore</label>
            <input type="color" name="hex_color" id="hex_color" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Crea</button>
    </form> 
    </div>
    
@endsection
