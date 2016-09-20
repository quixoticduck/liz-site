<?php

/*  */
class __TwigTemplate_91c1d03dcc4b0b8d0db219a929f65ce87f3c851dc1dd94b77cd71d3d7a476d50 extends Craft\BaseTemplate
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
        \Craft\craft()->request->redirect(\Craft\UrlHelper::getUrl((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "postCpLoginRedirect", array())) ? ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "postCpLoginRedirect", array())) : ("dashboard"))), true, 302);
    }

    public function getTemplateName()
    {
        return "";
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
