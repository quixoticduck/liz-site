<?php

/* index */
class __TwigTemplate_78a2ca443419e784b9b5a606493e39229e665c9a1f888d0f578db2d1aa3bdb00 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout", "index", 1);
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
        $context["title"] = "Home";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"dividerMargin\"></div>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 6
            echo "
\t\t";
            // line 7
            if (($this->getAttribute($context["block"], "type", array()) == "singleBlock")) {
                // line 8
                echo "\t\t\t<div class=\"col col-fullWidth\">
\t\t\t\t";
                // line 9
                if ($this->getAttribute($context["block"], "myBlockHeading", array())) {
                    // line 10
                    echo "\t\t\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array())) > 0)) {
                        // line 11
                        echo "\t\t\t\t\t\t<h2> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                        echo "  </h2>
\t\t\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t
\t\t\t\t";
                // line 15
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 16
                echo "\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 17
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
                // line 19
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["block"], "type", array()), "handle", array()) == "singleBlock")) {
                    echo "\t\t\t\t
\t\t\t\t\t";
                    // line 20
                    if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array())) > 0)) {
                        // line 21
                        echo "\t\t\t\t\t\t<div class=\"textParagraphs textbox\">
\t\t\t\t\t\t\t";
                        // line 22
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t<!-- ";
                        // line 23
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array())), "html", null, true);
                        echo " -->
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 25
                    echo "\t\t\t\t\t
\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["block"], "type", array()), "handle", array()) == "singleBlock")) {
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 28
                    if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "mainContentText", array())) > 0)) {
                        // line 29
                        echo "\t\t\t\t\t\t<div class=\"textParagraphs\">
\t\t\t\t\t\t\t";
                        // line 30
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "mainContentText", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t</div>
\t\t";
            }
            // line 36
            echo "
\t\t";
            // line 37
            if (($this->getAttribute($context["block"], "type", array()) == "twoTextColumns")) {
                // line 38
                echo "\t\t\t<div class=\"col col-half colpadding center \">
<!-- \t\t\t\t\t\t\t";
                // line 39
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "LeftColumnHeading", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($context["block"], "RightColumnHeading", array())) > 0))) {
                    // line 40
                    echo "\t\t\t\t\t<h3> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "LeftColumnHeading", array()), "html", null, true);
                    echo "  </h3>
\t\t\t\t";
                }
                // line 42
                echo "\t\t\t -->
\t\t\t<h3>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "LeftColumnHeading", array()), "html", null, true);
                echo "</h3>
\t\t\t";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "LeftColumnText", array()), "html", null, true);
                echo "
\t\t</div>
\t\t<div class=\"col col-half colpadding center \">
<!-- \t\t\t
\t\t\t\t";
                // line 48
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "LeftColumnHeading", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($context["block"], "RightColumnHeading", array())) > 0))) {
                    // line 49
                    echo "\t\t\t\t\t<h3> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "RightColumnHeading", array()), "html", null, true);
                    echo "  </h3>
\t\t\t\t";
                }
                // line 51
                echo "\t\t\t -->
\t\t\t<h3>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "RightColumnHeading", array()), "html", null, true);
                echo "</h3>
\t\t\t";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "RightColumnText", array()), "html", null, true);
                echo "
\t\t</div>
\t\t";
            }
            // line 56
            echo "
\t\t";
            // line 57
            if (($this->getAttribute($context["block"], "type", array()) == "pairedBlock")) {
                // line 58
                echo "\t\t\t<div class=\"col col-half blockImages\">
\t\t\t\t";
                // line 59
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "leftColumnHeading", array())) > 0)) {
                    // line 60
                    echo "\t\t\t\t\t<h2> <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "leftColumnImageUrl", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "leftColumnHeading", array()), "html", null, true);
                    echo "</a>  </h2>
\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t";
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "leftColumnImage", array()), "first", array(), "method"), "getUrl", array());
                // line 63
                echo "\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 64
                    echo "\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t<a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "leftColumnImageUrl", array()), "html", null, true);
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
                // line 68
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["block"], "type", array()), "handle", array()) == "pairedBlock")) {
                    // line 69
                    echo "\t\t\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "leftColumnTextboxText", array())) > 0)) {
                        // line 70
                        echo "\t\t\t\t\t\t<div class=\"textSentences textbox max60\">
\t\t\t\t\t\t\t";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "leftColumnTextboxText", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t\t";
                }
                // line 75
                echo "\t\t\t</div>
