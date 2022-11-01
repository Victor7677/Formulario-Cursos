<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RederizadorDeHtmlTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos implements InterfaceControladorRequisicao
{
    use RederizadorDeHtmlTrait;
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
       $this->repositorioDeCursos= $repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao(): void
    {
        echo $this->renderizarHtml('cursos/view-cursos.php', [
            'titulo'=> 'Listar Cursos',
            'cursos'=> $this->repositorioDeCursos->findAll(),
        ]);
    }

}