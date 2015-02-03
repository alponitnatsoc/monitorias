<?php

/* solicitudMonitoriaJefeSeccionBundle:jefeSeccion:monitorias.html.twig */
class __TwigTemplate_d5b08a9a9bdc5420374b5f839db0a2b6881bbf912e38367e0a767225f2097df1 extends Twig_Template
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
        echo "    <h2>Administrar Monitorías</h2>
\t<div align =\"center\">
    <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("solicitud_monitoria_jefe_seccion_actualizar_monitorias");
        echo "\" method=\"post\">
        <table class=\"mitabla\">
\t\t\t<tr valign=\"middle\">
                <td class=\"idc\">IdCurso</td>
                <td class=\"nomc\">Nombre del Curso</td>
\t\t\t\t<td class=\"horas\">Horas</td>
                <td class=\"cantidad\">Cantidad </td>
            </tr>
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monitorias"]) ? $context["monitorias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["monitoria"]) {
            // line 14
            echo "                <tr class=\"par\">
                    <td><input hidden class=\"c\" type=\"text\"  name=\"_i";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "idCurso", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "idCurso", array()), "html", null, true);
            echo "\"/></td>
                    <td class=\"idc\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "idCurso", array()), "html", null, true);
            echo "</td>
                    <td class=\"nomc\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "NombreCurso", array()), "html", null, true);
            echo "</td>
                    <td class=\"horas\"><input class=\"c\" type=\"text\"  name=\"_h";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "idCurso", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "Horas", array()), "html", null, true);
            echo "\"/></td>
                    <td class=\"cantidad\"><input class=\"c\" type=\"text\"  name=\"_c";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "idCurso", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "CantidadMonitorias", array()), "html", null, true);
            echo "\"/></td>
                </tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            <tr class=\"final\" align=\"center\">
                <td ><button type=\"submit\">Actualizar</button></td>
            </tr>
        </table>
    </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaJefeSeccionBundle:jefeSeccion:monitorias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  81 => 19,  75 => 18,  71 => 17,  67 => 16,  61 => 15,  58 => 14,  54 => 13,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
