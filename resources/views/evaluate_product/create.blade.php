@extends('layouts.layout')
@section('content')
  <div class="container">
    <h1>Criar avaliação </h1>
    @if ($errors->any())
      <ul class="alert alert-warning">
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>
    @endif
    {!! Form::open(['url'=>"evaluates", 'method'=>'post'])!!}
      <!-- Nome Form Input -->
      <div class="form-group">
        {!! Form::label('note', 'Nota:') !!}
        {!! Form::number('note', null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('comment', 'Comentário:') !!}
        {!! Form::textarea('comment', null, ['class'=>'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('product_id', 'Produto:') !!}
        {!! Form::select('product_id', $produc_options) !!}
      </div>
      <div class="form-group">
        {!! Form::submit('Criar avaliação', ['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
@stop
