<?php
require_once '../controllers/AdminController.php';
require_once '../controllers/ColaboradorController.php';
require_once '../controllers/PacienteController.php';

$action = $_GET['action'] ?? 'showAdmin';

switch ($action) {
    case 'createAdmin':
        $controller = new AdminController();
        $controller->createAdmin($_POST);
        break;
    case 'showAdmin':
        $controller = new AdminController();
        $controller->showAdmin();
        break;
    case 'createColaborador':
        $controller = new ColaboradorController();
        $controller->createColaborador($_POST);
        break;
    case 'showColaborador':
        $controller = new ColaboradorController();
        $controller->showColaborador();
        break;
    case 'createPaciente':
        $controller = new PacienteController();
        $controller->createPaciente($_POST);
        break;
    case 'showPaciente':
        $controller = new PacienteController();
        $controller->showPaciente();
        break;
    default:
        // Handle unknown action
        break;
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        
}
