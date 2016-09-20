<?php

/* _layouts/basecp */
class __TwigTemplate_85dff6a05354aba16d8872b77683e7803f7fec9c7da8b7de8d997986781dd864 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/base", "_layouts/basecp", 1);
        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        switch ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale", array())) {
            case "en_gb":
            {
                // line 6
                $context["datepickerLocale"] = "en-GB";
                break;
            }
            case "fr_ca":
            {
                // line 8
                $context["datepickerLocale"] = "fr-CA";
                break;
            }
            default:
            {
                // line 10
                $context["language"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleData", array(), "method"), "getLanguageID", array(0 => $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale", array())), "method");
                // line 11
                if (twig_in_filter((isset($context["language"]) ? $context["language"] : null), array(0 => "ar", 1 => "de", 2 => "fr", 3 => "it", 4 => "ja", 5 => "nb", 6 => "nl", 7 => "nn", 8 => "no"))) {
                    // line 12
                    $context["datepickerLocale"] = (isset($context["language"]) ? $context["language"] : null);
                }
            }
        }
        // line 18
        if (array_key_exists("datepickerLocale", $context)) {
            // line 19
            $_js = (("lib/datepicker-i18n/datepicker-" . (isset($context["datepickerLocale"]) ? $context["datepickerLocale"] : null)) . ".js");
            \Craft\craft()->templates->includeJsResource($_js, true);
        }
        // line 22
        $context["useCompressedJs"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "useCompressedJs", array());
        // line 23
        $_js = "js/cp.js";
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 24
        $_js = "js/craft.js";
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 25
        $_js = (("lib/garnish-0.1" . (((isset($context["useCompressedJs"]) ? $context["useCompressedJs"] : null)) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 26
        $_js = "lib/fileupload/jquery.fileupload.js";
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 27
        $_js = "lib/fileupload/jquery.ui.widget.js";
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 28
        $_js = "lib/jquery.placeholder.js";
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 29
        $_js = (("lib/velocity" . (((isset($context["useCompressedJs"]) ? $context["useCompressedJs"] : null)) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 30
        $_js = (("lib/jquery-ui" . (((isset($context["useCompressedJs"]) ? $context["useCompressedJs"] : null)) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 31
        $_js = (("lib/jquery-2.1.4" . (((isset($context["useCompressedJs"]) ? $context["useCompressedJs"] : null)) ? (".min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 32
        $_js = (("lib/xregexp-all" . (((isset($context["useCompressedJs"]) ? $context["useCompressedJs"] : null)) ? ("-min") : (""))) . ".js");
        \Craft\craft()->templates->includeJsResource($_js, true);
        // line 34
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        // line 36
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleData", array(), "method"), "getOrientation", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_foot($context, array $blocks = array())
    {
        // line 39
        echo "\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 42
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\twindow.Craft = {
\t\t\tsiteUid:               \"";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:               \"";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:             \"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:           \"";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:             \"";
        // line 53
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:           \"";
        // line 54
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:            \"";
        // line 55
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls:  ";
        // line 56
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:           ";
        // line 57
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:       \"";
        // line 58
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "getResourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:         \"";
        // line 59
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "actionTrigger", array()), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                  \"";
        // line 60
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlocale:                \"";
        // line 61
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "locale", array()), "js"), "html", null, true);
        echo "\",
\t\t\torientation:           \"";
        // line 62
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["orientation"]) ? $context["orientation"] : null), "js"), "html", null, true);
        echo "\",
\t\t\tleft:                  \"";
        // line 63
        echo ((((isset($context["orientation"]) ? $context["orientation"] : null) == "ltr")) ? ("left") : ("right"));
        echo "\",
\t\t\tright:                 \"";
        // line 64
        echo ((((isset($context["orientation"]) ? $context["orientation"] : null) == "ltr")) ? ("right") : ("left"));
        echo "\",
\t\t\tusername:              ";
        // line 65
        echo (((array_key_exists("currentUser", $context) && (isset($context["currentUser"]) ? $context["currentUser"] : null))) ? ((("\"" . twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "username", array()), "js")) . "\"")) : ("null"));
        echo ",
\t\t\tauthTimeout:           ";
        // line 66
        echo twig_escape_filter($this->env, ((!twig_in_filter($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getFirstSegment", array(), "method"), array(0 => "updates", 1 => "manualupdate"))) ? ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "getAuthTimeout", array(), "method")) : (0)), "html", null, true);
        echo ",
\t\t\tPersonal:              ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null), "html", null, true);
        echo ",
\t\t\tClient:                ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["CraftClient"]) ? $context["CraftClient"] : null), "html", null, true);
        echo ",
\t\t\tPro:                   ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["CraftPro"]) ? $context["CraftPro"] : null), "html", null, true);
        echo ",
\t\t\tedition:               ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["CraftEdition"]) ? $context["CraftEdition"] : null), "html", null, true);
        echo ",
