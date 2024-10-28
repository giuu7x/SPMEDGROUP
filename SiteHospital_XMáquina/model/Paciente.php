<?php
class Paciente {
    private $nome;
    private $cpf;
    private $nascimento;
    private $telefone;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $nascimento, $telefone, $email, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nascimento = $nascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Add getters and setters as needed
}
