<?php

/* pshe */
class __TwigTemplate_fa9577adf17e87669beff0a7f7197c41877fe0c4f0220b1038405c13e6aa32b7 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout", "pshe", 1);
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
        // line 2
        $context["title"] = "PSHE";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<?php include_once(\"../analyticstracking.php\") ?>
\t";
        // line 6
        $context['_parent'] = $context;
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
\t\t\t";
            // line 19
            if (($this->getAttribute($context["block"], "type", array()) == "singleBlock")) {
                // line 20
                echo "\t\t\t\t<div class=\"col col-fullWidth\">
\t\t\t\t\t<h2> <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t";
                // line 22
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 23
                echo "\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 24
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
                // line 25
                echo " 
\t\t\t\t\t<div class=\"textParagraphs textbox\">
\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t<h3> ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxHeading", array()), "html", null, true);
                echo " </h3>
\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

\t\t<div class=\"col\">
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            echo "\t\t
\t\t\t\t";
            // line 37
            if (($this->getAttribute($context["block"], "type", array()) == "multipleBlocks")) {
                // line 38
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
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t\t";
                // line 40
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 41
                echo "\t\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t\t\t<a href=\"";
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
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t<div class=\"textSentences textbox max60\">
\t\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t\t";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return array (  203 => 53,  197 => 52,  190 => 48,  186 => 47,  183 => 46,  169 => 43,  166 => 42,  163 => 41,  161 => 40,  155 => 39,  140 => 38,  138 => 37,  132 => 36,  127 => 33,  120 => 31,  114 => 29,  110 => 28,  106 => 27,  102 => 25,  88 => 24,  85 => 23,  83 => 22,  77 => 21,  74 => 20,  72 => 19,  68 => 17,  62 => 14,  58 => 13,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  38 => 6,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends "_layout" %}*/
/* {% set title = "PSHE" %}*/
/* {% block content %}*/
/* */
/* <?php include_once("../analyticstracking.php") ?>*/
/* 	{% for block in entry.myBlock %}*/
/* 		{% if block.type == "twoTextColumns" %}*/
/* 				<div class="col col-half colpadding center">*/
/* 					<h3> {{ block.myBlockLeftColumnHeading }}  </h3>*/
/* 					{{ block.myBlockLeftColumn }}*/
/* 				</div>*/
/* 				<div class="col col-half colpadding center">*/
/* 					<h3> {{ block.myBlockRightColumnHeading }}  </h3>*/
/* 					{{ block.myBlockRightColumn }}*/
/* 				</div>			*/
/* 		{% endif %}*/
/* 	*/
/* 			*/
/* 			{% if block.type == "singleBlock" %}*/
/* 				<div class="col col-fullWidth">*/
/* 					<h2> <a href="{{ block.myBlockUrl }}">{{ block.myBlockHeading }}</a>  </h2>*/
/* 					{% set image = block.myBlockImage.first().getUrl %}*/
/* 					{% if image %}*/
/* 						<a href="{{ block.myBlockUrl }}"><img class="myImage" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}"></a>*/
/* 					{% endif %} */
/* 					<div class="textParagraphs textbox">*/
/* 						<!-- 		    <a href="{{ block.myBlockUrl }}">Read More</a> -->*/
/* 						<h3> {{ block.myBlockTextboxHeading }} </h3>*/
/* 						{{ block.myBlockTextboxText }}*/
/* 					</div>*/
/* 				{% endif %}				*/
/* 			{% endfor %}*/
/* */
/* */
/* 		<div class="col">*/
/* 			{% for block in entry.myBlock %}		*/
/* 				{% if block.type == "multipleBlocks" %}*/
/* 					<div class="col-half blockImages {% if block.coloroption %}  {{ block.coloroption }} {% endif %} {% if block.rowNumber %}  {{ block.rowNumber }} {% endif %}">*/
/* 						<h2> <a href="{{ block.myBlockUrl }}">{{ block.myBlockHeading }}</a>  </h2>*/
/* 						{% set image = block.myBlockImage.first().getUrl %}*/
/* 						{% if image %}*/
/* 							<div class="imgContainer">*/
/* 								<a href="{{ block.myBlockUrl }}"><img class="myImageGroup" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}" ></a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						<div class="textSentences textbox max60">*/
/* 							<!-- 		    <a href="{{ block.myBlockUrl }}">Read More</a> -->*/
/* 							{{ block.myBlockTextboxText }}*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</div>*/
/* */
/* */
/* 	{% endblock %}*/
