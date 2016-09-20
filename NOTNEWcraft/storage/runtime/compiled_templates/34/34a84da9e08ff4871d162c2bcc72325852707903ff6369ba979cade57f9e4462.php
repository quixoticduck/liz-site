<?php

/* _components/fieldtypes/Tags/input */
class __TwigTemplate_720528b6b3f44a3a2c73e274c3afff8db363111eae7b9d86ccf4127b031a1688 extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && (isset($context["name"]) ? $context["name"] : null))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ((isset($context["elements"]) ? $context["elements"] : null)) : (array()));
        // line 6
        $context["criteria"] = (((array_key_exists("criteria", $context) && (isset($context["criteria"]) ? $context["criteria"] : null))) ? ((isset($context["criteria"]) ? $context["criteria"] : null)) : (null));
        // line 7
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && (isset($context["sourceElementId"]) ? $context["sourceElementId"] : null))) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : (null));
        // line 9
        $context["__internal_acb950fc8b11ba83fe0430d7e71880d7439c35e193fe744f312dc4c7937eb2a0"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Tags/input", 9);
        // line 10
        echo "
<div id=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"elementselect tagselect\">
\t<div class=\"elements\">
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "\t\t\t";
            $this->loadTemplate("_elements/element", "_components/fieldtypes/Tags/input", 14)->display(array_merge($context, array("context" => "field")));
            // line 15
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</div>

\t<div class=\"texticon add icon\">
\t\t";
        // line 19
        echo $context["__internal_acb950fc8b11ba83fe0430d7e71880d7439c35e193fe744f312dc4c7937eb2a0"]->gettext(array("width" => "auto", "placeholder" =>         // line 21
(isset($context["selectionLabel"]) ? $context["selectionLabel"] : null)));
        // line 22
        echo "
\t\t<div class=\"spinner hidden\"></div>
\t</div>
</div>

";
        // line 27
        ob_start();
        // line 28
        echo "\tnew Craft.TagSelectInput(
\t\t\"";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId((isset($context["id"]) ? $context["id"] : null)), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName((isset($context["name"]) ? $context["name"] : null)), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["tagGroupId"]) ? $context["tagGroupId"] : null), "html", null, true);
        echo ",
\t\t";
        // line 32
        echo twig_escape_filter($this->env, (((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) ? ((isset($context["sourceElementId"]) ? $context["sourceElementId"] : null)) : ("null")), "html", null, true);
        echo "
\t);
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Tags/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  105 => 31,  101 => 30,  97 => 29,  94 => 28,  92 => 27,  85 => 22,  83 => 21,  82 => 19,  77 => 16,  63 => 15,  60 => 14,  43 => 13,  38 => 11,  35 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if name is defined and name %}*/
/* 	<input type="hidden" name="{{ name }}" value="">*/
/* {% endif -%}*/
/* */
/* {% set elements = (elements is defined ? elements : []) -%}*/
/* {% set criteria = (criteria is defined and criteria ? criteria : null) -%}*/
/* {% set sourceElementId = (sourceElementId is defined and sourceElementId ? sourceElementId : null) -%}*/
/* */
/* {% from "_includes/forms" import text %}*/
/* */
/* <div id="{{ id }}" class="elementselect tagselect">*/
/* 	<div class="elements">*/
/* 		{% for element in elements %}*/
/* 			{% include "_elements/element" with { context: 'field' } %}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* */
/* 	<div class="texticon add icon">*/
/* 		{{ text({*/
/* 			width: 'auto',*/
/* 			placeholder: selectionLabel,*/
/* 		}) }}*/
/* 		<div class="spinner hidden"></div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% includejs %}*/
/* 	new Craft.TagSelectInput(*/
/* 		"{{ id   | namespaceInputId   | e('js') }}",*/
/* 		"{{ name | namespaceInputName | e('js') }}",*/
/* 		{{ tagGroupId }},*/
/* 		{{ sourceElementId ?: 'null' }}*/
/* 	);*/
/* {% endincludejs %}*/
/* */
