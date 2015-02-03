<?php

/* solicitudMonitoriaEstudianteBundle::mainEstudiante.html.twig */
class __TwigTemplate_b79bd97b987ab65cafc4dfb332cf3bd91a734eed9a05b8f028003a9f213b83f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "<link href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo " \" type=\"text\\css\" rel=\"stylesheet\" />";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Estudiante";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo "     
     <div id=\"pagina\" class=\"cfix\">
          <div id=\"top\">
          </div>
          <div id=\"bottom\">
               <div id=\"menu\">
                    ";
        // line 10
        $this->displayBlock('menu', $context, $blocks);
        // line 16
        echo "               </div>
               <div id=\"contenido\">
                    ";
        // line 18
        $this->displayBlock('contenido', $context, $blocks);
        // line 21
        echo "               </div>
          </div>
</div>
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                         <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("solicitud_monitoria_estudiante_homepage");
        echo "\"><item> Inicio</item></a>
                         <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("solicitud_monitoria_estudiante_informacion");
        echo "\"><item> Información Personal</item></a>
                         <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("solicitud_monitoria_estudiante_solicitar");
        echo "\"><item> Solicitar Monitorías</item></a>
                         <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getUrl("solicitud_monitoria_seguridad_logout");
        echo "\"><item> Salir</item></a>
                    ";
    }

    // line 18
    public function block_contenido($context, array $blocks = array())
    {
        echo " 
                         Mi contenido 
                    ";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaEstudianteBundle::mainEstudiante.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  96 => 14,  92 => 13,  88 => 12,  84 => 11,  79 => 10,  72 => 21,  70 => 18,  66 => 16,  64 => 10,  54 => 4,  48 => 3,  40 => 2,  11 => 1,);
    }
}
