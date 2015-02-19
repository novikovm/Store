<?php

/* ProjectStoreBundle:Default:index.html.twig */
class __TwigTemplate_1e53e6308f06d1453d830568cac192a84f6f7047349679fb189735d465f55f92 extends Twig_Template
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
        echo "Filmy";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">
\t\t\t\t<select class=\"form-control\" onchange=\"location = this.options[this.selectedIndex].value;\">
\t\t\t\t\t<option value=\"0\">Gatunek</option>
\t\t\t\t\t<option value=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("project_store_homepage");
        echo "\">Wszystkie</option>
\t\t  \t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 12
            echo "\t\t\t\t  \t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_store_genre", array("name" => $this->getAttribute($context["genre"], "name", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t\t</select>
\t\t\t\t<br>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 21
            echo "\t\t\t\t\t<div class=\"col-xs-6 col-lg-3\">
\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_store_movie", array("slug" => $this->getAttribute($context["movie"], "title", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "cover", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<br><h5 color=\"black\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "ProjectStoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  94 => 24,  90 => 23,  86 => 22,  83 => 21,  79 => 20,  71 => 14,  60 => 12,  56 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
