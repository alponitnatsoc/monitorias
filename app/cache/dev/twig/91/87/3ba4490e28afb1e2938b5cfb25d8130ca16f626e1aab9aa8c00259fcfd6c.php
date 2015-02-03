<?php

/* solicitudMonitoriaJefeSeccionBundle:jefeSeccion:asignaciones.html.twig */
class __TwigTemplate_91873ba4490e28afb1e2938b5cfb25d8130ca16f626e1aab9aa8c00259fcfd6c extends Twig_Template
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
        echo "    <h2>Asignar Monitorías</h2>
    <h3>Monitorías</h3> 
    <div align=\"center\">
            <table class=\"mitabla\" >
                <tr valign=\"middle\">
                    <td class=\"idc\"> idCurso</td>
                    <td class=\"nomc\">Nombre del Curso</td>
                    <td class=\"horas\">Horas</td>    
                    <td class=\"cantidad\">Cantidad Monitorías</td>
                    <td class=\"cantidad\">Monitorías Asignadas</td>                
                </tr>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monitorias"]) ? $context["monitorias"] : $this->getContext($context, "monitorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["monitoria"]) {
            // line 15
            echo "                    <tr class=\"par 2\">
                        <td class=\"idc\"> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "idCurso", array()), "html", null, true);
            echo "</td>
                        <td class=\"nomc\"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "NombreCurso", array()), "html", null, true);
            echo " </td>
                        <td class=\"horas\"> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "Horas", array()), "html", null, true);
            echo " </td>    
                        <td class=\"cantidad\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria"], "CantidadMonitorias", array()), "html", null, true);
            echo " </td>
                        <td class=\"cantidad\"> 
                            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["monitorias1"]) ? $context["monitorias1"] : $this->getContext($context, "monitorias1")));
            foreach ($context['_seq'] as $context["_key"] => $context["monitoria1"]) {
                if (($this->getAttribute($context["monitoria1"], "idMonitoria", array()) == $this->getAttribute($context["monitoria"], "idMonitoria", array()))) {
                    // line 22
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["monitoria1"], "total", array()), "html", null, true);
                    echo "
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitoria1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                        </td>
                    </tr>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monitoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                
            </table>
        </div>
    
    
    <h2></h2>
\t<form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("solicitud_monitoria_jefe_seccion_asignaciones_actualizar");
        echo "\" method=\"post\">
\t\t<h3> Monitorías Asignadas</h3>
        <div align=\"center\">
            <table class=\"mitabla\" >
                <tr valign=\"middle\">
                    <td class=\"nomc\"> Nombre del Curso</td>
                    <td class=\"nomc\">Nombre del Estudiante</td>
                    <td class=\"calificacion\">Calificación del monitor</td>    
                    <td class=\"cantidad\">Monitorías Solicitada</td>
                    <td class=\"cantidad\">Monitorías Asignada</td>                
                </tr>
                ";
        // line 44
        $context["hay"] = "no";
        // line 45
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) ? $context["asignaciones"] : $this->getContext($context, "asignaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 46
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
            foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
                if (($this->getAttribute($context["asignacion"], "idSolicitud", array()) == $this->getAttribute($context["solicitud"], "idSolicitud", array()))) {
                    // line 47
                    echo "                        ";
                    $context["hay"] = "si";
                    // line 48
                    echo "                        <tr class=\"par\">
                            <td class=\"nomc\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "NombreCurso", array()), "html", null, true);
                    echo "</td>
                            <td class=\"nomc\"><a target=\"_blank\" href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_monitoria_jefe_seccion_estudiante", array("idEstudiante" => $this->getAttribute($context["solicitud"], "idEstudiante", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "Nombre", array()), "html", null, true);
                    echo "</a></td>
                            <td class=\"calificacion\">
                            ";
                    // line 52
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["promedios"]) ? $context["promedios"] : $this->getContext($context, "promedios")));
                    foreach ($context['_seq'] as $context["_key"] => $context["promedio"]) {
                        if (($this->getAttribute($context["promedio"], "idEstudiante", array()) == $this->getAttribute($context["solicitud"], "idEstudiante", array()))) {
                            // line 53
                            echo "                                 ";
                            echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["promedio"], "promedio", array()), 2), "html", null, true);
                            echo "
                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promedio'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "                            </td>    
                            <td class=\"cantidad\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "CantidadSolicitada", array()), "html", null, true);
                    echo "</td>
                            <td><select class=\"cantidad\" name=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "idSolicitud", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<option select>-- ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "CantidadAsignada", array()), "html", null, true);
                    echo " --</option>
                                ";
                    // line 59
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["solicitud"], "CantidadSolicitada", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t<option>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "                                </select>
\t\t\t\t\t\t\t</td>
                        </tr>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                ";
        if (((isset($context["hay"]) ? $context["hay"] : $this->getContext($context, "hay")) == "no")) {
            // line 68
            echo "                    <tr class=\"par\" align=\"center\">
                        <td class=\"nomc\">No hay monitorías asignadas.</td>
                    </tr>
                ";
        }
        // line 72
        echo "            </table>
        </div>
