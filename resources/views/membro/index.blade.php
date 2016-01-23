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
                </tr>
                </thead> <!--cabeçalho -->
                <tbody>
                    @if($membros->count())
                        @foreach($membros as $membro)
                            <tr> <!--linhas-->
                                <td>{{{ $membro->nome }}} </td> <!--coluna-->
                                <td>{{{ $membro->sexo }}}</td>
                                <td>{{{ $membro->email }}}</td>
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
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="{{asset("/adminlte/plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
    <!-- DataTables -->
    <script src="{{asset("/adminlte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("/adminlte/plugins/datatables/dataTables.bootstrap.min.js")}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset("/adminlte/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
    <!-- FastClick -->
    <script src="{{asset("/adminlte/plugins/fastclick/fastclick.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("/adminlte/dist/js/app.min.js")}}"></script>
    <!-- AdminLTE for demo purposes -->

    <script>
        $(function () {
            $("#membros1").DataTable();
        });
    </script>
@endsection

