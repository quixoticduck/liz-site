<?php

/* entries/_edit */
class __TwigTemplate_c67240ac536331927121b082ac1a07fd7bc39e70f15d9bddd3aec744f489cab9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/cp", "entries/_edit", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->loadTemplate("_includes/forms", "entries/_edit", 2);
        // line 4
        ob_start();
        // line 5
        echo "\t";
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()) && ((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)))) {
            // line 6
            echo "\t\t";
            $this->loadTemplate("entries/_revisions", "entries/_edit", 6)->display($context);
            // line 7
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        $context["sectionHandle"] = $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "handle", array());
        // line 11
        $context["isSingle"] = ($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "single");
        // line 12
        $context["isVersion"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryVersion");
        // line 13
        $context["isDraft"] = ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()) && ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getClassHandle", array(), "method") == "EntryDraft"));
        // line 15
        $context["canPublish"] = $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method");
        // line 17
        echo \Craft\craft()->templates->invokeHook("cp.entries.edit", $context);

        // line 316
        if ( !$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "slug", array())) {
            // line 317
            $_js = "window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');";
            \Craft\craft()->templates->includeJs($_js);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "\t<form id=\"entry-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut data-saveshortcut-redirect=\"";
        echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
        echo "\" data-confirm-unload>
\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
        echo "

\t\t";
        // line 24
        if ( !(isset($context["isVersion"]) ? $context["isVersion"] : null)) {
            // line 25
            echo "\t\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "id", array()), "html", null, true);
            echo "\">
\t\t\t";
            // line 26
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array())) {
                echo "<input type=\"hidden\" name=\"entryId\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()), "html", null, true);
                echo "\">";
            }
            // line 27
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method")) {
                echo "<input type=\"hidden\" name=\"locale\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()), "html", null, true);
                echo "\">";
            }
            // line 28
            echo "\t\t";
        } else {
            // line 29
            echo "\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "versionId", array()), "html", null, true);
            echo "\">
\t\t";
        }
        // line 31
        echo "
\t\t<div class=\"grid first\">
\t\t\t<div class=\"item\" data-position=\"left\" data-min-colspan=\"2\" data-max-colspan=\"3\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 35
        $this->loadTemplate("_includes/tabs", "entries/_edit", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t";
        $this->loadTemplate("entries/_fields", "entries/_edit", 36)->display(array_merge($context, array("static" =>         // line 37
(isset($context["isVersion"]) ? $context["isVersion"] : null))));
        // line 39
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">

\t\t\t\t";
        // line 44
        if ((isset($context["showPreviewBtn"]) ? $context["showPreviewBtn"] : null)) {
            // line 45
            echo "\t\t\t\t\t";
            $this->loadTemplate("_includes/previewbtns", "entries/_edit", 45)->display($context);
            // line 46
            echo "\t\t\t\t";
        }
        // line 47
        echo "
\t\t\t\t";
        // line 48
        if (($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "getLocales", array(), "method")) > 1))) {
            // line 49
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 50
            $context["parentIdParam"] = (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getParam", array(0 => "parentId.0"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getParam", array(0 => "parentId.0"), "method")) : ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getParam", array(0 => "parentId"), "method")));
            // line 51
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeIds"]) ? $context["localeIds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 52
                echo "\t\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "i18n", array()), "getLocaleById", array(0 => $context["localeId"]), "method"), "name", array());
                // line 53
                echo "\t\t\t\t\t\t\t<li";
                if (($context["localeId"] == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 54
                if (($context["localeId"] == $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "locale", array()))) {
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 56
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute(                    // line 58
(isset($context["entry"]) ? $context["entry"] : null), "localeEnabled", array()), "small" => true, "disabled" =>                     // line 60
(isset($context["isVersion"]) ? $context["isVersion"] : null)));
                } else {
                    // line 63
                    $context["localeUrl"] = \Craft\UrlHelper::getUrl(((((("entries/" .                     // line 64
(isset($context["sectionHandle"]) ? $context["sectionHandle"] : null)) . "/") . $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getSegment", array(0 => 3), "method")) . "/") . $context["localeId"]), ((                    // line 65
(isset($context["parentIdParam"]) ? $context["parentIdParam"] : null)) ? (array("parentId" => (isset($context["parentIdParam"]) ? $context["parentIdParam"] : null))) : ("")));
                    // line 67
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["localeUrl"]) ? $context["localeUrl"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["localeName"]) ? $context["localeName"] : null), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 68
                    echo ((twig_in_filter($context["localeId"], (isset($context["enabledLocales"]) ? $context["enabledLocales"] : null))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 70
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 74
        echo "
\t\t\t\t";
        // line 75
        if (( !(isset($context["isSingle"]) ? $context["isSingle"] : null) || (isset($context["canPublish"]) ? $context["canPublish"] : null))) {
            // line 76
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane\">

\t\t\t\t\t\t";
            // line 78
            if ( !(isset($context["isSingle"]) ? $context["isSingle"] : null)) {
                // line 79
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute(                    // line 84
(isset($context["entryType"]) ? $context["entryType"] : null), "id", array()), "options" =>                     // line 85
(isset($context["entryTypeOptions"]) ? $context["entryTypeOptions"] : null)));
                    // line 86
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 88
                echo "
\t\t\t\t\t\t\t";
                // line 89
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "locale" => $this->getAttribute(                // line 91
(isset($context["entry"]) ? $context["entry"] : null), "locale", array()), "id" => "slug", "name" => "slug", "value" => $this->getAttribute(                // line 94
(isset($context["entry"]) ? $context["entry"] : null), "slug", array()), "errors" => (( !                // line 95
(isset($context["isVersion"]) ? $context["isVersion"] : null)) ? (twig_array_merge($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "slug"), "method"), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "uri"), "method"))) : ("")), "disabled" =>                 // line 96
(isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 97
                echo "

\t\t\t\t\t\t\t";
                // line 99
                if (array_key_exists("parentOptionCriteria", $context)) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getelementSelectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "elementType" =>                     // line 104
(isset($context["elementType"]) ? $context["elementType"] : null), "selectionLabel" => \Craft\Craft::t("Choose"), "sources" => array(0 => ("section:" . $this->getAttribute(                    // line 106
(isset($context["section"]) ? $context["section"] : null), "id", array()))), "criteria" =>                     // line 107
(isset($context["parentOptionCriteria"]) ? $context["parentOptionCriteria"] : null), "limit" => 1, "elements" => (((                    // line 109
array_key_exists("parent", $context) && (isset($context["parent"]) ? $context["parent"] : null))) ? (array(0 => (isset($context["parent"]) ? $context["parent"] : null))) : (""))));
                    // line 110
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 112
                echo "