\t\t<h3> </h3>
\t\t<h3> Solicitudes de Monitorías</h3>
        <div align=\"center\">
            <table class=\"mitabla\" >
                <tr valign=\"middle\">
                    <td class=\"nomc\"> Nombre del Curso</td>
                    <td class=\"nomc\">Nombre del Estudiante</td>
                    <td class=\"calificacion\">Calificación del monitor</td>    
                    <td class=\"cantidad\">Monitorías Solicitada</td>
                    <td class=\"cantidad\">Monitorías Asignada</td>
                </tr>
                ";
        // line 85
        $context["hay"] = "no";
        // line 86
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["solicitudes"]) ? $context["solicitudes"] : $this->getContext($context, "solicitudes")));
        foreach ($context['_seq'] as $context["_key"] => $context["solicitud"]) {
            // line 87
            echo "                    ";
            $context["esta"] = "no";
            // line 88
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["asignaciones"]) ? $context["asignaciones"] : $this->getContext($context, "asignaciones")));
            foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
                if (($this->getAttribute($context["asignacion"], "idSolicitud", array()) == $this->getAttribute($context["solicitud"], "idSolicitud", array()))) {
                    // line 89
                    echo "                        ";
                    $context["esta"] = "si";
                    // line 90
                    echo "                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    ";
            if ((((isset($context["esta"]) ? $context["esta"] : $this->getContext($context, "esta")) == "no") && ($this->getAttribute($context["solicitud"], "CantidadSolicitada", array()) != 0))) {
                // line 92
                echo "                        ";
                $context["hay"] = "si";
                // line 93
                echo "                        <tr class=\"par\">
                            <td class=\"nomc\">";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "NombreCurso", array()), "html", null, true);
                echo "</td>
                            <td class=\"nomc\"><a target=\"_blank\" href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solicitud_monitoria_jefe_seccion_estudiante", array("idEstudiante" => $this->getAttribute($context["solicitud"], "idEstudiante", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "Nombre", array()), "html", null, true);
                echo "</a></td>
                            <td class=\"calificacion\">
                            ";
                // line 97
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["promedios"]) ? $context["promedios"] : $this->getContext($context, "promedios")));
                foreach ($context['_seq'] as $context["_key"] => $context["promedio"]) {
                    if (($this->getAttribute($context["promedio"], "idEstudiante", array()) == $this->getAttribute($context["solicitud"], "idEstudiante", array()))) {
                        // line 98
                        echo "                                 ";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["promedio"], "promedio", array()), 2), "html", null, true);
                        echo "
                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promedio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                            </td>    
                            <td class=\"cantidad\">";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "CantidadSolicitada", array()), "html", null, true);
                echo "</td>
                            <td><select class=\"cantidad\" name=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["solicitud"], "idSolicitud", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 103
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["solicitud"], "CantidadSolicitada", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t<option>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                </select>
\t\t\t\t\t\t\t</td>
                        </tr>
                    ";
            }
            // line 110
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['solicitud'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                 ";
        if (((isset($context["hay"]) ? $context["hay"] : $this->getContext($context, "hay")) == "no")) {
            // line 112
            echo "                    <tr class=\"par\" align=\"center\">
                        <td class=\"nomc\">No hay solicitudes para monitorías.</td>
                    </tr>
                ";
        }
        // line 116
        echo "                <tr class=\"final\" align=\"center\">
                    <td ><button type=\"submit\">Actualizar</button></td>
                </tr>
            </table>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaJefeSeccionBundle:jefeSeccion:asignaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 116,  334 => 112,  331 => 111,  325 => 110,  319 => 106,  310 => 104,  306 => 103,  302 => 102,  298 => 101,  295 => 100,  285 => 98,  280 => 97,  273 => 95,  269 => 94,  266 => 93,  263 => 92,  260 => 91,  253 => 90,  250 => 89,  244 => 88,  241 => 87,  236 => 86,  234 => 85,  219 => 72,  213 => 68,  210 => 67,  204 => 66,  194 => 62,  185 => 60,  181 => 59,  177 => 58,  173 => 57,  169 => 56,  166 => 55,  156 => 53,  151 => 52,  144 => 50,  140 => 49,  137 => 48,  134 => 47,  128 => 46,  123 => 45,  121 => 44,  107 => 33,  99 => 27,  91 => 24,  81 => 22,  76 => 21,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  39 => 3,  36 => 2,  11 => 1,);
    }
}
