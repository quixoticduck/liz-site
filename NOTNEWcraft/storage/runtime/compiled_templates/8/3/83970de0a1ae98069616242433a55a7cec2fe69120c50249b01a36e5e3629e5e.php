<?php

/* settings/sections/_entrytypes/index */
class __TwigTemplate_83970de0a1ae98069616242433a55a7cec2fe69120c50249b01a36e5e3629e5e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_entrytypes/index", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["entryTypes"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getEntryTypes", array(), "method");
        // line 4
        $context["multiple"] = (twig_length_filter($this->env, (isset($context["entryTypes"]) ? $context["entryTypes"] : null)) > 1);
        // line 6
        ob_start();
        // line 7
        echo "\t<table id=\"entrytypes\" class=\"data fullwidth collapsible\">
\t\t<thead>
\t\t\t<th scope=\"col\">";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 10
        echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
        echo "</th>
\t\t\t";
        // line 11
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 12
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t";
        }
        // line 15
        echo "\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getEntryTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
            // line 18
            echo "\t\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entryType"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["entryType"], "name", array())), "html", null, true);
            echo "\">
\t\t\t\t\t<th scope=\"row\" data-title=\"";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((("settings/sections/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array())) . "/entrytypes/") . $this->getAttribute($context["entryType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["entryType"], "name", array())), "html", null, true);
            echo "</a></th>
\t\t\t\t\t<td data-title=\"";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entryType"], "handle", array()), "html", null, true);
            echo "</code></td>
\t\t\t\t\t";
            // line 21
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 22
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tbody>
\t</table>

\t";
        // line 30
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "single")) {
            // line 31
            echo "\t\t<div class=\"buttons\">
\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("settings/sections/" . $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array())) . "/entrytypes/new")), "html", null, true);
            echo "\" class=\"btn submit add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry Type"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "single")) {
            // line 39
            ob_start();
            // line 40
            echo "\t\tnew Craft.AdminTable({
\t\t\ttableSelector: '#entrytypes',
\t\t\tdeleteAction: 'sections/deleteEntryType',
\t\t\tminObjects: 1,
\t\t\tsortable: true,
\t\t\treorderAction: 'sections/reorderEntryTypes',
\t\t\tconfirmDeleteMessage: '";
            // line 46
            echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all entries that use it?"), "html", null, true);
            echo "',
\t\t});
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 49
            $_js = (isset($context["js"]) ? $context["js"] : null);
            \Craft\craft()->templates->includeJs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 1,  134 => 49,  128 => 46,  120 => 40,  118 => 39,  116 => 38,  107 => 32,  104 => 31,  102 => 30,  97 => 27,  90 => 25,  85 => 23,  80 => 22,  78 => 21,  72 => 20,  64 => 19,  57 => 18,  53 => 17,  49 => 15,  44 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 7,  28 => 6,  26 => 4,  24 => 3,  11 => 1,);
    }
}
