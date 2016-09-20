<?php

/* settings/fields */
class __TwigTemplate_5b834c54f9c0961e45cf5629e7c55650954046c95e40f771ca6fc7510e06eb58 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/fields", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->userSession->requireAdmin();
        // line 4
        $context["title"] = \Craft\Craft::t("Fields");
        // line 6
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields";
        // line 8
        $_js = "js/fields.js";
        \Craft\craft()->templates->includeJsResource($_js);
        // line 10
        \Craft\craft()->templates->includeTranslations(
        	"What do you want to name your group?",
        	"Could not create the group:",
        	"Could not create the group:",
        	"Are you sure you want to delete this group and all its fields?",
        	"Could not delete the group.",
        	"Group renamed."
        );
        // line 19
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 24
        $context["groups"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllGroups", array(0 => "id"), "method");
        // line 26
        if (array_key_exists("groupId", $context)) {
            // line 27
            if ( !$this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), (isset($context["groupId"]) ? $context["groupId"] : null), array(), "array", true, true)) {
                // line 28
                throw new \Craft\HttpException(404);
            }
            // line 31
            $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), (isset($context["groupId"]) ? $context["groupId"] : null), array(), "array"), "getFields", array(), "method");
        } else {
            // line 33
            $context["fields"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "fields", array()), "getAllFields", array(), "method");
        }
        // line 37
        ob_start();
        // line 38
        echo "
\t<nav>
\t\t<ul id=\"groups\">
\t\t\t<li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/fields"), "html", null, true);
        echo "\"";
        if ( !array_key_exists("groupId", $context)) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All Fields"), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 43
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/" . $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\"";
            if ((array_key_exists("groupId", $context) && ($this->getAttribute($context["group"], "id", array()) == (isset($context["groupId"]) ? $context["groupId"] : null)))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["group"], "name", array())), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</ul>
\t</nav>

\t<div class=\"buttons\">
\t\t<div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 49
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Group"), "html", null, true);
        echo "</div>

\t\t";
        // line 51
        if (array_key_exists("groupId", $context)) {
            // line 52
            echo "\t\t\t<div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a data-action=\"rename\" role=\"button\">";
            // line 55
            echo twig_escape_filter($this->env, \Craft\Craft::t("Rename selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a data-action=\"delete\" role=\"button\">";
            // line 56
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 60
        echo "\t</div>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 64
        ob_start();
        // line 65
        echo "
\t<p id=\"nofields\"";
        // line 66
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 67
        if (array_key_exists("groupId", $context)) {
            // line 68
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This group doesn’t have any fields yet."), "html", null, true);
            echo "
\t\t";
        } else {
            // line 70
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No fields exist yet."), "html", null, true);
            echo "
\t\t";
        }
        // line 72
        echo "\t</p>

\t";
        // line 74
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 75
            echo "\t\t<table id=\"fields\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 77
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 78
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 79
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 80
            if ( !array_key_exists("groupId", $context)) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                echo "</th>";
            }
            // line 81
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 85
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 86
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($context["field"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["field"], "name", array())), "html", null, true);
                echo "</a>";
                // line 87
                if ($this->getAttribute($context["field"], "required", array())) {
                    echo " <span class=\"required\"></span>";
                }
                // line 88
                echo "</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 89
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "handle", array()), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 90
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 91
                $context["fieldType"] = $this->getAttribute($context["field"], "getFieldType", array(), "method");
                // line 92
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["fieldType"]) ? $context["fieldType"] : null)) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fieldType"]) ? $context["fieldType"] : null), "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t<span class=\"error\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 98
                if ( !array_key_exists("groupId", $context)) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getAttribute($context["field"], "group", array()), "name", array())), "html", null, true);
                    echo "</td>";
                }
                // line 99
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 105
        echo "
\t";
        // line 106
        if ((isset($context["groups"]) ? $context["groups"] : null)) {
            // line 107
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 108
            $context["newFieldUrl"] = \Craft\UrlHelper::getUrl("settings/fields/new", ((array_key_exists("groupId", $context)) ? (array("groupId" => (isset($context["groupId"]) ? $context["groupId"] : null))) : (null)));
            // line 109
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["newFieldUrl"]) ? $context["newFieldUrl"] : null), "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Field"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        // line 112
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 116
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tdeleteAction: 'fields/deleteField'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 123
        $_js = (isset($context["js"]) ? $context["js"] : null);
        \Craft\craft()->templates->includeJs($_js);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 3,  298 => 123,  291 => 116,  287 => 112,  278 => 109,  276 => 108,  273 => 107,  271 => 106,  268 => 105,  263 => 102,  253 => 99,  245 => 98,  242 => 97,  236 => 95,  230 => 93,  227 => 92,  225 => 91,  221 => 90,  215 => 89,  212 => 88,  208 => 87,  201 => 86,  194 => 85,  190 => 84,  185 => 81,  179 => 80,  175 => 79,  171 => 78,  167 => 77,  163 => 75,  161 => 74,  157 => 72,  151 => 70,  145 => 68,  143 => 67,  137 => 66,  134 => 65,  132 => 64,  128 => 60,  121 => 56,  117 => 55,  110 => 52,  108 => 51,  103 => 49,  97 => 45,  80 => 43,  76 => 42,  66 => 41,  61 => 38,  59 => 37,  56 => 33,  53 => 31,  50 => 28,  48 => 27,  46 => 26,  44 => 24,  42 => 19,  33 => 10,  30 => 8,  28 => 6,  26 => 4,  24 => 1,  11 => 3,);
    }
}
