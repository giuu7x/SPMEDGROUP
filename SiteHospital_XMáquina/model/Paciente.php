<?php

require_once '../config/database.php';

class Paciente {
    private $conn;
    private $table_name = "paciente";

    public $nome;
    public $cpf;
    public $telefone;
    public $email;
    public $senha;
    public $nascimento;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, cpf, telefone, email, senha, nascimento) VALUES (:nome, :cpf, :telefone, :email, :senha, :nascimento)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':nascimento', $this->nascimento);
    

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($cpf) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE cpf = :cpf";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um livro
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nome = :nome, cpf = :cpf, nascimento = :nascimento, email = :email, telefone = :telefone, senha = :senha WHERE cpf = :cpf;";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':nascimento', $this->nascimento);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        

        return $stmt->execute();
    }

    // Método para excluir um livro pelo título
    public function deleteByCpf() {
        $query = "DELETE FROM " . $this->table_name . " WHERE cpf = :cpf";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':cpf', $this->cpf);

        return $stmt->execute();
    }

}
