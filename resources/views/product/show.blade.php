@extends('layouts.layout')
@section('content')
  @unless(empty($p))
    <h1>Detalhes do produto: {{ $p->name }} </h1>
    <ul>
      <li> <b>Valor:</b> R$ {{ $p->value }} </li>
      <li> <b>Descrição:</b> {{ $p->description or 'nenhuma descrição informada' }} </li>
      <li> <b>Quantidade em estoque:</b> {{ $p->count }} </li>
    </ul>
  @else
    <h2> Esse produto não existe </h2>
  @endif
@stop
