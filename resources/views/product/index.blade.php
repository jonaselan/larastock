@extends('layout.layout')
@section('content')
  @if($products)
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
      @foreach($products as $p)
        <tr class="{{$p->count <= 1 ? 'danger' : '' }}">
          <td>{{ $p->name }} </td>
          <td>{{ $p->description or 'nenhuma descrição informada' }} </td>
          <td>{{ $p->value }}</td>
          <td>{{ $p->count }}</td>
          <td>
            <a href="/products/{{ $p->id }}">
              <span class="glyphicon glyphicon-search"></span>
            </a>
          </td>
        </tr>
      @endforeach
    </table>
    <h4>
      <span class="label label-danger pull-right">
        Um ou menos itens no estoque
      </span>
    </h4>
  @else
    <h2> Você não tem produtos cadastrados </h2>
  @endif
@stop
