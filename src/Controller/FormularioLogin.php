<?php
namespace Alura\Cursos\Controller;

class FormularioLogin extends ControllerComHtml implements InterfaceControlador
{
    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml('login/formulario.php', ['titulo' => 'Login']);
    }
}