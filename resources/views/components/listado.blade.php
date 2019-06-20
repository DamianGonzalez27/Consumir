@extends('layouts.app')
  @section('content')
    <h1>Esta pagina es del listado</h1>
    <hr>
    <a href="{{ route('crud') }}" class="btn btn-primary">Regresar</a>
    @foreach ($listado -> data as $usuario)
      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $usuario -> id}}</li>
          <li class="list-group-item">{{ $usuario -> email}}</li>
          <li class="list-group-item">
            <a href="{{ route('unicoUsuario', $usuario-> id ) }}">Ver Usuario</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('editarUsuario', $usuario-> id ) }}">Editar Usuario</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('eliminarUsuario', $usuario-> id ) }}">Eliminar Usuario</a>
          </li>

        </ul>
      </div>
      <hr>
    @endforeach
  @endsection
