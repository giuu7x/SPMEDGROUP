<?php
class Admin {
    private $nome;
    private $codigoEntrada;
    private $nascimento;
    private $telefone;
    private $email;
    private $senha;

    public function __construct($nome, $codigoEntrada, $nascimento, $telefone, $email, $senha) {
        $this->nome = $nome;
        $this->codigoEntrada = $codigoEntrada;
        $this->nascimento = $nascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

    // Add getters and setters as needed
}
