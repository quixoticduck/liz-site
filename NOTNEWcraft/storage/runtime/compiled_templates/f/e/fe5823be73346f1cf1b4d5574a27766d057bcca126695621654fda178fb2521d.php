<?php

/* settings/_index */
class __TwigTemplate_fe5823be73346f1cf1b4d5574a27766d057bcca126695621654fda178fb2521d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/_index", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Settings");
        // line 4
        $_js = "css/settings.css";
        \Craft\craft()->templates->includeCssResource($_js);
        // line 5
        $_js = "js/settings.js";
        \Craft\craft()->templates->includeJsResource($_js);
        // line 7
        ob_start();
        // line 8
        echo "
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "settings", array(), "method"));
        foreach ($context['_seq'] as $context["category"] => $context["items"]) {
            // line 10
            echo "\t\t<h2>";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h2>

\t\t<ul class=\"icons\">
\t\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["items"]);
            foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                // line 14
                echo "\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $context["handle"])), "html", null, true);
                echo "\" data-icon=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</ul>

\t\t<hr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<h2>";
        // line 21
        echo twig_escape_filter($this->env, \Craft\Craft::t("Tools"), "html", null, true);
        echo "</h2>

\t<ul class=\"icons\">
\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tools"]) ? $context["tools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 25
            echo "\t\t\t<li><a id=\"tool-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getClassHandle", array(), "method"), "html", null, true);
            echo "\" data-icon=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getIconValue", array(), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tool"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
\t\t\t";
            // line 26
            $_js = (((((("new Craft.Tool(\"" . $this->getAttribute($context["tool"], "getClassHandle", array(), "method")) . "\", ") . $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute($context["tool"], "getOptionsHtml", array(), "method"))) . ", \"") . $this->getAttribute($context["tool"], "getButtonLabel", array(), "method")) . "\");");
            \Craft\craft()->templates->includeJs($_js);
            // line 27
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t</ul>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 1,  105 => 28,  99 => 27,  96 => 26,  87 => 25,  83 => 24,  77 => 21,  74 => 20,  65 => 16,  52 => 14,  48 => 13,  41 => 10,  37 => 9,  34 => 8,  32 => 7,  29 => 5,  26 => 4,  24 => 2,  11 => 1,);
    }
}
