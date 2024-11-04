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
            header('Location:/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente/list');
        } else {
            echo "Erro ao cadastrar paciente!";
        }
        
    }
    public function list(){
       $paciente = new Paciente();
       $pacientes = $paciente->getAll();
       require_once '../view/paciente_list.php';
    }

}
