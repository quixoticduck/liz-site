<?php

/* _includes/forms/checkboxSelect */
class __TwigTemplate_07779b0363a9805e390e1511b979c86f059c95f338b0da34487276ea47052759 extends Craft\BaseTemplate
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
        $context["allLabel"] = ((array_key_exists("allLabel", $context)) ? ((isset($context["allLabel"]) ? $context["allLabel"] : null)) : (\Craft\Craft::t("All")));
        // line 2
        $context["allValue"] = ((array_key_exists("allValue", $context)) ? ((isset($context["allValue"]) ? $context["allValue"] : null)) : ("*"));
        // line 3
        $context["options"] = ((array_key_exists("options", $context)) ? ((isset($context["options"]) ? $context["options"] : null)) : (array()));
        // line 4
        $context["values"] = ((array_key_exists("values", $context)) ? ((isset($context["values"]) ? $context["values"] : null)) : (array()));
        // line 5
        $context["allChecked"] = (twig_test_empty((isset($context["values"]) ? $context["values"] : null)) || ((isset($context["values"]) ? $context["values"] : null) == (isset($context["allValue"]) ? $context["allValue"] : null)));
        // line 6
        echo "
<div class=\"checkbox-select";
        // line 7
        if (array_key_exists("class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        }
        echo "\">
\t<div>
\t\t";
        // line 9
        $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxSelect", 9)->display(array("id" => ((        // line 10
array_key_exists("id", $context)) ? ((isset($context["id"]) ? $context["id"] : null)) : (null)), "class" => "all", "label" => (("<b>" . ((        // line 12
array_key_exists("allLabel", $context)) ? ((isset($context["allLabel"]) ? $context["allLabel"] : null)) : (\Craft\Craft::t("All")))) . "</b>"), "name" => ((        // line 13
array_key_exists("name", $context)) ? ((isset($context["name"]) ? $context["name"] : null)) : (null)), "value" =>         // line 14
(isset($context["allValue"]) ? $context["allValue"] : null), "checked" =>         // line 15
(isset($context["allChecked"]) ? $context["allChecked"] : null), "autofocus" => ((        // line 16
array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) &&  !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isMobileBrowser", array(0 => true), "method"))));
        // line 18
        echo "\t</div>";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 20
            $context["optionLabel"] = (($this->getAttribute($context["option"], "label", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "label", array())) : ($context["option"]));
            // line 21
            $context["optionValue"] = (($this->getAttribute($context["option"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["option"], "value", array())) : ($context["key"]));
            // line 22
            if (((isset($context["optionValue"]) ? $context["optionValue"] : null) != (isset($context["allValue"]) ? $context["allValue"] : null))) {
                // line 23
                echo "\t\t\t<div>
\t\t\t\t";
                // line 24
                $this->loadTemplate("_includes/forms/checkbox", "_includes/forms/checkboxSelect", 24)->display(array("label" =>                 // line 25
(isset($context["optionLabel"]) ? $context["optionLabel"] : null), "name" => ((                // line 26
array_key_exists("name", $context)) ? (((isset($context["name"]) ? $context["name"] : null) . "[]")) : (null)), "value" =>                 // line 27
(isset($context["optionValue"]) ? $context["optionValue"] : null), "checked" => (                // line 28
(isset($context["allChecked"]) ? $context["allChecked"] : null) || twig_in_filter((isset($context["optionValue"]) ? $context["optionValue"] : null), (isset($context["values"]) ? $context["values"] : null))), "disabled" =>                 // line 29
(isset($context["allChecked"]) ? $context["allChecked"] : null)));
                // line 31
                echo "\t\t\t</div>
\t\t";
            }
            // line 33
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkboxSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  74 => 33,  70 => 31,  68 => 29,  67 => 28,  66 => 27,  65 => 26,  64 => 25,  63 => 24,  60 => 23,  58 => 22,  56 => 21,  54 => 20,  50 => 19,  48 => 18,  46 => 16,  45 => 15,  44 => 14,  43 => 13,  42 => 12,  41 => 10,  40 => 9,  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
