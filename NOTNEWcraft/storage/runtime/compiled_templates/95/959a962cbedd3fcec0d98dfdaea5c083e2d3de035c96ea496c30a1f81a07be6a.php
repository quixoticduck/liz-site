<?php

/* settings/assets/sources/_index */
class __TwigTemplate_f3f3acc7eb1b3adc5ff7371166fe84ec7adddf138998bf2bf55000a1bcb0d5cd extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("settings/assets/_layout", "settings/assets/sources/_index", 1);
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
        $context["selectedNavItem"] = "sources";
        // line 4
        $context["docsUrl"] = "http://craftcms.com/docs/assets";
        // line 41
        ob_start();
        // line 42
        echo "\tvar adminTable = new Craft.AdminTable({
\t\ttableSelector: '#sources',
\t\tnoObjectsSelector: '#nosources',
\t\tsortable: true,
\t\treorderAction: 'assetSources/reorderSources',
\t\tdeleteAction: 'assetSources/deleteSource',
\t\tonDeleteObject: function()
\t\t{
\t\t\t// Hide the Assets tab if that was the last one
\t\t\tif (adminTable.totalObjects == 0)
\t\t\t{
\t\t\t\t\$('#nav-assets').remove();
\t\t\t}
\t\t}
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
        echo "\t<p id=\"nosources\"";
        if (twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("No asset sources exist yet."), "html", null, true);
        echo "
\t</p>

\t";
        // line 12
        if (twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null))) {
            // line 13
            echo "\t\t";
            $context["sortable"] = (twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 1);
            // line 14
            echo "
\t\t<table id=\"sources\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 18
            if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "</th>";
            }
            // line 19
            echo "\t\t\t\t";
            if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                echo "<td class=\"thin\"></td>";
            }
            // line 20
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 24
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["source"], "name", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 25
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/assets/sources/" . $this->getAttribute($context["source"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["source"], "name", array())), "html", null, true);
                echo "</a></th>
\t\t\t\t\t\t";
                // line 26
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null))) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["source"], "getSourceType", array(), "method"), "getName", array(), "method"), "html", null, true);
                    echo "</td>";
                }
                // line 27
                echo "\t\t\t\t\t\t";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<td class=\"thin\"><a class=\"move icon\" title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                    echo "\" role=\"button\"></a></td>";
                }
                // line 28
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 34
        echo "
\t<div class=\"buttons\">
\t\t<a class=\"btn submit add icon\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/assets/sources/new"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New asset source"), "html", null, true);
        echo "</a>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "settings/assets/sources/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 36,  149 => 34,  144 => 31,  134 => 28,  127 => 27,  119 => 26,  111 => 25,  104 => 24,  100 => 23,  95 => 20,  90 => 19,  84 => 18,  80 => 17,  75 => 14,  72 => 13,  70 => 12,  64 => 9,  57 => 8,  54 => 7,  50 => 1,  31 => 42,  29 => 41,  27 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends "settings/assets/_layout" %}*/
/* {% set selectedNavItem = 'sources' %}*/
/* */
/* {% set docsUrl = 'http://craftcms.com/docs/assets' %}*/
/* */
/* */
/* {% block content %}*/
/* 	<p id="nosources"{% if sources|length %} class="hidden"{% endif %}>*/
/* 		{{ "No asset sources exist yet."|t }}*/
/* 	</p>*/
/* */
/* 	{% if sources|length %}*/
/* 		{% set sortable  = (sources|length > 1) %}*/
/* */
/* 		<table id="sources" class="data fullwidth collapsible">*/
/* 			<thead>*/
/* 				<th scope="col">{{ "Name"|t }}</th>*/
/* 				{% if CraftEdition == CraftPro %}<th scope="col">{{ "Type"|t }}</th>{% endif %}*/
/* 				{% if sortable %}<td class="thin"></td>{% endif %}*/
/* 				<td class="thin"></td>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{% for source in sources %}*/
/* 					<tr data-id="{{ source.id }}" data-name="{{ source.name|t }}">*/
/* 						<th scope="row" data-title="{{ 'Name'|t }}"><a href="{{ url('settings/assets/sources/' ~ source.id) }}">{{ source.name|t }}</a></th>*/
/* 						{% if CraftEdition == CraftPro %}<td data-title="{{ 'Type'|t }}">{{ source.getSourceType().getName() }}</td>{% endif %}*/
/* 						{% if sortable %}<td class="thin"><a class="move icon" title="{{ 'Reorder'|t }}" role="button"></a></td>{% endif %}*/
/* 						<td class="thin"><a class="delete icon" title="{{ 'Delete'|t }}" role="button"></a></td>*/
/* 					</tr>*/
/* 				{% endfor %}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	{% endif %}*/
/* */
/* 	<div class="buttons">*/
/* 		<a class="btn submit add icon" href="{{ url('settings/assets/sources/new') }}">{{ "New asset source"|t }}</a>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* */
/* {% includejs %}*/
/* 	var adminTable = new Craft.AdminTable({*/
/* 		tableSelector: '#sources',*/
/* 		noObjectsSelector: '#nosources',*/
/* 		sortable: true,*/
/* 		reorderAction: 'assetSources/reorderSources',*/
/* 		deleteAction: 'assetSources/deleteSource',*/
/* 		onDeleteObject: function()*/
/* 		{*/
/* 			// Hide the Assets tab if that was the last one*/
/* 			if (adminTable.totalObjects == 0)*/
/* 			{*/
/* 				$('#nav-assets').remove();*/
/* 			}*/
/* 		}*/
/* 	});*/
/* {% endincludejs %}*/
/* */
