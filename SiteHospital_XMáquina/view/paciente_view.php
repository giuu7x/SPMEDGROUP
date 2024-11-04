<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Paciente</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cadastroboot1.css">

    <style>
        body {
            background-color: #ddfdfd;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12" style="background-color: #ffffff;" id="quadradocabeçalho">
                <img src="Imagens/logospmedicalgroupletras.png" alt="Logo">
            </div>
        </div>
    </div>

    <div class="container" style="background-color: #78d9d9;" id="quadrado">
        <div class="row justify-content-center">
            <div class="col-12 text-center" id="quadradopaciente">
                <form action="PacienteController.php" method="post">
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
                        <input type="number" step="0.01" id="senha" name="senha" required><br><br>
                
                        <input type="submit" value="Cadastrar ">
                    </form>
                
                    <a href="/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/paciente_list.php">Ver todos os pacientes</a>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center" id="quadradoadministrador">
                <a href="cadastro2.html" class="btn">Administrador</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center" id="quadradocolaborador">
                <a href="cadastro2.html" class="btn">Colaborador</a>
            </div>
        </div>
    </div>

</html>
</body>
</html>
