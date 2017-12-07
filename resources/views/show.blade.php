@extends('layout')
@section('content')
  <h1>Detalhes do produto: {{ $p->name }} </h1>
  <ul>
    <li> <b>Valor:</b> R$ {{ $p->value }} </li>
    <li> <b>Descrição:</b> {{ $p->description }} </li>
    <li> <b>Quantidade em estoque:</b> {{ $p->count }} </li>
  </ul>
@stop