\t\t\t\t\t\t\t";
                // line 113
                if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPro"]) ? $context["CraftPro"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("editPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                    // line 114
                    echo "\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getelementSelectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "elementType" =>                     // line 118
(isset($context["userElementType"]) ? $context["userElementType"] : null), "selectionLabel" => \Craft\Craft::t("Choose"), "criteria" =>                     // line 120
(isset($context["authorOptionCriteria"]) ? $context["authorOptionCriteria"] : null), "limit" => 1, "elements" => (((                    // line 122
array_key_exists("author", $context) && (isset($context["author"]) ? $context["author"] : null))) ? (array(0 => (isset($context["author"]) ? $context["author"] : null))) : (""))));
                    // line 123
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 125
                echo "
\t\t\t\t\t\t\t";
                // line 126
                echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute(                // line 130
(isset($context["entry"]) ? $context["entry"] : null), "postDate", array())) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "postDate", array())) : (null)), "errors" => $this->getAttribute(                // line 131
(isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "postDate"), "method"), "disabled" =>                 // line 132
(isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 133
                echo "

\t\t\t\t\t\t\t";
                // line 135
                echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute(                // line 139
(isset($context["entry"]) ? $context["entry"] : null), "expiryDate", array())) ? ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "expiryDate", array())) : (null)), "errors" => $this->getAttribute(                // line 140
(isset($context["entry"]) ? $context["entry"] : null), "getErrors", array(0 => "expiryDate"), "method"), "disabled" =>                 // line 141
(isset($context["isVersion"]) ? $context["isVersion"] : null)));
                // line 142
                echo "
\t\t\t\t\t\t";
            }
            // line 144
            echo "
