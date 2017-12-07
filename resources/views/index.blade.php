@extends('layout')
@section('content')
  <h1>Listagem de produtos</h1>
  <table class="table table-striped table-bordered table-hover">
      @foreach($products as $p)
        <tr>
          <td>{{ $p->name }} </td>
          <td>{{ $p->description }}</td>
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
@stop
