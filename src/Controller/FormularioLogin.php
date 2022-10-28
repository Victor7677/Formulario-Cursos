<?php

namespace Alura\Cursos\Controller;

class FormularioLogin extends ControllerHtml implements InterfaceControladorRequisicao
{

    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('login/formulario.php', [
            'titulo'=> 'Login'
            ]);
    }
}