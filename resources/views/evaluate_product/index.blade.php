@extends('layouts.layout')
@section('content')
  @if($products)
    @unless(empty(old('name')))
      <div class="alert alert-success">
        <strong>Sucesso!</strong>
        O produto {{ old('name') }} foi adicionado.
      </div>
    @endif
    <div class="row">
      <div class="col-md-6">
        <h1>Listagem de produtos</h1>
      </div>
      <div class="col-md-6">
        <a href="{{route('new_evaluation')}}">Criar avaliação</a>
      </div>
    </div>
    <table class="table table-striped table-bordered table-hover">
      @foreach($products as $p)
        <tr class="{{$p->count <= 1 ? 'danger' : '' }}">
          <td>{{ $p->name }} </td>
          <td>{{ $p->description or 'nenhuma descrição informada' }} </td>
          <td>{{ $p->value }}</td>
          <td>{{ $p->count }}</td>
          <td>
            <a href="{{action('ProductController@show', $p->id)}}">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
          </td>
          <td>
            <a href="{{action('ProductController@destroy', $p->id)}}">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </td>
          <td>
            <a href="{{action('ProductController@edit', $p->id)}}">
              <span class="glyphicon glyphicon-pencil"></span>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
    <a href="{{ action('ProductController@create')}}">Novo produto</a>
    <h4>
      <span class="label label-danger pull-right">
        Um ou menos itens no estoque
      </span>
    </h4>
  @else
    <h2> Você não tem produtos cadastrados </h2>
  @endif
@stop
