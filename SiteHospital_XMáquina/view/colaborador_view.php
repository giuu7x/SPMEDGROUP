<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
    
    <!-- Linkando o Bootstrap para estilizar o layout -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos adicionais -->
    <style>
        body {
            background-color: #DEF9F9; /* Cor de fundo */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #3D9898; /* Cor principal do título */
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #3D9898;
        }

        input[type="text"], input[type="number"] {
            padding: 10px;
            border: 1px solid #90D2D2;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #3D9898;
            outline: none;
        }

        input[type="submit"] {
            background-color: #3D9898;
            border: none;
            color: white;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #90D2D2;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #3D9898;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        .form-container {
            margin: 0 auto;
            max-width: 700px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Cadastro de Paciente</h1>
        <form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">Cpf</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="nascimento">Nascimento</label>
            <input type="text" id="nascimento" name="nascimento" required>

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone">

            <label for="email">E-mail</label>
            <input type="text" id="email" name="email">

            <label for="senha">Senha</label>
            <input type="number" step="1" id="senha" name="senha" required>

            <input type="submit" value="Cadastrar">
        </form>

        <div class="form-footer">
            <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente/list">Ver todos os pacientes</a>
        </div>
    </div>

</body>
</html>
