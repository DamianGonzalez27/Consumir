@extends('layouts.app')
@section('content')
  <h1>Aqui se lleva a cabo la tarea del crud con el API: </h1>
  <ul>
    <li>
      <a href="#">Crear usuario</a>
    </li>
    <li>
      <a href="#">Eliminar usuario</a>
    </li>
    <li>
      <a href="{{ route('listadoUsuarios') }}">Listado de usuarios</a>
    </li>
  </ul>
@endsection
