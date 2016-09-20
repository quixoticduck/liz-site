<?php

/* 404 */
class __TwigTemplate_5a1e8fa50e086ebd56e7816088864e72e6da889b2f779fcb4ed9a5e8117ac820 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        $this->parent = $this->loadTemplate("_layout", "404", 19);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        $context["title"] = "404";
        // line 19
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"centerMessage\">
\t<h1>Sorry. Page not found</h1>

\t<ul>
\t\t<li>What’s worse, a hilarious 404 page can’t be found either.</li>
\t\t<li>If you have entered the URL by hand, double-check it is correct</li>
\t\t<li>The problem might be temporary, so you can try refreshing the page or go back to our home page using the navigational menu above</li>
\t</ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "404";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 23,  31 => 22,  27 => 19,  25 => 20,  11 => 19,);
    }
}
/* {#*/
/*  # 404 template*/
/*  # ------------*/
/*  #*/
/*  # This template is loaded whenever Craft cannot figure out how to*/
/*  # respond to an incoming request. No setup is involved to get your*/
/*  # 404 page working; you just need to call it 404.html and put it*/
/*  # at the root of your craft/templates/ folder.*/
/*  #*/
/*  # You can also create 400.html, 403.html, 500.html, and 503.html*/
/*  # templates if you’d like. If Craft can’t find an error template*/
/*  # to match the error code, it will just use the one in*/
/*  # craft/app/templates/ instead.*/
/*  #*/
/*  # See this page for more details on how Craft routes requests:*/
/*  # http://buildwithcraft.com/docs/routing*/
/*  #}*/
/* */
/* {% extends "_layout" %}*/
/* {% set title = "404" %}*/
/* */
/* {% block content %}*/
/* <div class="centerMessage">*/
/* 	<h1>Sorry. Page not found</h1>*/
/* */
/* 	<ul>*/
/* 		<li>What’s worse, a hilarious 404 page can’t be found either.</li>*/
/* 		<li>If you have entered the URL by hand, double-check it is correct</li>*/
/* 		<li>The problem might be temporary, so you can try refreshing the page or go back to our home page using the navigational menu above</li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
