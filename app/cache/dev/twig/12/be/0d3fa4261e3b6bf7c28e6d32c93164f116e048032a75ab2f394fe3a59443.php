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
      <div class=\"container\">
        <div class=\"navbar-header\">
          <br><a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("project_store_homepage");
        echo "\">Filmy</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t<ul class=\"nav navbar-nav\">
\t\t<br><li><p><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('sylius_cart')->getCurrentCart(), "totalItems", array()), "html", null, true);
        echo "</strong> items
\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("sylius_cart_summary");
        echo "\" class=\"btn btn-primary\">Koszyk</a>
\t\t\t\t</p></li>
\t\t</ul>
          <ul class=\"nav navbar-nav navbar-right\">
          \t";
        // line 19
        $this->displayBlock('navbar', $context, $blocks);
        // line 35
        echo "\t\t\t\t</ul>
            \t
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
\t
\t

\t<div class=\"container\">

\t\t<h3>";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        echo "</h3>
\t\t
\t\t";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "\t
\t      
\t</div>

\t";
        // line 53
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "

";
    }

    // line 19
    public function block_navbar($context, array $blocks = array())
    {
        // line 20
        echo "\t\t          \t
\t\t\t\t\t<br>";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 22
            echo "\t\t\t<div class=\"row\">
\t\t\t<p>
\t\t\tWitaj, <strong>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
\t\t\t<a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t</p>
\t\t\t</div>
\t\t";
        } else {
            // line 29
            echo "\t\t\t<p>
\t\t\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Zaloguj</a>
\t\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-primary\">Zarejestruj się</a>
\t\t\t</p>
\t\t";
        }
        // line 34
        echo "\t\t\t\t";
    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        echo "Filmy";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
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
        return array (  157 => 49,  154 => 48,  148 => 46,  144 => 34,  138 => 31,  134 => 30,  131 => 29,  124 => 25,  120 => 24,  116 => 22,  114 => 21,  111 => 20,  108 => 19,  101 => 53,  95 => 49,  93 => 48,  88 => 46,  75 => 35,  73 => 19,  66 => 15,  62 => 14,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
