<?php

/* About/_entry */
class __TwigTemplate_55270b658c84f871bb7b69bca1be91b3ae92e8e548f1d29d34f522104b34602d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("_layout", "About/_entry", 2);
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
        $context["title"] = "About";
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
                echo "
\t\t\t<div class=\"col col-half colpadding center ";
                // line 9
                if ($this->getAttribute($context["block"], "textRowNo", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "textRowNo", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t<h3> ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockLeftColumnHeading", array()), "html", null, true);
                echo "  </h3>
\t\t\t\t";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockLeftColumn", array()), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<div class=\"col col-half colpadding center ";
                // line 13
                if ($this->getAttribute($context["block"], "textRowNo", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "textRowNo", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t<h3> ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockRightColumnHeading", array()), "html", null, true);
                echo "  </h3>
\t\t\t\t";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockRightColumn", array()), "html", null, true);
                echo "
\t\t\t</div>\t\t\t

\t\t";
            }
            // line 19
            echo "
\t\t
\t\t";
            // line 21
            if (($this->getAttribute($context["block"], "type", array()) == "singleBlock")) {
                // line 22
                echo "\t\t\t<div class=\"col col-fullWidth\">
\t\t\t\t<h2> <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t";
                // line 24
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 25
                echo "\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 26
                    echo "\t\t\t\t\t<a href=\"";
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
\t\t\t\t";
                }
                // line 27
                echo " 
\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t<h3> ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxHeading", array()), "html", null, true);
                echo " </h3>
\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 34
            echo "\t
\t\t\t

\t\t";
            // line 37
            if (($this->getAttribute($context["block"], "type", array()) == "multipleBlocks")) {
                // line 38
                echo "\t\t\t<div class=\"col-half blockImages ";
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
\t\t\t\t<h2> <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t";
                // line 40
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 41
                echo "\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 42
                    echo "\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t<a href=\"";
                    // line 43
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
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t<div class=\"textbox max60\">
\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 52
            echo "
\t\t";
            // line 53
            if (($this->getAttribute($context["block"], "type", array()) == "contactMe")) {
                // line 54
                echo "\t\t\t\t<div id=\"";
                if ($this->getAttribute($context["block"], "contactMe", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "contactMe", array()), "html", null, true);
                }
                echo "\">
\t\t\t\t</div>
\t\t";
            }
            // line 56
            echo "\t

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "About/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 59,  216 => 56,  207 => 54,  205 => 53,  202 => 52,  195 => 48,  191 => 47,  188 => 46,  174 => 43,  171 => 42,  168 => 41,  166 => 40,  160 => 39,  145 => 38,  143 => 37,  138 => 34,  131 => 31,  127 => 30,  123 => 29,  119 => 27,  105 => 26,  102 => 25,  100 => 24,  94 => 23,  91 => 22,  89 => 21,  85 => 19,  78 => 15,  74 => 14,  66 => 13,  61 => 11,  57 => 10,  49 => 9,  46 => 8,  43 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 2,  27 => 3,  25 => 1,  11 => 2,);
    }
}
