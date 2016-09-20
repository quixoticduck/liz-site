<?php

/* settings/general/_index */
class __TwigTemplate_c868e56093700f44f916058b1734b4847284ab0d2045d405123da5d76e7dafa3 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/general/_index", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/general/_index", 2);
        // line 3
        $context["title"] = \Craft\Craft::t("General Settings");
        // line 5
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 16
        $context["__internal_b3ed3b803e4159cd51864109db5c2fc32e672dcaa5b347b895678c9e606cb03b"] = $this;
        // line 19
        ob_start();
        // line 20
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut>
\t\t<input type=\"hidden\" name=\"action\" value=\"systemSettings/saveGeneralSettings\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">
\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 25
        echo $context["forms"]->getlightswitchField(array("first" => true, "label" => \Craft\Craft::t("System Status"), "warning" => ((($this->getAttribute($this->getAttribute(        // line 28
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "isSystemOn", array()) === true)) ? ($context["__internal_b3ed3b803e4159cd51864109db5c2fc32e672dcaa5b347b895678c9e606cb03b"]->getconfigWarning("isSystemOn")) : ("")), "id" => "on", "name" => "on", "on" => $this->getAttribute(        // line 31
(isset($context["info"]) ? $context["info"] : null), "on", array())));
        // line 32
        echo "

\t\t";
        // line 34
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site Name"), "warning" => (($this->getAttribute($this->getAttribute(        // line 36
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "siteName", array())) ? ($context["__internal_b3ed3b803e4159cd51864109db5c2fc32e672dcaa5b347b895678c9e606cb03b"]->getconfigWarning("siteName")) : ("")), "id" => "siteName", "name" => "siteName", "value" => $this->getAttribute(        // line 39
(isset($context["info"]) ? $context["info"] : null), "siteName", array()), "autofocus" => true, "required" => true, "errors" => $this->getAttribute(        // line 42
(isset($context["info"]) ? $context["info"] : null), "getErrors", array(0 => "siteName"), "method")));
        // line 43
        echo "

\t\t";
        // line 45
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Site URL"), "warning" => (($this->getAttribute($this->getAttribute(        // line 47
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "siteUrl", array())) ? ($context["__internal_b3ed3b803e4159cd51864109db5c2fc32e672dcaa5b347b895678c9e606cb03b"]->getconfigWarning("siteUrl")) : ("")), "id" => "siteUrl", "class" => "ltr", "name" => "siteUrl", "value" => $this->getAttribute(        // line 51
(isset($context["info"]) ? $context["info"] : null), "siteUrl", array()), "required" => true, "errors" => $this->getAttribute(        // line 53
(isset($context["info"]) ? $context["info"] : null), "getErrors", array(0 => "siteUrl"), "method")));
        // line 54
        echo "

\t\t";
        // line 56
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Timezone"), "warning" => (($this->getAttribute($this->getAttribute(        // line 58
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "timezone", array())) ? ($context["__internal_b3ed3b803e4159cd51864109db5c2fc32e672dcaa5b347b895678c9e606cb03b"]->getconfigWarning("timezone")) : ("")), "id" => "timezone", "name" => "timezone", "value" => $this->getAttribute(        // line 61
(isset($context["info"]) ? $context["info"] : null), "timezone", array()), "options" =>         // line 62
(isset($context["timezoneOptions"]) ? $context["timezoneOptions"] : null)));
        // line 63
        echo "

\t\t<div class=\"buttons\">
\t\t\t<input class=\"btn submit\" type=\"submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>

\t";
        // line 70
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 71
            echo "\t\t<hr>

\t\t";
            // line 73
            \Craft\craft()->templates->includeTranslations(
            	"Are you sure you want to delete the logo?"
            );
            // line 76
            echo "
\t\t";
            // line 77
            $_js = "lib/fileupload/jquery.ui.widget.js";
            \Craft\craft()->templates->includeJsResource($_js);
            // line 78
            echo "\t\t";
            $_js = "lib/fileupload/jquery.fileupload.js";
            \Craft\craft()->templates->includeJsResource($_js);
            // line 79
            echo "\t\t";
            $_js = "lib/imgareaselect/jquery.imgareaselect.pack.js";
            \Craft\craft()->templates->includeJsResource($_js);
            // line 80
            echo "\t\t";
            $_js = "js/rebrand.js";
            \Craft\craft()->templates->includeJsResource($_js);
            // line 81
            echo "\t\t";
            $_js = "lib/imgareaselect/imgareaselect-animated.css";
            \Craft\craft()->templates->includeCssResource($_js);
            // line 82
            echo "\t\t";
            $_js = "css/rebrand.css";
            \Craft\craft()->templates->includeCssResource($_js);
            // line 83
            echo "
\t\t";
            // line 84
            ob_start();
            // line 85
            echo "\t\t\t";
            $this->loadTemplate("settings/general/_logo", "settings/general/_index", 85)->display($context);
            // line 86
            echo "\t\t";
            $context["logoInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 87
            echo "
\t\t";
            // line 88
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Logo")),             // line 90
(isset($context["logoInput"]) ? $context["logoInput"] : null));
            echo "

\t\t<div class=\"clear\"></div>
\t";
        }
        // line 94
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function getconfigWarning($__setting__ = null, $__file__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "file" => $__file__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo \Craft\Craft::t("This is being overridden by the {setting} config setting.", array("setting" => (((("<a href=\"http://buildwithcraft.com/docs/config-settings#" .             // line 12
(isset($context["setting"]) ? $context["setting"] : null)) . "\" target=\"_blank\">") . (isset($context["setting"]) ? $context["setting"] : null)) . "</a>")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/general/_index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 12,  166 => 11,  153 => 10,  149 => 1,  145 => 94,  138 => 90,  137 => 88,  134 => 87,  131 => 86,  128 => 85,  126 => 84,  123 => 83,  119 => 82,  115 => 81,  111 => 80,  107 => 79,  103 => 78,  100 => 77,  97 => 76,  93 => 73,  89 => 71,  87 => 70,  80 => 66,  75 => 63,  73 => 62,  72 => 61,  71 => 58,  70 => 56,  66 => 54,  64 => 53,  63 => 51,  62 => 47,  61 => 45,  57 => 43,  55 => 42,  54 => 39,  53 => 36,  52 => 34,  48 => 32,  46 => 31,  45 => 28,  44 => 25,  39 => 23,  34 => 20,  32 => 19,  30 => 16,  28 => 5,  26 => 3,  24 => 2,  11 => 1,);
    }
}
