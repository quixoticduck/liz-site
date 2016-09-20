<?php

/* settings/sections/_edit */
class __TwigTemplate_684afa048662fcd7dad9e26ffb58ac3970180cef815c74dcd8de8ee99f85f882 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "settings/sections/_edit", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["docsUrl"] = "http://buildwithcraft.com/docs/sections-and-entries#sections";
        // line 5
        $context["forms"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 5);
        // line 89
        $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"] = $this;
        // line 91
        ob_start();
        // line 92
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut>
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveSection\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 97
        if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array())) {
            echo "<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()), "html", null, true);
            echo "\">";
        }
        // line 98
        echo "
\t\t";
        // line 99
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this section will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute(        // line 105
(isset($context["section"]) ? $context["section"] : null), "name", array()), "errors" => $this->getAttribute(        // line 106
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true, "translatable" => true));
        // line 110
        echo "

\t\t";
        // line 112
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this section in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute(        // line 118
(isset($context["section"]) ? $context["section"] : null), "handle", array()), "errors" => $this->getAttribute(        // line 119
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 121
        echo "

\t\t";
        // line 123
        if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
            // line 124
            echo "\t\t\t";
            ob_start();
            // line 125
            echo "\t\t\t\t<table class=\"data\" style=\"width: auto;\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 129
            echo twig_escape_filter($this->env, \Craft\Craft::t("Locale"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\">";
            // line 130
            echo twig_escape_filter($this->env, \Craft\Craft::t("Default Status"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 134
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocales", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 135
                echo "\t\t\t\t\t\t\t";
                $context["localeSelected"] = ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) || $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true));
                // line 136
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 138
                echo $context["forms"]->getcheckbox(array("id" => ("locale-" . $this->getAttribute(                // line 139
$context["locale"], "id", array())), "name" => "locales[]", "value" => $this->getAttribute(                // line 141
$context["locale"], "id", array()), "checked" =>                 // line 142
(isset($context["localeSelected"]) ? $context["localeSelected"] : null), "toggle" => (".for-locale-" . $this->getAttribute(                // line 143
$context["locale"], "id", array()))));
                // line 144
                echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><label for=\"locale-";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo ")</label></td>
\t\t\t\t\t\t\t\t<td class=\"centeralign\">
\t\t\t\t\t\t\t\t\t<div class=\"for-locale-";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                if ( !(isset($context["localeSelected"]) ? $context["localeSelected"] : null)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 149
                echo $context["forms"]->getlightswitch(array("name" => (("defaultLocaleStatuses[" . $this->getAttribute(                // line 150
$context["locale"], "id", array())) . "]"), "on" => ((                // line 151
(isset($context["brandNewSection"]) ? $context["brandNewSection"] : null) ||  !$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true)) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "enabledByDefault", array())), "small" => true));
                // line 153
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
            $context["localesInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 161
            echo "
\t\t\t";
            // line 162
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Which locales should entries in this section target?"), "errors" => $this->getAttribute(            // line 164
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "localeErrors"), "method")),             // line 165
(isset($context["localesInput"]) ? $context["localesInput"] : null));
            echo "
\t\t";
        }
        // line 167
        echo "
\t\t";
        // line 168
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Section Type"), "instructions" => (\Craft\Craft::t("What type of section is this?") . (($this->getAttribute(        // line 170
(isset($context["section"]) ? $context["section"] : null), "id", array())) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" =>         // line 173
(isset($context["typeOptions"]) ? $context["typeOptions"] : null), "value" => $this->getAttribute(        // line 174
(isset($context["section"]) ? $context["section"] : null), "type", array()), "toggle" => true, "targetPrefix" => "type-", "errors" => $this->getAttribute(        // line 177
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "type"), "method")));
        // line 178
        echo "

\t\t<hr>

