<?php

/* settings/fields/{{object.groupId|raw}} */
class __TwigTemplate_558189a8b4c3df2478deaec2024c5207c8c90a437ab86b55b7c99e04ec653b64 extends Craft\BaseTemplate
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
        echo "settings/fields/";
        echo $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "groupId", array());
    }

    public function getTemplateName()
    {
        return "settings/fields/{{object.groupId|raw}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
