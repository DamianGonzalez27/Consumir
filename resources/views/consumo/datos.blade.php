@extends('layouts.app')
  @section('content')
    <h1>Aqui se muestran los datos de respuesta del API</h1>
    {{ dd($respuesta) }}
  @endsection
