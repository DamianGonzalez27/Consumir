@extends('layouts.app')
  @section('content')
    <h1>Seccion de editar usuario</h1>
    <hr>
    <p>Usuario: {{ $usuario -> data -> email }}</p>

    <div class="card">
      <div class="card-header">
        Editar usuario
      </div>
      <ul class="list-group list-group-flush">
        <form action="{{ route('usuarioEditado', $usuario -> data -> id ) }}" method="post">
          {{ csrf_field() }}
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Nombre usuario</label>
              </div>
              <div class="col-md-6">
                  <input type="text" name="name" class="form-control">
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="col-md-6">
              <label>Trabajo usuario</label>
            </div>
            <div class="col-md-6">
              <input type="text" name="job" class="form-control">
            </div>
          </li>
          <li class="list-group-item">
            <button type="submit" name="button" class="btn btn-primary form-control">Editar</button>
          </li>
        </form>
      </ul>
    </div>
  @endsection
