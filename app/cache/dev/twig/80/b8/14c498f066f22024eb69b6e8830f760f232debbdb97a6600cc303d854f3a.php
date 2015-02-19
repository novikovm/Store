<?php

/* ProjectStoreBundle:Default:movie.html.twig */
class __TwigTemplate_80b814c498f066f22024eb69b6e8830f760f232debbdb97a6600cc303d854f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("ProjectStoreBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectStoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "title", array()), "html", null, true);
        echo "</h2>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "cover", array()), "html", null, true);
        echo "\"><br>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p><br>
\t\t\t\t<p>Aktorzy:<br>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "actors", array()), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<p>Cena: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "price", array()), "html", null, true);
        echo " zł</p><br>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Wypożycz</button>

\t\t\t\t";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 21
            echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Dodaj recenzję</button>
\t\t\t\t";
        }
        // line 23
        echo "
\t\t\t</div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "ProjectStoreBundle:Default:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 21,  76 => 20,  70 => 17,  64 => 14,  60 => 13,  54 => 10,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
