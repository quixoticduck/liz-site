<?php

/* _includes/forms/time */
class __TwigTemplate_903da2267a4b31c49fbd43ddd3f68f0c1ae841acb5cd2d30cf0ac8c588aaad15 extends Craft\BaseTemplate
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
        if ( !array_key_exists("value", $context)) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : null) . "-time");
        // line 7
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 8
            $context["name"] = ((isset($context["name"]) ? $context["name"] : null) . "[time]");
        }
        // line 11
        $_js = (("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "useCompressedJs", array())) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js);
        // line 13
        if ( !array_key_exists("value", $context)) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->loadTemplate("_includes/forms/text", "_includes/forms/time", 18)->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => ((((isset($context["value"]) ? $context["value"] : null) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "any", true, true))) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "localeTime", array(), "method")) : ((isset($context["value"]) ? $context["value"] : null))))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleData", array(), "method");
        // line 23
        ob_start();
        // line 24
        echo "
\tvar \$timePicker = \$('#";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "timepickerJsFormat", array()), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getOrientation", array(), "method"), "html", null, true);
        echo "',
\t\t";
        // line 30
        if (array_key_exists("minuteIncrement", $context)) {
            echo "step: '";
            echo twig_escape_filter($this->env, (isset($context["minuteIncrement"]) ? $context["minuteIncrement"] : null), "html", null, true);
            echo "',";
        }
        // line 31
        echo "\t\tlang: {
\t\t\tam: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getPMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["localeData"]) ? $context["localeData"] : null), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        $_js = (isset($context["js"]) ? $context["js"] : null);
        \Craft\craft()->templates->includeJs($_js);
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  72 => 31,  66 => 30,  62 => 29,  57 => 27,  52 => 25,  49 => 24,  47 => 23,  45 => 21,  43 => 19,  41 => 18,  39 => 17,  36 => 14,  34 => 13,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }
}
