<?php
require __DIR__.'/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__. '/../config/routes.php';

if(!array_key_exists($caminho, $rotas)){
    http_response_code(404);
    exit();
}

session_start();
if(!isset($_SESSION['Logado']) && $caminho !=='/login' && $caminho !== 'realiza-login'){
    header('Location:/login');
}

$classeControladora = $rotas[$caminho];
/**@var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
