<?php

/* _components/fieldtypes/Assets/settings */
class __TwigTemplate_bbee5f767e69c963be88be56181de4c1486d2e5ed3222b2022a1bfa45db04270 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Assets/settings", 1);
        // line 2
        echo "
";
        // line 27
        echo "
";
        // line 28
        $context["__internal_913f390f08e85c881c3a10f3b7b45db10d1e11714cb40fb49c3db733127a2723"] = $this;
        // line 29
        echo "
";
        // line 30
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Restrict uploads to a single folder?"), "id" => "useSingleFolder-toggle", "name" => "useSingleFolder", "class" => "use-single-folder-cb", "value" => 1, "checked" => $this->getAttribute(        // line 36
(isset($context["settings"]) ? $context["settings"] : null), "useSingleFolder", array()), "toggle" => "single-folder-settings", "reverseToggle" => "multi-folder-settings"));
        // line 39
        echo "

";
        // line 41
        $context["uploadLocationNote"] = \Craft\Craft::t("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>.");
        // line 42
        if ((isset($context["isMatrix"]) ? $context["isMatrix"] : null)) {
            // line 43
            echo "\t";
            $context["uploadLocationNote"] = $this->env->getExtension('craft')->replaceFilter((isset($context["uploadLocationNote"]) ? $context["uploadLocationNote"] : null), array("{slug}" => "{owner.slug}", "{author.username}" => "{owner.author.username}"));
        }
        // line 48
        echo "
<div id=\"multi-folder-settings\"";
        // line 49
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "useSingleFolder", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 50
        if ((isset($context["folderOptions"]) ? $context["folderOptions"] : null)) {
            // line 51
            echo "\t\t";
            echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env,             // line 53
(isset($context["type"]) ? $context["type"] : null)))), "id" => "sources", "name" => "sources", "options" =>             // line 56
(isset($context["folderOptions"]) ? $context["folderOptions"] : null), "values" => $this->getAttribute(            // line 57
(isset($context["settings"]) ? $context["settings"] : null), "sources", array())));
            // line 58
            echo "
\t";
        } else {
            // line 60
            echo "\t\t";
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Sources")), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 62
            echo "
\t";
        }
        // line 64
        echo "

\t";
        // line 66
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Default Upload Location"), "instructions" => ((\Craft\Craft::t("Where should files be uploaded when they are dragged directly onto the field, or uploaded from the front end?") . " ") .         // line 68
(isset($context["uploadLocationNote"]) ? $context["uploadLocationNote"] : null)), "errors" => $this->getAttribute(        // line 69
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "defaultUploadLocationSubpath"), "method")), $context["__internal_913f390f08e85c881c3a10f3b7b45db10d1e11714cb40fb49c3db733127a2723"]->getuploadLocationInput("defaultUploadLocation",         // line 70
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["sourceOptions"]) ? $context["sourceOptions"] : null)));
        echo "
</div>

<div id=\"single-folder-settings\"";
        // line 73
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "useSingleFolder", array())) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 74
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Upload Location"), "instructions" =>         // line 76
(isset($context["uploadLocationNote"]) ? $context["uploadLocationNote"] : null), "errors" => $this->getAttribute(        // line 77
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "singleUploadLocationSubpath"), "method")), $context["__internal_913f390f08e85c881c3a10f3b7b45db10d1e11714cb40fb49c3db733127a2723"]->getuploadLocationInput("singleUploadLocation",         // line 78
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["sourceOptions"]) ? $context["sourceOptions"] : null)));
        echo "
</div>

";
        // line 81
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Restrict allowed file types?"), "class" => "restrictFiles", "id" => "restrictFiles", "name" => "restrictFiles", "value" => 1, "checked" => $this->getAttribute(        // line 87
(isset($context["settings"]) ? $context["settings"] : null), "restrictFiles", array()), "toggle" => "restrict-allowed-types"));
        // line 89
        echo "

<div id=\"restrict-allowed-types\"";
        // line 91
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "restrictFiles", array())) {
            echo " class=\"hidden indent\"";
        }
        echo ">
\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fileKindOptions"]) ? $context["fileKindOptions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 93
            echo "\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => $this->getAttribute(            // line 94
$context["option"], "label", array()), "id" => ("allowedKinds-" . $this->getAttribute(            // line 95
$context["option"], "value", array())), "name" => "allowedKinds[]", "value" => $this->getAttribute(            // line 97
$context["option"], "value", array()), "checked" => twig_in_filter($this->getAttribute(            // line 98
$context["option"], "value", array()), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "allowedKinds", array()))));
            // line 99
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "</div>

