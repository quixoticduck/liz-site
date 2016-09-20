<?php

/* _layout */
class __TwigTemplate_1ad08accd6ab6d645c8ad225553b1f06321103ef016a5d8ddad9486011efbb7d extends Craft\BaseTemplate
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
\t\t<script>
\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
\t\tga('create', 'UA-26372463-6', 'auto');
\t\tga('send', 'pageview');
\t\t</script>
\t</head>
\t<body class=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : null), "html", null, true);
        echo "\">
\t\t<div class=\"wrapper\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"mainNavClose navHeadingWhenClose\">
\t\t\t\t\t<h2><i class=\"fa fa-bars fa-lg\"></i></h2>
\t\t\t\t\t<!-- <h2>menu</h2>  -->
\t\t\t\t\t<div class=\"menuTextClose\">
\t\t\t\t\t\t<h2><i class=\"fa fa-bars fa-lg\"></i></h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"menuTextMenu\">
\t\t\t\t\t\t<h1>liz dean</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<nav class=\"navClose\">
\t\t\t\t\t<h1 class=\"mainLogo\">
\t\t\t\t\t<a href=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : null), "html", null, true);
        echo "</a>
\t\t\t\t\t</h1>
\t\t\t\t\t<ul class=\"main-nav navClose\">
\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "home")) {
            echo "class=\"active\"";
        }
        echo "><i class=\"fa fa-lg fa-home\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/about/liz"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">About</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/pshe"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "pshe")) {
            echo "class=\"active\"";
        }
        echo ">PSHE</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/youthwork"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "youthWork")) {
            echo "class=\"active\"";
        }
        echo ">Youth Work</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/relationships"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "Relationships")) {
            echo "class=\"active\"";
        }
        echo ">Sex and Relationships</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/health"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "health")) {
            echo "class=\"active last\"";
        }
        echo ">Health Promotion</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t\t<div id=\"content\" role=\"main\">
\t\t\t\t\t";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<footer id=\"footer\">
\t\tCopyright ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->ucfirstFilter($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "serverName", array())), "html", null, true);
        echo ". All rights reserved  •
\t\t<!-- \t\tBuilt with <a href=\"http://buildwithcraft.com\">Craft</a>  • -->
\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("/about/liz#contact"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "firstSegment", array()) == "about")) {
            echo "class=\"active\"";
        }
        echo ">Contact</a></li>
