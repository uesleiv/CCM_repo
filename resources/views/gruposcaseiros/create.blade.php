@extends('admin_template')

@section('content')

    {!! Form::model(new \App\gruposCaseiros(), ['route' => 'gruposcaseiros.store']) !!}
        @include('membro.partials._form',['submit_text' => 'Incluir'])
    {!! Form::close() !!}

@endsection