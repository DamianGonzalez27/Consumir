@extends('layouts.app')
  @section('content')
    <h1>El usuario fue eliminado con exito</h1>
      <a href="{{ route('listadoUsuarios') }}" class="btn btn-primary">Regresar</a>
      <p>{{ dd($usuario) }}</p>
  @endsection
