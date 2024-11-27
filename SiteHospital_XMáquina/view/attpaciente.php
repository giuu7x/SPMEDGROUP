<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Paciente</title>
</head>
<body>

<h1>Atualizar Paciente</h1>
<form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente/update" method="POST">
    <input type="hidden" name="cpf" value="<?php echo $pacientes['cpf']; ?>">

    <label for="cpf">Nome</label>
    <input type="text" id="nome" name="nome" value="<?php echo $pacientes['nome']; ?>" required><br><br>

    <label for="cpf">cpf</label>
    <input type="" id="cpf" name="cpf" value="<?php echo $pacientes['cpf']; ?>" required disabled><br><br>

    <label for="Nascimento">nascimento</label>
    <input type="text" id="nascimento" name="nascimento" value="<?php echo $pacientes['nascimento']; ?>" required><br><br>

    <label for="telefone">telefone</label>
    <input type="text" id="telefone" name="telefone" value="<?php echo $pacientes['telefone']; ?>"><br><br>

    <label for="email">email</label>
    <input type="text" id="email" name="email" value="<?php echo $pacientes['email']; ?>"><br><br>

    <label for="senha">senha (R$):</label>
    <input type="text" id="senha" name="senha" value="<?php echo $pacientes['senha']; ?>" required><br><br>

    <input type="submit" value="Atualizar Paciente">
</form>

<a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente/list">Voltar para a lista</a>

</body>
</html>
