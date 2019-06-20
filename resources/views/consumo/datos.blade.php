@extends('layouts.app')
  @section('content')
    <h1>Aqui se muestran los datos de respuesta del API</h1>
    <a href="{{ route('consumir')}}" class="btn btn-primary form-control">Regresar</a>
    <a href="{{ route('listadoDirecciones') }}" class="btn btn-primary form-control">Listado de domicilios</a>
    <div class="card">
      <div class="card-header">
        Datos para almacenar
      </div>
      <ul class="list-group list-group-flush">
        <form action="{{ route('guardarDireccion') }}" method="post">
          {{ csrf_field() }}
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Codigo postal</label>
              </div>
              <div class="col-md-6">
                <input type="text" name="codigo_postal" value="{{ $respuesta -> codigo_postal }}" readonly class="form-control">
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Municipio</label>
              </div>
              <div class="col-md-6">
                <input type="text" name="municipio" value="{{ $respuesta -> municipio }}" readonly class="form-control">
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Estado</label>
              </div>
              <div class="col-md-6">
                <input type="text" name="estado" value="{{ $respuesta -> estado }}" readonly class="form-control">
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Colonia</label>
              </div>
              <div class="col-md-6">
                <select class="form-control" name="colonia">
                  @foreach ($respuesta -> colonias as $colonia)
                    <option value="{{ $colonia }}">{{ $colonia }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <button type="submit" name="button" class="btn btn-primary form-control">Guardar</button>
          </li>
        </ul>
        </form>
    </div>
  @endsection
