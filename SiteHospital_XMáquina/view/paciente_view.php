<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Paciente</title>
    
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

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 16px;
            color: #3D9898;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #3D9898;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #90D2D2;
        }

        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #3D9898;
            font-size: 16px;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Cadastro de Paciente</h1>
        <form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" required><br><br>

            <label for="nascimento">Nascimento</label>
            <input type="text" id="nascimento" name="nascimento" required><br><br>

            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone"><br><br>

            <label for="email">Email</label>
            <input type="text" id="email" name="email"><br><br>

            <label for="senha">Senha</label>
            <input type="text" id="senha" name="senha" required><br><br>

            <div class="row align-items-center d-flex justify-content-center">
    <input style="text-align: center; width: 200px" type="submit" value="Cadastrar">
</div>

        </form>

        <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente/list">Ver todos os pacientes</a>
    </div>

</body>
</html>
