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
        echo "\t\t
\t\t";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 8
            echo "\t        <div class=\"alert alert-success\">
\t            ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 10
                echo "\t                ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t        </div>
\t    ";
        }
        // line 14
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "cover", array()), "html", null, true);
        echo "\"><br>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo "</p><br>
\t\t\t\t<p>Aktorzy:<br>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "actors", array()), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<p>Cena: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "price", array()), "html", null, true);
        echo " zł</p><br>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Wypożycz</button><br>

\t\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 28
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_store_recenzja_add", array("slug" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "title", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Dodaj recenzję</a>
\t\t\t\t";
        }
        // line 30
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
        return array (  106 => 30,  100 => 28,  98 => 27,  92 => 24,  86 => 21,  82 => 20,  76 => 17,  71 => 14,  67 => 12,  58 => 10,  54 => 9,  51 => 8,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
