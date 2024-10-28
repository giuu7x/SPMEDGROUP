<?php
require_once 'models/Colaborador.php';

class ColaboradorController {
    public function createColaborador($data) {
        $colaborador = new Colaborador($data['nome'], $data['crm'], $data['nascimento'], $data['telefone'], $data['email'], $data['senha']);
        // Save colaborador to the database or perform other actions
        return $colaborador;
    }

    public function showColaborador() {
        // Logic to retrieve and display colaborador data
        include 'views/colaborador_view.php';
    }
}
