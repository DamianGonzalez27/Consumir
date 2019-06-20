@extends('layouts.app')
@section('content')
  <h1>Usuario Creado exitossamente</h1>
  <p>Usuario co id: {{ $usuario -> id }}</p>
  <a href="{{ route('crearUsuario') }}" class="btn btn-primary">Regresar</a>
@endsection
