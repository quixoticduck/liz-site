<?php

/* _layouts/cp */
class __TwigTemplate_7f391629f6c5a89b4fcb7522edff79b78fc5a1b0a80a604627c179e06bb8fc8e extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 1);
        $this->blocks = array(
            'saveButton' => array($this, 'block_saveButton'),
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $_js = "css/cp.css";
        \Craft\craft()->templates->includecssresource($_js, true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"(blank)",
        	"1 update available",
        	"Actions",
        	"An unknown error occurred.",
        	"Any changes will be lost if you leave this page.",
        	"Are you sure you want to delete “{name}”?",
        	"Are you sure you want to transfer your license to this domain?",
        	"Buy {name}",
        	"Cancel",
        	"Choose a user",
        	"Choose which table columns should be visible for this source, and in which order.",
        	"Close",
        	"Close Live Preview",
        	"Continue",
        	"Couldn’t delete “{name}”.",
        	"Couldn’t save new order.",
        	"Create",
        	"day",
        	"days",
        	"Delete folder",
        	"Delete heading",
        	"Delete it",
        	"Delete user",
        	"Delete users",
        	"Delete",
        	"Display as thumbnails",
        	"Display in a table",
        	"Done",
        	"Enter the name of the folder",
        	"Enter your password to log back in.",
        	"Failed task",
        	"Failed",
        	"Handle",
        	"Heading",
        	"Hide sidebar",
        	"hour",
        	"hours",
        	"Instructions",
        	"Keep me logged in",
        	"License transferred.",
        	"Log out now",
        	"Login",
        	"minute",
        	"minutes",
        	"More",
        	"Move",
        	"Name",
        	"New category",
        	"New child",
        	"New entry",
        	"New heading",
        	"New order saved.",
        	"New position saved.",
        	"New subfolder",
        	"New {group} category",
        	"New {section} entry",
        	"Options",
        	"Password",
        	"Pay {price}",
        	"Pending",
        	"Really delete folder “{folder}”?",
        	"Remove",
        	"Rename folder",
        	"Reorder",
        	"Save",
        	"Score",
        	"Search in subfolders",
        	"second",
        	"seconds",
        	"Select transform",
        	"Select",
        	"Settings",
        	"Show sidebar",
        	"Show/hide children",
        	"Sort by {attribute}",
        	"Source settings saved",
        	"Structure",
        	"Table Columns",
        	"This can be left blank if you just want an unlabeled separator.",
        	"Transfer it to:",
        	"Try again",
        	"Upload failed for {filename}",
        	"Upload files",
        	"week",
        	"weeks",
        	"What do you want to do with their content?",
        	"Your session has ended.",
        	"Your session will expire in {time}.",
        	"{ctrl}C to copy.",
        	"{num} updates available",
        	"“{name}” deleted."
        );
        // line 99
        $context["task"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "getRunningTask", array(), "method");
        // line 100
        if ((isset($context["task"]) ? $context["task"] : null)) {
            // line 101
            $_js = (("Craft.cp.setRunningTaskInfo(" . $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "getInfo", array(), "method"))) . ");");
            \Craft\craft()->templates->includejs($_js);
            // line 102
            $_js = "Craft.cp.trackTaskProgress();";
            \Craft\craft()->templates->includejs($_js);
        } elseif ($this->getAttribute($this->getAttribute(        // line 103
(isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "areTasksPending", array(), "method")) {
            // line 104
            $_js = "Craft.cp.runPendingTasks();";
            \Craft\craft()->templates->includejs($_js);
        } elseif ($this->getAttribute($this->getAttribute(        // line 105
(isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "haveTasksFailed", array(), "method")) {
            // line 106
            $_js = "Craft.cp.setRunningTaskInfo({ status: \"error\" });";
            \Craft\craft()->templates->includejs($_js);
        }
        // line 110
        $context["forceConfirmUnload"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "hasFlash", array(0 => "error"), "method");
        // line 111
        $context["fullPageForm"] = (array_key_exists("fullPageForm", $context) && (isset($context["fullPageForm"]) ? $context["fullPageForm"] : null));
        // line 113
        if (((isset($context["fullPageForm"]) ? $context["fullPageForm"] : null) &&  !array_key_exists("extraPageHeaderHtml", $context))) {
            // line 114
            ob_start();
            // line 115
            ob_start();
            // line 116
            echo "\t\t\t";
            $this->displayBlock('saveButton', $context, $blocks);
            // line 119
            echo "\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 116
    public function block_saveButton($context, array $blocks = array())
    {
        // line 117
        echo "\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t\t";
    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        // line 125
        echo "\t<header id=\"global-sidebar\">

\t\t";
        // line 127
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "devMode", array()))) {
            // line 128
            echo "\t\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft CMS is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t\t";
        }
        // line 130
        echo "
\t\t<div class=\"topbar\">

\t\t\t<a class=\"site-name\" href=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">

\t\t\t\t";
        // line 135
        if (((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) >= (isset($context["CraftClient"]) ? $context["CraftClient"] : null))) {
            // line 136
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand", array()), "isIconUploaded", array())) {
                // line 137
                echo "\t\t\t\t\t\t<div id=\"site-icon\" class=\"photo-container\">
\t\t\t\t\t\t\t<img src=\"";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "rebrand", array()), "icon", array()), "url", array()), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t";
        }
        // line 142
        echo "
