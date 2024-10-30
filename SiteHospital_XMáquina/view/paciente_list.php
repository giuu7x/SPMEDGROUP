<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Pacientes Cadastrados</h1>

    <?php if (empty($paciente)): ?>
        <p>Nenhum Paciente.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nome</th>
                    <th>cpf</th>
                    <th>nascimento</th>
                    <th>telefone</th>
                    <th>senha</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paciente as $paciente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($paciente['id']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['nome']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['email']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['senha']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/paciente_view.php">Cadastrar novo livro</a>
</body>
</html>
