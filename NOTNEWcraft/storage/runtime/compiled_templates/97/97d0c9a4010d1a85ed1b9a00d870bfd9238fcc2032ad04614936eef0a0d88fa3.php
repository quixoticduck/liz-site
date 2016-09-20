<?php

/* _includes/nav */
class __TwigTemplate_06b49c011bd380108c73148c0bb4f8ad67a329c94b0fffc06450e1066e0537d0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav>
\t<ul>
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
            // line 4
            echo "\t\t\t";
            if ($context["item"]) {
                // line 5
                echo "\t\t\t\t";
                $context["itemIsSelected"] = (( !array_key_exists("selectedItem", $context) && $this->getAttribute($context["loop"], "first", array())) || (array_key_exists("selectedItem", $context) && ((isset($context["selectedItem"]) ? $context["selectedItem"] : null) == $context["itemId"])));
                // line 6
                echo "<li><a";
                if ((isset($context["itemIsSelected"]) ? $context["itemIsSelected"] : null)) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 8
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/nav";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  58 => 8,  46 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav>*/
/* 	<ul>*/
/* 		{% for itemId, item in items %}*/
/* 			{% if item %}*/
/* 				{% set itemIsSelected = ((selectedItem is not defined and loop.first) or (selectedItem is defined and selectedItem == itemId)) -%}*/
/* 				<li><a{% if itemIsSelected %} class="sel"{% endif %} href="{{ item.url }}">{{ item.label }}</a></li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* </nav>*/
/* */
