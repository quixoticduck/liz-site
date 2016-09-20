<?php

/* _components/elementactions/SetStatus/trigger */
class __TwigTemplate_c697c378979bffc5fa68e6a72f92feec2e967d82cd8e8603fad203fbb5fcb11b extends Craft\BaseTemplate
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
        echo "<div class=\"btn menubtn\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Set status"), "html", null, true);
        echo "</div>
<div class=\"menu\">
\t<ul>
\t\t<li><a class=\"formsubmit\" data-param=\"status\" data-value=\"enabled\"><span class=\"status enabled\"></span> ";
        // line 4
        echo twig_escape_filter($this->env, \Craft\Craft::t("Enabled"), "html", null, true);
        echo "</a></li>
\t\t<li><a class=\"formsubmit\" data-param=\"status\" data-value=\"disabled\"><span class=\"status disabled\"></span> ";
        // line 5
        echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
        echo "</a></li>
\t</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/elementactions/SetStatus/trigger";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  19 => 1,);
    }
}
