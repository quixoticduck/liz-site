<?php

/* 503 */
class __TwigTemplate_8b3301745222a8e4e9f698cbbce852edb7d01a4eec7aa6efed251fa6eac734cc extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "503", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_dd6d94d6dfa5b5cb3839fbe552352b504e999f3d88f251882b6a7d4798031f8d' => array($this, 'block___internal_dd6d94d6dfa5b5cb3839fbe552352b504e999f3d88f251882b6a7d4798031f8d'),
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
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((string) $this->renderBlock("__internal_dd6d94d6dfa5b5cb3839fbe552352b504e999f3d88f251882b6a7d4798031f8d", $context, $blocks)), "html", null, true);
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
    public function block___internal_dd6d94d6dfa5b5cb3839fbe552352b504e999f3d88f251882b6a7d4798031f8d($context, array $blocks = array())
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
