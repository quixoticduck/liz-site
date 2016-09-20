<?php

/* settings/assets/transforms/_index */
class __TwigTemplate_2d4aa8c0fc0f193d03b8007604d504eafc60dcdcdc992083ac90fd6598f8fb72 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("settings/assets/_layout", "settings/assets/transforms/_index", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "settings/assets/_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["selectedNavItem"] = "transforms";
        // line 4
        $context["docsUrl"] = "http://craftcms.com/docs/image-transforms";
        // line 46
        ob_start();
        // line 47
        echo "\tnew Craft.AdminTable({
\t\ttableSelector: '#transforms',
\t\tnoObjectsSelector: '#notransforms',
\t\tsortable: false,
\t\tdeleteAction: 'assetTransforms/deleteTransform'
\t});
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<p id=\"notransforms\"";
        if (twig_length_filter($this->env, (isset($context["transforms"]) ? $context["transforms"] : null))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("No image transforms exist yet."), "html", null, true);
        echo "
</p>

";
        // line 12
        if (twig_length_filter($this->env, (isset($context["transforms"]) ? $context["transforms"] : null))) {
            // line 13
            echo "\t<table id=\"transforms\" class=\"data fullwidth collapsible\">
\t\t<thead>
\t\t\t<th scope=\"col\">";
            // line 15
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 16
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Mode"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Dimensions"), "html", null, true);
            echo "</th>
\t\t\t<th scope=\"col\">";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Format"), "html", null, true);
            echo "</th>
\t\t\t<td class=\"thin\"></td>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transforms"]) ? $context["transforms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["transform"]) {
                // line 24
                echo "\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transform"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["transform"], "name", array())), "html", null, true);
                echo "\">
\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 25
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/assets/transforms/" . $this->getAttribute($context["transform"], "handle", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["transform"], "name", array())), "html", null, true);
                echo "</a></th>
                <td data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transform"], "handle", array()), "html", null, true);
                echo "</code></td>
\t\t\t\t<td data-title=\"";
                // line 27
                echo twig_escape_filter($this->env, \Craft\Craft::t("Mode"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 28
                if ($this->getAttribute($context["transform"], "mode", array())) {
                    // line 29
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transformModes"]) ? $context["transformModes"] : null), $this->getAttribute($context["transform"], "mode", array()), array(), "array"), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t</td>
\t\t\t\t<td data-title=\"";
                // line 32
                echo twig_escape_filter($this->env, \Craft\Craft::t("Dimensions"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["transform"], "width", array())) ? ($this->getAttribute($context["transform"], "width", array())) : (\Craft\Craft::t("Auto"))), "html", null, true);
                echo " &times; ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["transform"], "height", array())) ? ($this->getAttribute($context["transform"], "height", array())) : (\Craft\Craft::t("Auto"))), "html", null, true);
                echo "</td>
\t\t\t\t<td data-title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Format"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["transform"], "format", array())) ? (twig_capitalize_string_filter($this->env, $this->getAttribute($context["transform"], "format", array()))) : (\Craft\Craft::t("Auto"))), "html", null, true);
                echo "</td>
\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 34
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t</tbody>
\t</table>
";
        }
        // line 40
        echo "
<div class=\"buttons\">
\t<a class=\"btn submit add icon\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/assets/transforms/new"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New image transform"), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "settings/assets/transforms/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 42,  158 => 40,  153 => 37,  144 => 34,  138 => 33,  130 => 32,  127 => 31,  121 => 29,  119 => 28,  115 => 27,  109 => 26,  101 => 25,  94 => 24,  90 => 23,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 13,  61 => 12,  55 => 9,  48 => 8,  45 => 7,  41 => 1,  31 => 47,  29 => 46,  27 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends "settings/assets/_layout" %}*/
/* {% set selectedNavItem = 'transforms' %}*/
/* */
/* {% set docsUrl = 'http://craftcms.com/docs/image-transforms' %}*/
/* */
/* */
/* {% block content %}*/
/* <p id="notransforms"{% if transforms|length %} class="hidden"{% endif %}>*/
/* 	{{ "No image transforms exist yet."|t }}*/
/* </p>*/
/* */
/* {% if transforms|length %}*/
/* 	<table id="transforms" class="data fullwidth collapsible">*/
/* 		<thead>*/
/* 			<th scope="col">{{ "Name"|t }}</th>*/
/* 			<th scope="col">{{ "Handle"|t }}</th>*/
/* 			<th scope="col">{{ "Mode"|t }}</th>*/
/* 			<th scope="col">{{ "Dimensions"|t }}</th>*/
/* 			<th scope="col">{{ "Format"|t }}</th>*/
/* 			<td class="thin"></td>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for transform in transforms %}*/
/* 			<tr data-id="{{ transform.id }}" data-name="{{ transform.name|t }}">*/
/* 				<th scope="row" data-title="{{ 'Name'|t }}"><a href="{{ url('settings/assets/transforms/' ~ transform.handle) }}">{{ transform.name|t }}</a></th>*/
/*                 <td data-title="{{ 'Handle'|t }}"><code>{{ transform.handle }}</code></td>*/
/* 				<td data-title="{{ 'Mode'|t }}">*/
/* 					{% if transform.mode %}*/
/* 						{{ transformModes[transform.mode] }}*/
/* 					{%  endif %}*/
/* 				</td>*/
/* 				<td data-title="{{ 'Dimensions'|t }}">{{ transform.width ? transform.width : 'Auto'|t }} &times; {{ transform.height ? transform.height : 'Auto'|t }}</td>*/
/* 				<td data-title="{{ 'Format'|t }}">{{ transform.format ? transform.format|capitalize : 'Auto'|t }}</td>*/
/* 				<td class="thin"><a class="delete icon" title="{{ 'Delete'|t }}" role="button"></a></td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% endif %}*/
/* */
/* <div class="buttons">*/
/* 	<a class="btn submit add icon" href="{{ url('settings/assets/transforms/new') }}">{{ "New image transform"|t }}</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% includejs %}*/
/* 	new Craft.AdminTable({*/
/* 		tableSelector: '#transforms',*/
/* 		noObjectsSelector: '#notransforms',*/
/* 		sortable: false,*/
/* 		deleteAction: 'assetTransforms/deleteTransform'*/
/* 	});*/
/* {% endincludejs %}*/
/* */