\t\t\t\t\t\t";
            // line 145
            if (((isset($context["canPublish"]) ? $context["canPublish"] : null) || ( !(isset($context["isVersion"]) ? $context["isVersion"] : null) && (isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null)))) {
                // line 146
                echo "
\t\t\t\t\t\t\t";
                // line 147
                ob_start();
                // line 148
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["canPublish"]) ? $context["canPublish"] : null)) {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"left\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 150
                    echo $context["forms"]->getlightswitch(array("id" => "enabled", "name" => "enabled", "on" => $this->getAttribute(                    // line 153
(isset($context["entry"]) ? $context["entry"] : null), "enabled", array()), "disabled" =>                     // line 154
(isset($context["isVersion"]) ? $context["isVersion"] : null)));
                    // line 155
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 158
                echo "
\t\t\t\t\t\t\t\t";
                // line 159
                if ((( !(isset($context["isSingle"]) ? $context["isSingle"] : null) &&  !(isset($context["isVersion"]) ? $context["isVersion"] : null)) && (isset($context["canDeleteEntry"]) ? $context["canDeleteEntry"] : null))) {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"right\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                    // line 161
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                    echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\t\t\t\tdata-confirm=\"";
                    // line 162
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 166
                echo "\t\t\t\t\t\t\t";
                $context["statusInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 167
                echo "
\t\t\t\t\t\t\t";
                // line 168
                echo $context["forms"]->getfield(array("label" => ((                // line 169
(isset($context["canPublish"]) ? $context["canPublish"] : null)) ? (\Craft\Craft::t("Status")) : ("")), "id" => "enabled"),                 // line 171
(isset($context["statusInput"]) ? $context["statusInput"] : null));
                echo "
\t\t\t\t\t\t";
            }
            // line 173
            echo "
\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 176
            if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes", array())) {
                // line 177
                echo "\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t<h6>";
                // line 178
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version Notes"), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t<p class=\"light\">";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "revisionNotes", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 182
            echo "
\t\t\t\t";
        }
        // line 184
        echo "
\t\t\t\t";
        // line 186
        echo "\t\t\t\t";
        echo \Craft\craft()->templates->invokeHook("cp.entries.edit.right-pane", $context);

        // line 187
        echo "
\t\t\t\t";
        // line 189
        echo "
\t\t\t\t";
        // line 190
        if ((isset($context["isDraft"]) ? $context["isDraft"] : null)) {
            // line 191
            echo "
\t\t\t\t\t<hr>

\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 195
            echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
            echo "/drafts/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "draftId", array()), "html", null, true);
            echo "\">

\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
            echo "\">

\t\t\t\t\t\t";
            // line 202
            echo "\t\t\t\t\t\t";
            if (((            // line 203
(isset($context["canPublish"]) ? $context["canPublish"] : null) && ((            // line 204
(isset($context["isSingle"]) ? $context["isSingle"] : null) || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) && (($this->getAttribute(            // line 205
(isset($context["entry"]) ? $context["entry"] : null), "creatorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array())) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 207
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 209
            echo "
\t\t\t\t\t\t";
            // line 211
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "creatorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array())) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("deletePeerEntryDrafts" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method"))) {
                // line 212
                echo "\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t   data-confirm=\"";
                // line 213
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   data-redirect=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t</div>

\t\t\t\t";
        } elseif (        // line 218
(isset($context["isVersion"]) ? $context["isVersion"] : null)) {
            // line 219
            echo "
\t\t\t\t\t";
            // line 221
            echo "\t\t\t\t\t";
            if ((            // line 222
(isset($context["canPublish"]) ? $context["canPublish"] : null) && ((            // line 223
(isset($context["isSingle"]) ? $context["isSingle"] : null) || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 225
                echo "
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/revertEntryToVersion\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 229
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "getCpEditUrl", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"versionId\" value=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "versionId", array()), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                // line 233
                echo twig_escape_filter($this->env, \Craft\Craft::t("Revert entry to this version"), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 236
            echo "
\t\t\t\t";
        } else {
            // line 238
            echo "
\t\t\t\t\t";
            // line 240
            echo "\t\t\t\t\t";
            if (((($this->getAttribute(            // line 241
(isset($context["entry"]) ? $context["entry"] : null), "id", array()) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("createEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")) && (( !$this->getAttribute(            // line 242
(isset($context["entry"]) ? $context["entry"] : null), "id", array()) ||  !$this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "enabled", array())) || (isset($context["canPublish"]) ? $context["canPublish"] : null))) && ((            // line 243
(isset($context["isSingle"]) ? $context["isSingle"] : null) || ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "authorId", array()) == $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "id", array()))) || $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => ("publishPeerEntries" . (isset($context["permissionSuffix"]) ? $context["permissionSuffix"] : null))), "method")))) {
                // line 245
                echo "\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
                // line 248
                echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                echo "\">

\t\t\t\t\t\t<table class=\"inputs fullwidth\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"thin\">
\t\t\t\t\t\t\t\t\t<div class=\"btngroup submit first\">
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                // line 254
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                // line 259
                echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 260
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 261
                echo $context["forms"]->getoptionShortcutLabel("S");
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</a></li>

\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 264
                $context["nextEntryParams"] = array();
                // line 265
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["showEntryTypes"]) ? $context["showEntryTypes"] : null)) {
                    // line 266
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "typeId={type.id}"));
                    // line 267
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["section"]) ? $context["section"] : null), "type", array()) == "structure")) {
                    // line 269
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nextEntryParams"] = twig_array_merge((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), array(0 => "parentId={parent.id}"));
                    // line 270
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 271
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 272
                if ( !(isset($context["isSingle"]) ? $context["isSingle"] : null)) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                    echo twig_escape_filter($this->env, (isset($context["sectionHandle"]) ? $context["sectionHandle"] : null), "html", null, true);
                    echo "/new";
                    if ((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null)) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_join_filter((isset($context["nextEntryParams"]) ? $context["nextEntryParams"] : null), "&"), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 275
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 276
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                    echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                    echo "/drafts/{draftId}\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 279
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 280
                if (( !(isset($context["isSingle"]) ? $context["isSingle"] : null) && $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id", array()))) {
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-param=\"entryId\" data-value=\"\" data-redirect=\"";
                    echo twig_escape_filter($this->env, (isset($context["continueEditingUrl"]) ? $context["continueEditingUrl"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a new entry"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 283
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 288
                if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["section"]) ? $context["section"] : null), "enableVersioning", array()))) {
                    // line 289
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"revisionNotes\" class=\"fullwidth textline\" placeholder=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Notes about your changes"), "html", null, true);
                    echo "\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t";
                }
                // line 291
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t";
            } else {
                // line 295
                echo "\t\t\t\t\t\t";
                if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
                    // line 296
                    echo "
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                    // line 300
                    echo twig_escape_filter($this->env, (isset($context["baseCpEditUrl"]) ? $context["baseCpEditUrl"] : null), "html", null, true);
                    echo "/drafts/{draftId}\">

\t\t\t\t\t\t\t<div class=\"buttons first\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                    // line 303
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 306
                echo "\t\t\t\t\t";
            }
            // line 307
            echo "
