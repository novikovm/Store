<?php

/* ProjectStoreBundle:Default:index.html.twig */
class __TwigTemplate_1e53e6308f06d1453d830568cac192a84f6f7047349679fb189735d465f55f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">

    <title>Movies</title>

\t
\t<!--<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/css/style.css"), "html", null, true);
        echo "\">
\t<!--<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/kasiaepopeja/js/jquery-2.1.3.js"), "html", null, true);
        echo "\"></script>
    
\t<!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
      <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

  </head>

  <body>

<div class=\"container\">
\t<div class=\"header\">
\t\t<h2>Movies</h2>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 31
            echo "\t\t\t\t<div class=\"col-xs-6 col-lg-3\">
\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_store_movies", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/images/1.jpg"), "html", null, true);
            echo "\">
\t\t\t\t<br><h5>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", array()), "html", null, true);
            echo "</h3></a>
\t\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t</div>\t
      
</div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
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
        return array (  97 => 43,  89 => 37,  80 => 34,  76 => 33,  72 => 32,  69 => 31,  65 => 30,  51 => 19,  45 => 16,  39 => 13,  33 => 10,  29 => 9,  19 => 1,);
    }
}
