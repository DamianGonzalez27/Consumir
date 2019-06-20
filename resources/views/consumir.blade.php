@extends('layouts.app')
@section('content')
  <h1>Consumir datos del API de MEXPOST y alamacenarlos en la base de datos </h1>
  <hr>
  <div class="card">
    <div class="card-header">
      Buscar codigo postal
    </div>
    <form action="{{ route('buscarCodigo') }}" method="post">
      {{ csrf_field() }}
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Ingresa el codigo</li>
        <li class="list-group-item">
          <input type="text" name="codigo" class="form-control">
        </li>
        <li class="list-group-item">
          <button type="submit" name="button" class="btn btn-primary form-control">Buscar</button>
        </li>
      </ul>
    </form>
  </div>
@endsection