\t\t\t\t<h2>";
        // line 143
        echo twig_escape_filter($this->env, \Craft\Craft::t((isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</h2>
\t\t\t</a>

\t\t\t";
        // line 146
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 147
            echo "\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isUpdateInfoCached", array(), "method")) {
                // line 148
                echo "\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getTotalAvailableUpdates", array(), "method");
                // line 149
                echo "\t\t\t\t\t";
                if ((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)) {
                    // line 150
                    echo "\t\t\t\t\t\t";
                    if (((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null) == 1)) {
                        // line 151
                        echo "\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 152
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 153
                        echo "\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)));
                        // line 154
                        echo "\t\t\t\t\t\t";
                    }
                    // line 155
                    echo "\t\t\t\t\t\t<a class=\"updates";
                    if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["updateText"]) ? $context["updateText"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<span data-icon=\"newstamp\">
\t\t\t\t\t\t\t\t<span>";
                    // line 157
                    echo twig_escape_filter($this->env, (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t";
                $_js = "Craft.cp.checkForUpdates();";
                \Craft\craft()->templates->includejs($_js);
                // line 163
                echo "\t\t\t\t";
            }
            // line 164
            echo "\t\t\t";
        }
        // line 165
        echo "\t\t</div>

\t\t<nav>
\t\t\t<ul id=\"nav\">

\t\t\t\t";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "nav", array(), "method"));
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
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 171
            echo "
\t\t\t\t\t";
            // line 172
            $context["hasSubnav"] = (array_key_exists("subnav", $context) && (isset($context["subnav"]) ? $context["subnav"] : null));
            // line 173
            echo "
\t\t\t\t\t<li id=\"nav-";
            // line 174
            echo twig_escape_filter($this->env, $context["handle"], "html", null, true);
            echo "\"";
            if (($this->getAttribute($context["item"], "sel", array()) && (isset($context["hasSubnav"]) ? $context["hasSubnav"] : null))) {
                echo " class=\"has-subnav\"";
            }
            echo ">
\t\t\t\t\t\t<a";
            // line 175
            if ($this->getAttribute($context["item"], "sel", array())) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<span class=\"icon\">";
            // line 177
            if ($this->getAttribute($context["item"], "icon", array(), "any", true, true)) {
                // line 178
                echo "<span data-icon=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                echo "\"></span>";
            } elseif (($this->getAttribute(            // line 179
$context["item"], "iconSvg", array(), "any", true, true) && $this->getAttribute($context["item"], "iconSvg", array()))) {
                // line 180
                echo $this->getAttribute($context["item"], "iconSvg", array());
            } else {
                // line 182
                $this->loadTemplate("_includes/defaulticon.svg", "_layouts/cp", 182)->display(array_merge($context, array("label" => $this->getAttribute($context["item"], "label", array()))));
            }
            // line 184
            echo "</span>

\t\t\t\t\t\t\t<span class=\"label\">";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            // line 188
            echo "</span>";
            // line 190
            if (($this->getAttribute($context["item"], "badge", array(), "any", true, true) && $this->getAttribute($context["item"], "badge", array()))) {
                // line 191
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "badge", array()), "html", null, true);
                echo "</span>";
            }
            // line 193
            echo "</a>

\t\t\t\t\t\t";
            // line 195
            if (($this->getAttribute($context["item"], "sel", array()) && (isset($context["hasSubnav"]) ? $context["hasSubnav"] : null))) {
                // line 196
                echo "\t\t\t\t            <ul class=\"subnav\">
\t\t\t\t                ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["subnav"]) ? $context["subnav"] : null));
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
                foreach ($context['_seq'] as $context["itemId"] => $context["item"]) {
                    // line 198
                    echo "\t\t\t\t                    ";
                    $context["itemIsSelected"] = ((                    // line 199
array_key_exists("selectedSubnavItem", $context) && ((isset($context["selectedSubnavItem"]) ? $context["selectedSubnavItem"] : null) == $context["itemId"])) || ( !                    // line 200
array_key_exists("selectedSubnavItem", $context) && $this->getAttribute($context["loop"], "first", array())));
                    // line 203
                    echo "<li>
\t\t\t\t                    \t<a href=\"";
                    // line 204
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl($this->getAttribute($context["item"], "url", array())), "html", null, true);
                    echo "\"";
                    if ((isset($context["itemIsSelected"]) ? $context["itemIsSelected"] : null)) {
                        echo " class=\"sel\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</a>
\t\t\t\t                    </li>

\t\t\t\t                ";
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
                unset($context['_seq'], $context['_iterated'], $context['itemId'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "\t\t\t\t            </ul>
\t\t\t\t\t\t";
            }
            // line 210
            echo "
\t\t\t\t\t</li>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "
\t\t\t\t";
        // line 216
        echo "\t\t\t</ul>
\t\t</nav>

\t\t<div class=\"bottombar\">
\t\t\t<a id=\"account-info\" class=\"menubtn\" title=\"";
        // line 220
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\" data-menu-anchor=\"#account-menu-anchor\">
\t\t\t\t<div id=\"user-photo\" class=\"photo-container\">
\t\t\t\t\t<img width=\"32\" sizes=\"32px\" srcset=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getThumbUrl", array(0 => 32), "method"), "html", null, true);
        echo " 32w, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getThumbUrl", array(0 => 64), "method"), "html", null, true);
        echo " 64w\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getName", array(), "method"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"username\">
