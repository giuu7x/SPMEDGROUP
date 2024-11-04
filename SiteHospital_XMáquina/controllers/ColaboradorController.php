<?php

require_once '../model/Colaborador.php';

class ColaboradorController {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../view/colaborador_view.php';
    }

    public function saveColaborador() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $nascimento = $_POST['nascimento'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        // Cria um novo livro
        $colaborador = new Colaborador();
        $colaborador->nome = $nome;
        $colaborador->cpf = $cpf;
        $colaborador->nascimento = $nascimento;
        $colaborador->telefone = $telefone;
        $colaborador->senha = $senha;

        // Salva no banco de dados
        if ($colaborador->save()) {
            // Redireciona para a página de listagem
            header('Location: /MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%c3%a1quina/view/paciente_list.php');
        } else {
            echo "Erro ao cadastrar Colaborador!";
        }
    }

}
