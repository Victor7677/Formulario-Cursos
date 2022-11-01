<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RederizadorDeHtmlTrait;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RederizadorDeHtmlTrait;
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/view-formulario.php', [
            'titulo' => 'Novo Curso',
        ]);

    }
}