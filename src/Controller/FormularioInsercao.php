<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerHtml implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/view-formulario.php', [
            'titulo' => 'Novo Curso',
        ]);

    }
}