<?php

/* _components/fieldtypes/elementfieldsettings */
class __TwigTemplate_19dda54dcbf0aa7056ae8d38dfd899778e5178c29a155e547ae65cb6e082a49b extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/elementfieldsettings", 1);
        // line 2
        echo "
";
        // line 3
        if ((isset($context["sources"]) ? $context["sources"] : null)) {
            // line 4
            echo "\t";
            if ((isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) {
                // line 5
                echo "\t\t";
                echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env,                 // line 7
(isset($context["type"]) ? $context["type"] : null)))), "id" => "sources", "name" => "sources", "options" =>                 // line 10
(isset($context["sources"]) ? $context["sources"] : null), "values" => $this->getAttribute(                // line 11
(isset($context["settings"]) ? $context["settings"] : null), "sources", array())));
                // line 12
                echo "
\t";
            } else {
                // line 14
                echo "\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Source"), "instructions" => \Craft\Craft::t("Which source do you want to select {type} from?", array("type" => twig_lower_filter($this->env,                 // line 16
(isset($context["type"]) ? $context["type"] : null)))), "id" => "source", "name" => "source", "options" =>                 // line 19
(isset($context["sources"]) ? $context["sources"] : null), "value" => $this->getAttribute(                // line 20
(isset($context["settings"]) ? $context["settings"] : null), "source", array())));
                // line 21
                echo "
\t";
            }
        } else {
            // line 24
            echo "\t";
            echo $context["forms"]->getfield(array("label" => ((            // line 25
(isset($context["allowMultipleSources"]) ? $context["allowMultipleSources"] : null)) ? (\Craft\Craft::t("Sources")) : (\Craft\Craft::t("Source")))), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 26
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["targetLocaleField"]) ? $context["targetLocaleField"] : null), "html", null, true);
        echo "

";
        // line 31
        if ((isset($context["allowLimit"]) ? $context["allowLimit"] : null)) {
            // line 32
            echo "\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env,             // line 34
(isset($context["type"]) ? $context["type"] : null)))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute(            // line 37
(isset($context["settings"]) ? $context["settings"] : null), "limit", array()), "size" => 2, "errors" => $this->getAttribute(            // line 39
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "limit"), "method")));
            // line 40
            echo "
";
        }
        // line 42
        echo "
";
        // line 43
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Selection Label"), "instructions" => \Craft\Craft::t("Enter the text you want to appear on the {type} selection input.", array("type" => twig_lower_filter($this->env,         // line 45
(isset($context["type"]) ? $context["type"] : null)))), "id" => "selectionLabel", "name" => "selectionLabel", "value" => $this->getAttribute(        // line 48
(isset($context["settings"]) ? $context["settings"] : null), "selectionLabel", array()), "size" => 25, "errors" => $this->getAttribute(        // line 50
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "selectionLabel"), "method")));
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/elementfieldsettings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  84 => 50,  83 => 48,  82 => 45,  81 => 43,  78 => 42,  74 => 40,  72 => 39,  71 => 37,  70 => 34,  68 => 32,  66 => 31,  61 => 29,  58 => 28,  54 => 26,  52 => 25,  50 => 24,  45 => 21,  43 => 20,  42 => 19,  41 => 16,  39 => 14,  35 => 12,  33 => 11,  32 => 10,  31 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