\t\t\t<div class=\"col col-half blockImages\">
\t\t\t\t";
                // line 77
                if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "rightColumnHeading", array())) > 0)) {
                    // line 78
                    echo "\t\t\t\t\t<h2> <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "rightColumnImageUrl", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "rightColumnHeading", array()), "html", null, true);
                    echo "</a>  </h2>
\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t";
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "rightColumnImage", array()), "first", array(), "method"), "getUrl", array());
                // line 81
                echo "\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 82
                    echo "\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t<a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "rightColumnImageUrl", array()), "html", null, true);
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
                // line 86
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["block"], "type", array()), "handle", array()) == "pairedBlock")) {
                    // line 87
                    echo "\t\t\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["block"], "rightColumnTextboxText", array())) > 0)) {
                        // line 88
                        echo "\t\t\t\t\t\t<div class=\"textSentences textbox max60\">
\t\t\t\t\t\t\t";
                        // line 89
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "rightColumnTextboxText", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t";
                }
                // line 93
                echo "\t\t\t</div>
\t\t";
            }
            // line 95
            echo "

\t\t";
            // line 97
            if (($this->getAttribute($this->getAttribute($context["block"], "type", array()), "handle", array()) == "attachDocument")) {
                // line 98
                echo "\t\t\t";
                if ($this->getAttribute($this->getAttribute($context["block"], "documentFile", array()), "first", array())) {
                    // line 99
                    echo "\t\t\t\t
\t\t\t\t\t<a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "documentFile", array()), "first", array()), "url", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<!-- Download -->
\t\t\t\t\t";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "documentInformation", array()), "html", null, true);
                    echo "</a>
\t\t\t\t<div class=\"dividerMargin\">
\t\t\t\t</div>
\t\t\t";
                }
                // line 106
                echo "\t\t";
            }
            // line 107
            echo "
\t\t";
            // line 108
            if (($this->getAttribute($this->getAttribute($context["block"], "type", array()), "handle", array()) == "responsiveImage")) {
                // line 109
                echo "\t\t\t";
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "responsiveImage", array()), "first", array(), "method"), "getUrl", array());
                // line 110
                echo "\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 111
                    echo "\t\t\t\t<div class=\"imgContainer ";
                    if ($this->getAttribute($context["block"], "responsiveOption", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "responsiveOption", array()), "html", null, true);
                        echo " ";
                    }
                    echo "\">
\t\t\t\t\t<a href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "imageUrl", array()), "html", null, true);
                    echo "\"><img class=\"myImageGroup ";
                    if ($this->getAttribute($context["block"], "responsiveOption", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "responsiveOption", array()), "html", null, true);
                        echo " ";
                    }
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
                    echo "\" width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getWidth", array(0 => "squarehomepage"), "method"), "html", null, true);
                    echo "\" height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "getHeight", array(0 => "squarehomepage"), "method"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "title", array()), "html", null, true);
                    echo "\" ></a>
