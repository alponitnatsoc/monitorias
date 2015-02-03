<?php

/* solicitudMonitoriaEstudianteBundle:Estudiante:solicitar.html.twig */
class __TwigTemplate_73d07568bfe27e67e5512912d7434b523fc0430d431cd1c488dbdca6fad131ad extends Twig_Template
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
        echo "    <h2>Solicitar Monitorías</h2>
\t<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("solicitud_monitoria_estudiante_actualizar_solicitudes");
        echo "\" method=\"post\">
\t\t<h3> Monitorías Solicitadas</h3>
        <div align=\"center\">
        <table class=\"mitabla\" >
\t\t\t<tr valign=\"middle\">
                <td class=\"idc\">IdCurso</td>
                <td class=\"nomc\">Nombre del Curso</td>
                <td class=\"calificacion\">Calificación</td>
\t\t\t\t<td class=\"horas\">Horas</td>
                <td class=\"cantidad\">Cantidad</td>
            </tr>
\t\t\t";
        // line 15
        $context["hay"] = "no";
        // line 16
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantesolicitudes"]) ? $context["estudiantesolicitudes"] : $this->getContext($context, "estudiantesolicitudes")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiantesolicitud"]) {
            // line 17
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["estudiantemonitorias"]) ? $context["estudiantemonitorias"] : $this->getContext($context, "estudiantemonitorias")));
            foreach ($context['_seq'] as $context["_key"] => $context["estudiantemonitoria"]) {
                if (((($this->getAttribute($context["estudiantemonitoria"], "CantidadMonitorias", array()) != 0) && ($this->getAttribute($context["estudiantemonitoria"], "idMonitoria", array()) == $this->getAttribute($context["estudiantesolicitud"], "idMonitoria", array()))) && ($this->getAttribute($context["estudiantesolicitud"], "CantidadSolicitada", array()) != 0))) {
                    // line 21
                    echo "\t\t\t\t\t";
                    $context["hay"] = "si";
                    // line 22
                    echo "\t\t\t\t\t\t<tr class=\"par\">
\t\t\t\t\t\t\t<td class=\"idc\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "idCurso", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"nomc\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "NombreCurso", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"calificacion\">";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "Calificacion", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"horas\">";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "Horas", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td><select class=\"cantidad\" name=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "idMonitoria", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<option select>-- ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantesolicitud"], "CantidadSolicitada", array()), "html", null, true);
                    echo " --</option>
\t\t\t\t\t\t\t\t";
                    // line 29
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["estudiantemonitoria"], "CantidadMonitorias", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t<option>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiantemonitoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiantesolicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t";
        if (((isset($context["hay"]) ? $context["hay"] : $this->getContext($context, "hay")) == "no")) {
            // line 37
            echo "\t\t\t\t<tr class=\"par\" align=\"middle\">
\t\t\t\t\t<td class=\"nodispo\">No ha solicitado monitorías.</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 41
        echo "        </table></div>
\t\t<h3> </h3>
\t\t<h3> Monitorías Disponibles</h3>
        <div align=\"center\">
        <table class=\"mitabla\" >
\t\t\t<tr valign=\"middle\">
                <td class=\"idc\">IdCurso</td>
                <td class=\"nomc\">Nombre del Curso</td>
                <td class=\"calificacion\">Calificacion</td>
\t\t\t\t<td class=\"horas\">Horas</td>
                <td class=\"cantidad\">Cantidad</td>
            </tr>
\t\t\t";
        // line 53
        $context["hay"] = "no";
        // line 54
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantemonitorias"]) ? $context["estudiantemonitorias"] : $this->getContext($context, "estudiantemonitorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiantemonitoria"]) {
            // line 55
            echo "\t\t\t\t";
            if (($this->getAttribute($context["estudiantemonitoria"], "CantidadMonitorias", array()) != 0)) {
                // line 56
                echo "                    ";
                $context["esta"] = "no";
                // line 57
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["estudiantesolicitudes"]) ? $context["estudiantesolicitudes"] : $this->getContext($context, "estudiantesolicitudes")));
                foreach ($context['_seq'] as $context["_key"] => $context["estudiantesolicitud"]) {
                    // line 58
                    echo "                        ";
                    if ((($this->getAttribute($context["estudiantemonitoria"], "idMonitoria", array()) == $this->getAttribute($context["estudiantesolicitud"], "idMonitoria", array())) && ($this->getAttribute($context["estudiantesolicitud"], "CantidadSolicitada", array()) != 0))) {
                        // line 60
                        echo "                                ";
                        $context["esta"] = "si";
                        // line 61
                        echo "                        ";
                    }
                    // line 62
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiantesolicitud'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                    ";
                if (((isset($context["esta"]) ? $context["esta"] : $this->getContext($context, "esta")) == "no")) {
                    // line 64
                    echo "                        ";
                    $context["hay"] = "si";
                    // line 65
                    echo "                        <tr class=\"par\">
                            <td class=\"idc\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "idCurso", array()), "html", null, true);
                    echo "</td>
                            <td class=\"nomc\">";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "NombreCurso", array()), "html", null, true);
                    echo "</td>
                            <td class=\"calificacion\">";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "Calificacion", array()), "html", null, true);
                    echo "</td>
                            <td class=\"horas\">";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "Horas", array()), "html", null, true);
                    echo "</td>
                            <td><select class=\"cantidad\" name=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["estudiantemonitoria"], "idMonitoria", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 71
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["estudiantemonitoria"], "CantidadMonitorias", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 72
                        echo "                                    <option>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "                            </td>
                        </tr>
                    ";
                }
                // line 77
                echo "                ";
            }
            // line 78
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiantemonitoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t";
        if (((isset($context["hay"]) ? $context["hay"] : $this->getContext($context, "hay")) == "no")) {
            // line 80
            echo "\t\t\t\t<tr class=\"par\" align=\"middle\">
\t\t\t\t\t<td class=\"nodispo\">No tiene monitorías disponibles.</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 84
        echo "\t\t\t<tr class=\"final\" align=\"center\">
                <td ><button type=\"submit\">Actualizar</button></td>
            </tr>
        </table>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaEstudianteBundle:Estudiante:solicitar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 84,  242 => 80,  239 => 79,  233 => 78,  230 => 77,  225 => 74,  216 => 72,  212 => 71,  208 => 70,  204 => 69,  200 => 68,  196 => 67,  192 => 66,  189 => 65,  186 => 64,  183 => 63,  177 => 62,  174 => 61,  171 => 60,  168 => 58,  163 => 57,  160 => 56,  157 => 55,  152 => 54,  150 => 53,  136 => 41,  130 => 37,  127 => 36,  121 => 35,  112 => 32,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  72 => 22,  69 => 21,  63 => 17,  58 => 16,  56 => 15,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
