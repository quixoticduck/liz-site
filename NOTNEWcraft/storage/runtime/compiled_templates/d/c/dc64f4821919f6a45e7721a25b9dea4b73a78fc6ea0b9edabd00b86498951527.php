<?php

/* _layout */
class __TwigTemplate_dc64f4821919f6a45e7721a25b9dea4b73a78fc6ea0b9edabd00b86498951527 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>";
        // line 5
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</title>
\t\t<link rel=\"home\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" />
\t\t<link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>
\t\t<link href='https://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" href=\"/assets/css/normalize.css\">
\t\t<link rel=\"stylesheet\" href=\"/assets/css/styles.css\">
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t</head>
\t<div class=\"wrapper\">
\t\t<div class=\"container\">
\t\t\t<body class=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"mainNavClose navHeadingWhenClose\">
\t\t\t\t
\t\t\t\t\t<h2><i class=\"fa fa-bars fa-lg\"></i></h2>
\t\t\t\t\t<!-- <h2>menu</h2>  -->
\t\t\t\t\t<div class=\"menuTextClose\">
\t\t\t\t\t\t<h1>x</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menuTextMenu\">
\t\t\t\t\t\t<h1>liz dean</h1>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<nav class=\"navClose\">
\t\t\t\t\t<h1 class=\"mainLogo\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<ul class=\"main-nav navClose\">
\t\t\t\t\t\t<li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "home")) {
            echo "class=\"active\"";
        }
        echo "><i class=\"fa fa-lg fa-home\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/about/liz"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">About</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("pshe"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "pshe")) {
            echo "class=\"active\"";
        }
        echo ">PSHE</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("youthWork"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "youthWork")) {
            echo "class=\"active\"";
        }
        echo ">Youth Work</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("relationships"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "Relationships")) {
            echo "class=\"active\"";
        }
        echo ">Sex and Relationships</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("health"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "health")) {
            echo "class=\"active last\"";
        }
        echo ">Health Promotion</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>

\t\t\t\t<div id=\"content\" role=\"main\">
\t\t\t\t";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<footer id=\"footer\">
\t\t\tCopyright ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->ucfirstFilter($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "serverName", array())), "html", null, true);
        echo ". All rights reserved  •  
\t<!-- \t\tBuilt with <a href=\"http://buildwithcraft.com\">Craft</a>  • -->
\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/about/liz#contact"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">Contact</a></li>
\t\t</footer>\t
\t</div>


\t\t<script src=\"/assets/js/jquery-1.11.3.min.js\"></script>
\t\t<script>
\t\t\t\$(document).ready(function() {
\t\t\t\tvar \$navBar = \$('nav');
\t\t\t\tvar \$navList = \$('.main-nav');
\t\t\t\tvar \$menuButton = \$('.mainNavClose');
\t\t\t\tvar sideBarOpen = false;
\t\t\t\t\$menuButton.click(function() {
\t\t\t\t\tconsole.log (\"click\");
\t\t\t\t\tif (!sideBarOpen) {
\t\t\t\t\t\t\$navBar.removeClass('navClose');
\t\t\t\t\t\t\$navList.removeClass('navClose');
\t\t\t\t\t\t\$menuButton.removeClass('navHeadingWhenClose');
\t\t\t\t\t\t\$('.menuTextClose').removeClass('navHeadingWhenClose');
\t\t\t\t\t\t\$('.menuTextMenu').removeClass('navHeadingWhenClose');
\t\t\t\t\t\t\$navBar.addClass('navOpen');
\t\t\t\t\t\t\$navList.addClass('navOpen');
\t\t\t\t\t\t\$menuButton.addClass('navHeadingWhenOpen');
\t\t\t\t\t\t\$('.menuTextClose').addClass('navHeadingWhenOpen');
\t\t\t\t\t\t\$('.menuTextMenu').addClass('navHeadingWhenOpen');
\t\t\t\t\t\tsideBarOpen = true;
\t\t\t\t\t\tconsole.log (\"true\");
\t\t\t\t\t} else {
\t\t\t\t\t\t\$navBar.removeClass('navOpen');
\t\t\t\t\t\t\$navList.removeClass('navOpen');
\t\t\t\t\t\t\$menuButton.removeClass('navHeadingWhenOpen');
\t\t\t\t\t\t\$('.menuTextClose').removeClass('navHeadingWhenOpen');
\t\t\t\t\t\t\$('.menuTextMenu').removeClass('navHeadingWhenOpen');
\t\t\t\t\t\t\$navBar.addClass('navClose');
\t\t\t\t\t\t\$navList.addClass('navClose');
\t\t\t\t\t\t\$menuButton.addClass('navHeadingWhenClose');
\t\t\t\t\t\t\$('.menuTextClose').addClass('navHeadingWhenClose');
\t\t\t\t\t\t\$('.menuTextMenu').addClass('navHeadingWhenClose');
\t\t\t\t\t\tsideBarOpen = false;
\t\t\t\t\t\tconsole.log (\"false\");
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>
</html>";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 44,  140 => 51,  133 => 49,  127 => 45,  125 => 44,  113 => 39,  105 => 38,  97 => 37,  89 => 36,  81 => 35,  73 => 34,  65 => 31,  47 => 16,  34 => 6,  26 => 5,  20 => 1,);
    }
}
