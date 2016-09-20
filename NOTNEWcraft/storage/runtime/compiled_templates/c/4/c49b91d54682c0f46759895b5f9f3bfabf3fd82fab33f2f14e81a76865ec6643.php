<?php

/* health */
class __TwigTemplate_c49b91d54682c0f46759895b5f9f3bfabf3fd82fab33f2f14e81a76865ec6643 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("_layout", "health", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "";
        // line 5
        $context["title"] = "Health";
        // line 4
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
        echo "</h1>

\ttest test 

\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body", array()), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "health";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  36 => 10,  33 => 9,  29 => 4,  27 => 5,  25 => 3,  11 => 4,);
    }
}
