<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        $titulo = 'Cadastrar Cursos';
        require __DIR__.'/../../view/cursos/view-formulario.php';
    }
}