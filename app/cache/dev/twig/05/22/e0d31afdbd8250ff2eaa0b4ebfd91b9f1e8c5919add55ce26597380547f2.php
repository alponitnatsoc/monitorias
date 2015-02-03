<?php

/* solicitudMonitoriaJefeSeccionBundle:jefeSeccion:estudiante.html.twig */
class __TwigTemplate_0522e0d31afdbd8250ff2eaa0b4ebfd91b9f1e8c5919add55ce26597380547f2 extends Twig_Template
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
        echo "    <h2>Información de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "Nombre", array()), "html", null, true);
        echo "</h2>
    <h3>Información </h3>
        <div align=\"center\">
            <table class=\"mitabla\">
                <tr class=\"rst\">
                    <td class=\"rst\">CódigoSIU:</td>
                    <td class=\"sec\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "idEstudiante", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr class=\"par\">
                    <td class=\"rst\">Tipo de Documento:</td>
                    <td class=\"sec1\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "TipoDocumento", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr class=\"par\">
                    <td class=\"rst\">No. Documento:</td>
                    <td class=\"sec1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "NoDocumento", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr class=\"par\">
                    <td class=\"rst\">Correo:</td>
                    <td class=\"sec1\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "Correo", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr class=\"par\">
                    <td class=\"rst\">Teléfono:</td>
                    <td class=\"sec1\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "Telefono", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr class=\"par\">
                    <td class=\"rst\">Semestre:</td>
                    <td class=\"sec1\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "Semestre", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr class=\"par\">
                    <td class=\"rst\">Promedio Acumulado:</td>
                    <td class=\"sec1\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["iestudiante"]) ? $context["iestudiante"] : $this->getContext($context, "iestudiante")), "PromAcumulado", array()), "html", null, true);
        echo "</td>
                </tr> 
                <tr class=\"par\">
                    <td class=\"rst\">Calificación como monitor:</td>
                    <td class=\"sec1\">No disponible</td>
                </tr>             
            </table>
        </div>
        
    <h3></h3>
    <h3>Monitorías Actuales</h3>
        <div align=\"center\">
            <table class=\"mitabla\">
                <tr class=\"rst\">
                    <td class=\"calificacion\">Periodo Académico</td>
                    <td class=\"idc\"> idCurso</td>
                    <td class=\"nomc\">Nombre del Curso</td>
                    <td class=\"cantidad\">Monitorías Asignadas</td>        
                    <td class=\"horas\">Horas </td>
                </tr>
                ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) ? $context["asignaciones"] : $this->getContext($context, "asignaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            if (($this->getAttribute($context["asignacion"], "PeriodoAcademico", array()) == (isset($context["periodoAcaActual"]) ? $context["periodoAcaActual"] : $this->getContext($context, "periodoAcaActual")))) {
                // line 54
                echo "                    <tr class=\"par\">
                        <td class=\"calificacion\"> ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "PeriodoAcademico", array()), "html", null, true);
                echo "</td>
                        <td class=\"idc\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "idCurso", array()), "html", null, true);
                echo "</td>
                        <td class=\"nomc\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "NombreCurso", array()), "html", null, true);
                echo "</td>
                        <td class=\"cantidad\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "CantidadAsignada", array()), "html", null, true);
                echo "</td>        
                        <td class=\"horas\">";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "Horas", array()), "html", null, true);
                echo "</td>
                          
                    </tr>
                 ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </table>
        </div>
        <h3></h3>
        <h3>Monitorías Anteriores</h3>
        <div align=\"center\">
            <table class=\"mitabla\">
                <tr class=\"rst\">
                    <td class=\"calificacion\">Periodo Académico</td>
                    <td class=\"idc\"> idCurso</td>
                    <td class=\"nomc\">Nombre del Curso</td>
                    <td class=\"cantidad\">Monitorías Asignadas</td> 
                    <td class=\"horas\">Horas</td>
                </tr>
                ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) ? $context["asignaciones"] : $this->getContext($context, "asignaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            if (($this->getAttribute($context["asignacion"], "PeriodoAcademico", array()) != (isset($context["periodoAcaActual"]) ? $context["periodoAcaActual"] : $this->getContext($context, "periodoAcaActual")))) {
                // line 77
                echo "                    <tr class=\"par\">
                        <td class=\"calificacion\"> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "PeriodoAcademico", array()), "html", null, true);
                echo "</td>
                        <td class=\"idc\">";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "idCurso", array()), "html", null, true);
                echo "</td>
                        <td class=\"nomc\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "NombreCurso", array()), "html", null, true);
                echo "</td> 
                        <td class=\"cantidad\">";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "CantidadAsignada", array()), "html", null, true);
                echo "</td> 
                        <td class=\"horas\">";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "Horas", array()), "html", null, true);
                echo "</td>
                       
                    </tr>
                 ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </table>
        </div>
        
    <h3></h3>
    <h3>Comentarios</h3>
    <div align=\"center\">
        No disponible
    </div>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaJefeSeccionBundle:jefeSeccion:estudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 86,  188 => 82,  184 => 81,  180 => 80,  176 => 79,  172 => 78,  169 => 77,  164 => 76,  149 => 63,  138 => 59,  134 => 58,  130 => 57,  126 => 56,  122 => 55,  119 => 54,  114 => 53,  91 => 33,  84 => 29,  77 => 25,  70 => 21,  63 => 17,  56 => 13,  49 => 9,  39 => 3,  36 => 2,  11 => 1,);
    }
}
