<?php

/* contactform/_settings */
class __TwigTemplate_53e780bf6b7b2b71e207b24f3ba4779fc9687f18385ddcd1dbff6e7728570581 extends Craft\BaseTemplate
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
        $context["forms"] = $this->loadTemplate("_includes/forms", "contactform/_settings", 1);
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"] = $this;
        // line 10
        echo "
";
        // line 11
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("To Email"), "required" => true, "id" => "toEmail", "name" => "toEmail", "instructions" => \Craft\Craft::t("The email address(es) that the contact form will send to. Separate multiple email addresses with commas."), "value" => $this->getAttribute(        // line 18
(isset($context["settings"]) ? $context["settings"] : null), "toEmail", array()), "autofocus" => true, "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 20
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "toEmail", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 21
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "toEmail", 1 => "contactform"), "method") === null)) ? ($context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"]->getconfigWarning("toEmail")) : ("")), "errors" => $this->getAttribute(        // line 22
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "toEmail"), "method")));
        // line 23
        echo "

";
        // line 25
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Sender Text"), "id" => "prependSender", "name" => "prependSender", "instructions" => \Craft\Craft::t("Text that will be prepended to the email’s From Name to inform who the Contact Form actually was sent by."), "value" => (($this->getAttribute(        // line 30
(isset($context["settings"]) ? $context["settings"] : null), "prependSender", array())) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prependSender", array())) : ("")), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 31
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "prependSender", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 32
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "prependSender", 1 => "contactform"), "method") === null)) ? ($context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"]->getconfigWarning("prependSender")) : ("")), "errors" => $this->getAttribute(        // line 33
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "prependSender"), "method")));
        // line 34
        echo "

";
        // line 36
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Subject Text"), "id" => "prependSubject", "name" => "prependSubject", "instructions" => \Craft\Craft::t("Text that will be prepended to the email’s Subject to flag that it comes from the Contact Form."), "value" => (($this->getAttribute(        // line 41
(isset($context["settings"]) ? $context["settings"] : null), "prependSubject", array())) ? ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "prependSubject", array())) : ("")), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 42
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "prependSubject", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 43
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "prependSubject", 1 => "contactform"), "method") === null)) ? ($context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"]->getconfigWarning("prependSubject")) : ("")), "errors" => $this->getAttribute(        // line 44
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "prependSubject"), "method")));
        // line 45
        echo "

";
        // line 47
        echo $context["forms"]->getlightswitchField(array("label" => \Craft\Craft::t("Allow attachments?"), "id" => "allowAttachments", "name" => "allowAttachments", "on" => $this->getAttribute(        // line 51
(isset($context["settings"]) ? $context["settings"] : null), "allowAttachments", array()), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 52
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "allowAttachments", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 53
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "allowAttachments", 1 => "contactform"), "method") === null)) ? ($context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"]->getconfigWarning("allowAttachments")) : ("")), "errors" => $this->getAttribute(        // line 54
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "allowAttachments"), "method")));
        // line 55
        echo "

";
        // line 57
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Honeypot Field"), "id" => "honeypotField", "name" => "honeypotField", "instructions" => \Craft\Craft::t("The name of the 'honeypot' field in your Contact Form."), "value" => $this->getAttribute(        // line 62
(isset($context["settings"]) ? $context["settings"] : null), "honeypotField", array()), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 63
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "honeypotField", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 64
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "honeypotField", 1 => "contactform"), "method") === null)) ? ($context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"]->getconfigWarning("honeypotField")) : ("")), "errors" => $this->getAttribute(        // line 65
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "honeypotField"), "method")));
        // line 66
        echo "

";
        // line 68
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Success Flash Message"), "id" => "successFlashMessage", "name" => "successFlashMessage", "instructions" => \Craft\Craft::t("The flash message displayed after successfully sending a message."), "value" => $this->getAttribute(        // line 73
(isset($context["settings"]) ? $context["settings"] : null), "successFlashMessage", array()), "disabled" =>  !($this->getAttribute($this->getAttribute(        // line 74
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "successFlashMessage", 1 => "contactform"), "method") === null), "warning" => (( !($this->getAttribute($this->getAttribute(        // line 75
(isset($context["craft"]) ? $context["craft"] : null), "config", array()), "get", array(0 => "successFlashMessage", 1 => "contactform"), "method") === null)) ? ($context["__internal_42f5a97904dc1b36d56fe3025ae98ae21667a42d3b1b91ea39fdda4522888635"]->getconfigWarning("successFlashMessage")) : ("")), "errors" => $this->getAttribute(        // line 76
(isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "successFlashMessage"), "method")));
        // line 77
        echo "
