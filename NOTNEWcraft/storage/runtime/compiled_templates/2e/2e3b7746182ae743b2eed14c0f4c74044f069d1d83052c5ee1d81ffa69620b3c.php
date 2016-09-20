<?php

/* about/_entry */
class __TwigTemplate_620c721e0e38fb45e866ab4f13019258534fb5be4f056e35ee76b9d58566701d extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("_layout", "about/_entry", 2);
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
        $context['_parent'] = $context;
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
\t\t";
            // line 20
            if (($this->getAttribute($context["block"], "type", array()) == "responsiveImage")) {
                // line 21
                echo "\t\t\t<div class=\"col col-fullWidth ";
                if ($this->getAttribute($context["block"], "responsiveoption", array())) {
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "responsiveoption", array()), "html", null, true);
                    echo " ";
                }
                echo "\">
\t\t\t\t";
                // line 22
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "responsiveimage", array()), "first", array(), "method"), "getUrl", array());
                // line 23
                echo "\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 24
                    echo "\t\t\t\t\t<a href=\"\"><img class=\"myImage\" src=\"";
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
                // line 25
                echo " 
\t\t\t</div>
\t\t";
            }
            // line 27
            echo "\t
\t\t
\t\t";
            // line 29
            if (($this->getAttribute($context["block"], "type", array()) == "singleBlock")) {
                // line 30
                echo "\t\t\t<div class=\"col col-fullWidth\">
<!-- \t\t\t\t<h2> <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2> -->
\t\t\t\t<div class=\"image-responsive\">
\t\t\t\t\t";
                // line 33
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 34
                echo "\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 35
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
                // line 36
                echo " 
\t\t\t\t</div>
\t\t\t\t<div class=\"textParagraphs textbox\">
\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t<h3> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxHeading", array()), "html", null, true);
                echo " </h3>
\t\t\t\t\t";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 44
            echo "\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t<div class=\"col\">
\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "myBlock", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            echo "\t\t
\t\t\t";
            // line 49
            if (($this->getAttribute($context["block"], "type", array()) == "multipleBlocks")) {
                // line 50
                echo "\t\t\t\t<div class=\"col-half blockImages ";
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
\t\t\t\t\t<h2> <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockHeading", array()), "html", null, true);
                echo "</a>  </h2>
\t\t\t\t\t";
                // line 52
                $context["image"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["block"], "myBlockImage", array()), "first", array(), "method"), "getUrl", array());
                // line 53
                echo "\t\t\t\t\t";
                if ((isset($context["image"]) ? $context["image"] : null)) {
                    // line 54
                    echo "\t\t\t\t\t\t<div class=\"imgContainer\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 55
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
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t<div class=\"textSentences textbox max60\">
\t\t\t\t\t\t<!-- \t\t    <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockUrl", array()), "html", null, true);
                echo "\">Read More</a> -->
\t\t\t\t\t\t";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "myBlockTextboxText", array()), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 64
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t</div>


<div class=\"contactForm\">\t
\t";
        // line 78
        echo "
\t";
        // line 79
        $context["__internal_bdee537153b7a5de60a9181a995234604c41762861cab8ea25b045d295f18909"] = $this;
        // line 80
        echo "
\t<form method=\"post\" action=\"\" accept-charset=\"UTF-8\">
\t    ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "
\t    <input type=\"hidden\" name=\"action\" value=\"contactForm/sendMessage\">
\t    <input type=\"hidden\" name=\"redirect\" value=\"thanks\">

\t    <input id=\"puppyField\" name=\"puppyField\" type=\"text\">

\t    <div class=\"contactField\">
\t\t    <h3><label for=\"fromName\">Your Name</label></h3></br>
\t\t    <input id=\"fromName\" type=\"text\" name=\"fromName\" value=\"";
        // line 90
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromName", array()), "html", null, true);
        }
        echo "\">
\t\t    ";
        // line 91
        echo (((array_key_exists("message", $context) && (isset($context["message"]) ? $context["message"] : null))) ? ($context["__internal_bdee537153b7a5de60a9181a995234604c41762861cab8ea25b045d295f18909"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "fromName"), "method"))) : (""));
        echo "
\t    </div>
\t    <div class=\"contactField\">
\t\t    <h3><label for=\"fromEmail\">Your Email</label></h3></br>
\t\t    <input id=\"fromEmail\" type=\"text\" name=\"fromEmail\" value=\"";
        // line 95
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromEmail", array()), "html", null, true);
        }
        echo "\">
