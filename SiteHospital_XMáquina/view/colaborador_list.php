<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    
    <!-- Linkando o Bootstrap para estilizar o layout -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos adicionais -->
    <style>
        body {
            background-color: #90D2D2; /* Cor de fundo */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #284D4D; /* Cor azul para o título */
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: left;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        .btn {
            padding: 8px 12px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }

        .btn-update {
            background-color: #90D2D2;
        }

        .btn-delete {
            background-color: #ff6f61;
        }

        .btn:hover {
            opacity: 0.8;
        }

        a {
            color: #284D4D;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .no-patient {
            text-align: center;
            font-size: 18px;
            color: #555;
        }

        .add-patient-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Pacientes Cadastrados</h1>

        <?php if (empty($pacientes)): ?>
            <p class="no-patient">Nenhum paciente cadastrado.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Nascimento</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>Ações</th>
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
                            <td>
                                <!-- Botão de Atualizar -->
                                <a href="../views/attpaciente.php?nome=<?php echo urlencode($paciente['nome']); ?>" class="btn btn-update">Atualizar</a>

                                <!-- Formulário de exclusão -->
                                <form action="/meu_projeto_livraria/delete-book" method="POST" style="display:inline;">
                                    <input type="hidden" name="title" value="<?php echo $paciente['nome']; ?>">
                                    <button type="submit" class="btn btn-delete">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>   
                </tbody>
            </table>
        <?php endif; ?>

        <!-- Link para cadastrar novo paciente -->
        <div class="add-patient-link">
            <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/view/paciente_view.php">Cadastrar novo paciente</a>
        </div>
    </div>

</body>
</html>