\t\t\t\t\t";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "name", array()), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 226
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array())) {
            echo "<div class=\"light\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("admin"), "html", null, true);
            echo "</div>";
        }
        // line 227
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"account-menu-anchor\"></div>
\t\t\t</a>
\t\t\t<div class=\"menu\" data-align=\"left\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 232
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t";
        // line 233
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()))) {
            // line 234
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 236
        echo "\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t</header>

\t";
        // line 243
        if ((isset($context["fullPageForm"]) ? $context["fullPageForm"] : null)) {
            // line 244
            echo "\t\t<form id=\"container\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut";
            if (array_key_exists("saveShortcutRedirect", $context)) {
                echo " data-saveshortcut-redirect=\"";
                echo twig_escape_filter($this->env, (isset($context["saveShortcutRedirect"]) ? $context["saveShortcutRedirect"] : null), "html", null, true);
                echo "\"";
            }
            echo " data-confirm-unload>
\t\t\t";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('craft')->getCsrfInputFunction(), "html", null, true);
            echo "
\t";
        } else {
            // line 247
            echo "\t\t<div id=\"container\">
\t";
        }
        // line 249
        echo "
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 253
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "getFlash", array(0 => $context["type"]), "method");
            // line 254
            echo "\t\t\t\t\t";
            if ((isset($context["message"]) ? $context["message"] : null)) {
                // line 255
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 257
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 261
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "areAlertsCached", array(), "method")) {
            // line 262
            echo "\t\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "getAlerts", array(), "method");
            // line 263
            echo "\t\t\t";
            if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
                // line 264
                echo "\t\t\t\t<ul id=\"alerts\">
\t\t\t\t\t";
                // line 265
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 266
                    echo "\t\t\t\t\t\t<li>";
                    echo $context["alert"];
                    echo "</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 268
                echo "\t\t\t\t</ul>
\t\t\t";
            }
            // line 270
            echo "\t\t";
        } else {
            // line 271
            echo "\t\t\t";
            $_js = "Craft.cp.fetchAlerts();";
            \Craft\craft()->templates->includejs($_js);
            // line 272
            echo "\t\t";
        }
        // line 273
        echo "
\t\t<div class=\"topbar\">";
        // line 275
        ob_start();
        // line 276
        echo "\t\t\t\t";
        if ((array_key_exists("crumbs", $context) && (isset($context["crumbs"]) ? $context["crumbs"] : null))) {
            // line 277
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 280
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 285
        echo "\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 286
        echo "</div>


\t\t<header id=\"page-header\">
\t\t\t";
        // line 290
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 307
        echo "\t\t</header>

\t\t";
        // line 310
        echo "\t\t";
        $context["main"] = trim($this->renderBlock("main", $context, $blocks));
        // line 311
        echo "\t\t";
        $context["hasCustomLayout"] =  !twig_test_empty((isset($context["main"]) ? $context["main"] : null));
        // line 312
        echo "
\t\t<main id=\"main\" role=\"main\"";
        // line 313
        if ( !(isset($context["hasCustomLayout"]) ? $context["hasCustomLayout"] : null)) {
            echo " class=\"single-pane\"";
        }
        echo ">
\t\t\t<div class=\"padded\">
\t\t\t\t";
        // line 315
        if ((isset($context["hasCustomLayout"]) ? $context["hasCustomLayout"] : null)) {
            // line 316
            echo "\t\t\t\t\t";
            echo (isset($context["main"]) ? $context["main"] : null);
            echo "
\t\t\t\t";
        } else {
            // line 318
            echo "\t\t\t\t\t";
            $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ((isset($context["sidebar"]) ? $context["sidebar"] : null)) : (trim($this->renderBlock("sidebar", $context, $blocks))));
            // line 319
            echo "\t\t\t\t\t";
            $context["hasSidebar"] =  !twig_test_empty((isset($context["sidebar"]) ? $context["sidebar"] : null));
            // line 320
            echo "
\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t";
            // line 322
            if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) ? $context["tabs"] : null))) {
                // line 323
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("_includes/tabs", "_layouts/cp", 323)->display($context);
                // line 324
                echo "\t\t\t\t\t\t";
            }
            // line 325
            echo "
