@extends('layouts.app')

@section('contenido')

  <h1>AAAAA</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($peliculas as $pelicula)
            <tr>
                <th scope="row">{{$pelicula->id}}</th>
                <td>{{ $pelicula->nombre }}</td>
                <td>{{ $pelicula->descripcion }}</td>
                <td>{{ $pelicula->imagen }}</td>
                <td>
                    <a class="btn-primary" href="{{ route('pelicula.edit', $pelicula->id)}}" role="button">Editar</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
