<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Paciente</title>

    <!-- Linkando o Bootstrap CSS para estilizar o formulário -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Linkando o Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Estilos adicionais -->
    <style>
        body {
            background-color: #90D2D2; /* Novo fundo da página */
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #284d4d; /* Cor azul para o título */
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo para o botão */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3D9898; /* Cor do botão */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #90D2D2; /* Cor mais escura para o hover */
        }

        /* Estilo para os campos de texto */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilo para os campos que são preenchidos */
        input[type="text"].filled {
            background-color: #e0e0e0; /* Cor de fundo cinza quando preenchido */
        }

        /* Estilo para o link "voltar" */
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #3D9898;
        }

        a:hover {
            text-decoration: underline;
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

    <!-- Adicionando uma imagem centralizada acima do formulário -->
    <div class="image-container bg-light">
        <img src="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/view/Imagens/logospmedicalgroupletras-cadastr2.png" alt="Logo ou Imagem">
    </div>

    <h1>Atualizar Paciente</h1>

    <div class="container">
        <form action="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente/update" method="POST">
            <input type="hidden" name="cpf" value="<?php echo $pacientes['cpf']; ?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $pacientes['nome']; ?>" required oninput="markFilled(this)">
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control" value="<?php echo $pacientes['cpf']; ?>" required disabled>
            </div>

            <div class="mb-3">
                <label for="nascimento" class="form-label">Nascimento</label>
                <input type="text" id="nascimento" name="nascimento" class="form-control" value="<?php echo $pacientes['nascimento']; ?>" required oninput="markFilled(this)">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" id="telefone" name="telefone" class="form-control" value="<?php echo $pacientes['telefone']; ?>" oninput="markFilled(this)">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $pacientes['email']; ?>" oninput="markFilled(this)">
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha (R$)</label>
                <input type="text" id="senha" name="senha" class="form-control" value="<?php echo $pacientes['senha']; ?>" required oninput="markFilled(this)">
            </div>

            <input type="submit" value="Atualizar Paciente">
        </form>

        <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XMáquina/cadastroPaciente/list">Voltar para a lista</a>
    </div>

    <!-- Função JavaScript para marcar campos preenchidos com cor de fundo cinza -->
    <script>
        function markFilled(input) {
            if (input.value.trim() !== '') {
                input.classList.add('filled');
            } else {
                input.classList.remove('filled');
            }
        }
    </script>

</body>
</html>