\t\t\t\t\t\t<div id=\"content\" class=\"content";
            // line 326
            if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
                echo " has-sidebar";
            }
            echo "\">
\t\t\t\t\t\t\t";
            // line 327
            if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
                // line 328
                echo "\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t";
                // line 329
                echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 332
            echo "
\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t";
            // line 334
            $this->displayBlock('content', $context, $blocks);
            // line 337
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 341
        echo "\t\t\t</div>
\t\t</main>

\t\t";
        // line 344
        if ((array_key_exists("docsUrl", $context) &&  !twig_test_empty((isset($context["docsUrl"]) ? $context["docsUrl"] : null)))) {
            // line 345
            echo "\t\t\t<div id=\"help-footer\">
\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            // line 346
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["docsUrl"]) ? $context["docsUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t</div>
\t\t";
        }
        // line 349
        echo "
\t\t<div id=\"footer\">";
        // line 352
        ob_start();
        // line 353
        echo "\t\t\t\t";
        $context["canUpgradeEdition"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "canUpgradeEdition", array(), "method");
        // line 354
        echo "\t\t\t\t";
        $context["licensedEdition"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEdition", array(), "method");
        // line 355
        echo "\t\t\t\t";
        $context["isTrial"] = ( !((isset($context["licensedEdition"]) ? $context["licensedEdition"] : null) === null) &&  !((isset($context["licensedEdition"]) ? $context["licensedEdition"] : null) === (isset($context["CraftEdition"]) ? $context["CraftEdition"] : null)));
        // line 356
        echo "
\t\t\t\t<div id=\"edition\" ";
        // line 357
        if ((isset($context["canUpgradeEdition"]) ? $context["canUpgradeEdition"] : null)) {
            echo "class=\"hot\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Manage your Craft CMS edition"), "html", null, true);
            echo "\"";
        } else {
            echo "class=\"edition\"";
        }
        echo ">
\t\t\t\t\t<div id=\"edition-logo\">
\t\t\t\t\t\t<div class=\"edition-name\">";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEditionName", array(), "method"), "html", null, true);
        echo "</div>
\t\t\t\t\t\t";
        // line 360
        if ((isset($context["isTrial"]) ? $context["isTrial"] : null)) {
            // line 361
            echo "\t\t\t\t\t\t\t<div class=\"edition-trial\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Trial"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 363
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 364
        if ((isset($context["canUpgradeEdition"]) ? $context["canUpgradeEdition"] : null)) {
            // line 365
            echo "\t\t\t\t\t\t<div class=\"icon settings\"></div>
\t\t\t\t\t";
        }
        // line 367
        echo "\t\t\t\t</div>
\t\t\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 370
        echo "<ul>
\t\t\t\t<li>Craft CMS ";
        // line 371
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>© Pixel &amp; Tonic</li>
\t\t\t\t";
        // line 373
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 374
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isUpdateInfoCached", array(), "method") && array_key_exists("totalUpdates", $context)) && (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null))) ? ((isset($context["updateText"]) ? $context["updateText"] : null)) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 376
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array())) {
            // line 377
            echo "\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("utils/serverinfo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Server Info"), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 379
        echo "\t\t\t</ul>
\t\t</div>

\t";
        // line 382
        if ( !(isset($context["fullPageForm"]) ? $context["fullPageForm"] : null)) {
            // line 383
            echo "\t\t</div>
\t";
        } else {
            // line 385
            echo "\t\t</form>
\t";
        }
    }

    // line 290
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 291
        echo "
\t\t\t\t<div id=\"page-title\">
\t\t\t\t\t";
        // line 293
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 298
        echo "\t\t\t\t</div>