\t\t    ";
        // line 96
        echo (((array_key_exists("message", $context) && (isset($context["message"]) ? $context["message"] : null))) ? ($context["__internal_bdee537153b7a5de60a9181a995234604c41762861cab8ea25b045d295f18909"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "fromEmail"), "method"))) : (""));
        echo "
\t\t</div>
\t\t<div class=\"contactField\">
\t\t    <h3><label for=\"subject\">Subject</label></h3></br>
\t\t    <input id=\"subject\" type=\"text\" name=\"subject\" value=\"";
        // line 100
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "subject", array()), "html", null, true);
        }
        echo "\">
\t\t    ";
        // line 101
        echo (((array_key_exists("message", $context) && (isset($context["message"]) ? $context["message"] : null))) ? ($context["__internal_bdee537153b7a5de60a9181a995234604c41762861cab8ea25b045d295f18909"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "subject"), "method"))) : (""));
        echo "
\t    </div>
\t    <div class=\"contactField\">
\t\t    <h3><label for=\"message\">Message</label></h3></br>
\t\t    <textarea rows=\"10\" cols=\"40\" id=\"message\" name=\"message\">";
        // line 105
        if (array_key_exists("message", $context)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "message", array()), "html", null, true);
        }
        echo "</textarea>
\t\t    ";
        // line 106
        echo (((array_key_exists("message", $context) && (isset($context["message"]) ? $context["message"] : null))) ? ($context["__internal_bdee537153b7a5de60a9181a995234604c41762861cab8ea25b045d295f18909"]->geterrorList($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "getErrors", array(0 => "message"), "method"))) : (""));
        echo "
\t    </div>
\t   \t<div class=\"contactField\"></br>
\t\t    <input type=\"submit\" value=\"Send\">
\t    </div>
\t</form>
</div>

