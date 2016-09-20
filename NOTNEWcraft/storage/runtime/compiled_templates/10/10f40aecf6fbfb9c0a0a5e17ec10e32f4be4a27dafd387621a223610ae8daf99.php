<?php

/* settings/email */
class __TwigTemplate_1f3cacd6176465d8cbecf9e2f5b50ba8bf2cfc6e1665715a69cb1932c46d918e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) ? ("settings/email/_layout") : ("_layouts/cp")), "settings/email", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        \Craft\craft()->userSession->requireAdmin();
        // line 5
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 9
        $context["fullPageForm"] = true;
        // line 11
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 12
            $context["selectedNavItem"] = "settings";
        } else {
            // line 14
            $context["title"] = \Craft\Craft::t("Email Settings");
        }
        // line 17
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/email", 17);
        // line 18
        $_js = "js/email_settings.js";
        \Craft\craft()->templates->includejsresource($_js);
        // line 19
        \Craft\craft()->templates->includeTranslations(
        	"Email sent successfully! Check your inbox.",
        	"An unknown error occurred."
        );
        // line 25
        if ( !array_key_exists("settings", $context)) {
            // line 26
            $context["settings"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "systemSettings", array()), "email", array());
            // line 27
            $context["freshSettings"] = true;
        } else {
            // line 29
            $context["freshSettings"] = false;
        }
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "\t\t<input type=\"hidden\" name=\"action\" value=\"systemSettings/saveEmailSettings\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings\">

\t\t";
        // line 37
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("System Email Address"), "instructions" => \Craft\Craft::t("The email address Craft CMS will use when sending email."), "id" => "emailAddress", "name" => "emailAddress", "value" => $this->getAttribute(        // line 43
(isset($context["settings"]) ? $context["settings"] : null), "emailAddress", array()), "autofocus" => true, "required" => true, "errors" => ((        // line 46
(isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "emailAddress"), "method")))));
        // line 47
        echo "

\t\t";
        // line 49
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Sender Name"), "instructions" => \Craft\Craft::t("The “From” name Craft CMS will use when sending email."), "id" => "senderName", "name" => "senderName", "value" => $this->getAttribute(        // line 54
(isset($context["settings"]) ? $context["settings"] : null), "senderName", array()), "required" => true, "errors" => ((        // line 56
(isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "senderName"), "method")))));
        // line 57
        echo "

\t\t";
        // line 59
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 60
            echo "\t\t\t";
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("HTML Email Template"), "instructions" => \Craft\Craft::t("The template Craft CMS will use for HTML emails"), "id" => "template", "name" => "template", "value" => $this->getAttribute(            // line 65
(isset($context["settings"]) ? $context["settings"] : null), "template", array()), "errors" => ((            // line 66
(isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "template"), "method")))));
            // line 67
            echo "
\t\t";
        }
        // line 69
        echo "
\t\t<hr>

\t\t";
        // line 72
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Protocol"), "instructions" => \Craft\Craft::t("The protocol Craft CMS will use to send email."), "id" => "protocol", "name" => "protocol", "options" => array("php" => \Craft\Craft::t("PHP Mail"), "sendmail" => \Craft\Craft::t("Sendmail"), "smtp" => \Craft\Craft::t("SMTP"), "pop" => \Craft\Craft::t("POP"), "gmail" => \Craft\Craft::t("Gmail")), "value" => $this->getAttribute(        // line 78
(isset($context["settings"]) ? $context["settings"] : null), "protocol", array())));
        // line 79
        echo "

\t\t<div id=\"hidden-fields\" class=\"hidden\">
\t\t\t";
        // line 82
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "username", "name" => "username", "value" => $this->getAttribute(        // line 86
(isset($context["settings"]) ? $context["settings"] : null), "username", array()), "errors" => ((($this->getAttribute(        // line 87
(isset($context["settings"]) ? $context["settings"] : null), "protocol", array()) != "Smtp")) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "username"), "method")))) : (null))));
        // line 88
        echo "

\t\t\t";
        // line 90
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "password", "name" => "password", "value" => $this->getAttribute(        // line 94
(isset($context["settings"]) ? $context["settings"] : null), "password", array()), "errors" => ((($this->getAttribute(        // line 95
(isset($context["settings"]) ? $context["settings"] : null), "protocol", array()) != "Smtp")) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "password"), "method")))) : (null))));
        // line 96
        echo "