\t</footer>
\t<script src=\"/assets/js/jquery-1.11.3.min.js\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\tvar \$navBar = \$('nav');
\t\t\tvar \$navList = \$('.main-nav');
\t\t\tvar \$menuButton = \$('.mainNavClose');
\t\t\tvar sideBarOpen = false;
\t\t\t\$menuButton.click(function() {
\t\t\t\tconsole.log (\"click\");
\t\t\t\tif (!sideBarOpen) {
\t\t\t\t\t\$navBar.removeClass('navClose');
\t\t\t\t\t\$navList.removeClass('navClose');
\t\t\t\t\t\$menuButton.removeClass('navHeadingWhenClose');
\t\t\t\t\t\$('.menuTextClose').removeClass('navHeadingWhenClose');
\t\t\t\t\t\$('.menuTextMenu').removeClass('navHeadingWhenClose');
\t\t\t\t\t\$navBar.addClass('navOpen');
\t\t\t\t\t\$navList.addClass('navOpen');
\t\t\t\t\t\$menuButton.addClass('navHeadingWhenOpen');
\t\t\t\t\t\$('.menuTextClose').addClass('navHeadingWhenOpen');
\t\t\t\t\t\$('.menuTextMenu').addClass('navHeadingWhenOpen');
\t\t\t\t\tsideBarOpen = true;
\t\t\t\t\tconsole.log (\"true\");
\t\t\t\t} else {
\t\t\t\t\t\$navBar.removeClass('navOpen');
\t\t\t\t\t\$navList.removeClass('navOpen');
\t\t\t\t\t\$menuButton.removeClass('navHeadingWhenOpen');
\t\t\t\t\t\$('.menuTextClose').removeClass('navHeadingWhenOpen');
\t\t\t\t\t\$('.menuTextMenu').removeClass('navHeadingWhenOpen');
\t\t\t\t\t\$navBar.addClass('navClose');
\t\t\t\t\t\$navList.addClass('navClose');
\t\t\t\t\t\$menuButton.addClass('navHeadingWhenClose');
\t\t\t\t\t\$('.menuTextClose').addClass('navHeadingWhenClose');
\t\t\t\t\t\$('.menuTextMenu').addClass('navHeadingWhenClose');
\t\t\t\t\tsideBarOpen = false;
\t\t\t\t\tconsole.log (\"false\");
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
</body>
</html>";
    }

    // line 49
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
        return array (  197 => 49,  146 => 57,  139 => 55,  132 => 50,  130 => 49,  119 => 45,  111 => 44,  103 => 43,  95 => 42,  87 => 41,  79 => 40,  71 => 37,  53 => 22,  34 => 6,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">*/
/* 	<head>*/
/* 		<meta charset="utf-8" />*/
/* 		<title>{% if title is defined %}{{ title }} - {% endif %}{{ siteName }}</title>*/
/* 		<link rel="home" href="{{ siteUrl }}" />*/
/* 		<link href='https://fonts.googleapis.com/css?family=Lobster|Open+Sans' rel='stylesheet' type='text/css'>*/
/* 		<link href='https://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>*/
/* 		<link rel="stylesheet" href="/assets/css/normalize.css">*/
/* 		<link rel="stylesheet" href="/assets/css/styles.css">*/
/* 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 		<script>*/
/* 		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/* 		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/* 		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/* 		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');*/
/* 		ga('create', 'UA-26372463-6', 'auto');*/
/* 		ga('send', 'pageview');*/
/* 		</script>*/
/* 	</head>*/
/* 	<body class="{{ bodyClass }}">*/
/* 		<div class="wrapper">*/
/* 			<div class="container">*/
/* 				<div class="mainNavClose navHeadingWhenClose">*/
/* 					<h2><i class="fa fa-bars fa-lg"></i></h2>*/
/* 					<!-- <h2>menu</h2>  -->*/
/* 					<div class="menuTextClose">*/
/* 						<h2><i class="fa fa-bars fa-lg"></i></h2>*/
/* 					</div>*/
/* 					<div class="menuTextMenu">*/
/* 						<h1>liz dean</h1>*/
/* 					</div>*/
/* 				</div>*/
/* 				<nav class="navClose">*/
/* 					<h1 class="mainLogo">*/
/* 					<a href="{{ siteUrl }}">{{ siteName }}</a>*/
/* 					</h1>*/
/* 					<ul class="main-nav navClose">*/
/* 						<li><a href="{{ url('/') }}" {% if craft.request.firstSegment == 'home' %}class="active"{% endif %}><i class="fa fa-lg fa-home"></i></a></li>*/
/* 						<li><a href="{{ url('/about/liz') }}" {% if craft.request.firstSegment == 'about' %}class="active"{% endif %}>About</a></li>*/
/* 						<li><a href="{{ url('/pshe') }}" {% if craft.request.firstSegment == 'pshe' %}class="active"{% endif %}>PSHE</a></li>*/
/* 						<li><a href="{{ url('/youthwork') }}" {% if craft.request.firstSegment == 'youthWork' %}class="active"{% endif %}>Youth Work</a></li>*/
/* 						<li><a href="{{ url('/relationships') }}" {% if craft.request.firstSegment == 'Relationships' %}class="active"{% endif %}>Sex and Relationships</a></li>*/
/* 						<li><a href="{{ url('/health') }}" {% if craft.request.firstSegment == 'health' %}class="active last"{% endif %}>Health Promotion</a></li>*/
/* 					</ul>*/
/* 				</nav>*/
/* 				<div id="content" role="main">*/
/* 					{% block content %}{% endblock %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<footer id="footer">*/
/* 		Copyright {{ now.year }} {{ craft.request.serverName | ucfirst }}. All rights reserved  •*/
/* 		<!-- 		Built with <a href="http://buildwithcraft.com">Craft</a>  • -->*/
/* 		<a href="{{ url('/about/liz#contact') }}" {% if craft.request.firstSegment == 'about' %}class="active"{% endif %}>Contact</a></li>*/
/* 	</footer>*/
/* 	<script src="/assets/js/jquery-1.11.3.min.js"></script>*/
/* 	<script>*/
/* 		$(document).ready(function() {*/
/* 			var $navBar = $('nav');*/
/* 			var $navList = $('.main-nav');*/
/* 			var $menuButton = $('.mainNavClose');*/
/* 			var sideBarOpen = false;*/
/* 			$menuButton.click(function() {*/
/* 				console.log ("click");*/
/* 				if (!sideBarOpen) {*/
/* 					$navBar.removeClass('navClose');*/
/* 					$navList.removeClass('navClose');*/
/* 					$menuButton.removeClass('navHeadingWhenClose');*/
/* 					$('.menuTextClose').removeClass('navHeadingWhenClose');*/
/* 					$('.menuTextMenu').removeClass('navHeadingWhenClose');*/
/* 					$navBar.addClass('navOpen');*/
/* 					$navList.addClass('navOpen');*/
/* 					$menuButton.addClass('navHeadingWhenOpen');*/
/* 					$('.menuTextClose').addClass('navHeadingWhenOpen');*/
/* 					$('.menuTextMenu').addClass('navHeadingWhenOpen');*/
/* 					sideBarOpen = true;*/
/* 					console.log ("true");*/
/* 				} else {*/
/* 					$navBar.removeClass('navOpen');*/
/* 					$navList.removeClass('navOpen');*/
/* 					$menuButton.removeClass('navHeadingWhenOpen');*/
/* 					$('.menuTextClose').removeClass('navHeadingWhenOpen');*/
/* 					$('.menuTextMenu').removeClass('navHeadingWhenOpen');*/
/* 					$navBar.addClass('navClose');*/
/* 					$navList.addClass('navClose');*/
/* 					$menuButton.addClass('navHeadingWhenClose');*/
/* 					$('.menuTextClose').addClass('navHeadingWhenClose');*/
/* 					$('.menuTextMenu').addClass('navHeadingWhenClose');*/
/* 					sideBarOpen = false;*/
/* 					console.log ("false");*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	</script>*/
/* </body>*/
/* </html>*/
