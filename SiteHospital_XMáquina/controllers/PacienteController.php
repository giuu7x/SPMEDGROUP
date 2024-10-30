<?php

require_once '../model/Paciente.php';

class PacienteController {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../view/paciente_view.php';
    }

    public function savePaciente() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        // Cria um novo livro
        $paciente = new Paciente();
        $paciente->nome = $nome;
        $paciente->cpf = $cpf;
        $paciente->nascimento = $nascimento;
        $paciente->telefone = $telefone;
        $paciente->senha = $senha;

        // Salva no banco de dados
        if ($paciente->save()) {
            // Redireciona para a página de listagem
            header('Location: /MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%c3%a1quina/view/paciente_list.php');
        } else {
            echo "Erro ao cadastrar paciente!";
        }
    }

}
