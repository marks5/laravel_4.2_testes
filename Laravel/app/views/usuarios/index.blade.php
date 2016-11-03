@extends('layouts.default')

@section ('content')
  <h1>Listagem de Usuarios</h1>
  <ul>
    @foreach($usuarios as $usuario)
    <li>{{$usuario->login}}</li>
    @endforeach
  </ul>
@endsection
