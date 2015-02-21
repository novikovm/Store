<?php

/* ProjectStoreBundle::layout.html.twig */
class __TwigTemplate_12be0d3fa4261e3b6bf7c28e6d32c93164f116e048032a75ab2f394fe3a59443 extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Filmy";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t

\t<nav class=\"navbar navbar-default navbar-static-top\">
\t      <div class=\"container\">
\t        <div class=\"navbar-header\"><h4>
         \t<a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("project_store_homepage");
        echo "\">Filmy</h4></a>
        </div>
\t        <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t          <form class=\"navbar-form navbar-right\">
\t          \t";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 31
        echo "\t          </form>
\t        </div><!--/.navbar-collapse -->
\t      </div>
\t    </nav>

\t<div class=\"container\">

\t\t<h3>";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        echo "</h3>

\t\t";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "\t
\t      
\t</div>

\t";
        // line 45
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "

";
    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        // line 16
        echo "\t\t          \t";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 17
            echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJesteś zalogowany jako ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ". 
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tNie jesteś zalogowany - 
\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Zaloguj</a>
\t\t\t\t\t\t\tJeśli nie masz konta - <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-primary\">Zarejestruj się</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        echo "Filmy";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "ProjectStoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  139 => 40,  133 => 38,  129 => 30,  123 => 27,  119 => 26,  115 => 24,  108 => 20,  104 => 19,  100 => 17,  97 => 16,  94 => 15,  87 => 45,  81 => 41,  79 => 40,  74 => 38,  65 => 31,  63 => 15,  56 => 11,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
