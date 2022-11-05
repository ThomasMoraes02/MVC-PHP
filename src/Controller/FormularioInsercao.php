<?php 
namespace Alura\Cursos\Controller;

class FormularioInsercao extends ControllerComHtml implements InterfaceControlador
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml("cursos/formulario-novo-curso.php", ["titulo" => "Novo Curso"]);
    }
}