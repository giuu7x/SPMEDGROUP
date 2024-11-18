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
        <p>Nenhum paciente.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    
                    <th>nome</th>
                    <th>cpf</th>
                    <th>nascimento</th>
                    <th>telefone</th>
                    <th>Email</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                       
                        <td><?php echo htmlspecialchars($paciente['nome']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['cpf']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['nascimento']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['email']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['senha']); ?></td>
                        
                    </tr>
                <?php endforeach; ?>   
                <a href="../views/attpaciente.php<?php echo $paciente['nome']; ?>">Atualizar</a>
            <!-- Formulário para deletar o livro -->
            <form action="/meu_projeto_livraria/delete-book" method="POST" style="display:inline;">
                <input type="hidden" name="title" value="<?php echo $paciente['nome']; ?>">
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
            </tbody>
        </table>
    <?php endif; ?>

    
    <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/paciente_view.php">Cadastrar novo livro</a>
</body>
</html>
