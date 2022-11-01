<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $repositorioDeUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager
            ->getRepository(Usuario::class);
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );
        if(is_null($email) || $email === false){
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = "E-mail digitado não é válido";
            header('Location:/login');
            exit();
        }
        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_UNSAFE_RAW
        );
        $usuario = $this->repositorioDeUsuarios
            ->findOneBy(['email'=>$email]);

        if(is_null($usuario) || !$usuario->senhaEstaCorreta($senha)){
            $_SESSION['tipo_mensagem'] = 'danger';
            $_SESSION['mensagem'] = "E-mail ou senha inválidos";
            header('Location:/login');
            return;

        }

        $_SESSION['Logado']= true;
        header('Location: /listar-cursos');

    }
}