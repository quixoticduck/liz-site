<?php

/* entries */
class __TwigTemplate_339242e1bd17fbc94cae704aef878b21587692b0b00078dcf7404051c23bc60c extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/elementindex", "entries", 1);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/elementindex";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["title"] = \Craft\Craft::t("Entries");
        // line 3
        $context["elementType"] = "Entry";
        // line 6
        $context["sections"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "sections", array()), "getEditableSections", array(), "method");
        // line 7
        $context["newEntrySections"] = array();
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) ? $context["sections"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 10
            if ((($this->getAttribute($context["section"], "type", array()) != "single") && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("createEntries:" . $this->getAttribute($context["section"], "id", array()))), "method"))) {
                // line 11
                $context["newEntrySections"] = twig_array_merge((isset($context["newEntrySections"]) ? $context["newEntrySections"] : null), array(0 => $context["section"]));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        if (array_key_exists("sectionHandle", $context)) {
            // line 41
            $_js = (("window.defaultSectionHandle = \"" . (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "\";");
            \Craft\craft()->templates->includeJs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sidebar($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (twig_length_filter($this->env, (isset($context["newEntrySections"]) ? $context["newEntrySections"] : null))) {
            // line 18
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 19
            if ((twig_length_filter($this->env, (isset($context["newEntrySections"]) ? $context["newEntrySections"] : null)) > 1)) {
                // line 20
                echo "\t\t\t\t<div class=\"btngroup submit\">
\t\t\t\t\t<div class=\"btn submit menubtn add icon\">";
                // line 21
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["newEntrySections"]) ? $context["newEntrySections"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($context["section"], "handle", array())) . "/new")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($context["section"], "name", array())), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t<a class=\"btn submit add icon\" href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("entries/" . $this->getAttribute($this->getAttribute((isset($context["newEntrySections"]) ? $context["newEntrySections"] : null), 0, array(), "array"), "handle", array())) . "/new")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 33
            echo "\t\t</div>
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  109 => 35,  105 => 33,  97 => 31,  91 => 27,  80 => 25,  76 => 24,  70 => 21,  67 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  52 => 1,  48 => 41,  46 => 40,  39 => 11,  37 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 3,  25 => 2,  11 => 1,);
    }
}
