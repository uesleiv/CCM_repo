@extends('admin_template')

@section('content')
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
                </tr>
                </thead> <!--cabeçalho -->
                <tbody>
                    @if($membros->count())
                        @foreach($membros as $membro)
                            <tr> <!--linhas e colunas-->
                                <td>{{{ $membro->nome }}} </td>
                                <td>{{{ $membro->sexo }}}</td>
                                <td>{{{ $membro->email }}}</td>
                                <td><a href="membro/{{ $membro->id }}/edit">Editar</a></td>
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
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    <a href="membro/create">Adicionar</a>

    </div>

@endsection

