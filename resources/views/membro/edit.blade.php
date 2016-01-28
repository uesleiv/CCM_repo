@extends('admin_template')

@section('content')
    <form action="{!!URL::route('membro.store')!!}" method="post">
        @if($membro->count())
            <label for="nome">Nome:</label>
            <input type="text" name="nome" placeholder="Informe o nome" required value="{{{ $membro->nome }}}">
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Informe o email" required value="{{{ $membro->email}}}">
            <label for="sexo">Sexo:</label>
            <<select name="sexo">
                <option value="M" {{$membro->sexo = "M" ? "selected" : ""}}>Masculino</option>
                <option value="F" {{$membro->sexo = "F" ? "selected" : ""}}>Feminino</option>
            </select>
            <label for="rg">RG</label>
            <input type="text" name="rg">

            <label for="cpf">CPF</label>
            <input type="text" name="cpf" data-inputmask='"mask": "999.999.999-99"' data-mask>

            <label for="estadoCivil">Estado Civil</label>
            <select name="estadoCivil">
                <option value="So">Solteiro</option>
                <option value="Ca">Casado</option>
                <option value="Se">Separado</option>
                <option value="Di">Divorciado</option>
                <option value="Vi">Vi�vo</option>
            </select>
            <!-- Logradouro -->
            <label for="endereco">Endere�o</label>
            <input type="text" name="endereco" placeholder="endere�o com o n�mero">
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade">
            <label for="complemento">Complemento</label>
            <input type="text" name="complemento">
            <label for="cep">CEP</label>
            <input type="text" name="cep" data-inputmask='"mask": "99.999.-999"' data-mask>

            <!--Logradouro-->
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone">
            <label for="celular">Celular</label>
            <input type="text" name="celular">


            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
            </div>

            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <input type="submit">
        @else
            <h1>Membro n�o encontrado</h1>
        @endif
    </form>
@endsection