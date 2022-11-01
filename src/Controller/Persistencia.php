<?php

namespace Alura\Cursos\Controller;
use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMenssageTrait;
use Alura\Cursos\Infra\EntityManagerCreator;



class Persistencia implements InterfaceControladorRequisicao
{
    private $entityManager;
    use FlashMenssageTrait;
    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator ())->getEntityManager();
    }
        public function processaRequisicao(): void
    {
        
        $curso = new Curso();
        $curso->setDescricao(strip_tags($_POST['descricao']));

        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );
        if(!is_null($id) && $id !== false){
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $this->defineMensagem('success', 'Curso editado com sucesso');

        } else {
            $this->entityManager->persist($curso);
            $this->defineMensagem('success', 'Curso inserido com sucesso');
        }

        $this->entityManager->flush();

        header('location:/listar-cursos');
    }
}