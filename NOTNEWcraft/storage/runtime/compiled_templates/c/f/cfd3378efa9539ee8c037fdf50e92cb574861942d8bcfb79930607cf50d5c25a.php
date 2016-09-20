<?php

/* _includes/forms/checkboxGroup */
class __TwigTemplate_cfd3378efa9539ee8c037fdf50e92cb574861942d8bcfb79930607cf50d5c25a extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 6
        $context["values"] = ((array_key_exists("values", $context)) ? ((isset($context["values"]) ? $context["values"] : null)) : (array()));
        // line 7
        $context["name"] = (((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) ? (((isset($context["name"]) ? $context["name"] : null) . "[]")) : (null));
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 10
            $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
            // line 11
            $context["optionValue"] = (($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"]));
            // line 12
            echo "<div>
\t\t";
            // line 13
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxGroup", 13)->display(array("label" =>             // line 14
(isset($context["optionLabel"]) ? $context["optionLabel"] : null), "id" => ((($this->getAttribute(            // line 15
$context["loop"], "first", array()) && array_key_exists("id", $context))) ? ((isset($context["id"]) ? $context["id"] : null)) : (null)), "name" =>             // line 16
(isset($context["name"]) ? $context["name"] : null), "value" =>             // line 17
(isset($context["optionValue"]) ? $context["optionValue"] : null), "checked" => twig_in_filter(            // line 18
(isset($context["optionValue"]) ? $context["optionValue"] : null), (isset($context["values"]) ? $context["values"] : null)), "autofocus" => (((            // line 19
array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) && $this->getAttribute($context["loop"], "first", array())) &&  !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isMobileBrowser", array(0 => true), "method"))));
            // line 21
            echo "\t</div>";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxGroup";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  63 => 19,  62 => 18,  61 => 17,  60 => 16,  59 => 15,  58 => 14,  57 => 13,  54 => 12,  52 => 11,  50 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
