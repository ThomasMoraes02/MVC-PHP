<?php 
namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControlador
{
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager(); 
    }

    public function processaRequisicao(): void
    {
        // Validar input
        $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

        $curso = new Curso();
        $curso->setDescricao($descricao);

        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if(!is_null($id) && $id !== false) {
            $curso->setId($id);
            $this->entityManager->merge($curso);
            $_SESSION['mensagem'] = "Curso atualizado com sucesso";
        } else {
            $_SESSION['mensagem'] = "Curso adicionado com sucesso";
            $this->entityManager->persist($curso);
        }
        
        $_SESSION['tipoMensagem'] = "success";
        $this->entityManager->flush();

        // Redirecionamento
        header('Location: /listar-cursos', true, 302);
    }
}