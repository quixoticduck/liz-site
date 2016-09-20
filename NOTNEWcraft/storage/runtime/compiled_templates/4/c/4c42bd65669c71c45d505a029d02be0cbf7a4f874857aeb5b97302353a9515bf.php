<?php

/* updates */
class __TwigTemplate_4c42bd65669c71c45d505a029d02be0cbf7a4f874857aeb5b97302353a9515bf extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "updates", 3);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->userSession->requirePermission("performUpdates");
        // line 4
        $context["title"] = \Craft\Craft::t("Updates");
        // line 5
        $_js = "css/updates.css";
        \Craft\craft()->templates->includeCssResource($_js);
        // line 6
        $_js = "js/updates.js";
        \Craft\craft()->templates->includeJsResource($_js);
        // line 7
        $_js = "new Craft.UpdateInfo();";
        \Craft\craft()->templates->includeJs($_js);
        // line 8
        \Craft\craft()->templates->includeTranslations(
        	"You’ve got updates!",
        	"You’re all up-to-date!",
        	"build {build}",
        	"Critical",
        	"Update",
        	"Download",
        	"Craft’s <a href=\"http://buildwithcraft.com/license\" target=\"_blank\">Terms and Conditions</a> have changed.",
        	"I agree.",
        	"Seriously, download.",
        	"Seriously, update.",
        	"Install",
        	"{app} update required",
        	"Added",
        	"Improved",
        	"Fixed",
        	"Download"
        );
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "\t<div id=\"graphic\" class=\"spinner big\"></div>
\t<div id=\"status\">";
        // line 30
        echo twig_escape_filter($this->env, \Craft\Craft::t("Checking for updates…"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "updates";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  64 => 29,  61 => 28,  57 => 3,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 1,  11 => 3,);
    }
}