\t\t\tisLocalized:           ";
        // line 71
        echo (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\ttranslations:          ";
        // line 72
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:         ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo ",
\t\t\tforceConfirmUnload:    ";
        // line 74
        echo (((array_key_exists("forceConfirmUnload", $context) && (isset($context["forceConfirmUnload"]) ? $context["forceConfirmUnload"] : null))) ? ("true") : ("false"));
        echo ",
\t\t\t";
        // line 75
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "enableCsrfProtection", array())) {
            // line 76
            echo "\t\t\t\tcsrfTokenValue:        \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getCsrfToken", array(), "method"), "js"), "html", null, true);
            echo "\",
\t\t\t\tcsrfTokenName:         \"";
            // line 77
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "csrfTokenName", array()), "js"), "html", null, true);
            echo "\",
\t\t\t";
        }
        // line 79
        echo "\t\t\trunTasksAutomatically: ";
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "runTasksAutomatically", array())) ? ("true") : ("false"));
        echo ",
\t\t\tslugWordSeparator:     \"";
        // line 80
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "slugWordSeparator", array()), "js"), "html", null, true);
        echo "\",
\t\t\tlimitAutoSlugsToAscii: ";
        // line 81
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "limitAutoSlugsToAscii", array())) ? ("true") : ("false"));
        echo "
\t\t};

\t\twindow.Craft.fileKinds = {};
\t\t";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getFileKinds", array(), "method"));
        foreach ($context['_seq'] as $context["kind"] => $context["info"]) {
            // line 86
            echo "\t\t\twindow.Craft.fileKinds.";
            echo twig_escape_filter($this->env, $context["kind"], "html", null, true);
            echo " = [];
\t\t\t";
            // line 87
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["info"], "extensions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 88
                echo "\t\t\t\twindow.Craft.fileKinds.";
                echo twig_escape_filter($this->env, $context["kind"], "html", null, true);
                echo ".push(\"";
                echo twig_escape_filter($this->env, $context["extension"], "html", null, true);
                echo "\");
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kind'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 91,  273 => 90,  262 => 88,  258 => 87,  253 => 86,  249 => 85,  242 => 81,  238 => 80,  233 => 79,  228 => 77,  223 => 76,  221 => 75,  217 => 74,  213 => 73,  209 => 72,  205 => 71,  201 => 70,  197 => 69,  193 => 68,  189 => 67,  185 => 66,  181 => 65,  177 => 64,  173 => 63,  169 => 62,  165 => 61,  161 => 60,  157 => 59,  153 => 58,  149 => 57,  145 => 56,  141 => 55,  137 => 54,  133 => 53,  129 => 52,  125 => 51,  121 => 50,  117 => 49,  107 => 42,  102 => 39,  99 => 38,  95 => 1,  93 => 36,  88 => 34,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  64 => 25,  61 => 24,  58 => 23,  56 => 22,  52 => 19,  50 => 18,  45 => 12,  43 => 11,  41 => 10,  35 => 8,  29 => 6,  25 => 4,  11 => 1,);
    }
}
