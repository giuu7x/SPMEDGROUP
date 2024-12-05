<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>

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
            color: #284d4d; /* Cor principal do título */
        }

        .container{
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #90D2D2; /* Cabeçalho da tabela */
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e8f4f4;
        }

        a {
            color: #284d4d;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #90D2D2;
            color: white;
            border: none;
            padding: 6px 12px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #3D9898;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
        }
        /* Estilo para a imagem centralizada */
        .image-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            max-height: 200px; /* Limitar a altura da imagem */
        }
        
    </style>
</head>
<body>
    <div class="container">
    <div style="text-align: center;"><a href=""><img style="margin: auto; max-height: 100px;" src="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/view/Imagens/logospmedicalgroupletras-cadastr2.png" alt="Logo ou Imagem"></a></div>

        <h1>Pacientes Cadastrados</h1>

        <?php if (empty($pacientes)): ?>
            <p>Nenhum paciente cadastrado.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cpf</th>
                        <th>Nascimento</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Ações</th>
                        <th></th>

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

                            <!-- Link para atualizar -->
                            <td>
                                <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/view/attpaciente/<?php echo $paciente['cpf']; ?>">Atualizar</a>
                            </td>

                            <!-- Formulário para deletar o paciente -->
                            <td>
                                <form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/delete-paciente" method="POST" style="display:inline;">
                                    <input type="hidden" name="cpf" value="<?php echo $paciente['cpf']; ?>">
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <!-- Link para adicionar novo paciente -->
        <div class="footer">
            <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/view/paciente_view.php">Cadastrar novo Paciente</a>
        </div>
    </div>

</body>
</html>
