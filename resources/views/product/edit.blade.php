@extends('layouts.layout')
@section('content')
  <div class="container">
    <h1>Editar Produto: {{$product->name}}</h1>
    @if ($errors->any())
      <ul class="alert alert-warning">
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>
    @endif
    {!! Form::open(['url'=>"products/$product->id", 'method'=>'put'])!!}
    <!-- Nome Form Input -->
    <div class="form-group">
      {!! Form::label('name', 'name:') !!}
      {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
    </div>
    <!-- description Form Input -->
    <div class="form-group">
      {!! Form::label('description', 'Descrição:') !!}
      {!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('value', 'Descrição:') !!}
      {!! Form::number('value', $product->value, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('count', 'Descrição:') !!}
      {!! Form::number('count', $product->count, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('Salvar Produto', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
  </div>
@stop
