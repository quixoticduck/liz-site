<?php

/* _layouts/elementindex */
class __TwigTemplate_0c0ef4f0a5e9a9fdd3777d354c4df3902cbb215d2212d21bdce28d884444ae3d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "_layouts/elementindex", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["elementTypeClass"] = (isset($context["elementType"]) ? $context["elementType"] : null);
        // line 4
        $context["elementType"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "elements", array()), "getElementType", array(0 => (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null)), "method");
        // line 5
        $context["context"] = "index";
        // line 7
        if ( !(isset($context["elementType"]) ? $context["elementType"] : null)) {
            // line 8
            throw new \Craft\HttpException(404);
        }
        // line 11
        $context["sources"] = $this->getAttribute((isset($context["elementType"]) ? $context["elementType"] : null), "getSources", array(0 => "index"), "method");
        // line 23
        ob_start();
        // line 24
        echo "\t<div class=\"elementindex\">
\t\t";
        // line 25
        $this->loadTemplate("_elements/indexcontainer", "_layouts/elementindex", 25)->display($context);
        // line 26
        echo "\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        $_js = $this->renderBlock("initJs", $context, $blocks);
        \Craft\craft()->templates->includeJs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if ( !twig_test_empty((isset($context["sources"]) ? $context["sources"] : null))) {
            // line 16
            echo "\t\t<nav>
\t\t\t";
            // line 17
            $this->loadTemplate("_elements/sources", "_layouts/elementindex", 17)->display($context);
            // line 18
            echo "\t\t</nav>
\t";
        }
    }

    // line 30
    public function block_initJs($context, array $blocks = array())
    {
        // line 31
        echo "\tCraft.elementIndex = Craft.createElementIndex('";
        echo twig_escape_filter($this->env, (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null), "html", null, true);
        echo "', \$('#main'), {
\t\tcontext:        '";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["context"]) ? $context["context"] : null), "html", null, true);
        echo "',
\t\tshowStatusMenu: ";
        // line 33
        echo ((array_key_exists("showStatusMenu", $context)) ? ($this->env->getExtension('craft')->jsonEncodeFilter((isset($context["showStatusMenu"]) ? $context["showStatusMenu"] : null))) : ("'auto'"));
        echo ",
\t\tshowLocaleMenu: ";
        // line 34
        echo ((array_key_exists("showLocaleMenu", $context)) ? ($this->env->getExtension('craft')->jsonEncodeFilter((isset($context["showLocaleMenu"]) ? $context["showLocaleMenu"] : null))) : ("'auto'"));
        echo ",
\t\tstorageKey:     'elementindex.";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["elementTypeClass"]) ? $context["elementTypeClass"] : null), "html", null, true);
        echo "',
\t\tcriteria:       { localeEnabled: null }
\t});
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  90 => 34,  86 => 33,  82 => 32,  77 => 31,  74 => 30,  68 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  53 => 1,  50 => 40,  46 => 26,  44 => 25,  41 => 24,  39 => 23,  37 => 11,  34 => 8,  32 => 7,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
