<?php

/* settings/assets/transforms/_settings */
class __TwigTemplate_94be7e7085c6190201dceb723e568af6d53357df29c4c168189a80fc68ef90c5 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/assets/transforms/_settings", 1);
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
        // line 3
        $context["docsUrl"] = "http://craftcms.com/docs/image-transforms";
        // line 5
        $_js = "css/transforms.css";
        \Craft\craft()->templates->includecssresource($_js);
        // line 6
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/assets/transforms/_settings", 6);
        // line 8
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Assets"), "url" => \Craft\UrlHelper::getUrl("settings/assets")), 2 => array("label" => \Craft\Craft::t("Image Transforms"), "url" => \Craft\UrlHelper::getUrl("settings/assets/transforms")));
        // line 14
        $context["fullPageForm"] = true;
        // line 16
        $context["isNewTransform"] = ( !array_key_exists("transform", $context) ||  !$this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "id", array()));
        // line 19
        if ((isset($context["isNewTransform"]) ? $context["isNewTransform"] : null)) {
            // line 20
            $context["title"] = \Craft\Craft::t("Create a new image transform");
        } else {
            // line 22
            $context["title"] = \Craft\Craft::t($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "name", array()));
        }
        // line 154
        ob_start();
        // line 155
        echo "\t";
        if (( !array_key_exists("transform", $context) ||  !$this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "handle", array()))) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 156
        echo "
\t\$('#mode input').change(function()
\t{
\t\tif (\$(this).val() == 'crop')
\t\t{
\t\t\t\$('#position-container').removeClass('hidden');
\t\t}
\t\telse
\t\t{
\t\t\t\$('#position-container').addClass('hidden');
\t\t}
\t})
";
        $_js = ob_get_clean();
        \Craft\craft()->templates->includejs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t\t<input type=\"hidden\" name=\"action\" value=\"assetTransforms/saveTransform\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/assets/transforms\">

\t\t";
        // line 30
        if ( !(isset($context["isNewTransform"]) ? $context["isNewTransform"] : null)) {
            echo "<input type=\"hidden\" name=\"transformId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 31
        echo "
\t\t";
        // line 32
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "id" => "name", "name" => "name", "value" => ((        // line 37
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "name", array())) : (null)), "errors" => ((        // line 38
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "name"), "method")) : (null)), "autofocus" => true, "required" => true, "translatable" => true));
        // line 42
        echo "

        ";
        // line 44
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "id" => "handle", "name" => "handle", "value" => ((        // line 48
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "handle", array())) : (null)), "errors" => ((        // line 49
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true, "translatable" => true));
        // line 52
        echo "

        ";
        // line 54
        ob_start();
        // line 55
        echo "        \t<div id=\"mode\">
        \t\t<label id=\"mode-crop\">
        \t\t\t<input type=\"radio\" name=\"mode\" value=\"crop\"";
        // line 57
        if (( !array_key_exists("transform", $context) || ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode", array()) == "crop"))) {
            echo " checked";
        }
        echo ">
        \t\t\t";
        // line 58
        echo twig_escape_filter($this->env, \Craft\Craft::t("Crop"), "html", null, true);
        echo "
        \t\t</label>

        \t\t<label id=\"mode-fit\">
        \t\t\t<input type=\"radio\" name=\"mode\" value=\"fit\"";
        // line 62
        if ((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode", array()) == "fit"))) {
            echo " checked";
        }
        echo ">
        \t\t\t";
        // line 63
        echo twig_escape_filter($this->env, \Craft\Craft::t("Fit"), "html", null, true);
        echo "
        \t\t</label>

        \t\t<label id=\"mode-stretch\">
        \t\t\t<input type=\"radio\" name=\"mode\" value=\"stretch\"";
        // line 67
        if ((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode", array()) == "stretch"))) {
            echo " checked";
        }
        echo ">
        \t\t\t";
        // line 68
        echo twig_escape_filter($this->env, \Craft\Craft::t("Stretch"), "html", null, true);
        echo "
        \t\t</label>
        \t</div>
        ";
        $context["modeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 72
        echo "
\t\t";
        // line 73
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Mode")),         // line 75
(isset($context["modeInput"]) ? $context["modeInput"] : null));
        echo "

\t\t<div id=\"position-container\"";
        // line 77
        if ((array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode", array()) != "crop"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t\t";
        // line 78
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Crop Position"), "id" => "position", "name" => "position", "options" => array("top-left" => \Craft\Craft::t("Top-Left"), "top-center" => \Craft\Craft::t("Top-Center"), "top-right" => \Craft\Craft::t("Top-Right"), "center-left" => \Craft\Craft::t("Center-Left"), "center-center" => \Craft\Craft::t("Center-Center"), "center-right" => \Craft\Craft::t("Center-Right"), "bottom-left" => \Craft\Craft::t("Bottom-Left"), "bottom-center" => \Craft\Craft::t("Bottom-Center"), "bottom-right" => \Craft\Craft::t("Bottom-Right")), "value" => (((        // line 93
array_key_exists("transform", $context) && ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "mode", array()) == "crop"))) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "position", array())) : ("center-center"))));
        // line 94
        echo "
