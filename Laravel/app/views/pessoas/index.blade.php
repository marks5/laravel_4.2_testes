@extends('layouts.default')

@section ('content')
  <h1>Listagem de Pessoas</h1>
  <ul>
  @foreach($pessoas as $pessoa)
    <li>{{ $pessoa->nome }}</li>
  @endforeach
  </ul>
@endsection
