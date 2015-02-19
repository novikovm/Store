<?php

/* ProjectStoreBundle::layout.html.twig */
class __TwigTemplate_12be0d3fa4261e3b6bf7c28e6d32c93164f116e048032a75ab2f394fe3a59443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">

    <title>Filmy</title>

\t<!--Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<!-- Custom styles for this template -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

  </head>

  <body>

\t<div class=\"container\">
\t\t<div class=\"header\">
\t\t\t";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 23
        echo "\t\t</div>

\t\t";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "\t
\t      
\t</div>

  </body>
</html>
";
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        // line 22
        echo "\t\t\t";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
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
        return array (  80 => 26,  77 => 25,  73 => 22,  70 => 21,  60 => 26,  58 => 25,  54 => 23,  52 => 21,  41 => 13,  36 => 11,  31 => 9,  21 => 1,);
    }
}
