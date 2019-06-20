@extends('layouts.app')
  @section('content')
    <h1>Aqui estan los datos del usuario</h1>
      <p>Id del usuario: {{ $usuario -> data -> id }}</p>
      <p>Email del usuario: {{ $usuario -> data -> email }}</p>
      <p>Primer nombre del usuario: {{ $usuario -> data -> first_name }}</p>
      <img src="{{ $usuario -> data -> avatar }}" alt="Avatar de usuario">
      <a href="{{ route('listadoUsuarios') }}" class="btn btn-primary">Regresar</a>

      <hr>

  @endsection
