<?php

/* ::base.html.twig */
class __TwigTemplate_6c112fe3886ec3cbc865f342a2d70d6d8f5dc14f63691cc13be0c0de183e8ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <!--Bootstrap core CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projectstore/js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  76 => 15,  71 => 6,  65 => 5,  59 => 17,  56 => 16,  54 => 15,  48 => 12,  43 => 10,  38 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
