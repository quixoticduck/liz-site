<?php

/* {{object.type|raw}}/{{object.slug|raw}} */
class __TwigTemplate_a67230a3317c50d92aef6b0e4eae8200b167fc949284d6ef7a819689453fdf39 extends Craft\BaseTemplate
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
/* {{object.type|raw}}/{{object.slug|raw}}*/
