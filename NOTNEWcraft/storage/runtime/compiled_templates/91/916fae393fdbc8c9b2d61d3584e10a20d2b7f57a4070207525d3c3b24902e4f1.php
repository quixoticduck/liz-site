<?php

/* settings/routes */
class __TwigTemplate_d9120a5ef86021d2b521c5e2c6372fc78c015655f589e7b8ea484728e3b73cf4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/routes", 3);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->userSession->requireAdmin();
        // line 4
        $context["title"] = \Craft\Craft::t("Routes");
        // line 6
        $_js = "css/routes.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 7
        $_js = "js/routes.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 10
        ob_start();
        // line 11
        echo "\t<div class=\"buttons right\">
\t\t<div id=\"add-route-btn\" class=\"btn submit add icon\">";
        // line 12
        echo twig_escape_filter($this->env, \Craft\Craft::t("New route"), "html", null, true);
        echo "</div>
\t</div>
";
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 20
        \Craft\craft()->templates->includeTranslations(
        	"Global",
        	"New route order saved.",
        	"Couldn’t save new route order.",
        	"If the URI looks like this",
        	"Add a token",
        	"Load this template",
        	"Edit Route",
        	"Create a new route",
        	"Route Saved.",
        	"Couldn’t save route.",
        	"Are you sure you want to delete this route?",
        	"Route deleted."
        );
        // line 35
        $context["docsUrl"] = "http://craftcms.com/docs/routing";
        // line 38
        $context["routes"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "routes", array()), "getDbRoutes", array(), "method");
        // line 64
        ob_start();
        // line 65
        echo "\tCraft.routes.tokens = {
\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["pattern"]) {
            // line 67
            echo "\t\t\t";
            if ( !$this->getAttribute($context["loop"], "first", array())) {
                echo ",";
            }
            // line 68
            echo "\t\t\t\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["name"], "js"), "html", null, true);
            echo "\": \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["pattern"], "js"), "html", null, true);
            echo "\"
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['pattern'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t};

\t";
        // line 72
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 73
            echo "\t\tCraft.routes.locales = ";
            echo $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocaleIds", array(), "method"));
            echo ";
\t";
        }
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "\t<p id=\"noroutes\"";
        if ((isset($context["routes"]) ? $context["routes"] : null)) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 43
        echo twig_escape_filter($this->env, \Craft\Craft::t("No routes exist yet."), "html", null, true);
        echo "
\t</p>

\t<div id=\"routes\">
\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["routes"]) ? $context["routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
            // line 48
            echo "\t\t\t<div class=\"route\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "id", array()), "html", null, true);
            echo "\"";
            if ($this->getAttribute($context["route"], "locale", array())) {
                echo " data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "locale", array()), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t<div class=\"url-container\">";
            // line 50
            ob_start();
            // line 51
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                // line 52
                echo "\t\t\t\t\t\t\t<span class=\"locale\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["route"], "locale", array())) ? ($this->getAttribute($context["route"], "locale", array())) : (\Craft\Craft::t("Global"))), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t<span class=\"url\">";
            echo $this->getAttribute($context["route"], "urlDisplayHtml", array());
            echo "</span>
\t\t\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 56
            echo "</div>
\t\t\t\t<div class=\"template\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["route"], "template", array()), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "settings/routes";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  183 => 57,  180 => 56,  174 => 54,  168 => 52,  165 => 51,  163 => 50,  152 => 48,  148 => 47,  141 => 43,  134 => 42,  131 => 41,  127 => 3,  119 => 73,  117 => 72,  113 => 70,  94 => 68,  89 => 67,  72 => 66,  69 => 65,  67 => 64,  65 => 38,  63 => 35,  48 => 20,  46 => 16,  40 => 12,  37 => 11,  35 => 10,  32 => 7,  29 => 6,  27 => 4,  25 => 1,  11 => 3,);
    }
}
/* {% requireAdmin %}*/
/* */
/* {% extends "_layouts/cp" %}*/
/* {% set title = "Routes"|t %}*/
/* */
/* {% includecssresource "css/routes.css" %}*/
/* {% includejsresource "js/routes.js" %}*/
/* */
/* */
/* {% set extraPageHeaderHtml %}*/
/* 	<div class="buttons right">*/
/* 		<div id="add-route-btn" class="btn submit add icon">{{ "New route"|t }}</div>*/
/* 	</div>*/
/* {% endset %}*/
/* */
/* {% set crumbs = [*/
/* 	{ label: "Settings"|t, url: url('settings') }*/
/* ] %}*/
/* */
/* {% includeTranslations*/
/* 	"Global",*/
/* 	"New route order saved.",*/
/* 	"Couldn’t save new route order.",*/
/* 	"If the URI looks like this",*/
/* 	"Add a token",*/
/* 	"Load this template",*/
/* 	"Edit Route",*/
/* 	"Create a new route",*/
/* 	"Route Saved.",*/
/* 	"Couldn’t save route.",*/
/* 	"Are you sure you want to delete this route?",*/
/* 	"Route deleted."*/
/* %}*/
/* */
/* {% set docsUrl = 'http://craftcms.com/docs/routing' %}*/
/* */
/* */
/* {% set routes = craft.routes.getDbRoutes() %}*/
/* */
/* */
/* {% block content %}*/
/* 	<p id="noroutes"{% if routes %} class="hidden"{% endif %}>*/
/* 		{{ "No routes exist yet."|t }}*/
/* 	</p>*/
/* */
/* 	<div id="routes">*/
/* 		{% for route in routes %}*/
/* 			<div class="route" data-id="{{ route.id }}"{% if route.locale %} data-locale="{{ route.locale }}"{% endif %}>*/
/* 				<div class="url-container">*/
/* 					{%- spaceless %}*/
/* 						{% if craft.isLocalized() %}*/
/* 							<span class="locale">{{ route.locale ?: "Global"|t }}</span>*/
/* 						{% endif %}*/
/* 						<span class="url">{{ route.urlDisplayHtml|raw }}</span>*/
/* 					{% endspaceless -%}*/
/* 				</div>*/
/* 				<div class="template">{{ route.template }}</div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* */
/* {% includejs %}*/
/* 	Craft.routes.tokens = {*/
/* 		{% for name, pattern in tokens %}*/
/* 			{% if not loop.first %},{% endif %}*/
/* 			"{{ name|e('js') }}": "{{ pattern|e('js') }}"*/
/* 		{% endfor %}*/
/* 	};*/
/* */
/* 	{% if craft.isLocalized() %}*/
/* 		Craft.routes.locales = {{ craft.i18n.getSiteLocaleIds()|json_encode|raw }};*/
/* 	{% endif %}*/
/* {% endincludejs %}*/
/* */
