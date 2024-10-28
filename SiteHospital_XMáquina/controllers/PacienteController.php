<?php
require_once 'models/Paciente.php';

class PacienteController {
    public function createPaciente($data) {
        $paciente = new Paciente($data['nome'], $data['cpf'], $data['nascimento'], $data['telefone'], $data['email'], $data['senha']);
        // Save paciente to the database or perform other actions
        return $paciente;
    }

    public function showPaciente() {
        // Logic to retrieve and display paciente data
        include 'views/paciente_view.php';
    }
}
