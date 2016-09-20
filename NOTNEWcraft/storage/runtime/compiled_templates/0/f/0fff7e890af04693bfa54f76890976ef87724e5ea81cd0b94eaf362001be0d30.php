<?php

/* pshe */
class __TwigTemplate_0fff7e890af04693bfa54f76890976ef87724e5ea81cd0b94eaf362001be0d30 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("_layout", "pshe", 2);
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
        $context["title"] = "PSHE";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
\t";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t";
            if (($this->getAttribute($context["block"], "type", array()) == "twoTextColumns")) {
                // line 8
                echo "\t\t\t\t<div class=\"col col-half colpadding center\">
\t\t\t\t\t<h3> ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockLeftColumnHeading", array()), "html", null, true);
                echo "  </h3>
\t\t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockLeftColumn", array()), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-half colpadding center\">
\t\t\t\t\t<h3> ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockRightColumnHeading", array()), "html", null, true);
                echo "  </h3>
\t\t\t\t\t";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockRightColumn", array()), "html", null, true);
                echo "
\t\t\t\t</div>\t\t\t
\t\t";
            }
            // line 17
            echo "\t
\t\t\t
\t\t<div class=\"col\">\t

\t\t\t";
            // line 21
            if (($this->getAttribute($context["block"], "type", array()) == "singleBlock")) {
                // line 22
                echo "\t\t\t\t<div class=\"col-fullWidth\">
\t\t\t\t\t<h2> <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t";
                // line 24
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 25
                echo "\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 26
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
                // line 27
                echo " 
\t\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t<h3> ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxHeading", array()), "html", null, true);
                echo " </h3>
\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</div>

\t\t<div class=\"col\">
\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            echo "\t\t
\t\t\t\t";
            // line 39
            if (($this->getAttribute($context["block"], "type", array()) == "multipleBlocks")) {
                // line 40
                echo "\t\t\t\t\t<div class=\"col-half homeImages ";
                if ($this->getAttribute($context["block"], "coloroption", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "coloroption", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t\t\t<h2> <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t\t";
                // line 42
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 43
                echo "\t\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 45
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
                // line 48
                echo "\t\t\t\t\t\t<div class=\"textbox max50\">
\t\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 54
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</div>

\t";
    }

    public function getTemplateName()
    {
        return "pshe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  194 => 54,  187 => 50,  183 => 49,  180 => 48,  166 => 45,  163 => 44,  160 => 43,  158 => 42,  152 => 41,  143 => 40,  141 => 39,  135 => 38,  130 => 35,  123 => 33,  117 => 31,  113 => 30,  109 => 29,  105 => 27,  91 => 26,  88 => 25,  86 => 24,  80 => 23,  77 => 22,  75 => 21,  69 => 17,  63 => 14,  59 => 13,  53 => 10,  49 => 9,  46 => 8,  43 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 2,  27 => 3,  25 => 1,  11 => 2,);
    }
}
