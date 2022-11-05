<?php 
namespace Alura\Cursos\Controller;

class Deslogar extends ControllerComHtml implements InterfaceControlador
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: /login');
    }
}