\t\t\t\t";
        // line 300
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 301
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 302
            echo (isset($context["extraPageHeaderHtml"]) ? $context["extraPageHeaderHtml"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 305
        echo "
\t\t\t";
    }

    // line 293
    public function block_pageTitle($context, array $blocks = array())
    {
        // line 294
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("title", $context) && (isset($context["title"]) ? $context["title"] : null))) {
            // line 295
            echo "\t\t\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
\t\t\t\t\t\t";
        }
        // line 297
        echo "\t\t\t\t\t";
    }

    // line 334
    public function block_content($context, array $blocks = array())
    {
        // line 335
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ((isset($context["content"]) ? $context["content"] : null)) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_layouts/cp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 335,  892 => 334,  888 => 297,  882 => 295,  879 => 294,  876 => 293,  871 => 305,  865 => 302,  862 => 301,  860 => 300,  856 => 298,  854 => 293,  850 => 291,  847 => 290,  841 => 385,  837 => 383,  835 => 382,  830 => 379,  822 => 377,  819 => 376,  811 => 374,  809 => 373,  802 => 371,  799 => 370,  795 => 367,  791 => 365,  789 => 364,  786 => 363,  780 => 361,  778 => 360,  774 => 359,  763 => 357,  760 => 356,  757 => 355,  754 => 354,  751 => 353,  749 => 352,  746 => 349,  738 => 346,  735 => 345,  733 => 344,  728 => 341,  722 => 337,  720 => 334,  716 => 332,  710 => 329,  707 => 328,  705 => 327,  699 => 326,  696 => 325,  693 => 324,  690 => 323,  688 => 322,  684 => 320,  681 => 319,  678 => 318,  672 => 316,  670 => 315,  663 => 313,  660 => 312,  657 => 311,  654 => 310,  650 => 307,  648 => 290,  642 => 286,  639 => 285,  634 => 282,  623 => 280,  619 => 279,  615 => 277,  612 => 276,  610 => 275,  607 => 273,  604 => 272,  600 => 271,  597 => 270,  593 => 268,  584 => 266,  580 => 265,  577 => 264,  574 => 263,  571 => 262,  569 => 261,  564 => 258,  558 => 257,  550 => 255,  547 => 254,  544 => 253,  540 => 252,  535 => 249,  531 => 247,  526 => 245,  517 => 244,  515 => 243,  502 => 236,  494 => 234,  492 => 233,  486 => 232,  479 => 227,  473 => 226,  469 => 225,  459 => 222,  454 => 220,  448 => 216,  445 => 213,  429 => 210,  425 => 208,  401 => 204,  398 => 203,  396 => 200,  395 => 199,  393 => 198,  376 => 197,  373 => 196,  371 => 195,  367 => 193,  362 => 191,  360 => 190,  358 => 188,  356 => 187,  352 => 184,  349 => 182,  346 => 180,  344 => 179,  340 => 178,  338 => 177,  330 => 175,  322 => 174,  319 => 173,  317 => 172,  314 => 171,  297 => 170,  290 => 165,  287 => 164,  284 => 163,  280 => 162,  277 => 161,  270 => 157,  258 => 155,  255 => 154,  252 => 153,  249 => 152,  246 => 151,  243 => 150,  240 => 149,  237 => 148,  234 => 147,  232 => 146,  226 => 143,  223 => 142,  220 => 141,  214 => 138,  211 => 137,  208 => 136,  206 => 135,  199 => 133,  194 => 130,  188 => 128,  186 => 127,  182 => 125,  179 => 124,  172 => 117,  169 => 116,  165 => 1,  160 => 119,  157 => 116,  155 => 115,  153 => 114,  151 => 113,  149 => 111,  147 => 110,  143 => 106,  141 => 105,  138 => 104,  136 => 103,  133 => 102,  130 => 101,  128 => 100,  126 => 99,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "_layouts/basecp" %}*/
/* */
/* {% includecssresource "css/cp.css" first %}*/
/* {% includeTranslations*/
/* 	"(blank)",*/
/* 	"1 update available",*/
/* 	"Actions",*/
/* 	"An unknown error occurred.",*/
/* 	"Any changes will be lost if you leave this page.",*/
/* 	"Are you sure you want to delete “{name}”?",*/
/* 	"Are you sure you want to transfer your license to this domain?",*/
/* 	"Buy {name}",*/
/* 	"Cancel",*/
/* 	"Choose a user",*/
/* 	"Choose which table columns should be visible for this source, and in which order.",*/
/* 	"Close",*/
/* 	"Close Live Preview",*/
/* 	"Continue",*/
/* 	"Couldn’t delete “{name}”.",*/
/* 	"Couldn’t save new order.",*/
/* 	"Create",*/
/* 	"day",*/
/* 	"days",*/
/* 	"Delete folder",*/
/* 	"Delete heading",*/
/* 	"Delete it",*/
/* 	"Delete user",*/
/* 	"Delete users",*/
/* 	"Delete",*/
/* 	"Display as thumbnails",*/
/* 	"Display in a table",*/
/* 	"Done",*/
/* 	"Enter the name of the folder",*/
/* 	"Enter your password to log back in.",*/
/* 	"Failed task",*/
/* 	"Failed",*/
/* 	"Handle",*/
/* 	"Heading",*/
/* 	"Hide sidebar",*/
/* 	"hour",*/
/* 	"hours",*/
/* 	"Instructions",*/
/* 	"Keep me logged in",*/
/* 	"License transferred.",*/
/* 	"Log out now",*/
/* 	"Login",*/
/* 	"minute",*/
/* 	"minutes",*/
/* 	"More",*/
/* 	"Move",*/
/* 	"Name",*/
/* 	"New category",*/
/* 	"New child",*/
/* 	"New entry",*/
/* 	"New heading",*/
/* 	"New order saved.",*/
/* 	"New position saved.",*/
/* 	"New subfolder",*/
/* 	"New {group} category",*/
/* 	"New {section} entry",*/
/* 	"Options",*/
/* 	"Password",*/
/* 	"Pay {price}",*/
/* 	"Pending",*/
/* 	"Really delete folder “{folder}”?",*/
/* 	"Remove",*/
/* 	"Rename folder",*/
/* 	"Reorder",*/
/* 	"Save",*/
/* 	"Score",*/
/* 	"Search in subfolders",*/
/* 	"second",*/
/* 	"seconds",*/
/* 	"Select transform",*/
/* 	"Select",*/
/* 	"Settings",*/
/* 	"Show sidebar",*/
/* 	"Show/hide children",*/
/* 	"Sort by {attribute}",*/
/* 	"Source settings saved",*/
/* 	"Structure",*/
/* 	"Table Columns",*/
/* 	"This can be left blank if you just want an unlabeled separator.",*/
/* 	"Transfer it to:",*/
/* 	"Try again",*/
/* 	"Upload failed for {filename}",*/
/* 	"Upload files",*/
/* 	"week",*/
/* 	"weeks",*/
/* 	"What do you want to do with their content?",*/
/* 	"Your session has ended.",*/
/* 	"Your session will expire in {time}.",*/
/* 	"{ctrl}C to copy.",*/
/* 	"{num} updates available",*/
/* 	"“{name}” deleted."*/
/* %}*/
/* */
/* */
/* {% set task = craft.tasks.getRunningTask() %}*/
/* {% if task %}*/
/* 	{% includejs 'Craft.cp.setRunningTaskInfo('~task.getInfo()|json_encode|raw~');' %}*/
/* 	{% includejs 'Craft.cp.trackTaskProgress();' %}*/
/* {% elseif craft.tasks.areTasksPending() %}*/
/* 	{% includejs 'Craft.cp.runPendingTasks();' %}*/
/* {% elseif craft.tasks.haveTasksFailed() %}*/
/* 	{% includejs 'Craft.cp.setRunningTaskInfo({ status: "error" });' %}*/
/* {% endif %}*/
/* */
/* */
/* {% set forceConfirmUnload = craft.session.hasFlash('error') %}*/
/* {% set fullPageForm = (fullPageForm is defined and fullPageForm) %}*/
/* */
/* {% if fullPageForm and extraPageHeaderHtml is not defined %}*/
/* 	{% set extraPageHeaderHtml %}*/
/* 		{%- spaceless %}*/
/* 			{% block saveButton %}*/
/* 				<input type="submit" class="btn submit" value="{{ 'Save'|t }}">*/
/* 			{% endblock %}*/
/* 		{% endspaceless -%}*/
/* 	{% endset %}*/
/* {% endif %}*/
/* */
/* */
/* {% block body %}*/
/* 	<header id="global-sidebar">*/
/* */
/* 		{% if currentUser.admin and craft.config.devMode %}*/
/* 			<div id="devmode" title="{{ 'Craft CMS is running in Dev Mode.'|t }}"></div>*/
/* 		{% endif %}*/
/* */
/* 		<div class="topbar">*/
/* */
/* 			<a class="site-name" href="{{ siteUrl }}" title="{{ 'Site Homepage'|t }}" target="_blank">*/
/* */
/* 				{% if CraftEdition >= CraftClient %}*/
/* 					{% if craft.rebrand.isIconUploaded %}*/
/* 						<div id="site-icon" class="photo-container">*/
/* 							<img src="{{ craft.rebrand.icon.url }}" alt="">*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				{% endif %}*/
/* */
/* 				<h2>{{ siteName|t }}</h2>*/
/* 			</a>*/
/* */
/* 			{% if currentUser.can('performUpdates') %}*/
/* 				{% if craft.app.isUpdateInfoCached() %}*/
/* 					{% set totalUpdates = craft.app.getTotalAvailableUpdates() %}*/
/* 					{% if totalUpdates %}*/
/* 						{% if totalUpdates == 1 %}*/
/* 							{% set updateText = "1 update available"|t %}*/
/* 						{% else %}*/
/* 							{% set updateText = "{num} updates available"|t({ num: totalUpdates }) %}*/
/* 						{% endif %}*/
/* 						<a class="updates{% if craft.app.isCriticalUpdateAvailable() %} critical{% endif %}" href="{{ url('updates') }}" title="{{ updateText }}">*/
/* 							<span data-icon="newstamp">*/
/* 								<span>{{ totalUpdates }}</span>*/
/* 							</span>*/
/* 						</a>*/
/* 					{% endif %}*/
/* 				{% else %}*/
/* 					{% includejs 'Craft.cp.checkForUpdates();' %}*/
/* 				{% endif %}*/
/* 			{% endif %}*/
/* 		</div>*/
/* */
/* 		<nav>*/
/* 			<ul id="nav">*/
/* */
/* 				{% for handle, item in craft.cp.nav() %}*/
/* */
/* 					{% set hasSubnav = (subnav is defined and subnav) %}*/
/* */
/* 					<li id="nav-{{ handle }}"{% if item.sel and hasSubnav %} class="has-subnav"{% endif %}>*/
/* 						<a{% if item.sel %} class="sel"{% endif %} href="{{ item.url }}">*/
/* 							<span class="icon">*/
/* 								{%- if item.icon is defined -%}*/
/* 									<span data-icon="{{ item.icon }}"></span>*/
/* 								{%- elseif item.iconSvg is defined and item.iconSvg -%}*/
/* 									{{ item.iconSvg|raw }}*/
/* 								{%- else -%}*/
/* 									{% include "_includes/defaulticon.svg" with { label: item.label } %}*/
/* 								{%- endif -%}*/
/* 							</span>*/
/* */
/* 							<span class="label">*/
/* 								{{- item.label -}}*/
/* 							</span>*/
/* */
/* 							{%- if item.badge is defined and item.badge -%}*/
/* 								<span class="badge">{{ item.badge }}</span>*/
/* 							{%- endif -%}*/
/* 						</a>*/
/* */
/* 						{% if item.sel and hasSubnav  %}*/
/* 				            <ul class="subnav">*/
/* 				                {% for itemId, item in subnav %}*/
/* 				                    {% set itemIsSelected = (*/
/* 				                        (selectedSubnavItem is defined and selectedSubnavItem == itemId) or*/
/* 				                        (selectedSubnavItem is not defined and loop.first)*/
/* 				                    ) -%}*/
/* */
/* 				                    <li>*/
/* 				                    	<a href="{{ url(item.url) }}"{% if itemIsSelected %} class="sel"{% endif %}>{{ item.label }}</a>*/
/* 				                    </li>*/
/* */
/* 				                {% endfor %}*/
/* 				            </ul>*/
/* 						{% endif %}*/
/* */
/* 					</li>*/
/* 				{% endfor %}*/
/* */
/* 				{#*/
/* 				#}*/
/* 			</ul>*/
/* 		</nav>*/
/* */
/* 		<div class="bottombar">*/
/* 			<a id="account-info" class="menubtn" title="{{ 'My Account'|t }}" role="button" data-menu-anchor="#account-menu-anchor">*/
/* 				<div id="user-photo" class="photo-container">*/
/* 					<img width="32" sizes="32px" srcset="{{ currentUser.getThumbUrl(32) }} 32w, {{ currentUser.getThumbUrl(64) }} 64w" alt="{{ currentUser.getName() }}">*/
/* 				</div>*/
/* 				<div class="username">*/
/* 					{{ currentUser.name }}*/
/* 					{% if currentUser.admin %}<div class="light">{{ 'admin'|t }}</div>{% endif %}*/
/* 				</div>*/
/* 				<div id="account-menu-anchor"></div>*/
/* 			</a>*/
/* 			<div class="menu" data-align="left">*/
/* 				<ul>*/
/* 					<li><a href="{{ url('myaccount') }}">{{ "My Account"|t }}</a></li>*/
/* 					{% if CraftEdition == CraftClient and currentUser.admin %}*/
/* 						<li><a href="{{ url('clientaccount') }}">{{ "Client’s Account"|t }}</a></li>*/
/* 					{% endif %}*/
/* 					<li><a href="{{ logoutUrl }}">{{ "Sign out"|t }}</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</header>*/
/* */
/* 	{% if fullPageForm %}*/
/* 		<form id="container" method="post" accept-charset="UTF-8" data-saveshortcut{% if saveShortcutRedirect is defined %} data-saveshortcut-redirect="{{ saveShortcutRedirect }}"{% endif %} data-confirm-unload>*/
/* 			{{ getCsrfInput() }}*/
/* 	{% else %}*/
/* 		<div id="container">*/
/* 	{% endif %}*/
/* */
/* 		<div id="notifications-wrapper">*/
/* 			<div id="notifications">*/
/* 				{% for type in ['notice', 'error'] %}*/
/* 					{% set message = craft.session.getFlash(type) %}*/
/* 					{% if message %}*/
/* 						<div class="notification {{ type }}">{{ message }}</div>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		{% if craft.cp.areAlertsCached() %}*/
/* 			{% set alerts = craft.cp.getAlerts() %}*/
/* 			{% if alerts %}*/
/* 				<ul id="alerts">*/
/* 					{% for alert in craft.cp.getAlerts() %}*/
/* 						<li>{{ alert|raw }}</li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			{% endif %}*/
/* 		{% else %}*/
/* 			{% includejs 'Craft.cp.fetchAlerts();' %}*/
/* 		{% endif %}*/
/* */
/* 		<div class="topbar">*/
/* 			{%- spaceless %}*/
/* 				{% if crumbs is defined and crumbs %}*/
/* 					<nav id="crumbs">*/
/* 						<ul>*/
/* 							{% for crumb in crumbs %}*/
/* 								<li><a href="{{ crumb.url }}">{{ crumb.label }}</a></li>*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</nav>*/
/* 				{% endif %}*/
/* 			{% endspaceless -%}*/
/* 		</div>*/
/* */
/* */
/* 		<header id="page-header">*/
/* 			{% block pageHeader %}*/
/* */
/* 				<div id="page-title">*/
/* 					{% block pageTitle %}*/
/* 						{% if title is defined and title %}*/
/* 							<h1>{{ title }}</h1>*/
/* 						{% endif %}*/
/* 					{% endblock %}*/
/* 				</div>*/
/* */
/* 				{% if extraPageHeaderHtml is defined %}*/
/* 					<div id="extra-headers">*/
/* 						{{ extraPageHeaderHtml|raw }}*/
/* 					</div>*/
/* 				{% endif %}*/
/* */
/* 			{% endblock %}*/
/* 		</header>*/
/* */
/* 		{# Is the template defining its own layout? #}*/
/* 		{% set main = block('main')|trim %}*/
/* 		{% set hasCustomLayout = (main is not empty) %}*/
/* */
/* 		<main id="main" role="main"{% if not hasCustomLayout %} class="single-pane"{% endif %}>*/
/* 			<div class="padded">*/
/* 				{% if hasCustomLayout %}*/
/* 					{{ main|raw }}*/
/* 				{% else %}*/
/* 					{% set sidebar = sidebar is defined ? sidebar : block('sidebar')|trim %}*/
/* 					{% set hasSidebar = (sidebar is not empty) %}*/
/* */
/* 					<div class="pane">*/
/* 						{% if tabs is defined and tabs %}*/
/* 							{% include "_includes/tabs" %}*/
/* 						{% endif %}*/
/* */
/* 						<div id="content" class="content{% if hasSidebar %} has-sidebar{% endif %}">*/
/* 							{% if hasSidebar %}*/
/* 								<div id="sidebar" class="sidebar">*/
/* 									{{ sidebar|raw }}*/
/* 								</div>*/
/* 							{% endif %}*/
/* */
/* 							<div class="body">*/
/* 								{% block content %}*/
/* 									{{ content is defined ? content }}*/
/* 								{% endblock %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</main>*/
/* */
/* 		{% if docsUrl is defined and docsUrl is not empty %}*/
/* 			<div id="help-footer">*/
/* 				<a id="help" class="help" title="{{ 'Help'|t }}" href="{{ docsUrl }}" target="_blank"></a>*/
/* 			</div>*/
/* 		{% endif %}*/
/* */
/* 		<div id="footer">*/
/* 		*/
/* 			{%- spaceless %}*/
/* 				{% set canUpgradeEdition = craft.app.canUpgradeEdition() %}*/
/* 				{% set licensedEdition = craft.app.getLicensedEdition() %}*/
/* 				{% set isTrial = licensedEdition is not sameas(null) and licensedEdition is not sameas(CraftEdition) %}*/
/* */
/* 				<div id="edition" {% if canUpgradeEdition %}class="hot" title="{{ 'Manage your Craft CMS edition'|t }}"{% else %}class="edition"{% endif %}>*/
/* 					<div id="edition-logo">*/
/* 						<div class="edition-name">{{ craft.app.getEditionName() }}</div>*/
/* 						{% if isTrial %}*/
/* 							<div class="edition-trial">{{ "Trial"|t }}</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					{% if canUpgradeEdition %}*/
/* 						<div class="icon settings"></div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			{% endspaceless -%}*/
/* */
/* 			<ul>*/
/* 				<li>Craft CMS {{ craft.app.getVersion() }}.{{ craft.app.getBuild() }}</li>*/
/* 				<li>© Pixel &amp; Tonic</li>*/
/* 				{% if currentUser.can('performUpdates') %}*/
/* 					<li><a id="footer-updates" href="{{ url('updates') }}">{{ craft.app.isUpdateInfoCached() and totalUpdates is defined and totalUpdates ? updateText : "Check for updates"|t }}</a></li>*/
/* 				{% endif %}*/
/* 				{% if currentUser.admin %}*/
/* 					<li><a href="{{ url('utils/serverinfo') }}">{{ "Server Info"|t }}</a></li>*/
/* 				{% endif %}*/
/* 			</ul>*/
/* 		</div>*/
/* */
/* 	{% if not fullPageForm %}*/
/* 		</div>*/
/* 	{% else %}*/
/* 		</form>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
