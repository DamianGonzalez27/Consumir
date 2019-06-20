@extends('layouts.app')
  @section('content')
    <h1>Esta pagina es para crear usuarios</h1>
    <hr>
    @if (session('usuario'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('usuario') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
    <div class="card">
      <form action="{{ route('create') }}" method="post">
        {{ csrf_field() }}
        <div class="card-header">
          Ingresa un usuario
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Nombre del usuario</label>
              </div>
              <div class="col-md-6">
                <input type="text" name="name" class="form-control">
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="raw">
              <div class="col-md-6">
                <label>Trabajo del usuario</label>
              </div>
              <div class="col-md-6">
                <input type="text" name="job" class="form-control">
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <button type="submit" name="button" class="btn btn-primary form-control">Registrar</button>
          </li>
        </ul>
      </form>
    </div>

  @endsection
