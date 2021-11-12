<?php

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;

$rotas = [
    '/listar-cursos' => ListarCursos:: class,
    '/novo-curso' => FormularioInsercao:: class,
    'salvar-curso' => \Alura\Cursos\Controller\Persistencia:: class
];

return $rotas;