\t\t";
        // line 182
        if ((isset($context["canBeSingle"]) ? $context["canBeSingle"] : null)) {
            // line 183
            echo "\t\t\t<div id=\"type-single\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "single")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 185
            if ((isset($context["canBeHomepage"]) ? $context["canBeHomepage"] : null)) {
                // line 186
                echo "\t\t\t\t\t";
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This is for the homepage"), "id" => "single-homepage", "name" => "types[single][homepage]", "checked" => $this->getAttribute(                // line 190
(isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method"), "reverseToggle" => "single-uri-container"));
                // line 192
                echo "
\t\t\t\t";
            }
            // line 194
            echo "
\t\t\t\t<div id=\"single-uri-container\"";
            // line 195
            if ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "isHomepage", array(), "method")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t\t";
            // line 196
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("URI"), "instructions" => \Craft\Craft::t("What the entry URI should be."), "required" => true, "errors" => $this->getAttribute(            // line 200
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method")), $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->geturlFormatInput("single",             // line 201
(isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 204
            echo $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->gettemplateField("single", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t</div>
\t\t";
        }
        // line 208
        echo "
\t\t";
        // line 209
        $context["urlFormatParams"] = array("label" => \Craft\Craft::t("Entry URL Format"), "instructions" => \Craft\Craft::t("What the entry URLs should look like. You can include tags that output entry properties, such as {ex1} or {ex2}.", array("ex1" => "<code>{slug}</code>", "ex2" => "<code>{postDate|date(\"Y\")}</code>")), "required" => true, "errors" => $this->getAttribute(        // line 213
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "urlFormat"), "method"));
        // line 215
        echo "
\t\t";
        // line 216
        if ((isset($context["canBeChannel"]) ? $context["canBeChannel"] : null)) {
            // line 217
            echo "\t\t\t<div id=\"type-channel\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "channel")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 219
            echo $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->gethasUrlsField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"channel-url-settings\" class=\"nested-fields";
            // line 221
            if ( !$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls", array())) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 222
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : null), $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->geturlFormatInput("channel", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "

\t\t\t\t\t";
            // line 224
            echo $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->gettemplateField("channel", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t</div>
\t\t";
        }
        // line 229
        echo "
\t\t";
        // line 230
        if ((isset($context["canBeStructure"]) ? $context["canBeStructure"] : null)) {
            // line 231
            echo "\t\t\t<div id=\"type-structure\"";
            if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) != "structure")) {
                echo " class=\"hidden\"";
            }
            echo ">

\t\t\t\t";
            // line 233
            echo $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->gethasUrlsField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "

\t\t\t\t<div id=\"structure-url-settings\" class=\"nested-fields";
            // line 235
            if ( !$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "hasUrls", array())) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t";
            // line 236
            echo $context["forms"]->getfield((isset($context["urlFormatParams"]) ? $context["urlFormatParams"] : null), $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->geturlFormatInput("structure", (isset($context["brandNewSection"]) ? $context["brandNewSection"] : null), (isset($context["section"]) ? $context["section"] : null)));
            echo "

\t\t\t\t\t";
            // line 238
            echo $context["__internal_05b1ef2270ca31abb4f469ce03db992a99d0824c3876b39604bda6d82db0ebad"]->gettemplateField("structure", (isset($context["section"]) ? $context["section"] : null));
            echo "
\t\t\t\t</div>

\t\t\t\t";
            // line 241
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Levels"), "instructions" => \Craft\Craft::t("The maximum number of levels this section can have. Leave blank if you don’t care."), "id" => "structure-maxLevels", "name" => "types[structure][maxLevels]", "value" => $this->getAttribute(            // line 246
(isset($context["section"]) ? $context["section"] : null), "maxLevels", array()), "size" => 5, "errors" => $this->getAttribute(            // line 248
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "maxLevels"), "method")));
            // line 249
            echo "

\t\t\t</div>
\t\t";
        }
        // line 253
        echo "
\t\t<hr>

\t\t";
        // line 256
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 257
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Enable versioning for entries in this section?"), "id" => "enableVersioning", "name" => "enableVersioning", "checked" => $this->getAttribute(            // line 261
(isset($context["section"]) ? $context["section"] : null), "enableVersioning", array())));
            // line 262
            echo "
\t\t";
        }
        // line 264
        echo "
\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 272
        ob_start();
        // line 273
        echo "\t";
        if ( !$this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle", array())) {
            echo "new Craft.HandleGenerator('#name', '#handle');";
        }
        // line 274
        echo "
