<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_8a3c0c2fc9c16f86537bdad77dc43a6cf3313ce116287f76d57e595317138cf6 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Number/settings", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Min Value"), "id" => "min", "name" => "min", "value" => $this->getAttribute(        // line 7
(isset($context["settings"]) ? $context["settings"] : null), "min", array()), "size" => 5, "errors" => $this->getAttribute(        // line 9
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "min"), "method")));
        // line 10
        echo "

";
        // line 12
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Value"), "id" => "max", "name" => "max", "value" => $this->getAttribute(        // line 16
(isset($context["settings"]) ? $context["settings"] : null), "max", array()), "size" => 5, "errors" => $this->getAttribute(        // line 18
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "max"), "method")));
        // line 19
        echo "

";
        // line 21
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Decimal Points"), "id" => "decimals", "name" => "decimals", "value" => $this->getAttribute(        // line 25
(isset($context["settings"]) ? $context["settings"] : null), "decimals", array()), "size" => 1, "errors" => $this->getAttribute(        // line 27
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "decimals"), "method")));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Number/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 28,  42 => 27,  41 => 25,  40 => 21,  36 => 19,  34 => 18,  33 => 16,  32 => 12,  28 => 10,  26 => 9,  25 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
