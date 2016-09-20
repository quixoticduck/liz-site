<?php

/* dashboard */
class __TwigTemplate_3ca116741f03936340573f6ab89758ba8a1f96fb9c2653c2d50501f912d9329d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "dashboard", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Dashboard");
        // line 3
        $_js = "css/dashboard.css";
        \Craft\craft()->templates->includeCssResource($_js);
        // line 6
        ob_start();
        // line 7
        echo "\t<a class=\"btn settings icon\" href=\"";
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("dashboard/settings"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
        echo "\"></a>
";
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "\t<div class=\"grid\">
\t\t";
        // line 13
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "deprecator", array()), "getTotalLogs", array(), "method"))) {
            // line 14
            echo "\t\t\t<div class=\"item\" data-colspan=\"4\">
\t\t\t\t<div class=\"pane\">
\t\t\t\t\t<p id=\"deprecationnotice\" data-icon=\"alert\">";
            // line 16
            echo \Craft\Craft::t("New deprecation errors have been logged. Please take a minute to <a class=\"go\" href=\"{url}\">review them</a>", array("url" => \Craft\UrlHelper::getUrl("utils/deprecationerrors")));
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "
\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "dashboard", array()), "getUserWidgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 22
            echo "\t\t\t";
            $context["widgetType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "dashboard", array()), "populateWidgetType", array(0 => $context["widget"]), "method");
            // line 23
            echo "\t\t\t";
            if ((isset($context["widgetType"]) ? $context["widgetType"] : null)) {
                // line 24
                echo "\t\t\t\t";
                $context["body"] = $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "getBodyHtml", array(), "method");
                // line 25
                echo "\t\t\t\t";
                if ( !((isset($context["body"]) ? $context["body"] : null) === false)) {
                    // line 26
                    echo "\t\t\t\t\t<div class=\"item\" data-colspan=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "getColspan", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<div id=\"widget";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", array()), "html", null, true);
                    echo "\" class=\"pane widget ";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "classHandle", array())), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["widget"], "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<div class=\"spinner body-loading\"></div>
\t\t\t\t\t\t\t<h2>";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widgetType"]) ? $context["widgetType"] : null), "title", array()), "html", null, true);
                    echo "</h2>
\t\t\t\t\t\t\t<div class=\"body\">";
                    // line 30
                    echo (isset($context["body"]) ? $context["body"] : null);
                    echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t";
            }
            // line 35
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  110 => 35,  107 => 34,  100 => 30,  96 => 29,  87 => 27,  82 => 26,  79 => 25,  76 => 24,  73 => 23,  70 => 22,  66 => 21,  63 => 20,  56 => 16,  52 => 14,  50 => 13,  47 => 12,  44 => 11,  40 => 1,  32 => 7,  30 => 6,  27 => 3,  25 => 2,  11 => 1,);
    }
}
