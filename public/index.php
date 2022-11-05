<?php 

require_once __DIR__ . "../../vendor/autoload.php";

use Alura\Cursos\Controller\InterfaceControlador;

// ini_set('display_errors',1);

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . "/../config/routes.php";

if(!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

session_start();

if(!isset($_SESSION['logado']) && $caminho !== '/login' && $caminho !== '/realiza-login') {
    header('Location: /login');
    return;
}

$classeControladora = $rotas[$caminho];

/**
 * @var InterfaceControlador $controlador
 */
$controlador = new $classeControladora;
$controlador->processaRequisicao();