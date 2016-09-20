<?php

/* settings/fields/{{object.groupId|raw}} */
class __TwigTemplate_af1fc031d2f5b33d4ecc7e2027bf59e32a19bfc0052ba047cef9b722ffe9e3c6 extends Craft\BaseTemplate
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
/* settings/fields/{{object.groupId|raw}}*/
