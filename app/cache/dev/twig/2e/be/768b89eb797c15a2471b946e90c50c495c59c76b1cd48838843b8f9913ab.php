<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2ebe768b89eb797c15a2471b946e90c50c495c59c76b1cd48838843b8f9913ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Zaloguj się";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        echo "Zaloguj";
    }

    // line 9
    public function block_navbar($context, array $blocks = array())
    {
        // line 10
        echo "\t<br>";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 11
            echo "\t\t\t<div class=\"row\">
\t\t\t<p>
\t\t\tWitaj, <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
\t\t\t<a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t</p>
\t\t\t</div>
\t\t";
        } else {
            // line 18
            echo "\t\t\t<p>
\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-primary\">Zarejestruj się</a>
\t\t\t</p>
\t\t";
        }
    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 25
        echo "\t<div class=\"container\">

\t";
        // line 27
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "\t    <div color = \"red\">Error: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 30
        echo "
\t<form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t    
\t\t<label for=\"username\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

\t    <label for=\"password\" >";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/><br>

\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t    <label for=\"remember_me\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>

\t    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Zaloguj się\" class=\"btn btn-lg btn-primary\"/>
\t</form>
\t<br><p>
\t\tJeśli nie masz konta - <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">Zarejestruj się</a>
\t</p>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  122 => 40,  115 => 36,  110 => 34,  106 => 33,  101 => 31,  98 => 30,  92 => 28,  90 => 27,  86 => 25,  83 => 24,  75 => 19,  72 => 18,  65 => 14,  61 => 13,  57 => 11,  54 => 10,  51 => 9,  45 => 7,  39 => 5,  11 => 1,);
    }
}
