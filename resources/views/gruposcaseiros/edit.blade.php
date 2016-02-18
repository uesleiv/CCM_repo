@extends('admin_template')

@section('content')
    {!! Form::model($grupocaseiro,['method'=>'PATCH', 'route' => ['grupocaseiro.update', $grupocaseiro->id]]) !!}

        @include('gruposcaseiro.partials._form',['submit_text'=>'Atualizar'])

    {!! Form::close() !!}
@endsection
