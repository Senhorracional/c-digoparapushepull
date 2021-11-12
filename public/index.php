<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__.'/../config/route.php';

if(!array_key_exists($caminho, $rotas)){
    echo "Erro 404";
    exit();
}

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $caminho */
$controlador = new $classeControladora();
$controlador->processaRequisicao();