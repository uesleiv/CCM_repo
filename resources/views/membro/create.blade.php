@extends('admin_template')

@section('content')
    <form action="{!!URL::route('membro.store')!!}" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Informe o email">
        <label for="sexo">Sexo:</label>


        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
        </div>
        <!-- /.input group -->

        <select name="sexo">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input type="submit">
    </form>
@endsection