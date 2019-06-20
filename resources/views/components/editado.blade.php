@extends('layouts.app')
  @section('content')
    <h1>Usuario editado con exito</h1>
    <p>Hora de edicion de usuario: {{ $usuario -> updatedAt}}</p>
    <a href="{{ route('listadoUsuarios') }}" class="btn btn-primary"> Regresar</a>
  @endsection
