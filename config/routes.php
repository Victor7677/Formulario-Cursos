<?php

use Alura\Cursos\Controller\Edicao;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\Exclusao;


$rotas = [
    '/listar-cursos' => ListarCursos::class,
    '/formulario-cursos' => FormularioInsercao::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso'=> Exclusao::class,
    '/editar-curso'=> Edicao::class,
    '/login'=> FormularioLogin::class,
];
return $rotas;