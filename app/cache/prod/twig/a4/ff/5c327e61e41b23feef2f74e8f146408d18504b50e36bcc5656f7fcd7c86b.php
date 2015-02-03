<?php

/* solicitudMonitoriaCursosBundle::cursos.html.twig */
class __TwigTemplate_a4ff5c327e61e41b23feef2f74e8f146408d18504b50e36bcc5656f7fcd7c86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keys"]) ? $context["keys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 3
            echo "        <p> ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 7
            echo "        <p> ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo " </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaCursosBundle::cursos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  38 => 6,  35 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
