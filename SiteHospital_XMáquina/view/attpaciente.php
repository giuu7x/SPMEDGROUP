<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Paciente</title>
</head>
<body>

<h1>Atualizar Livro</h1>
<form action="/meu_projeto_livraria/update-book" method="POST">
    <input type="hidden" name="cpf" value="<?php echo $cpf ['cpf']; ?>">

    <label for="cpf">Nome</label>
    <input type="text" id="nome" name="nome" value="<?php echo $nome['nome']; ?>" required><br><br>

    <label for="cpf">cpf</label>
    <input type="number" id="cpf" name="cpf" value="<?php echo $cpf['cpf']; ?>" required><br><br>

    <label for="Nascimento">nascimento</label>
    <input type="number" id="nascimento" name="nascimento" value="<?php echo $nascimento['nascimento']; ?>" required><br><br>

    <label for="telefone">telefone</label>
    <input type="text" id="telefone" name="telefone" value="<?php echo $telefone['telefone']; ?>"><br><br>

    <label for="email">email</label>
    <input type="text" id="email" name="email" value="<?php echo $email['email']; ?>"><br><br>

    <label for="senha">senha (R$):</label>
    <input type="number" step="1" id="price" name="price" value="<?php echo $senha['senha']; ?>" required><br><br>

    <input type="submit" value="Atualizar Paciente">
</form>

<a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente/list">Voltar para a lista</a>

</body>
</html>
