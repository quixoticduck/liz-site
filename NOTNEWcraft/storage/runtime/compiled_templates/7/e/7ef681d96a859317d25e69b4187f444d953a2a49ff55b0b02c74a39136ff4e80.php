<?php

/* 404 */
class __TwigTemplate_7ef681d96a859317d25e69b4187f444d953a2a49ff55b0b02c74a39136ff4e80 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("_layout", "404", 19);
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
        // line 20
        $context["title"] = "404";
        // line 19
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "\t<h1>Page not found</h1>

\t<p>What’s worse, a hilarious 404 page can’t be found either. Sad times. </p>
";
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
        return array (  34 => 23,  31 => 22,  27 => 19,  25 => 20,  11 => 19,);
    }
}
