<?php
class Colaborador {
    private $nome;
    private $crm;
    private $nascimento;
    private $telefone;
    private $email;
    private $senha;

    public function __construct($nome, $crm, $nascimento, $telefone, $email, $senha) {
        $this->nome = $nome;
        $this->crm = $crm;
        $this->nascimento = $nascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Add getters and setters as needed
}
