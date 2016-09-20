<?php

/* 503 */
class __TwigTemplate_107f8a56067cbd643db9749a25d868a5a62af2a01d6a810eeae5070b92a0f373 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "503", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_6919603de95ebda481e53bb48c8357bf2460e3a321cea5cbb10a669ebee6b758' => array($this, 'block___internal_6919603de95ebda481e53bb48c8357bf2460e3a321cea5cbb10a669ebee6b758'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Service Unavailable");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_message($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((string) $this->renderBlock("__internal_6919603de95ebda481e53bb48c8357bf2460e3a321cea5cbb10a669ebee6b758", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Our site is temporarily unavailable. Please try again later."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_6919603de95ebda481e53bb48c8357bf2460e3a321cea5cbb10a669ebee6b758($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "503";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  49 => 10,  46 => 9,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}
/* {% extends "_layouts/message" %}*/
/* {% set title = "Service Unavailable"|t %}*/
/* */
/* {% block message %}*/
/* 	<h2>{{ title }}</h2>*/
/* */
/*     {% if message %}*/
/* 		{% filter md %}{{ message }}{% endfilter %}*/
/* 	{% else %}*/
/* 		<p>{{ "Our site is temporarily unavailable. Please try again later."|t }}</p>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
