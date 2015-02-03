<?php

/* solicitudMonitoriaEstudianteBundle:Estudiante:informacion.html.twig */
class __TwigTemplate_1d3ba00ed693d581200f0d3730e5ac39f704cb21fb24529b9ef5dc607dfee85a extends Twig_Template
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
        echo "    <h2>Información Personal</h2> 
    <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("solicitud_monitoria_estudiante_actualizar_informacion");
        echo "\" method=\"post\">
        <table class=\"mitabla\">
            <tr class=\"rst\">
                <td class=\"rst\">CódigoSIU:</td>
                <td class=\"sec\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "getId", array(), "method"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"par\">
                <td class=\"rst\">Tipo de Documento:</td>
                <td><select name=\"_tdocumento\" size-font=20\"px\">
                    <option selected>-- ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "TipoDocumento", array()), "html", null, true);
        echo " --</option>
                    <option>Cédula</option>
                    <option>Tarjeta de Identidad</option>
                    <option>Pasaporte</option>
                </select></td>
            </tr>
            <tr>
                <td class=\"rst\">No. Documento:</td>
                <td><input class=\"par\" type=\"text\"  name=\"_ndocumento\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "NoDocumento", array()), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr class=\"par\">
                <td class=\"rst\">Nombre:</td>
                <td><input type=\"text\"  name=\"_nombre\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "Nombre", array()), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <td class=\"rst\">Correo:</td>
                <td><input class=\"par\" type=\"text\"  name=\"_correo\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "Correo", array()), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr class=\"par\">
                <td class=\"rst\">Teléfono:</td>
                <td><input  type=\"text\"  name=\"_telefono\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "Telefono", array()), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <td class=\"rst\">Semestre:</td>
                <td><input class=\"par\" type=\"text\"  name=\"_semestre\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "Semestre", array()), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr class=\"par\">
                <td class=\"rst\">Promedio Acumulado:</td>
                <td><input type=\"text\" name=\"_promedio\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "PromAcumulado", array()), "html", null, true);
        echo "\"/></td>
            </tr>   
            <tr class=\"final\" align=\"center\">
                <td ><button type=\"submit\">Actualizar</button></td>
            </tr>
        </table>
    </form>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaEstudianteBundle:Estudiante:informacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  96 => 37,  89 => 33,  82 => 29,  75 => 25,  68 => 21,  57 => 13,  49 => 8,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
