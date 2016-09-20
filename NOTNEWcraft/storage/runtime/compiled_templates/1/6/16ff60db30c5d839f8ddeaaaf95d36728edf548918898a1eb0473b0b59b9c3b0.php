<?php

/* login */
class __TwigTemplate_16ff60db30c5d839f8ddeaaaf95d36728edf548918898a1eb0473b0b59b9c3b0 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "login", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("_includes/forms", "login", 2);
        // line 3
        $context["title"] = \Craft\Craft::t("Login");
        // line 4
        $context["bodyClass"] = "login";
        // line 5
        $_js = "css/login.css";
        \Craft\craft()->templates->includeCssResource($_js);
        // line 6
        $_js = "js/login.js";
        \Craft\craft()->templates->includeJsResource($_js);
        // line 7
        \Craft\craft()->templates->includeTranslations(
        	"Reset Password",
        	"Check your email for instructions to reset your password."
        );
        // line 12
        $context["username"] = (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "rememberUsernameDuration", array())) ? ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "rememberedUsername", array())) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\">
\t\tvar cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
\t\tdocument.cookie = cookieTest;
\t\tvar cookiesEnabled = document.cookie.search(cookieTest) != -1;
\t\tif (cookiesEnabled)
\t\t{
\t\t\tdocument.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

\t\t\tdocument.write(
\t\t\t\t'<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" ";
        // line 24
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand", array()), "isLogoUploaded", array()))) {
            // line 25
            $context["logo"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand", array()), "logo", array());
            // line 26
            $context["padding"] = ($this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "height", array()) + 30);
            // line 27
            echo "\t\t\t\t\t\tstyle=\"background-image: url(\\'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "url", array()), "html", null, true);
            echo "\\'); background-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logo"]) ? $context["logo"] : null), "height", array()), "html", null, true);
            echo "px; padding-top: ";
            echo twig_escape_filter($this->env, (isset($context["padding"]) ? $context["padding"] : null), "html", null, true);
            echo "px; margin-top: -";
            echo twig_escape_filter($this->env, round(((156 + (isset($context["padding"]) ? $context["padding"] : null)) / 2)), "html", null, true);
            echo "px\"";
        }
        // line 28
        echo ">' +
\t\t\t\t\t'";
        // line 29
        $context["placeHolderText"] = (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "useEmailAsUsername", array())) ? (\Craft\Craft::t("Email")) : (\Craft\Craft::t("Username or Email")));
        echo "' +
\t\t\t\t\t'";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->gettextField(array("id" => "loginName", "name" => "username", "placeholder" => (isset($context["placeHolderText"]) ? $context["placeHolderText"] : null), "value" => (isset($context["username"]) ? $context["username"] : null))), "js"), "html", null, true);
        echo "' +

\t\t\t\t\t'<div id=\"login-fields\" class=\"nested-fields\">' +
\t\t\t\t\t\t'";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->getpasswordField(array("id" => "password", "name" => "password", "placeholder" => \Craft\Craft::t("Password"))), "js"), "html", null, true);
        echo "' +
\t\t\t\t\t\t'<a id=\"forgot-password\">";
        // line 34
        echo twig_escape_filter($this->env, \Craft\Craft::t("Forget your password?"), "html", null, true);
        echo "</a>' +
\t\t\t\t\t\t";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "rememberedUserSessionDuration", array())) {
            // line 36
            echo "\t\t\t\t\t\t\t'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->getcheckboxField(array("id" => "rememberMe", "label" => \Craft\Craft::t("Keep me logged in"))), "js"), "html", null, true);
            echo "' +
\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t'</div>' +

\t\t\t\t\t'<div class=\"buttons\">' +
\t\t\t\t\t\t'<div id=\"ssl-icon\" class=\"disabled\"><div class=\"";
        // line 41
        echo (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isSecure", array())) ? ("secure") : ("insecure"));
        echo " icon\"></div></div>' +
\t\t\t\t\t\t'<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, \Craft\Craft::t("Login"), "html", null, true);
        echo "\">' +
\t\t\t\t\t\t'<div id=\"spinner\" class=\"spinner hidden\"></div>' +
\t\t\t\t\t'</div>' +
\t\t\t\t'</form>'
\t\t\t);

\t\t\t";
        // line 48
        if ( !$this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "isMobileBrowser", array(0 => true), "method")) {
            // line 49
            echo "\t\t\t\tdocument.getElementById(\"";
            echo (((isset($context["username"]) ? $context["username"] : null)) ? ("password") : ("loginName"));
            echo "\").focus();
\t\t\t";
        }
        // line 51
        echo "\t\t}
\t\telse
\t\t{
\t\t\tdocument.write(
\t\t\t\t'<div class=\"no-access\">' +
\t\t\t\t\t'<div class=\"pane\">' +
\t\t\t\t\t\t'<div class=\"pane-body\">' +
\t\t\t\t\t\t\t'<div class=\"notice\">' +
\t\t\t\t\t\t\t\t'<div class=\"icon\"></div>' +
\t\t\t\t\t\t\t\t'<p>";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cookies must be enabled to access the Craft control panel."), "html", null, true);
        echo "<br>' +
\t\t\t\t\t\t\t\t\t'<a class=\"go nowrap\" href=\"\">";
        // line 61
        echo twig_escape_filter($this->env, \Craft\Craft::t("See how"), "html", null, true);
        echo "</a>' +
\t\t\t\t\t\t\t\t'</p>' +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>' +
\t\t\t\t'</div>'
\t\t\t);
\t\t}
\t</script>
";
    }

    public function getTemplateName()
    {
        return "login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 61,  147 => 60,  136 => 51,  130 => 49,  128 => 48,  119 => 42,  115 => 41,  110 => 38,  104 => 36,  102 => 35,  98 => 34,  94 => 33,  88 => 30,  84 => 29,  81 => 28,  68 => 27,  66 => 26,  64 => 25,  62 => 24,  51 => 15,  48 => 14,  44 => 1,  42 => 12,  37 => 7,  34 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }
}
