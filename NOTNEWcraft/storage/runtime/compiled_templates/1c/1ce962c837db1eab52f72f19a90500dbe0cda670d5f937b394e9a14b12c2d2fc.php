<?php

/* thanks */
class __TwigTemplate_1b73165ffdb370d8d28981be36afc270b8dcbe73633c0df9e2b6ac9e29ca0081 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layout", "thanks", 1);
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
        // line 2
        $context["title"] = "Thanks";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<?php include_once(\"analyticstracking.php\") ?>
<div class=\"centerMessage\">
\t<h1>Thank you for sending your message</h1>
\t<h3>I will be in contact shortly</h3>

</div>

<div class=\"footerFix\">
\t 
</div>

\t";
    }

    public function getTemplateName()
    {
        return "thanks";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends "_layout" %}*/
/* {% set title = "Thanks" %}*/
/* {% block content %}*/
/* */
/* <?php include_once("analyticstracking.php") ?>*/
/* <div class="centerMessage">*/
/* 	<h1>Thank you for sending your message</h1>*/
/* 	<h3>I will be in contact shortly</h3>*/
/* */
/* </div>*/
/* */
/* <div class="footerFix">*/
/* 	 */
/* </div>*/
/* */
/* 	{% endblock %}*/
