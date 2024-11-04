<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Paciente</title>
</head>
<body>
    <h1>Cadastro de Paciente</h1>
    <form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente" method="POST">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">Cpf</label>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="nascimento">Nascimento</label>
        <input type="text" id="nascimento" name="nascimento" required><br><br>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="email">email</label>
        <input type="text" id="email" name="email"><br><br>

        <label for="senha">Senha</label>
        <input type="number" step="1" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar ">
    </form>

    <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/paciente_list.php">Ver todos os pacientes</a>
</body>
</html>