\t\t\t\t";
        }
        // line 309
        echo "
\t\t\t</div><!--/item-->
\t\t</div><!--/grid-->
\t</form>
";
    }

    public function getTemplateName()
    {
        return "entries/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 309,  624 => 307,  621 => 306,  615 => 303,  609 => 300,  603 => 296,  600 => 295,  594 => 291,  588 => 289,  586 => 288,  579 => 283,  571 => 281,  569 => 280,  566 => 279,  558 => 277,  556 => 276,  553 => 275,  540 => 273,  538 => 272,  535 => 271,  532 => 270,  529 => 269,  526 => 268,  523 => 267,  520 => 266,  517 => 265,  515 => 264,  509 => 261,  505 => 260,  501 => 259,  493 => 254,  484 => 248,  479 => 245,  477 => 243,  476 => 242,  475 => 241,  473 => 240,  470 => 238,  466 => 236,  460 => 233,  454 => 230,  450 => 229,  444 => 225,  442 => 223,  441 => 222,  439 => 221,  436 => 219,  434 => 218,  430 => 216,  425 => 214,  421 => 213,  416 => 212,  413 => 211,  410 => 209,  402 => 207,  400 => 205,  399 => 204,  398 => 203,  396 => 202,  391 => 199,  385 => 196,  379 => 195,  373 => 191,  371 => 190,  368 => 189,  365 => 187,  361 => 186,  358 => 184,  354 => 182,  348 => 179,  344 => 178,  341 => 177,  339 => 176,  334 => 173,  329 => 171,  328 => 169,  327 => 168,  324 => 167,  321 => 166,  314 => 162,  310 => 161,  307 => 160,  305 => 159,  302 => 158,  297 => 155,  295 => 154,  294 => 153,  293 => 150,  290 => 149,  287 => 148,  285 => 147,  282 => 146,  280 => 145,  277 => 144,  273 => 142,  271 => 141,  270 => 140,  269 => 139,  268 => 135,  264 => 133,  262 => 132,  261 => 131,  260 => 130,  259 => 126,  256 => 125,  252 => 123,  250 => 122,  249 => 120,  248 => 118,  246 => 114,  244 => 113,  241 => 112,  237 => 110,  235 => 109,  234 => 107,  233 => 106,  232 => 104,  230 => 100,  228 => 99,  224 => 97,  222 => 96,  221 => 95,  220 => 94,  219 => 91,  218 => 89,  215 => 88,  211 => 86,  209 => 85,  208 => 84,  206 => 80,  203 => 79,  201 => 78,  197 => 76,  195 => 75,  192 => 74,  188 => 72,  181 => 70,  177 => 68,  170 => 67,  168 => 65,  167 => 64,  166 => 63,  163 => 60,  162 => 58,  161 => 56,  157 => 55,  155 => 54,  149 => 53,  146 => 52,  141 => 51,  139 => 50,  136 => 49,  134 => 48,  131 => 47,  128 => 46,  125 => 45,  123 => 44,  116 => 39,  114 => 37,  112 => 36,  110 => 35,  104 => 31,  98 => 29,  95 => 28,  88 => 27,  82 => 26,  77 => 25,  75 => 24,  70 => 22,  65 => 21,  62 => 20,  58 => 1,  54 => 317,  52 => 316,  49 => 17,  47 => 15,  45 => 13,  43 => 12,  41 => 11,  39 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 2,  11 => 1,);
    }
}
