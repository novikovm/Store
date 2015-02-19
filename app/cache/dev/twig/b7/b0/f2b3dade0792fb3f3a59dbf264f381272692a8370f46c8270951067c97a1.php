<?php

/* ProjectStoreBundle::main.html.twig */
class __TwigTemplate_b7b0f2b3dade0792fb3f3a59dbf264f381272692a8370f46c8270951067c97a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Filmy</a>
        </div>
        ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "      </div>
    </nav>

";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 18
        echo "        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <form class=\"navbar-form navbar-right\">
            <div class=\"form-group\">
              <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\"/><br>
            </div>
            <div class=\"form-group\">
              <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\"/><br>
            </div>
            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary\"/>
          </form>
        </div><!--/.navbar-collapse -->
        ";
    }

    public function getTemplateName()
    {
        return "ProjectStoreBundle::main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  71 => 21,  66 => 18,  63 => 17,  56 => 30,  54 => 17,  40 => 5,  37 => 4,  11 => 2,);
    }
}
