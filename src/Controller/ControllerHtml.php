<?php

namespace Alura\Cursos\Controller;

class ControllerHtml
{
    public function renderizarHtml(string $caminhoTemplate, array $dados): string
    {
        extract($dados);
        ob_start();
        require __DIR__. '/../../view/' . $caminhoTemplate;
        $html = ob_get_clean();

        return $html;
    }
}