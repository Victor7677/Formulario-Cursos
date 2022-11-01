<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RederizadorDeHtmlTrait;

class FormularioLogin implements InterfaceControladorRequisicao
{
    use RederizadorDeHtmlTrait;
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('login/formulario.php', [
            'titulo'=> 'Login'
            ]);
    }
}