<?php

/* solicitudMonitoriaJefeSeccionBundle:jefeSeccion:index.html.twig */
class __TwigTemplate_be6a8d2ede41c4c5aca9fa15fea7c5717e80794475c81247cae545bde610464a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("solicitudMonitoriaJefeSeccionBundle::mainJefeSeccion.html.twig");
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
        return "solicitudMonitoriaJefeSeccionBundle::mainJefeSeccion.html.twig";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jefeSeccion"]) ? $context["jefeSeccion"] : $this->getContext($context, "jefeSeccion")), "nombre", array()), "html", null, true);
        echo "</h2>
    <div class=\"fila impar\">Aquí podrás administrar las monitorias que ofrece la sección de ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["nombreSeccion"]) ? $context["nombreSeccion"] : $this->getContext($context, "nombreSeccion")), "html", null, true);
        echo " del Departamento de Electrónica.</div>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaJefeSeccionBundle:jefeSeccion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
