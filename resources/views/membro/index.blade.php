<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Listagem de Membros</title>
</head>
<body>
<ul>
    @if($membros->count())
        @foreach($membros as $membro)
            <li>
                Id: {{{ $membro->id }}}</br>
                Nome: {{{ $membro->nome }}} </br>
                Sexo: {{{ $membro->sexo }}} </br>
                Email: {{{ $membro->email }}}</br>
            </li>
        @endforeach
    @else
        <h2>Nenhum membro encontrado.</h2>
    @endif

    <!-- Outra Maneira de codificar em PHP
        <?//php if($membros->count()) : ?>
        <?//php foreach ($membros as $membro): ?>
        <li>
            Id: <?//php echo $membro->id; ?>
            <br/>
            Nome: <?//php echo $membro->nome; ?>
            <br/>
            Sexo: <?//php echo $membro->sexo; ?>
            <br/>
            Email: <?//php echo $membro->email; ?>
        </li>
        <?//php endforeach; ?>
    <?//php else : ?>
        <h2>Nenhum membro encontrado.</h2>
    <?//php endif ?> -->
</ul>
<a href="{!!URL::route('membro.create')!!}">Cadastrar</a>
</body>
</html>