\t\t</div>

\t\t";
        // line 97
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Width"), "id" => "width", "name" => "width", "size" => 5, "value" => ((        // line 102
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "width", array())) : (null)), "errors" => ((        // line 103
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "width"), "method")) : (null)), "translatable" => true));
        // line 105
        echo "

\t\t";
        // line 107
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Height"), "id" => "height", "name" => "height", "size" => 5, "value" => ((        // line 112
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "height", array())) : (null)), "errors" => ((        // line 113
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "height"), "method")) : (null)), "translatable" => true));
        // line 115
        echo "

\t\t";
        // line 117
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Quality"), "id" => "quality", "name" => "quality", "options" => array("0" => \Craft\Craft::t("Auto"), "10" => \Craft\Craft::t("Low"), "30" => \Craft\Craft::t("Medium"), "60" => \Craft\Craft::t("High"), "82" => \Craft\Craft::t("Very High (Recommended)"), "100" => \Craft\Craft::t("Maximum")), "value" => ((        // line 129
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "quality", array())) : (82)), "errors" => ((        // line 130
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "quality"), "method")) : (null)), "translatable" => true));
        // line 132
        echo "

        ";
        // line 134
        $context["formatOptions"] = array(0 => array("label" => "Auto", "value" => null), 1 => array("label" => "jpg", "value" => "jpg"), 2 => array("label" => "png", "value" => "png"), 3 => array("label" => "gif", "value" => "gif"));
        // line 140
        echo "
        ";
        // line 141
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Image Format"), "id" => "format", "name" => "format", "instructions" => "The image format that transformed images should use.", "value" => ((        // line 146
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "format", array())) : (null)), "errors" => ((        // line 147
array_key_exists("transform", $context)) ? ($this->getAttribute((isset($context["transform"]) ? $context["transform"] : null), "getErrors", array(0 => "format"), "method")) : (null)), "options" =>         // line 148
(isset($context["formatOptions"]) ? $context["formatOptions"] : null), "translatable" => true));
        // line 150
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/assets/transforms/_settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 150,  206 => 148,  205 => 147,  204 => 146,  203 => 141,  200 => 140,  198 => 134,  194 => 132,  192 => 130,  191 => 129,  190 => 117,  186 => 115,  184 => 113,  183 => 112,  182 => 107,  178 => 105,  176 => 103,  175 => 102,  174 => 97,  169 => 94,  167 => 93,  166 => 78,  160 => 77,  155 => 75,  154 => 73,  151 => 72,  144 => 68,  138 => 67,  131 => 63,  125 => 62,  118 => 58,  112 => 57,  108 => 55,  106 => 54,  102 => 52,  100 => 49,  99 => 48,  98 => 44,  94 => 42,  92 => 38,  91 => 37,  90 => 32,  87 => 31,  81 => 30,  76 => 27,  73 => 26,  69 => 1,  53 => 156,  48 => 155,  46 => 154,  43 => 22,  40 => 20,  38 => 19,  36 => 16,  34 => 14,  32 => 8,  30 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends "_layouts/cp" %}*/
/* */
/* {% set docsUrl = 'http://craftcms.com/docs/image-transforms' %}*/
/* */
/* {% includecssresource 'css/transforms.css' %}*/
/* {% import "_includes/forms" as forms %}*/
/* */
/* {% set crumbs = [*/
/* 	{ label: "Settings"|t, url: url('settings') },*/
/* 	{ label: "Assets"|t, url: url('settings/assets') },*/
/* 	{ label: "Image Transforms"|t, url: url('settings/assets/transforms') }*/
/* ] %}*/
/* */
/* {% set fullPageForm = true %}*/
/* */
/* {% set isNewTransform = (transform is not defined or not transform.id) %}*/
/* */
/* */
/* {% if isNewTransform %}*/
/* 	{% set title = "Create a new image transform"|t %}*/
/* {% else %}*/
/* 	{% set title = transform.name|t %}*/
/* {% endif %}*/
/* */
/* */
/* {% block content %}*/
/* 		<input type="hidden" name="action" value="assetTransforms/saveTransform">*/
/* 		<input type="hidden" name="redirect" value="settings/assets/transforms">*/
/* */
/* 		{% if not isNewTransform %}<input type="hidden" name="transformId" value="{{ transform.id }}">{% endif %}*/
/* */
/* 		{{ forms.textField({*/
/* 			first: true,*/
/* 			label: "Name"|t,*/
/* 			id: 'name',*/
/* 			name: 'name',*/
/* 			value: (transform is defined ? transform.name : null),*/
/* 			errors: (transform is defined ? transform.getErrors('name') : null),*/
/* 			autofocus: true,*/
/* 			required: true,*/
/* 			translatable: true*/
/* 		}) }}*/
/* */
/*         {{ forms.textField({*/
/* 	        label: "Handle"|t,*/
/* 	        id: "handle",*/
/* 	        name: "handle",*/
/* 	        value: (transform is defined ? transform.handle : null),*/
/* 	        errors: (transform is defined ? transform.getErrors('handle') : null),*/
/* 	        required: true,*/
/* 	        translatable: true*/
/*         }) }}*/
/* */
/*         {% set modeInput %}*/
/*         	<div id="mode">*/
/*         		<label id="mode-crop">*/
/*         			<input type="radio" name="mode" value="crop"{% if transform is not defined or transform.mode == 'crop' %} checked{% endif %}>*/
/*         			{{ "Crop"|t }}*/
/*         		</label>*/
/* */
/*         		<label id="mode-fit">*/
/*         			<input type="radio" name="mode" value="fit"{% if transform is defined and transform.mode == 'fit' %} checked{% endif %}>*/
/*         			{{ "Fit"|t }}*/
/*         		</label>*/
/* */
/*         		<label id="mode-stretch">*/
/*         			<input type="radio" name="mode" value="stretch"{% if transform is defined and transform.mode == 'stretch' %} checked{% endif %}>*/
/*         			{{ "Stretch"|t }}*/
/*         		</label>*/
/*         	</div>*/
/*         {% endset %}*/
/* */
/* 		{{ forms.field({*/
/* 			label: "Mode"|t*/
/* 		}, modeInput) }}*/
/* */
/* 		<div id="position-container"{% if transform is defined and transform.mode != 'crop' %} class="hidden"{% endif %}>*/
/* 			{{ forms.selectField({*/
/* 				label: "Crop Position"|t,*/
/* 				id: 'position',*/
/* 				name: 'position',*/
/* 				options: {*/
/* 					'top-left': "Top-Left"|t,*/
/* 					'top-center': "Top-Center"|t,*/
/* 					'top-right': "Top-Right"|t,*/
/* 					'center-left': "Center-Left"|t,*/
/* 					'center-center': "Center-Center"|t,*/
/* 					'center-right': "Center-Right"|t,*/
/* 					'bottom-left': "Bottom-Left"|t,*/
/* 					'bottom-center': "Bottom-Center"|t,*/
/* 					'bottom-right': "Bottom-Right"|t*/
/* 				},*/
/* 				value: (transform is defined and transform.mode == 'crop' ? transform.position : 'center-center')*/
/* 			}) }}*/
/* 		</div>*/
/* */
/* 		{{ forms.textField({*/
/* 			label: "Width"|t,*/
/* 			id: "width",*/
/* 			name: "width",*/
/* 			size: 5,*/
/* 			value: (transform is defined ? transform.width : null),*/
/* 			errors: (transform is defined ? transform.getErrors('width') : null),*/
/* 			translatable: true*/
/* 		}) }}*/
/* */
/* 		{{ forms.textField({*/
/* 			label: "Height"|t,*/
/* 			id: "height",*/
/* 			name: "height",*/
/* 			size: 5,*/
/* 			value: (transform is defined ? transform.height : null),*/
/* 			errors: (transform is defined ? transform.getErrors('height') : null),*/
/* 			translatable: true*/
/* 		}) }}*/
/* */
/* 		{{ forms.selectField({*/
/* 			label: "Quality"|t,*/
/* 			id: "quality",*/
/* 			name: "quality",*/
/* 			options: {*/
/* 				'0': "Auto"|t,*/
/* 				'10': "Low"|t,*/
/* 				'30': "Medium"|t,*/
/* 				'60': "High"|t,*/
/* 				'82': "Very High (Recommended)"|t,*/
/* 				'100': "Maximum"|t*/
/* 			},*/
/* 			value: (transform is defined ? transform.quality : 82),*/
/* 			errors: (transform is defined ? transform.getErrors('quality') : null),*/
/* 			translatable: true*/
/* 		}) }}*/
/* */
/*         {% set formatOptions = [*/
/*             {label: 'Auto', value: null},*/
/*             {label: 'jpg', value: 'jpg'},*/
/*             {label: 'png', value: 'png'},*/
/*             {label: 'gif', value: 'gif'},*/
/*         ] %}*/
/* */
/*         {{ forms.selectField({*/
/*             label: "Image Format"|t,*/
/*             id: "format",*/
/*             name: "format",*/
/*             instructions: 'The image format that transformed images should use.',*/
/*             value: (transform is defined ? transform.format : null),*/
/*             errors: (transform is defined ? transform.getErrors('format') : null),*/
/*             options: formatOptions,*/
/*             translatable: true*/
/*         }) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% includejs %}*/
/* 	{% if transform is not defined or not transform.handle %}new Craft.HandleGenerator('#name', '#handle');{% endif %}*/
/* */
/* 	$('#mode input').change(function()*/
/* 	{*/
/* 		if ($(this).val() == 'crop')*/
/* 		{*/
/* 			$('#position-container').removeClass('hidden');*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			$('#position-container').addClass('hidden');*/
/* 		}*/
/* 	})*/
/* {% endincludejs %}*/
/* */
