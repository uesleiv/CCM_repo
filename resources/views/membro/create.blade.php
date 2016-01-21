<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastro de Membros</title>
</head>
<body>
<form action="{!!URL::route('membro.store')!!}" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome">
    <label for="email">Email:</label>
    <input type="text" name="email">
    <label for="sexo">Sexo:</label>
    <select name="sexo">
        <option value="M">M</option>
        <option value="F">F</option>
    </select>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <input type="submit">
</form>
</body>
</html>