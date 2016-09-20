<?php

/* _includes/fields */
class __TwigTemplate_05e6f142ec732fe2979189a0c1cd6ed091782a04bd82132be8e7a5bc5a31ddb4 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !array_key_exists("element", $context)) {
            $context["element"] = null;
        }
        // line 2
        if ( !array_key_exists("namespace", $context)) {
            $context["namespace"] = "fields";
        }
        // line 3
        echo "
";
        // line 4
        $_namespace = (isset($context["namespace"]) ? $context["namespace"] : null);
        if ($_namespace) {
            $_originalNamespace = \Craft\craft()->templates->getNamespace();
            \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
            ob_start();
            try {
                // line 5
                echo "\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 6
                    echo "\t\t";
                    $this->loadTemplate("_includes/field", "_includes/fields", 6)->display(array("field" => $this->getAttribute(                    // line 7
$context["field"], "getField", array(), "method"), "required" => $this->getAttribute(                    // line 8
$context["field"], "required", array()), "element" =>                     // line 9
(isset($context["element"]) ? $context["element"] : null), "static" => ((                    // line 10
array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (null))));
                    // line 12
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } catch (Exception $e) {
                ob_end_clean();

                throw $e;
            }
            echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
            \Craft\craft()->templates->setNamespace($_originalNamespace);
        } else {
            // line 5
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 6
                echo "\t\t";
                $this->loadTemplate("_includes/field", "_includes/fields", 6)->display(array("field" => $this->getAttribute(                // line 7
$context["field"], "getField", array(), "method"), "required" => $this->getAttribute(                // line 8
$context["field"], "required", array()), "element" =>                 // line 9
(isset($context["element"]) ? $context["element"] : null), "static" => ((                // line 10
array_key_exists("static", $context)) ? ((isset($context["static"]) ? $context["static"] : null)) : (null))));
                // line 12
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        unset($_originalNamespace, $_namespace);
    }

    public function getTemplateName()
    {
        return "_includes/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  73 => 10,  72 => 9,  71 => 8,  70 => 7,  68 => 6,  63 => 5,  49 => 12,  47 => 10,  46 => 9,  45 => 8,  44 => 7,  42 => 6,  37 => 5,  30 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
