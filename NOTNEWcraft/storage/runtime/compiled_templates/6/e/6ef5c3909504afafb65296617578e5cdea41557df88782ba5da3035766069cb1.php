<?php

/* _elements/modalbody */
class __TwigTemplate_6ef5c3909504afafb65296617578e5cdea41557df88782ba5da3035766069cb1 extends Craft\BaseTemplate
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
        echo "<div class=\"content";
        if ((isset($context["showSidebar"]) ? $context["showSidebar"] : null)) {
            echo " has-sidebar";
        }
        echo "\">
\t<div class=\"sidebar";
        // line 2
        if ( !(isset($context["showSidebar"]) ? $context["showSidebar"] : null)) {
            echo " hidden";
        }
        echo "\">
\t\t<nav>
\t\t\t";
        // line 4
        $this->loadTemplate("_elements/sources", "_elements/modalbody", 4)->display($context);
        // line 5
        echo "\t\t</nav>
\t</div>

\t";
        // line 8
        $this->loadTemplate("_elements/indexcontainer", "_elements/modalbody", 8)->display($context);
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/modalbody";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  40 => 8,  35 => 5,  33 => 4,  26 => 2,  19 => 1,);
    }
}
