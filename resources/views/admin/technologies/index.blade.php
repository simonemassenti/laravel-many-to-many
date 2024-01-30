@extends('layouts.admin')

@section('content')
    <h2 class="text-center mt-3">Lista Tecnologie</h2>

    @if (session('message'))
        <div class="alert alert-warning w-50 mx-auto">
            {{ session('message') }}
        </div>
    @endif

    <div class="text-end mt-2">
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-success">Crea una nuova tecnologia</a>
    </div>

    <div class="container">

        <table class="table w-25 m-auto mt-3">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th>{{ $technology->name }}</th>
                        <td class="d-flex">
                            <a href="{{ route('admin.technologies.show', ['technology' => $technology->slug]) }}"
                                class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('admin.technologies.edit', ['technology' => $technology->slug]) }}"
                                class="btn btn-warning mx-2">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('admin.technologies.destroy', ['technology' => $technology->slug]) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