";
    }

    // line 69
    public function geterrorList($__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "\t    ";
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                // line 71
                echo "\t        <ul class=\"errors\">
\t            ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 73
                    echo "\t                <li>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t        </ul>
\t    ";
            }
            // line 77
            echo "\t";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "about/_entry";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 77,  373 => 75,  364 => 73,  360 => 72,  357 => 71,  354 => 70,  342 => 69,  329 => 106,  323 => 105,  316 => 101,  310 => 100,  303 => 96,  297 => 95,  290 => 91,  284 => 90,  273 => 82,  269 => 80,  267 => 79,  264 => 78,  258 => 65,  252 => 64,  245 => 60,  241 => 59,  238 => 58,  224 => 55,  221 => 54,  218 => 53,  216 => 52,  210 => 51,  195 => 50,  193 => 49,  187 => 48,  183 => 46,  176 => 44,  169 => 41,  165 => 40,  161 => 39,  156 => 36,  142 => 35,  139 => 34,  137 => 33,  130 => 31,  127 => 30,  125 => 29,  121 => 27,  116 => 25,  104 => 24,  101 => 23,  99 => 22,  90 => 21,  88 => 20,  85 => 19,  78 => 15,  74 => 14,  66 => 13,  61 => 11,  57 => 10,  49 => 9,  46 => 8,  43 => 7,  39 => 6,  36 => 5,  33 => 4,  29 => 2,  27 => 3,  25 => 1,  11 => 2,);
    }
}
/* {% set bodyClass = "" %}*/
/* {% extends "_layout" %}*/
/* {% set title = "About" %}*/
/* {% block content %}*/
/* */
/* 	{% for block in entry.myBlock %}*/
/* 		{% if block.type == "twoTextColumns" %}*/
/* */
/* 			<div class="col col-half colpadding center {% if block.textRowNo %}  {{ block.textRowNo }} {% endif %}">*/
/* 				<h3> {{ block.myBlockLeftColumnHeading }}  </h3>*/
/* 				{{ block.myBlockLeftColumn }}*/
/* 			</div>*/
/* 			<div class="col col-half colpadding center {% if block.textRowNo %}  {{ block.textRowNo }} {% endif %}">*/
/* 				<h3> {{ block.myBlockRightColumnHeading }}  </h3>*/
/* 				{{ block.myBlockRightColumn }}*/
/* 			</div>			*/
/* */
/* 		{% endif %}*/
/* */
/* 		{% if block.type == "responsiveImage" %}*/
/* 			<div class="col col-fullWidth {% if block.responsiveoption %}  {{ block.responsiveoption }} {% endif %}">*/
/* 				{% set image = block.responsiveimage.first().getUrl %}*/
/* 				{% if image %}*/
/* 					<a href=""><img class="myImage" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}"></a>*/
/* 				{% endif %} */
/* 			</div>*/
/* 		{% endif %}	*/
/* 		*/
/* 		{% if block.type == "singleBlock" %}*/
/* 			<div class="col col-fullWidth">*/
/* <!-- 				<h2> <a href="{{ block.myBlockUrl }}">{{ block.myBlockHeading }}</a>  </h2> -->*/
/* 				<div class="image-responsive">*/
/* 					{% set image = block.myBlockImage.first().getUrl %}*/
/* 					{% if image %}*/
/* 						<a href="{{ block.myBlockUrl }}"><img class="myImage" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}"></a>*/
/* 					{% endif %} */
/* 				</div>*/
/* 				<div class="textParagraphs textbox">*/
/* 					<!-- 		    <a href="{{ block.myBlockUrl }}">Read More</a> -->*/
/* 					<h3> {{ block.myBlockTextboxHeading }} </h3>*/
/* 					{{ block.myBlockTextboxText }}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endif %}	*/
/* 	{% endfor %}*/
/* */
/* 	<div class="col">*/
/* 		{% for block in entry.myBlock %}		*/
/* 			{% if block.type == "multipleBlocks" %}*/
/* 				<div class="col-half blockImages {% if block.coloroption %}  {{ block.coloroption }} {% endif %} {% if block.rowNumber %}  {{ block.rowNumber }} {% endif %}">*/
/* 					<h2> <a href="{{ block.myBlockUrl }}">{{ block.myBlockHeading }}</a>  </h2>*/
/* 					{% set image = block.myBlockImage.first().getUrl %}*/
/* 					{% if image %}*/
/* 						<div class="imgContainer">*/
/* 							<a href="{{ block.myBlockUrl }}"><img class="myImageGroup" src="{{ image }}" width="{{ image.getWidth('squarehomepage') }}" height="{{ image.getHeight('squarehomepage') }}" alt="{{ image.title }}" ></a>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<div class="textSentences textbox max60">*/
/* 						<!-- 		    <a href="{{ block.myBlockUrl }}">Read More</a> -->*/
/* 						{{ block.myBlockTextboxText }}*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* */
/* */
/* <div class="contactForm">	*/
/* 	{% macro errorList(errors) %}*/
/* 	    {% if errors %}*/
/* 	        <ul class="errors">*/
/* 	            {% for error in errors %}*/
/* 	                <li>{{ error }}</li>*/
/* 	            {% endfor %}*/
/* 	        </ul>*/
/* 	    {% endif %}*/
/* 	{% endmacro %}*/
/* */
/* 	{% from _self import errorList %}*/
/* */
/* 	<form method="post" action="" accept-charset="UTF-8">*/
/* 	    {{ getCsrfInput() }}*/
/* 	    <input type="hidden" name="action" value="contactForm/sendMessage">*/
/* 	    <input type="hidden" name="redirect" value="thanks">*/
/* */
/* 	    <input id="puppyField" name="puppyField" type="text">*/
/* */
/* 	    <div class="contactField">*/
/* 		    <h3><label for="fromName">Your Name</label></h3></br>*/
/* 		    <input id="fromName" type="text" name="fromName" value="{% if message is defined %}{{ message.fromName }}{% endif %}">*/
/* 		    {{ message is defined and message ? errorList(message.getErrors('fromName')) }}*/
/* 	    </div>*/
/* 	    <div class="contactField">*/
/* 		    <h3><label for="fromEmail">Your Email</label></h3></br>*/
/* 		    <input id="fromEmail" type="text" name="fromEmail" value="{% if message is defined %}{{ message.fromEmail }}{% endif %}">*/
/* 		    {{ message is defined and message ? errorList(message.getErrors('fromEmail')) }}*/
/* 		</div>*/
/* 		<div class="contactField">*/
/* 		    <h3><label for="subject">Subject</label></h3></br>*/
/* 		    <input id="subject" type="text" name="subject" value="{% if message is defined %}{{ message.subject }}{% endif %}">*/
/* 		    {{ message is defined and message ? errorList(message.getErrors('subject')) }}*/
/* 	    </div>*/
/* 	    <div class="contactField">*/
/* 		    <h3><label for="message">Message</label></h3></br>*/
/* 		    <textarea rows="10" cols="40" id="message" name="message">{% if message is defined %}{{ message.message }}{% endif %}</textarea>*/
/* 		    {{ message is defined and message ? errorList(message.getErrors('message')) }}*/
/* 	    </div>*/
/* 	   	<div class="contactField"></br>*/
/* 		    <input type="submit" value="Send">*/
/* 	    </div>*/
/* 	</form>*/
/* </div>*/
/* */
/* {% endblock %}*/
