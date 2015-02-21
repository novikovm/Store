<?php

/* ProjectStoreBundle:Default:add.html.twig */
class __TwigTemplate_aafffb8bb532acf278de21b390cd06453e3e3ddcbcdb5f1f9a1d274fa1862112 extends Twig_Template
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
            'form_row' => array($this, 'block_form_row'),
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
        echo "\tPrześlij Swoją Rezenzję
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<form class=\"form-horizontal\" method=\"POST\">
\t\t";
        // line 9
        $this->displayBlock('form_row', $context, $blocks);
        // line 24
        echo "\t</form>
";
    }

    // line 9
    public function block_form_row($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "\t\t\t\t\t";
            if (twig_in_filter("token", $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()))) {
                // line 12
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 13
$context["child"], "vars", array()), "name", array()) == "save")) {
                // line 14
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
\t\t\t\t        ";
                // line 15
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t    \t\t<div class=\"form-group\">
\t\t\t\t\t        ";
                // line 18
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
\t\t\t\t\t        ";
                // line 19
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . "form-control"))));
                echo "
\t\t\t\t\t    </div>
\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "ProjectStoreBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  100 => 22,  94 => 19,  90 => 18,  87 => 17,  82 => 15,  77 => 14,  75 => 13,  70 => 12,  67 => 11,  62 => 10,  59 => 9,  54 => 24,  52 => 9,  49 => 8,  46 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
