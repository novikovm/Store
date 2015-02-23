<?php

/* SyliusCartBundle:Cart:summary.html.twig */
class __TwigTemplate_25488c937214c21fef30d2350e8541da146858a1fa77c951e09b1088c79adca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'flashes' => array($this, 'block_flashes'),
            'main' => array($this, 'block_main'),
            'slideshow_full' => array($this, 'block_slideshow_full'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta charset=\"UTF-8\">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css\" type=\"text/css\" />
    </head>
    <body>
        <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js\"></script>
        
        
        <div class=\"container\">
            ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
            ";
        // line 27
        $this->displayBlock('flashes', $context, $blocks);
        // line 37
        echo "
            ";
        // line 38
        $this->displayBlock('main', $context, $blocks);
        // line 148
        echo "
            ";
        // line 150
        echo "            <div class=\"modal fade\" id=\"confirmation-modal\" role=\"dialog\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.title"), "html", null, true);
        echo "</h4>
                        </div>

                        <div class=\"modal-body\">
                            ";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.confirmation.message"), "html", null, true);
        echo "
                        </div>

                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\"><i class=\"glyphicon glyphicon-remove\"></i> ";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
        echo "</button>
                            <a class=\"btn btn-danger\" id=\"confirmation-modal-confirm\">
                                <i class=\"glyphicon glyphicon-trash\"></i><span>";
        // line 165
        echo twig_escape_filter($this->env, ((array_key_exists("message", $context)) ? ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) : ($this->env->getExtension('translator')->trans("sylius.delete"))), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 173
        if ($this->env->getExtension('security')->isGranted("ROLE_SYLIUS_ADMIN")) {
            // line 174
            echo "            ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("cmf_create.jsloader.controller:includeJSFilesAction", array("_locale" => $this->getAttribute($this->getAttribute(            // line 176
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "editor" => "hallo")), array());
            // line 178
            echo "        ";
        }
        // line 179
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                
            ";
    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        // line 24
        echo "                
            ";
    }

    // line 27
    public function block_flashes($context, array $blocks = array())
    {
        // line 28
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "fos_user_success", 3 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 29
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 30
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((($context["type"] == "fos_user_success")) ? ("success") : (((($context["type"] == "error")) ? ("danger") : (((($context["type"] == "notice")) ? ("warning") : ($context["type"])))))), "html", null, true);
                echo "\">
                            <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flash"]), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            ";
    }

    // line 38
    public function block_main($context, array $blocks = array())
    {
        // line 39
        echo "                <hr>
                ";
        // line 40
        $this->displayBlock('slideshow_full', $context, $blocks);
        // line 41
        echo "                <div class=\"row\">
                    <div class=\"col-md-3\" id=\"sidebar\">
                        
                    </div>
                    <div class=\"col-md-9\">
                        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "                    </div>
                </div>
                <hr>
            ";
    }

    // line 40
    public function block_slideshow_full($context, array $blocks = array())
    {
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "                            <div class=\"page-header\">
                            <h1>";
        // line 48
        echo $this->env->getExtension('translator')->trans("sylius.cart.summary_header");
        echo "</h1>
                            </div>

                            ";
        // line 51
        if ( !$this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "empty", array())) {
            // line 52
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                                <form action=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("sylius_cart_save");
            echo "\" method=\"post\" novalidate>
                                <table class=\"table\">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.product"), "html", null, true);
            echo "</th>
                                            <th>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.quantity"), "html", null, true);
            echo "</th>
                                            <th></th>
                                            <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.unit_price"), "html", null, true);
            echo "</th>
                                            <th style=\"text-align: right;\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.total"), "html", null, true);
            echo "</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "items", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 68
                echo "                                            ";
                $context["product"] = $this->getAttribute($this->getAttribute($context["item"], "variant", array()), "product", array());
                // line 69
                echo "                                            <tr>
                                                <td class=\"col-md-1\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    ";
                // line 72
                echo twig_include($this->env, $context, "SyliusWebBundle:Frontend/Product:_variant.html.twig", array("variant" => $this->getAttribute($context["item"], "variant", array())));
                echo "
                                                </td>
                                                <td class=\"col-md-2\">
                                                    ";
                // line 75
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "items", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "quantity", array()), 'row', array("label" => false));
                echo "
                                                </td>
                                                <td class=\"col-md-1\">
                                                    <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_cart_item_remove", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></a>
                                                </td>
                                                <td class=\"col-md-1\">
                                                    ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "unitPrice", array()), "html", null, true);
                echo "
                                                </td>
                                                <td class=\"col-md-1\" style=\"text-align: right\">
                                                    ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "total", array()), "html", null, true);
                echo "
                                                </td>
                                            </tr>
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                                    </tbody>
                                    <tfoot>
                                        ";
            // line 90
            if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "adjustmentsTotal", array(0 => (isset($context["promotionAdjustment"]) ? $context["promotionAdjustment"] : $this->getContext($context, "promotionAdjustment"))), "method")) {
                // line 91
                echo "                                        <tr>
                                            <td colspan=\"6\" style=\"text-align: right;\">
                                                <strong>";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.promotion_total"), "html", null, true);
                echo "</strong>: -";
                echo twig_escape_filter($this->env, ( -1 * $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "adjustmentsTotal", array(0 => (isset($context["promotionAdjustment"]) ? $context["promotionAdjustment"] : $this->getContext($context, "promotionAdjustment"))), "method")), "html", null, true);
                echo "
                                            </td>
                                        </tr>
                                        ";
            }
            // line 97
            echo "                                        <tr>
                                            <td colspan=\"6\" style=\"text-align: right;\">
                                                <strong>";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.shipping_total"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "adjustmentsTotal", array(0 => (isset($context["shippingAdjustment"]) ? $context["shippingAdjustment"] : $this->getContext($context, "shippingAdjustment"))), "method"), "html", null, true);
            echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"4\">
                                                <p><strong>";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.taxes"), "html", null, true);
            echo "</strong></p>
                                                <ul>
                                                ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "adjustments", array(0 => $context["taxAdjustment"]), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["taxAdjustment"]) {
                // line 107
                echo "                                                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["taxAdjustment"], "description", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["taxAdjustment"], "amount", array()), "html", null, true);
                echo " </li>
                                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 109
                echo "                                                    <li><span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.no_taxes"), "html", null, true);
                echo "</span></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxAdjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                                </ul>
                                            </td>
                                            <td colspan=\"2\" style=\"text-align: right;\">
                                                <strong>";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.order.tax_total"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "adjustmentsTotal", array(0 => (isset($context["taxAdjustment"]) ? $context["taxAdjustment"] : $this->getContext($context, "taxAdjustment"))), "method"), "html", null, true);
            echo "
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=\"6\" style=\"text-align: right;\">
                                                <strong>";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.grand_total"), "html", null, true);
            echo "</strong>: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "total", array()), "html", null, true);
            echo "
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div id=\"sylius-cart-coupons\" class=\"well well-sm\" data-prototype=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotionCoupons", array()), "vars", array()), "prototype", array()), 'row'));
            echo "\">
                                    <div id=\"sylius-cart-coupons-collection\">
                                        ";
            // line 127
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "promotionCoupons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["couponField"]) {
                // line 128
                echo "                                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["couponField"], 'row', array("label_attr" => array("class" => "col-lg-12")));
                echo "
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['couponField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                                    </div>
                                </div>

                                ";
            // line 133
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                                <div class=\"well\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-lg\"><i class=\"icon-save\"></i> ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.save"), "html", null, true);
            echo "</button>
                                    <div class=\"pull-right\">
                                    <a href=\"";
            // line 137
            echo $this->env->getExtension('routing')->getPath("sylius_checkout_start");
            echo "\" class=\"btn btn-success btn-lg\"><i class=\"icon-shopping-cart\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.checkout"), "html", null, true);
            echo "</a>
                                    <a href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("sylius_cart_clear");
            echo "\" class=\"btn btn-danger btn-lg\"><i class=\"icon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cart.summary.clear"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                                </form>
                            ";
        }
        // line 143
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "SyliusCartBundle:Cart:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 143,  444 => 138,  438 => 137,  433 => 135,  428 => 133,  423 => 130,  414 => 128,  410 => 127,  405 => 125,  394 => 119,  384 => 114,  379 => 111,  370 => 109,  360 => 107,  355 => 106,  350 => 104,  340 => 99,  336 => 97,  327 => 93,  323 => 91,  321 => 90,  317 => 88,  299 => 84,  293 => 81,  287 => 78,  281 => 75,  275 => 72,  270 => 70,  267 => 69,  264 => 68,  247 => 67,  240 => 63,  236 => 62,  231 => 60,  227 => 59,  219 => 54,  213 => 52,  211 => 51,  205 => 48,  202 => 47,  199 => 46,  194 => 40,  187 => 144,  185 => 46,  178 => 41,  176 => 40,  173 => 39,  170 => 38,  166 => 36,  160 => 35,  151 => 32,  145 => 30,  140 => 29,  135 => 28,  132 => 27,  127 => 24,  124 => 23,  119 => 7,  116 => 6,  111 => 179,  108 => 178,  106 => 176,  104 => 174,  102 => 173,  91 => 165,  86 => 163,  79 => 159,  72 => 155,  65 => 150,  62 => 148,  60 => 38,  57 => 37,  55 => 27,  52 => 26,  50 => 23,  34 => 9,  32 => 6,  25 => 1,);
    }
}