\t\t\t\t</div>
\t\t\t";
                }
                // line 115
                echo "\t\t";
            }
            // line 116
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  372 => 116,  369 => 115,  349 => 112,  340 => 111,  337 => 110,  334 => 109,  332 => 108,  329 => 107,  326 => 106,  319 => 102,  314 => 100,  311 => 99,  308 => 98,  306 => 97,  302 => 95,  298 => 93,  295 => 92,  289 => 89,  286 => 88,  283 => 87,  280 => 86,  266 => 83,  263 => 82,  260 => 81,  257 => 80,  249 => 78,  247 => 77,  243 => 75,  240 => 74,  234 => 71,  231 => 70,  228 => 69,  225 => 68,  211 => 65,  208 => 64,  205 => 63,  202 => 62,  194 => 60,  192 => 59,  189 => 58,  187 => 57,  184 => 56,  178 => 53,  174 => 52,  171 => 51,  165 => 49,  163 => 48,  156 => 44,  152 => 43,  149 => 42,  143 => 40,  141 => 39,  138 => 38,  136 => 37,  133 => 36,  129 => 34,  125 => 32,  119 => 30,  116 => 29,  114 => 28,  109 => 27,  105 => 25,  99 => 23,  95 => 22,  92 => 21,  90 => 20,  85 => 19,  71 => 17,  68 => 16,  66 => 15,  63 => 14,  60 => 13,  54 => 11,  51 => 10,  49 => 9,  46 => 8,  44 => 7,  41 => 6,  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends "_layout" %}*/
/* {% set title = "Home" %}*/
/* {% block content %}*/
/* 	<div class="dividerMargin"></div>*/
/* 	{% for block in entry.myBlock %}*/
/* */
/* 		{% if block.type == "singleBlock" %}*/
/* 			<div class="col col-fullWidth">*/
/* 				{% if block.myBlockHeading %}*/
/* 					{% if block.myBlockHeading|length > 0 %}*/
/* 						<h2> {{ block.myBlockHeading }}  </h2>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 				*/
/* 				{% set image = block.myBlockImage.first().getUrl %}*/
/* 				{% if image %}*/
/* 					<a href="{{ block.myBlockUrl }}"><img class="myImage" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}"></a>*/
/* 				{% endif %}*/
/* 				{% if block.type.handle == "singleBlock" %}				*/
/* 					{% if block.myBlockTextboxText|length > 0 %}*/
/* 						<div class="textParagraphs textbox">*/
/* 							{{ block.myBlockTextboxText }}*/
/* 							<!-- {{ block.myBlockTextboxText|length }} -->*/
/* 						</div>*/
/* 					{% endif %}					*/
/* 				{% endif %}*/
/* 				{% if block.type.handle == "singleBlock" %}					*/
/* 					{% if block.mainContentText|length > 0 %}*/
/* 						<div class="textParagraphs">*/
/* 							{{ block.mainContentText }}*/
/* 						</div>*/
/* 					{% endif %}					*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if block.type == "twoTextColumns" %}*/
/* 			<div class="col col-half colpadding center ">*/
/* <!-- 							{% if ( block.LeftColumnHeading|length > 0 ) or ( block.RightColumnHeading|length > 0 ) %}*/
/* 					<h3> {{ block.LeftColumnHeading }}  </h3>*/
/* 				{% endif %}*/
/* 			 -->*/
/* 			<h3>{{ block.LeftColumnHeading }}</h3>*/
/* 			{{ block.LeftColumnText }}*/
/* 		</div>*/
/* 		<div class="col col-half colpadding center ">*/
/* <!-- 			*/
/* 				{% if ( block.LeftColumnHeading|length > 0 ) or ( block.RightColumnHeading|length > 0 ) %}*/
/* 					<h3> {{ block.RightColumnHeading }}  </h3>*/
/* 				{% endif %}*/
/* 			 -->*/
/* 			<h3>{{ block.RightColumnHeading }}</h3>*/
/* 			{{ block.RightColumnText }}*/
/* 		</div>*/
/* 		{% endif %}*/
/* */
/* 		{% if block.type == "pairedBlock" %}*/
/* 			<div class="col col-half blockImages">*/
/* 				{% if block.leftColumnHeading|length > 0 %}*/
/* 					<h2> <a href="{{ block.leftColumnImageUrl }}">{{ block.leftColumnHeading }}</a>  </h2>*/
/* 				{% endif %}*/
/* 				{% set image = block.leftColumnImage.first().getUrl %}*/
/* 				{% if image %}*/
/* 					<div class="imgContainer">*/
/* 						<a href="{{ block.leftColumnImageUrl }}"><img class="myImageGroup" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}" ></a>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if block.type.handle == "pairedBlock" %}*/
/* 					{% if block.leftColumnTextboxText|length > 0 %}*/
/* 						<div class="textSentences textbox max60">*/
/* 							{{ block.leftColumnTextboxText }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="col col-half blockImages">*/
/* 				{% if block.rightColumnHeading|length > 0 %}*/
/* 					<h2> <a href="{{ block.rightColumnImageUrl }}">{{ block.rightColumnHeading }}</a>  </h2>*/
/* 				{% endif %}*/
/* 				{% set image = block.rightColumnImage.first().getUrl %}*/
/* 				{% if image %}*/
/* 					<div class="imgContainer">*/
/* 						<a href="{{ block.rightColumnImageUrl }}"><img class="myImageGroup" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}" ></a>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if block.type.handle == "pairedBlock" %}*/
/* 					{% if block.rightColumnTextboxText|length > 0 %}*/
/* 						<div class="textSentences textbox max60">*/
/* 							{{ block.rightColumnTextboxText }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* */
/* 		{% if block.type.handle == "attachDocument" %}*/
/* 			{% if block.documentFile.first %}*/
/* 				*/
/* 					<a href="{{ block.documentFile.first.url }}">*/
/* 						<!-- Download -->*/
/* 					{{ block.documentInformation }}</a>*/
/* 				<div class="dividerMargin">*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		{% endif %}*/
/* */
/* 		{% if block.type.handle == "responsiveImage" %}*/
/* 			{% set image = block.responsiveImage.first().getUrl %}*/
/* 			{% if image %}*/
/* 				<div class="imgContainer {% if block.responsiveOption %} {{ block.responsiveOption }} {% endif %}">*/
/* 					<a href="{{ block.imageUrl }}"><img class="myImageGroup {% if block.responsiveOption %} {{ block.responsiveOption }} {% endif %}" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}" ></a>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		{% endif %}*/
/* */
/* 	{% endfor %}*/
/* {% endblock %}*/
