@extends('layouts.app')
  @section('content')
    <h1>Aqui esta el listado de las direcciones almacenadas</h1>
    <a href="{{ route('consumir') }}" class="btn btn-primary form-control">Regresar</a>
    <hr>
    <br>
    @foreach ($listado as $direccion)
      <div class="card">
        <div class="card-header">
          Direccion almacenada
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Codigo postal: {{ $direccion -> codigo_postal }}</li>
          <li class="list-group-item">Municipio: {{ $direccion -> municipio }}</li>
          <li class="list-group-item">Estado: {{ $direccion -> estado }}</li>
          <li class="list-group-item">Colonia: {{ $direccion -> colonia }}</li>
        </ul>
      </div>
      <hr>
    @endforeach
  @endsection
