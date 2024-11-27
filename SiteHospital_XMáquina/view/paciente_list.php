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

                         <!-- Link para atualizar o livro -->
                         <td> <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/attpaciente/<?php echo $paciente['cpf']; ?>">Atualizar</a></td>
            <!-- Formulário para deletar o livro -->
            <td><form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/delete-paciente" method="POST" style="display:inline;">
                <input type="hidden" name="cpf" value="<?php echo $paciente['cpf']; ?>">
                <button type="submit">Excluir</button></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    <?php endif; ?>
                    <tr>
                    <?php foreach ($pacientes as $paciente): ?>
    
            <!-- Link para atualizar o livro -->
           
        </td>
    </tr>
    <?php endforeach; ?>
</table>
                    </tr>

    <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/paciente_view.php">Cadastrar novo Paciente</a>
    
</body>
</html>