";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["targetLocaleField"]) ? $context["targetLocaleField"] : null), "html", null, true);
        echo "

";
        // line 105
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env,         // line 107
(isset($context["type"]) ? $context["type"] : null)))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute(        // line 110
(isset($context["settings"]) ? $context["settings"] : null), "limit", array()), "size" => 2, "errors" => $this->getAttribute(        // line 112
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "limit"), "method")));
        // line 113
        echo "

";
        // line 115
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Selection Label"), "instructions" => \Craft\Craft::t("Enter the text you want to appear on the {type} selection input.", array("type" => twig_lower_filter($this->env,         // line 117
(isset($context["type"]) ? $context["type"] : null)))), "id" => "selectionLabel", "name" => "selectionLabel", "value" => $this->getAttribute(        // line 120
(isset($context["settings"]) ? $context["settings"] : null), "selectionLabel", array()), "size" => 25, "errors" => $this->getAttribute(        // line 122
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "selectionLabel"), "method")));
        // line 123
        echo "
";
    }

    // line 3
    public function getuploadLocationInput($__name__ = null, $__settings__ = null, $__sourceOptions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "settings" => $__settings__,
            "sourceOptions" => $__sourceOptions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "\t";
            $context["__internal_3c89051f51efc8d0921e8e883e3b201cd7f3e698605458e008a519f0ebf569fd"] = $this->loadTemplate("_includes/forms", "_components/fieldtypes/Assets/settings", 4);
            // line 5
            echo "\t<table class=\"inputs fullwidth\">
\t\t<tr>
\t\t\t<td class=\"thin\">
\t\t\t\t";
            // line 8
            echo $context["__internal_3c89051f51efc8d0921e8e883e3b201cd7f3e698605458e008a519f0ebf569fd"]->getselect(array("id" => (            // line 9
(isset($context["name"]) ? $context["name"] : null) . "Source"), "name" => (            // line 10
(isset($context["name"]) ? $context["name"] : null) . "Source"), "options" =>             // line 11
(isset($context["sourceOptions"]) ? $context["sourceOptions"] : null), "value" => $this->getAttribute(            // line 12
(isset($context["settings"]) ? $context["settings"] : null), ((isset($context["name"]) ? $context["name"] : null) . "Source"), array(), "array")));
            // line 13
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 16
            echo $context["__internal_3c89051f51efc8d0921e8e883e3b201cd7f3e698605458e008a519f0ebf569fd"]->gettext(array("id" => (            // line 17
(isset($context["name"]) ? $context["name"] : null) . "Subpath"), "class" => "ltr", "name" => (            // line 19
(isset($context["name"]) ? $context["name"] : null) . "Subpath"), "value" => $this->getAttribute(            // line 20
(isset($context["settings"]) ? $context["settings"] : null), ((isset($context["name"]) ? $context["name"] : null) . "Subpath"), array(), "array"), "placeholder" => \Craft\Craft::t("path/to/subfolder")));
            // line 22
            echo "
\t\t\t</td>
\t\t</tr>
\t</table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 22,  198 => 20,  197 => 19,  196 => 17,  195 => 16,  190 => 13,  188 => 12,  187 => 11,  186 => 10,  185 => 9,  184 => 8,  179 => 5,  176 => 4,  162 => 3,  157 => 123,  155 => 122,  154 => 120,  153 => 117,  152 => 115,  148 => 113,  146 => 112,  145 => 110,  144 => 107,  143 => 105,  138 => 103,  134 => 101,  127 => 99,  125 => 98,  124 => 97,  123 => 95,  122 => 94,  120 => 93,  116 => 92,  110 => 91,  106 => 89,  104 => 87,  103 => 81,  97 => 78,  96 => 77,  95 => 76,  94 => 74,  88 => 73,  82 => 70,  81 => 69,  80 => 68,  79 => 66,  75 => 64,  71 => 62,  68 => 60,  64 => 58,  62 => 57,  61 => 56,  60 => 53,  58 => 51,  56 => 50,  50 => 49,  47 => 48,  43 => 43,  41 => 42,  39 => 41,  35 => 39,  33 => 36,  32 => 30,  29 => 29,  27 => 28,  24 => 27,  21 => 2,  19 => 1,);
    }
}
