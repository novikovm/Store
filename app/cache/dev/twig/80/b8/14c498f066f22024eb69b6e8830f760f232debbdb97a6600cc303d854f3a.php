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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "title", array()), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "cover", array()), "html", null, true);
        echo "\"><br>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p><br>
\t\t\t\t<p>Aktorzy:<br>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "actors", array()), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<p>Cena: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "price", array()), "html", null, true);
        echo " zł</p><br>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Wypożycz</button>

\t\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 19
            echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Dodaj recenzję</button>
\t\t\t\t";
        }
        // line 21
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
        return array (  78 => 21,  74 => 19,  72 => 18,  66 => 15,  60 => 12,  56 => 11,  50 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
