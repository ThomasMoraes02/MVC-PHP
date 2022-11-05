<?php 
namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControlador
{
    public function processaRequisicao(): void
    {
        $titulo = "Novo curso";
        require __DIR__ . "/../../view/cursos/formulario-novo-curso.php";
    }
}