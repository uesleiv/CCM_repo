@extends('admin_template')

@section('content')
    @if (Session::has('mensagem'))
        <div class="flash alert-info">
            <p>{{ Session::get('mensagem') }}</p>
        </div>
    @endif

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Membros</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="membros1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nome </th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead> <!--cabeçalho -->
                <tbody>
                    @if($membros->count())
                        @foreach($membros as $membro)
                            <tr> <!--linhas e colunas-->
                                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('membro.destroy', $membro->id))) !!}
                                <td>{{{ $membro->nome }}} </td>
                                <td>{{{ $membro->sexo == "M" ? "Masculino" : "Feminino" }}}</td>
                                <td>{{{ $membro->email }}}</td>
                                <td>{!! link_to_route('membro.edit','Editar', array($membro->id)) !!}</td>
                                <td>{{{ Form::submit('Excluir') }}}</td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach
                    @else
                        <tr>Nenhum membro encontrado.</tr>
                    @endif
                </tbody>
                <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
        {!! link_to_route('membro.create', 'Adicionar') !!}
    </div>

@endsection

