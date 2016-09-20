<?php

/* {{object.type|raw}}/{{object.slug|raw}} */
class __TwigTemplate_25d18bcb4e33bfb2a73020bed796158dfab300eeb9f8272963485ba86f83128d extends Craft\BaseTemplate
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
        echo $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "type", array());
        echo "/";
        echo $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "slug", array());
    }

    public function getTemplateName()
    {
        return "{{object.type|raw}}/{{object.slug|raw}}";
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
