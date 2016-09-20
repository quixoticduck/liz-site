<?php

/* index */
class __TwigTemplate_9b293efd40b3ea743f407d263f3839f9ca6951dd5b807eb29583c5c10b7475a7 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("_layout", "index", 2);
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
        // line 1
        $context["bodyClass"] = "";
        // line 3
        $context["title"] = "Home";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<!-- \t<h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
        echo "</h2>
\t";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "body", array()), "html", null, true);
        echo "
\t</br> -->
<!-- 
\t\t\t<div class=\"dividerMargin\"></div> -->

\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 13
            echo "\t\t";
            if (($this->getAttribute($context["block"], "type", array()) == "twoTextColumns")) {
                // line 14
                echo "
\t\t\t<div class=\"col col-half colpadding center ";
                // line 15
                if ($this->getAttribute($context["block"], "textRowNo", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "textRowNo", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t<h3> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockLeftColumnHeading", array()), "html", null, true);
                echo "  </h3>
\t\t\t\t";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockLeftColumn", array()), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<div class=\"col col-half colpadding center ";
                // line 19
                if ($this->getAttribute($context["block"], "textRowNo", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "textRowNo", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t<h3> ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockRightColumnHeading", array()), "html", null, true);
                echo "  </h3>
\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockRightColumn", array()), "html", null, true);
                echo "
\t\t\t</div>\t\t\t

\t\t";
            }
            // line 25
            echo "

\t\t\t";
            // line 27
            if (($this->getAttribute($context["block"], "type", array()) == "singleBlock")) {
                // line 28
                echo "\t\t\t\t<div class=\"col col-fullWidth\">
\t\t\t\t\t<h2> <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t";
                // line 30
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 31
                echo "\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 32
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                    echo "\"><img class=\"myImage\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
                    echo "\" width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getWidth", array(0 => "squarehomepage"), "method"), "html", null, true);
                    echo "\" height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getHeight", array(0 => "squarehomepage"), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
                    echo "\"></a>
\t\t\t\t\t";
                }
                // line 33
                echo " 
\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t<h3> ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxHeading", array()), "html", null, true);
                echo " </h3>
\t\t\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

\t\t<div class=\"col\">
\t\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            echo "\t\t
\t\t\t\t";
            // line 45
            if (($this->getAttribute($context["block"], "type", array()) == "multipleBlocks")) {
                // line 46
                echo "\t\t\t\t\t<div class=\"col-half blockImages ";
                if ($this->getAttribute($context["block"], "coloroption", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "coloroption", array()), "html", null, true);
                    echo " ";
                }
                echo " ";
                if ($this->getAttribute($context["block"], "rowNumber", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "rowNumber", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t<h2> <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t\t";
                // line 48
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 49
                echo "\t\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 50
                    echo "\t\t\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                    echo "\"><img class=\"myImageGroup\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
                    echo "\" width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getWidth", array(0 => "squarehomepage"), "method"), "html", null, true);
                    echo "\" height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getHeight", array(0 => "squarehomepage"), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
                    echo "\" ></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t<div class=\"textbox max60\">
\t\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 61,  226 => 60,  219 => 56,  215 => 55,  212 => 54,  198 => 51,  195 => 50,  192 => 49,  190 => 48,  184 => 47,  169 => 46,  167 => 45,  161 => 44,  156 => 41,  149 => 39,  143 => 37,  139 => 36,  135 => 35,  131 => 33,  117 => 32,  114 => 31,  112 => 30,  106 => 29,  103 => 28,  101 => 27,  97 => 25,  90 => 21,  86 => 20,  78 => 19,  73 => 17,  69 => 16,  61 => 15,  58 => 14,  55 => 13,  51 => 12,  43 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 2,  27 => 3,  25 => 1,  11 => 2,);
    }
}