\t\t\t";
        // line 98
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Port"), "id" => "port", "name" => "port", "value" => $this->getAttribute(        // line 102
(isset($context["settings"]) ? $context["settings"] : null), "port", array()), "size" => 4, "errors" => ((        // line 104
(isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "port"), "method")))));
        // line 105
        echo "

\t\t\t";
        // line 107
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Host Name"), "id" => "host", "name" => "host", "value" => $this->getAttribute(        // line 111
(isset($context["settings"]) ? $context["settings"] : null), "host", array()), "errors" => ((        // line 112
(isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "host"), "method")))));
        // line 113
        echo "

\t\t\t";
        // line 115
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Timeout"), "id" => "timeout", "name" => "timeout", "value" => $this->getAttribute(        // line 119
(isset($context["settings"]) ? $context["settings"] : null), "timeout", array()), "size" => 2, "errors" => ((        // line 121
(isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "timeout"), "method")))));
        // line 122
        echo "

\t\t\t";
        // line 124
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Use SMTP Keep Alive"), "id" => "smtpKeepAlive", "name" => "smtpKeepAlive", "checked" => $this->getAttribute(        // line 128
(isset($context["settings"]) ? $context["settings"] : null), "smtpKeepAlive", array())));
        // line 129
        echo "

\t\t\t";
        // line 131
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Use SMTP authentication"), "id" => "smtpAuth", "name" => "smtpAuth", "checked" => $this->getAttribute(        // line 135
(isset($context["settings"]) ? $context["settings"] : null), "smtpAuth", array()), "toggle" => "smtpAuthCredentials-field"));
        // line 137
        echo "

\t\t\t<div id=\"smtpAuthCredentials-field\" class=\"nested-fields";
        // line 139
        if ( !$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtpAuth", array())) {
            echo " hidden";
        }
        echo "\">
\t\t\t\t";
        // line 140
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Username"), "id" => "smtp-username", "name" => "smtpUsername", "value" => $this->getAttribute(        // line 144
(isset($context["settings"]) ? $context["settings"] : null), "username", array()), "errors" => ((($this->getAttribute(        // line 145
(isset($context["settings"]) ? $context["settings"] : null), "protocol", array()) == "Smtp")) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "username"), "method")))) : (null))));
        // line 146
        echo "

\t\t\t\t";
        // line 148
        echo $context["forms"]->getpasswordField(array("label" => \Craft\Craft::t("Password"), "id" => "smtpPassword", "name" => "smtpPassword", "value" => $this->getAttribute(        // line 152
(isset($context["settings"]) ? $context["settings"] : null), "password", array()), "errors" => ((($this->getAttribute(        // line 153
(isset($context["settings"]) ? $context["settings"] : null), "protocol", array()) == "Smtp")) ? ((((isset($context["freshSettings"]) ? $context["freshSettings"] : null)) ? (null) : ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "getErrors", array(0 => "password"), "method")))) : (null))));
        // line 154
        echo "
\t\t\t</div>

\t\t\t";
        // line 157
        echo $context["forms"]->getselectField(array("label" => "SMTP Secure Transport Type", "id" => "smtpSecureTransportType", "name" => "smtpSecureTransportType", "options" => array("none" => \Craft\Craft::t("None"), "ssl" => \Craft\Craft::t("SSL"), "tls" => \Craft\Craft::t("TLS")), "default" => "none", "value" => $this->getAttribute(        // line 163
(isset($context["settings"]) ? $context["settings"] : null), "smtpSecureTransportType", array())));
        // line 164
        echo "
\t\t</div>

\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<div id=\"test\" class=\"btn\">";
        // line 170
        echo twig_escape_filter($this->env, \Craft\Craft::t("Test"), "html", null, true);
        echo "</div>