";
    }

    // line 3
    public function getconfigWarning($__setting__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "setting" => $__setting__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo \Craft\Craft::t("This is being overridden by the {setting} config setting in your contactform.php config file.", array("setting" =>             // line 5
(isset($context["setting"]) ? $context["setting"] : null)));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "contactform/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 5,  105 => 4,  93 => 3,  88 => 77,  86 => 76,  85 => 75,  84 => 74,  83 => 73,  82 => 68,  78 => 66,  76 => 65,  75 => 64,  74 => 63,  73 => 62,  72 => 57,  68 => 55,  66 => 54,  65 => 53,  64 => 52,  63 => 51,  62 => 47,  58 => 45,  56 => 44,  55 => 43,  54 => 42,  53 => 41,  52 => 36,  48 => 34,  46 => 33,  45 => 32,  44 => 31,  43 => 30,  42 => 25,  38 => 23,  36 => 22,  35 => 21,  34 => 20,  33 => 18,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% import "_includes/forms" as forms %}*/
/* */
/* {% macro configWarning(setting) -%}*/
/* 	{{ "This is being overridden by the {setting} config setting in your contactform.php config file."|t({*/
/* 		setting: setting*/
/* 	})|raw }}*/
/* {%- endmacro %}*/
/* */
/* {% from _self import configWarning %}*/
/* */
/* {{ forms.textField({*/
/* 	first:        true,*/
/* 	label:        "To Email"|t,*/
/* 	required:     true,*/
/* 	id:           'toEmail',*/
/* 	name:         'toEmail',*/
/* 	instructions: "The email address(es) that the contact form will send to. Separate multiple email addresses with commas."|t,*/
/* 	value:        settings.toEmail,*/
/* 	autofocus:    true,*/
/* 	disabled:     (craft.config.get('toEmail', 'contactform') is not sameas(null)),*/
/* 	warning:      (craft.config.get('toEmail', 'contactform') is not sameas(null)) ? configWarning('toEmail'),*/
/* 	errors:       settings.getErrors('toEmail')*/
/* }) }}*/
/* */
/* {{ forms.textField({*/
/* 	label:        "Sender Text"|t,*/
/* 	id:           'prependSender',*/
/* 	name:         'prependSender',*/
/* 	instructions: "Text that will be prepended to the email’s From Name to inform who the Contact Form actually was sent by."|t,*/
/* 	value:        (settings.prependSender ? settings.prependSender : ""),*/
/* 	disabled:     (craft.config.get('prependSender', 'contactform') is not sameas(null)),*/
/* 	warning:      (craft.config.get('prependSender', 'contactform') is not sameas(null)) ? configWarning('prependSender'),*/
/* 	errors:       settings.getErrors('prependSender')*/
/* }) }}*/
/* */
/* {{ forms.textField({*/
/* 	label:        "Subject Text"|t,*/
/* 	id:           'prependSubject',*/
/* 	name:         'prependSubject',*/
/* 	instructions: "Text that will be prepended to the email’s Subject to flag that it comes from the Contact Form."|t,*/
/* 	value:        (settings.prependSubject ? settings.prependSubject : ""),*/
/* 	disabled:     (craft.config.get('prependSubject', 'contactform') is not sameas(null)),*/
/* 	warning:      (craft.config.get('prependSubject', 'contactform') is not sameas(null)) ? configWarning('prependSubject'),*/
/* 	errors:       settings.getErrors('prependSubject')*/
/* }) }}*/
/* */
/* {{ forms.lightswitchField({*/
/* 	label:        "Allow attachments?"|t,*/
/* 	id:           'allowAttachments',*/
/* 	name:         'allowAttachments',*/
/* 	on:           settings.allowAttachments,*/
/* 	disabled:     (craft.config.get('allowAttachments', 'contactform') is not sameas(null)),*/
/* 	warning:      (craft.config.get('allowAttachments', 'contactform') is not sameas(null)) ? configWarning('allowAttachments'),*/
/* 	errors:       settings.getErrors('allowAttachments')*/
/* }) }}*/
/* */
/* {{ forms.textField({*/
/* 	label:        "Honeypot Field"|t,*/
/* 	id:           'honeypotField',*/
/* 	name:         'honeypotField',*/
/* 	instructions: "The name of the 'honeypot' field in your Contact Form."|t,*/
/* 	value:        settings.honeypotField,*/
/* 	disabled:     (craft.config.get('honeypotField', 'contactform') is not sameas(null)),*/
/* 	warning:      (craft.config.get('honeypotField', 'contactform') is not sameas(null)) ? configWarning('honeypotField'),*/
/* 	errors:       settings.getErrors('honeypotField')*/
/* }) }}*/
/* */
/* {{ forms.textField({*/
/* 	label:        "Success Flash Message"|t,*/
/* 	id:           "successFlashMessage",*/
/* 	name:         "successFlashMessage",*/
/* 	instructions: "The flash message displayed after successfully sending a message."|t,*/
/* 	value:        settings.successFlashMessage,*/
/* 	disabled:     (craft.config.get('successFlashMessage', 'contactform') is not sameas(null)),*/
/* 	warning:      (craft.config.get('successFlashMessage', 'contactform') is not sameas(null)) ? configWarning('successFlashMessage'),*/
/* 	errors:       settings.getErrors('successFlashMessage')*/
/* }) }}*/
/* */
