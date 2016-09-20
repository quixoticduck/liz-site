<?php

/* _includes/forms/text */
class __TwigTemplate_69d7ab7091bc5f9b6b4bd5a47bd2ab6acca4441bbb0e280a261ec680ccf426b9 extends Craft\BaseTemplate
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
        $context["type"] = ((array_key_exists("type", $context)) ? ((isset($context["type"]) ? $context["type"] : null)) : ("text"));
        // line 3
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((        // line 5
array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : null))) ? ((isset($context["class"]) ? $context["class"] : null)) : (null)), 2 => (((        // line 6
array_key_exists("placeholder", $context) && (isset($context["placeholder"]) ? $context["placeholder"] : null))) ? ("nicetext") : (null)), 3 => (((        // line 7
array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : null) == "password"))) ? ("password") : (null)), 4 => (((        // line 8
array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) ? ("disabled") : (null)), 5 => (((        // line 9
array_key_exists("size", $context) && (isset($context["size"]) ? $context["size"] : null))) ? (null) : ("fullwidth")))), " ");
        // line 12
        if ((((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) ? $context["showCharsLeft"] : null)) && array_key_exists("maxlength", $context)) && (isset($context["maxlength"]) ? $context["maxlength"] : null))) {
            // line 13
            $context["style"] = (((("padding-" . ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method") == "ltr")) ? ("right") : ("left"))) . ": ") . ((7.2 * twig_length_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : null))) + 14)) . "px;");
        }
        // line 16
        if (((isset($context["type"]) ? $context["type"] : null) == "password")) {
            echo "<div class=\"passwordwrapper\">";
        }
        // line 17
        echo "<input class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\"";
        // line 18
        if (array_key_exists("style", $context)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : null), "html", null, true);
            echo "\"";
        }
        // line 19
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"";
        }
        // line 20
        if (array_key_exists("size", $context)) {
            echo " size=\"";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"";
        }
        // line 21
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
        }
        // line 22
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        // line 23
        if ((array_key_exists("maxlength", $context) && (isset($context["maxlength"]) ? $context["maxlength"] : null))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["maxlength"]) ? $context["maxlength"] : null), "html", null, true);
            echo "\"";
        }
        // line 24
        if ((array_key_exists("showCharsLeft", $context) && (isset($context["showCharsLeft"]) ? $context["showCharsLeft"] : null))) {
            echo " data-show-chars-left";
        }
        // line 25
        if (((array_key_exists("autofocus", $context) && (isset($context["autofocus"]) ? $context["autofocus"] : null)) &&  !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isMobileBrowser", array(0 => true), "method"))) {
            echo " autofocus";
        }
        // line 26
        if (( !array_key_exists("autocomplete", $context) ||  !(isset($context["autocomplete"]) ? $context["autocomplete"] : null))) {
            echo " autocomplete=\"off\"";
        }
        // line 27
        if ((array_key_exists("disabled", $context) && (isset($context["disabled"]) ? $context["disabled"] : null))) {
            echo " disabled ";
        }
        // line 28
        if ((array_key_exists("readonly", $context) && (isset($context["readonly"]) ? $context["readonly"] : null))) {
            echo " readonly ";
        }
        // line 29
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : null), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 30
        if (((isset($context["type"]) ? $context["type"] : null) == "password")) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "_includes/forms/text";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  73 => 23,  67 => 22,  61 => 21,  55 => 20,  49 => 19,  43 => 18,  37 => 17,  33 => 16,  30 => 13,  28 => 12,  26 => 9,  25 => 8,  24 => 7,  23 => 6,  22 => 5,  21 => 3,  19 => 1,);
    }
}
