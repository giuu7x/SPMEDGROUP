<?php
require_once 'models/Admin.php';

class AdminController {
    public function createAdmin($data) {
        $admin = new Admin($data['nome'], $data['codigoEntrada'], $data['nascimento'], $data['telefone'], $data['email'], $data['senha']);
        // Save admin to the database or perform other actions
        return $admin;
    }

    public function showAdmin() {
        // Logic to retrieve and display admin data
        include 'views/admin_view.php';
    }
}
