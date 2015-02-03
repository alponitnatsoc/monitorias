<?php

/* solicitudMonitoriaEstudianteBundle:Estudiante:index.html.twig */
class __TwigTemplate_fd5fe203817ef5aacdd294a82d680274d66be36091751d899d0bcce989505517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("solicitudMonitoriaEstudianteBundle::mainEstudiante.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "solicitudMonitoriaEstudianteBundle::mainEstudiante.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2>Bienvenido ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
        echo "</h2>
    <div class=\"fila impar\">Aquí podrás solicitar las monitorias que ofrece el Departamento de Electrónica.</div>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaEstudianteBundle:Estudiante:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
