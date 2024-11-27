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
        $paciente->email = $email;
        
        

        // Salva no banco de dados
        if ($paciente->save()) {
            // Redireciona para a página de listagem
            header('Location:/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/view/html/homepage.html');
        } else {
            echo "Erro ao cadastrar paciente!";
        }
        
    }
    public function list(){
       $paciente = new Paciente();
       $pacientes = $paciente->getAll();
       require_once '../view/paciente_list.php';
    }
     // Método para exibir o formulário de atualização
     public function showUpdateForm($cpf) {
        $paciente = new Paciente();
        $pacientes = $paciente->getById($cpf);
        include '../view/attpaciente.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um livro
    public function updatePaci() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->nome = $_POST['nome'];
            $paciente->cpf = $_POST['cpf'];
            $paciente->nascimento = $_POST['nascimento'];
            $paciente->telefone = $_POST['telefone'];
            $paciente->email = $_POST['email'];
            $paciente->senha = $_POST['senha'];

            if ($paciente->update()) {
                header('Location: /MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente/list');
            } else {
                echo "Erro ao atualizar o livro.";
            }
        }
    }

    // Método para excluir um livro pelo título
    public function deletePaciByCpf () {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->cpf = $_POST['cpf'];

            if ($paciente->deleteByCpf()) {
                header('Location: /MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente/list');
            } else {
                echo "Erro ao excluir o livro.";
            }
        }
    }
}

