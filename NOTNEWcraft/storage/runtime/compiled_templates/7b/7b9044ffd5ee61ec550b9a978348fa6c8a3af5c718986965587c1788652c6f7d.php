<?php

/* 404 */
class __TwigTemplate_6ccb42a252d32ac19b900964915fdeed9fbefb7f8a9f73784ee8ee5b7ee32772 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "404", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_f0e9de0e3a58f543da9e67d7b095802b8fdc912137edfd53531d15fab5c58502' => array($this, 'block___internal_f0e9de0e3a58f543da9e67d7b095802b8fdc912137edfd53531d15fab5c58502'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Page Not Found");
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

\t";
        // line 7
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((string) $this->renderBlock("__internal_f0e9de0e3a58f543da9e67d7b095802b8fdc912137edfd53531d15fab5c58502", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("The requested URL was not found on this server."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_f0e9de0e3a58f543da9e67d7b095802b8fdc912137edfd53531d15fab5c58502($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "404";
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
/* {% set title = "Page Not Found"|t %}*/
/* */
/* {% block message %}*/
/* 	<h2>{{ title }}</h2>*/
/* */
/* 	{% if message %}*/
/* 		{% filter md %}{{ message }}{% endfilter %}*/
/* 	{% else %}*/
/* 		<p>{{ "The requested URL was not found on this server."|t }}</p>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
