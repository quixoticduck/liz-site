<?php

/* 500 */
class __TwigTemplate_baf069f0a64fd95ea7a84475980b1f147c6577c4f6c78e9d8c3253fb28672fa0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/message", "500", 1);
        $this->blocks = array(
            'message' => array($this, 'block_message'),
            '__internal_5f806e626e25ee77b5cf11665eac29ec06291340d5747984b5d620394dc1865b' => array($this, 'block___internal_5f806e626e25ee77b5cf11665eac29ec06291340d5747984b5d620394dc1865b'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/message";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Internal Server Error");
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
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((string) $this->renderBlock("__internal_5f806e626e25ee77b5cf11665eac29ec06291340d5747984b5d620394dc1865b", $context, $blocks)), "html", null, true);
            // line 9
            echo "\t";
        } else {
            // line 10
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("An error occurred while processing your request."), "html", null, true);
            echo "</p>
\t";
        }
    }

    // line 8
    public function block___internal_5f806e626e25ee77b5cf11665eac29ec06291340d5747984b5d620394dc1865b($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "500";
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