\t\t\t<div id=\"test-spinner\" class=\"spinner hidden\"></div>
\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "settings/email";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 170,  190 => 164,  188 => 163,  187 => 157,  182 => 154,  180 => 153,  179 => 152,  178 => 148,  174 => 146,  172 => 145,  171 => 144,  170 => 140,  164 => 139,  160 => 137,  158 => 135,  157 => 131,  153 => 129,  151 => 128,  150 => 124,  146 => 122,  144 => 121,  143 => 119,  142 => 115,  138 => 113,  136 => 112,  135 => 111,  134 => 107,  130 => 105,  128 => 104,  127 => 102,  126 => 98,  122 => 96,  120 => 95,  119 => 94,  118 => 90,  114 => 88,  112 => 87,  111 => 86,  110 => 82,  105 => 79,  103 => 78,  102 => 72,  97 => 69,  93 => 67,  91 => 66,  90 => 65,  88 => 60,  86 => 59,  82 => 57,  80 => 56,  79 => 54,  78 => 49,  74 => 47,  72 => 46,  71 => 43,  70 => 37,  65 => 34,  62 => 33,  58 => 3,  55 => 29,  52 => 27,  50 => 26,  48 => 25,  43 => 19,  40 => 18,  38 => 17,  35 => 14,  32 => 12,  30 => 11,  28 => 9,  26 => 5,  24 => 1,  18 => 3,);
    }
}
/* {% requireAdmin %}*/
/* */
/* {% extends (CraftEdition >= CraftClient ? "settings/email/_layout" : "_layouts/cp") %}*/
/* */
/* {% set crumbs = [*/
/* 	{ label: "Settings"|t, url: url('settings') }*/
/* ] %}*/
/* */
/* {% set fullPageForm = true %}*/
/* */
/* {% if CraftEdition >= CraftClient %}*/
/* 	{% set selectedNavItem = 'settings' %}*/
/* {% else %}*/
/* 	{% set title = "Email Settings"|t %}*/
/* {% endif %}*/
/* */
/* {% import "_includes/forms" as forms %}*/
/* {% includejsresource "js/email_settings.js" %}*/
/* {% includeTranslations*/
/* 	"Email sent successfully! Check your inbox.",*/
/* 	"An unknown error occurred."*/
/* %}*/
/* */
/* */
/* {% if settings is not defined %}*/
/* 	{% set settings = craft.systemSettings.email %}*/
/* 	{% set freshSettings = true %}*/
/* {% else %}*/
/* 	{% set freshSettings = false %}*/
/* {% endif %}*/
/* */
/* */
/* {% block content %}*/
/* 		<input type="hidden" name="action" value="systemSettings/saveEmailSettings">*/
/* 		<input type="hidden" name="redirect" value="settings">*/
/* */
/* 		{{ forms.textField({*/
/* 			first: true,*/
/* 			label: "System Email Address"|t,*/
/* 			instructions: "The email address Craft CMS will use when sending email."|t,*/
/* 			id: 'emailAddress',*/
/* 			name: 'emailAddress',*/
/* 			value: settings.emailAddress,*/
/* 			autofocus: true,*/
/* 			required: true,*/
/* 			errors: (freshSettings ? null : settings.getErrors('emailAddress'))*/
/* 		}) }}*/
/* */
/* 		{{ forms.textField({*/
/* 			label: "Sender Name"|t,*/
/* 			instructions: "The “From” name Craft CMS will use when sending email."|t,*/
/* 			id: 'senderName',*/
/* 			name: 'senderName',*/
/* 			value: settings.senderName,*/
/* 			required: true,*/
/* 			errors: (freshSettings ? null : settings.getErrors('senderName'))*/
/* 		}) }}*/
/* */
/* 		{% if CraftEdition >= CraftClient %}*/
/* 			{{ forms.textField({*/
/* 				label: "HTML Email Template"|t,*/
/* 				instructions: "The template Craft CMS will use for HTML emails"|t,*/
/* 				id: 'template',*/
/* 				name: 'template',*/
/* 				value: settings.template,*/
/* 				errors: (freshSettings ? null : settings.getErrors('template'))*/
/* 			}) }}*/
/* 		{% endif %}*/
/* */
/* 		<hr>*/
/* */
/* 		{{ forms.selectField({*/
/* 			label: "Protocol"|t,*/
/* 			instructions: "The protocol Craft CMS will use to send email."|t,*/
/* 			id: 'protocol',*/
/* 			name: 'protocol',*/
/* 			options: { php: "PHP Mail"|t, sendmail: "Sendmail"|t, smtp: "SMTP"|t, pop: "POP"|t, gmail: "Gmail"|t },*/
/* 			value: settings.protocol*/
/* 		}) }}*/
/* */
/* 		<div id="hidden-fields" class="hidden">*/
/* 			{{ forms.textField({*/
/* 				label: "Username"|t,*/
/* 				id: 'username',*/
/* 				name: 'username',*/
/* 				value: settings.username,*/
/* 				errors: (settings.protocol != 'Smtp' ? (freshSettings ? null : settings.getErrors('username')) : null)*/
/* 			}) }}*/
/* */
/* 			{{ forms.passwordField({*/
/* 				label: "Password"|t,*/
/* 				id: 'password',*/
/* 				name: 'password',*/
/* 				value: settings.password,*/
/* 				errors: (settings.protocol != 'Smtp' ? (freshSettings ? null : settings.getErrors('password')) : null)*/
/* 			}) }}*/
/* */
/* 			{{ forms.textField({*/
/* 				label: "Port"|t,*/
/* 				id: 'port',*/
/* 				name: 'port',*/
/* 				value: settings.port,*/
/* 				size: 4,*/
/* 				errors: (freshSettings ? null : settings.getErrors('port'))*/
/* 			}) }}*/
/* */
/* 			{{ forms.textField({*/
/* 				label: "Host Name"|t,*/
/* 				id: 'host',*/
/* 				name: 'host',*/
/* 				value: settings.host,*/
/* 				errors: (freshSettings ? null : settings.getErrors('host'))*/
/* 			}) }}*/
/* */
/* 			{{ forms.textField({*/
/* 				label: "Timeout"|t,*/
/* 				id: 'timeout',*/
/* 				name: 'timeout',*/
/* 				value: settings.timeout,*/
/* 				size: 2,*/
/* 				errors: (freshSettings ? null : settings.getErrors('timeout'))*/
/* 			}) }}*/
/* */
/* 			{{ forms.checkboxField({*/
/* 				label: "Use SMTP Keep Alive"|t,*/
/* 				id: 'smtpKeepAlive',*/
/* 				name: 'smtpKeepAlive',*/
/* 				checked: settings.smtpKeepAlive*/
/* 			}) }}*/
/* */
/* 			{{ forms.checkboxField({*/
/* 				label: "Use SMTP authentication"|t,*/
/* 				id: 'smtpAuth',*/
/* 				name: 'smtpAuth',*/
/* 				checked: settings.smtpAuth,*/
/* 				toggle: 'smtpAuthCredentials-field'*/
/* 			}) }}*/
/* */
/* 			<div id="smtpAuthCredentials-field" class="nested-fields{% if not settings.smtpAuth %} hidden{% endif %}">*/
/* 				{{ forms.textField({*/
/* 					label: "Username"|t,*/
/* 					id: 'smtp-username',*/
/* 					name: 'smtpUsername',*/
/* 					value: settings.username,*/
/* 					errors: (settings.protocol == 'Smtp' ? (freshSettings ? null : settings.getErrors('username')) : null)*/
/* 				}) }}*/
/* */
/* 				{{ forms.passwordField({*/
/* 					label: "Password"|t,*/
/* 					id: 'smtpPassword',*/
/* 					name: 'smtpPassword',*/
/* 					value: settings.password,*/
/* 					errors: (settings.protocol == 'Smtp' ? (freshSettings ? null : settings.getErrors('password')) : null)*/
/* 				}) }}*/
/* 			</div>*/
/* */
/* 			{{ forms.selectField({*/
/* 				label: "SMTP Secure Transport Type",*/
/* 				id: 'smtpSecureTransportType',*/
/* 				name: 'smtpSecureTransportType',*/
/* 				options: { none: "None"|t, ssl: "SSL"|t, tls: "TLS"|t },*/
/* 				default: 'none',*/
/* 				value: settings.smtpSecureTransportType*/
/* 			}) }}*/
/* 		</div>*/
/* */
/* 		<hr>*/
/* */
/* 		<div class="buttons">*/
/* 			<div id="test" class="btn">{{ "Test"|t }}</div>*/
/* 			<div id="test-spinner" class="spinner hidden"></div>*/
/* 		</div>*/
/* {% endblock %}*/
/* */
