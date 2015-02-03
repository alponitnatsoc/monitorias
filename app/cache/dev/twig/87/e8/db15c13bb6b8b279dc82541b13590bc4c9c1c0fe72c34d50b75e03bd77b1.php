<?php

/* solicitudMonitoriaSeguridadBundle:Default:login.html.twig */
class __TwigTemplate_87e8db15c13bb6b8b279dc82541b13590bc4c9c1c0fe72c34d50b75e03bd77b1 extends Twig_Template
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
        echo "Iniciar Sección";
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
        // line 12
        echo "               </div>
               <div id=\"contenido\">
                    ";
        // line 14
        $this->displayBlock('contenido', $context, $blocks);
        // line 45
        echo "               </div>
          </div>
</div>
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                    ";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        echo " 
                        ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
                        ";
        }
        // line 18
        echo "                        
                        ";
        // line 19
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 20
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), 0, array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 22
        echo "                        <center>
                        <h5>*Utilice su username de la Javeriana y la contraseña para ingresar.</h5>
                        <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("solicitud_monitoria_seguridad_login_check");
        echo "\" method=\"post\">
                            <table class=\"mitablalogin\"> 
                                <tr>
                                    <td class=\"llogin\">Username:</td>
                                    <td>
                                        <input class=\"login\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"llogin\">Contraseña:</td>
                                    <td>
                                        <input class=\"login\" type=\"password\" id=\"password\" name=\"_password\" />
                                    </td>
                                </tr>
                                <tr class=\"final\" align=\"center\">
                                    <td ><button type=\"submit\">Login</button></td>
                                </tr>
                            </table>
                        </form>
                        </center>
                    ";
    }

    public function getTemplateName()
    {
        return "solicitudMonitoriaSeguridadBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 29,  114 => 24,  110 => 22,  104 => 20,  102 => 19,  99 => 18,  93 => 16,  91 => 15,  86 => 14,  79 => 10,  72 => 45,  70 => 14,  66 => 12,  64 => 10,  54 => 4,  48 => 3,  40 => 2,  11 => 1,);
    }
}
