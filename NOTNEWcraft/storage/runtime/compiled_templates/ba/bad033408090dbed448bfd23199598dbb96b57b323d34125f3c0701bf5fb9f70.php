<?php

/* settings/assets/_layout */
class __TwigTemplate_509efc0f99d54ac51fa1243ea61ebb3210447ec866a2245f41efd978ab625bdb extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/assets/_layout", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Asset Settings");
        // line 4
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 8
        $context["navItems"] = array("sources" => array("label" => \Craft\Craft::t("Asset Sources"), "url" => \Craft\UrlHelper::getUrl("settings/assets")), "transforms" => array("label" => \Craft\Craft::t("Image Transforms"), "url" => \Craft\UrlHelper::getUrl("settings/assets/transforms")));
        // line 13
        $context["docTitle"] = (($this->getAttribute($this->getAttribute((isset($context["navItems"]) ? $context["navItems"] : null), (isset($context["selectedNavItem"]) ? $context["selectedNavItem"] : null), array(), "array"), "label", array()) . " - ") . (isset($context["title"]) ? $context["title"] : null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        // line 16
        echo "\t<nav>
\t\t";
        // line 17
        $this->loadTemplate("_includes/nav", "settings/assets/_layout", 17)->display(array("items" => (isset($context["navItems"]) ? $context["navItems"] : null), "selectedItem" => (isset($context["selectedNavItem"]) ? $context["selectedNavItem"] : null)));
        // line 18
        echo "\t</nav>
";
    }

    public function getTemplateName()
    {
        return "settings/assets/_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  43 => 17,  40 => 16,  37 => 15,  33 => 1,  31 => 13,  29 => 8,  27 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends "_layouts/cp" %}*/
/* {% set title = "Asset Settings"|t %}*/
/* */
/* {% set crumbs = [*/
/* 	{ label: "Settings"|t, url: url('settings') }*/
/* ] %}*/
/* */
/* {% set navItems = {*/
/* 	sources: { label: "Asset Sources"|t, url: url('settings/assets') },*/
/* 	transforms: { label: "Image Transforms"|t, url: url('settings/assets/transforms') },*/
/* } %}*/
/* */
/* {% set docTitle = navItems[selectedNavItem].label~' - '~title %}*/
/* */
/* {% block sidebar %}*/
/* 	<nav>*/
/* 		{% include "_includes/nav" with { items: navItems, selectedItem: selectedNavItem } only %}*/
/* 	</nav>*/
/* {% endblock %}*/
/* */
