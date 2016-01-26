@extends('admin_template')

@section('content')
    <form action="{!!URL::route('membro.store')!!}" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Informe o nome" required>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Informe o email" required>
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>

        <label for="rg">RG</label>
        <input type="text" name="rg">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" placeholder="   .   .  -  " data-inputmask='"mask": "999.999.999-99"' data-mask>

        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
        </div>

        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input type="submit">
    </form>
@endsection