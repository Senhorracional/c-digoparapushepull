<?php


namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;
use Exception;

class Persistencia implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

public function processaRequisicao(): void
{

    $descricao = filter_input(
         INPUT_POST,
         'descricao',
         FILTER_SANITIZE_STRING
        );
    $quantidade = filter_input(
        INPUT_POST,
        'quantidade',
        FILTER_VALIDATE_INT
    );

    
    if($quantidade === false){
        echo "Erro";
    }
    //echo $descricao;
   // exit();    
    $curso = new Curso();
    $curso->setDescricao($_POST['descricao']);

    $this->entityManager->persist($curso);
    $this->entityManager->flush();


    header ('Location: /listar-cursos', true, 302);

   
}
}