<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursos implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())
            ->getEntityManager();
       $this->repositorioDeCursos= $repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao(): void
    {
        
        $cursos = $this->repositorioDeCursos->findAll();
        $titulo = 'Listar cursos';
        require __DIR__.'/../../view/cursos/view-cursos.php';
     
    }

}