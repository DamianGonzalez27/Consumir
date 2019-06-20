@extends('layouts.app')
  @section('content')
    <h1>Esta pagina es del listado</h1>
    <hr>
    @foreach ($listado -> data as $usuario)
      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $usuario -> id}}</li>
          <li class="list-group-item">{{ $usuario -> email}}</li>
          <li class="list-group-item">
            <a href="#">Ver Usuario</a>
          </li>
        </ul>
      </div>
      <hr>
    @endforeach
  @endsection
