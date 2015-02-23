<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ccc883d1f9895d68f1748c929023d19fc0886a0d260fe278a0c8549b67e82884 extends Twig_Template
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
        echo "Zarejestruj się";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        echo "Zarejestruj się";
    }

    // line 8
    public function block_navbar($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 10
            echo "          <div class=\"row\">
\t\t\t<p>
\t\t\tWitaj, <strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</strong>
\t\t\t<a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">Wyloguj</a>
\t\t\t</p>
\t\t\t</div>
          ";
        } else {
            // line 17
            echo "            <p>
              <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-primary\">Zaloguj</a>
            </p>
          ";
        }
    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"container\">
<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary \"/>
    </div>
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  95 => 26,  89 => 25,  86 => 24,  83 => 23,  75 => 18,  72 => 17,  65 => 13,  61 => 12,  57 => 10,  54 => 9,  51 => 8,  45 => 6,  39 => 5,  11 => 1,);
    }
}
