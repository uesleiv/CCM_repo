<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Listagem de Membros</title>
</head>
<body>
<ul>
    <?php foreach ($membros as $membro): ?>
    <li>
        Id: <?php echo $membro->id ?>
        <br/>
        Nome: <?php echo $membro->nome ?>
        <br/>
        Sexo: <?php echo $membro->sexo?>
        <br/>
        Email: <?php echo $membro->email?>
    </li>
    <?php endforeach ?>
</ul>
<a href="{!!URL::route('membro.create')!!}">Cadastrar</a>
</body>
</html>