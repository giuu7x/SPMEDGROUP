<?php

// Ativar exibição de erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once '../controllers/PacienteController.php';

// Lógica de roteamento
$request = $_SERVER['REQUEST_URI'];

echo $request;

switch ($request) {
   
    case '/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%c3%a1quina/public/':
        $controller = new PacienteController();
        $controller->showForm();
        break;
    case '/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente':
        $controller = new PacienteController();
        $controller->savePaciente();
        break;
    case '/MVCSPMEDICAL/SPMEDGROUP/SiteHospital_XM%C3%A1quina/cadastroPaciente/list':
            $controller = new PacienteController();
            $controller->list();
            break;
 
        http_response_code(404);
        echo "Página não encontrada.";
        break;

    case '/meu_projeto_livraria/delete-book':
    require_once '../controllers/PacienteController.php';
    $controller = new PacienteController();
    $controller->deleteBookByTitle();
    break;

    case (preg_match('/\/meu_projeto_livrari(\d+)/', $request, $matches) ? true : false):
    $id = $matches[1];
    require_once '../controllers/PacienteController.php';
    $controller = new PacienteController();
    $controller->showUpdateForm($nome);
    break;

    case '/':
    require_once '../controllers/PacienteController.php';
    $controller = new PacienteController();
    $controller->updateBook();
    break;
        default:
        http_response_code(404);
        echo $request;
        echo "Página não encontrada.";
        break;
}

