@extends('layout.layout')
@section('content')
  <h1>Novo produto</h1>
  <form action="/products/create">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <div class="form-group">
      <label>name</label>
      <input name="name" class="form-control" value="{{ old('name') }}" />
    </div>
    <div class="form-group">
      <label>Descricao</label>
      <input name="description" class="form-control" value="{{ old('description') }}"/>
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input name="value" class="form-control" value="{{ old('value') }}"/>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input type="number" name="count" class="form-control" value="{{ old('count') }}"/>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
  </form>
@stop