\t";
        // line 275
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocales", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 276
            echo "\t\t";
            if (( !$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true) ||  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array()))) {
                // line 277
                echo "\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-urlFormat-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "');
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-urlFormat-";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "',   { suffix: '/{slug}' });
\t\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-urlFormat-";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                echo "', { suffix: '/{slug}' });
\t\t";
            }
            // line 281
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "
\t";
        // line 283
        if ((isset($context["brandNewSection"]) ? $context["brandNewSection"] : null)) {
            // line 284
            echo "\t\tnew Craft.EntryUrlFormatGenerator('#name', '#single-template');
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#channel-template',   { suffix: '/_entry' });
\t\tnew Craft.EntryUrlFormatGenerator('#name', '#structure-template', { suffix: '/_entry' });
\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 289
        $_js = (isset($context["js"]) ? $context["js"] : null);
        \Craft\craft()->templates->includeJs($_js);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function geturlFormatText($__sectionType__ = null, $__locale__ = null, $__section__ = null, $__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "locale" => $__locale__,
            "section" => $__section__,
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "\t";
            $context["__internal_4ecdbcc29199625b1d0ba49c73f065157087c706e6b4fe374482225091f3e864"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 8);
            // line 9
            echo "\t";
            $context["errors"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => (((isset($context["name"]) ? $context["name"] : null) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()))), "method");
            // line 10
            echo "
\t<div class=\"input";
            // line 11
            if ((isset($context["errors"]) ? $context["errors"] : null)) {
                echo " errors";
            }
            echo "\">
\t\t";
            // line 12
            echo $context["__internal_4ecdbcc29199625b1d0ba49c73f065157087c706e6b4fe374482225091f3e864"]->gettext(array("id" => ((((            // line 13
(isset($context["sectionType"]) ? $context["sectionType"] : null) . "-") . (isset($context["name"]) ? $context["name"] : null)) . "-") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array())), "class" => "code ltr", "name" => (((((("types[" .             // line 15
(isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][") . (isset($context["name"]) ? $context["name"] : null)) . "][") . $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array())) . "]"), "value" => (((            // line 16
(isset($context["value"]) ? $context["value"] : null) != "__home__")) ? ((isset($context["value"]) ? $context["value"] : null)) : (null)), "errors" =>             // line 17
(isset($context["errors"]) ? $context["errors"] : null)));
            // line 18
            echo "
\t</div>

\t";
            // line 21
            echo $context["__internal_4ecdbcc29199625b1d0ba49c73f065157087c706e6b4fe374482225091f3e864"]->geterrorList((isset($context["errors"]) ? $context["errors"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function geturlFormatInput($__sectionType__ = null, $__brandNewSection__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "brandNewSection" => $__brandNewSection__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") || ((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure"))) {
                // line 26
                echo "\t\t<table class=\"data fullwidth\">
\t\t\t";
                // line 27
                if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                    // line 28
                    echo "\t\t\t\t<thead>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                        // line 30
                        echo "\t\t\t\t\t\t<th></th>
\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t<th scope=\"col\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Top-Level Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t\t<th scope=\"col\">";
                    // line 33
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Nested Entries"), "html", null, true);
                    echo "</th>
\t\t\t\t</thead>
\t\t\t";
                }
                // line 36
                echo "\t\t\t<tbody>
\t\t\t\t";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getSiteLocales", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                    // line 38
                    echo "\t\t\t\t\t<tr class=\"for-locale-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                    if ((($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") &&  !(isset($context["brandNewSection"]) ? $context["brandNewSection"] : null)) &&  !$this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) {
                        echo " hidden";
                    }
                    echo "\">
\t\t\t\t\t\t";
                    // line 39
                    if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                        // line 40
                        echo "\t\t\t\t\t\t\t<th class=\"thin nowrap\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "id", array()), "html", null, true);
                        echo "</th>
\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t";
                    // line 43
                    $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == (isset($context["sectionType"]) ? $context["sectionType"] : null)) || ((isset($context["sectionType"]) ? $context["sectionType"] : null) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "urlFormat", array())) : (null));
                    // line 44
                    echo "\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => $context["locale"], 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    // line 46
                    if (((isset($context["sectionType"]) ? $context["sectionType"] : null) == "structure")) {
                        // line 47
                        echo "\t\t\t\t\t\t\t<td class=\"topalign\">
\t\t\t\t\t\t\t\t";
                        // line 48
                        $context["value"] = (((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "structure") && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute($context["locale"], "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute($context["locale"], "id", array()), array(), "array"), "nestedUrlFormat", array())) : ("{parent.uri}/{slug}"));
                        // line 49
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => $context["locale"], 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "nestedUrlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                        echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 57
                echo "\t\t";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getPrimarySiteLocale", array(), "method");
                // line 58
                echo "\t\t";
                $context["value"] = ((((($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == (isset($context["sectionType"]) ? $context["sectionType"] : null)) || ((isset($context["sectionType"]) ? $context["sectionType"] : null) != "single")) && $this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array(), "any", false, true), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()), array(), "array", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "locales", array()), $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()), array(), "array"), "urlFormat", array())) : (null));
                // line 59
                echo "\t\t";
                echo $this->getAttribute($this, "urlFormatText", array(0 => (isset($context["sectionType"]) ? $context["sectionType"] : null), 1 => (isset($context["locale"]) ? $context["locale"] : null), 2 => (isset($context["section"]) ? $context["section"] : null), 3 => "urlFormat", 4 => (isset($context["value"]) ? $context["value"] : null)), "method");
                echo "
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function gethasUrlsField($__sectionType__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            echo "\t";
            $context["__internal_201cf8c8690391e1fd850bb0214505b9ede03ab1da3b7eb9d23190fd6d012884"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 64);
            // line 65
            echo "
\t";
            // line 66
            echo $context["__internal_201cf8c8690391e1fd850bb0214505b9ede03ab1da3b7eb9d23190fd6d012884"]->getcheckboxField(array("label" => \Craft\Craft::t("Entries in this section have their own URLs"), "id" => (            // line 68
(isset($context["sectionType"]) ? $context["sectionType"] : null) . "-hasUrls"), "name" => (("types[" .             // line 69
(isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][hasUrls]"), "checked" => $this->getAttribute(            // line 70
(isset($context["section"]) ? $context["section"] : null), "hasUrls", array()), "toggle" => (            // line 71
(isset($context["sectionType"]) ? $context["sectionType"] : null) . "-url-settings")));
            // line 72
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function gettemplateField($__sectionType__ = null, $__section__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "sectionType" => $__sectionType__,
            "section" => $__section__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "\t";
            $context["__internal_5b3fe7797eaeb01853115ac3f5849a0493822f2ab1a4ac27c5a62486bdbe88ad"] = $this->loadTemplate("_includes/forms", "settings/sections/_edit", 76);
            // line 77
            echo "
\t";
            // line 78
            echo $context["__internal_5b3fe7797eaeb01853115ac3f5849a0493822f2ab1a4ac27c5a62486bdbe88ad"]->gettextField(array("label" => \Craft\Craft::t("Entry Template"), "instructions" => (((            // line 80
(isset($context["sectionType"]) ? $context["sectionType"] : null) == "single")) ? (\Craft\Craft::t("The template to use when the entry’s URL is requested.")) : (\Craft\Craft::t("The template to use when an entry’s URL is requested."))), "id" => (            // line 81
(isset($context["sectionType"]) ? $context["sectionType"] : null) . "-template"), "class" => "ltr", "name" => (("types[" .             // line 83
(isset($context["sectionType"]) ? $context["sectionType"] : null)) . "][template]"), "value" => $this->getAttribute(            // line 84
(isset($context["section"]) ? $context["section"] : null), "template", array()), "errors" => $this->getAttribute(            // line 85
(isset($context["section"]) ? $context["section"] : null), "getErrors", array(0 => "template"), "method")));
            // line 86
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "settings/sections/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 86,  623 => 85,  622 => 84,  621 => 83,  620 => 81,  619 => 80,  618 => 78,  615 => 77,  612 => 76,  599 => 75,  587 => 72,  585 => 71,  584 => 70,  583 => 69,  582 => 68,  581 => 66,  578 => 65,  575 => 64,  562 => 63,  547 => 59,  544 => 58,  541 => 57,  536 => 54,  529 => 52,  522 => 49,  520 => 48,  517 => 47,  515 => 46,  509 => 44,  507 => 43,  504 => 42,  498 => 40,  496 => 39,  488 => 38,  484 => 37,  481 => 36,  475 => 33,  470 => 32,  466 => 30,  464 => 29,  461 => 28,  459 => 27,  456 => 26,  453 => 25,  439 => 24,  426 => 21,  421 => 18,  419 => 17,  418 => 16,  417 => 15,  416 => 13,  415 => 12,  409 => 11,  406 => 10,  403 => 9,  400 => 8,  384 => 7,  380 => 1,  377 => 289,  370 => 284,  368 => 283,  365 => 282,  359 => 281,  354 => 279,  350 => 278,  345 => 277,  342 => 276,  338 => 275,  335 => 274,  330 => 273,  328 => 272,  321 => 266,  317 => 264,  313 => 262,  311 => 261,  309 => 257,  307 => 256,  302 => 253,  296 => 249,  294 => 248,  293 => 246,  292 => 241,  286 => 238,  281 => 236,  275 => 235,  270 => 233,  262 => 231,  260 => 230,  257 => 229,  249 => 224,  244 => 222,  238 => 221,  233 => 219,  225 => 217,  223 => 216,  220 => 215,  218 => 213,  217 => 209,  214 => 208,  207 => 204,  201 => 201,  200 => 200,  199 => 196,  193 => 195,  190 => 194,  186 => 192,  184 => 190,  182 => 186,  180 => 185,  172 => 183,  170 => 182,  164 => 178,  162 => 177,  161 => 174,  160 => 173,  159 => 170,  158 => 168,  155 => 167,  150 => 165,  149 => 164,  148 => 162,  145 => 161,  140 => 158,  130 => 153,  128 => 151,  127 => 150,  126 => 149,  119 => 148,  110 => 146,  106 => 144,  104 => 143,  103 => 142,  102 => 141,  101 => 139,  100 => 138,  96 => 136,  93 => 135,  89 => 134,  82 => 130,  78 => 129,  72 => 125,  69 => 124,  67 => 123,  63 => 121,  61 => 119,  60 => 118,  59 => 112,  55 => 110,  53 => 106,  52 => 105,  51 => 99,  48 => 98,  42 => 97,  37 => 95,  32 => 92,  30 => 91,  28 => 89,  26 => 5,  24 => 3,  11 => 1,);
    }
}
