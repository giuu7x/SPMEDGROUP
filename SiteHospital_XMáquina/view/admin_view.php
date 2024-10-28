<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin View</title>
</head>
<body>
    <h1>Cadastro de Administrador</h1>
    <form action="../public/index.php?action=createAdmin" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="codigoEntrada" placeholder="Código de Entrada" required>
        <input type="date" name="nascimento" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
