<?php

/* entries */
class __TwigTemplate_1444353a38ded28f22b894d3a6b9e919cdf827d95b9070005707dbb0d64518b0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "entries", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Entries");
        // line 3
        $context["elementType"] = "Entry";
        // line 6
        if (array_key_exists("sectionHandle", $context)) {
            // line 7
            $_js = (("window.defaultSectionHandle = \"" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "\";");
            \Craft\craft()->templates->includejs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  30 => 7,  28 => 6,  26 => 3,  24 => 2,  11 => 1,);
    }
}
/* {% extends "_layouts/elementindex" %}*/
/* {% set title = "Entries"|t %}*/
/* {% set elementType = 'Entry' %}*/
/* */
/* */
/* {% if sectionHandle is defined %}*/
/* 	{% includejs 'window.defaultSectionHandle = "'~sectionHandle~'";' %}*/
/* {% endif %}*/
/* */
