<?php

/* _layouts/cp */
class __TwigTemplate_db3162028ed809dfe6fbf59cfd1e0283f2fb7848c0e7d30f71300aea268dc984 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("_layouts/basecp", "_layouts/cp", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'main' => array($this, 'block_main'),
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
        \Craft\craft()->templates->includeCssResource($_js, true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
        	"week",
        	"weeks",
        	"day",
        	"days",
        	"hour",
        	"hours",
        	"minute",
        	"minutes",
        	"second",
        	"seconds",
        	"Log out now",
        	"Keep me logged in",
        	"Your session will expire in {time}.",
        	"Your session has ended.",
        	"Enter your password to log back in.",
        	"Password",
        	"Login",
        	"Pending",
        	"Failed",
        	"Failed task",
        	"Options",
        	"Try again",
        	"Show sidebar",
        	"Hide sidebar",
        	"1 update available",
        	"{num} updates available",
        	"More",
        	"Attempted to get the height of a modal whose container has not been set.",
        	"Attempted to get the width of a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Attempted to position a modal whose container has not been set.",
        	"Are you sure you want to transfer your license to this domain?",
        	"License transferred.",
        	"An unknown error occurred.",
        	"Cancel",
        	"Close",
        	"Create",
        	"Done",
        	"Delete",
        	"Handle",
        	"Instructions",
        	"Name",
        	"Move",
        	"New Child",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"Select",
        	"New order saved.",
        	"New position saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"{ctrl}C to copy.",
        	"Search in subfolders",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Actions",
        	"Continue",
        	"Cancel",
        	"Any changes will be lost if you leave this page.",
        	"What do you want to do with their content?",
        	"Transfer it to:",
        	"Choose a user",
        	"Delete it",
        	"Delete user",
        	"Delete users",
        	"(blank)",
        	"Are you sure you want to delete the selected blocks?"
        );
        // line 86
        $context["forceConfirmUnload"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "hasFlash", array(0 => "error"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        // line 90
        echo "\t";
        if (($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "config", array()), "devMode", array()))) {
            // line 91
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 93
        echo "
\t";
        // line 94
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "areAlertsCached", array(), "method")) {
            // line 95
            echo "\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "getAlerts", array(), "method");
            // line 96
            echo "\t\t";
            if ((isset($context["alerts"]) ? $context["alerts"] : null)) {
                // line 97
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 98
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 99
                    echo "\t\t\t\t\t<li>";
                    echo $context["alert"];
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "\t\t\t</ul>
\t\t";
            }
            // line 103
            echo "\t";
        } else {
            // line 104
            echo "\t\t";
            $_js = "Craft.cp.fetchAlerts();";
            \Craft\craft()->templates->includeJs($_js);
            // line 105
            echo "\t";
        }
        // line 106
        echo "
\t<header id=\"header\">
\t\t<div class=\"container\">
\t\t\t<ul id=\"header-actions\">
\t\t\t\t";
        // line 110
        $context["task"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "getRunningTask", array(), "method");
        // line 111
        echo "\t\t\t\t";
        if ((isset($context["task"]) ? $context["task"] : null)) {
            // line 112
            echo "\t\t\t\t\t";
            $_js = (("Craft.cp.setRunningTaskInfo(" . $this->env->getExtension('craft')->jsonEncodeFilter($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "getInfo", array(), "method"))) . ");");
            \Craft\craft()->templates->includeJs($_js);
            // line 113
            echo "\t\t\t\t\t";
            $_js = "Craft.cp.trackTaskProgress();";
            \Craft\craft()->templates->includeJs($_js);
            // line 114
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "areTasksPending", array(), "method")) {
            // line 115
            echo "\t\t\t\t\t";
            $_js = "Craft.cp.runPendingTasks();";
            \Craft\craft()->templates->includeJs($_js);
            // line 116
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "tasks", array()), "haveTasksFailed", array(), "method")) {
            // line 117
            echo "\t\t\t\t\t";
            $_js = "Craft.cp.setRunningTaskInfo({ status: \"error\" });";
            \Craft\craft()->templates->includeJs($_js);
            // line 118
            echo "\t\t\t\t";
        }
        // line 119
        echo "
\t\t\t\t";
        // line 120
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 121
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isUpdateInfoCached", array(), "method")) {
                // line 122
                echo "\t\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getTotalAvailableUpdates", array(), "method");
                // line 123
                echo "\t\t\t\t\t\t";
                if ((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)) {
                    // line 124
                    echo "\t\t\t\t\t\t\t";
                    if (((isset($context["totalUpdates"]) ? $context["totalUpdates"] : null) == 1)) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 126
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null)));
                        // line 128
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 130
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["updateText"]) ? $context["updateText"] : null), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 131
                    echo twig_escape_filter($this->env, (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 135
                echo "\t\t\t\t\t";
            } else {
                // line 136
                echo "\t\t\t\t\t\t";
                $_js = "Craft.cp.checkForUpdates();";
                \Craft\craft()->templates->includeJs($_js);
                // line 137
                echo "\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t";
        }
        // line 139
        echo "
\t\t\t\t";
        // line 140
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array())) {
            // line 141
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 142
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settingsmenu menubtn\" title=\"";
            // line 145
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t<div id=\"settingsmenu\" class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t\t";
            // line 147
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "settings", array(), "method"));
            foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                // line 148
                echo "\t\t\t\t\t\t\t\t<h6>";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t<ul class=\"padded\">
\t\t\t\t\t\t\t\t\t";
                // line 150
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["items"]);
                foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $context["handle"])), "html", null, true);
                    echo "\" data-icon=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 158
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 160
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 163
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 164
        if ((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftClient"]) ? $context["CraftClient"] : null)) && $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "admin", array()))) {
            // line 165
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<h2><a href=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["siteUrl"]) ? $context["siteUrl"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t((isset($context["siteName"]) ? $context["siteName"] : null)), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 177
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "cp", array()), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 178
            echo "\t\t\t\t\t\t<li id=\"nav-";
            echo twig_escape_filter($this->env, $context["handle"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 179
            if ($this->getAttribute($context["item"], "sel", array())) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
            echo "\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
            // line 181
            if (($this->getAttribute($context["item"], "badge", array(), "any", true, true) && $this->getAttribute($context["item"], "badge", array()))) {
                // line 182
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "badge", array()), "html", null, true);
                echo "</span>";
            }
            // line 184
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 195
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 196
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "session", array()), "getFlash", array(0 => $context["type"]), "method");
            // line 197
            echo "\t\t\t\t\t";
            if ((isset($context["message"]) ? $context["message"] : null)) {
                // line 198
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">
\t\t\t";
        // line 205
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 228
        echo "\t\t</header>

\t\t<main id=\"main\" role=\"main\">
\t\t\t";
        // line 231
        $this->displayBlock('main', $context, $blocks);
        // line 264
        echo "\t\t</main>

\t\t<div id=\"footer\">
\t\t\t<ul>
\t\t\t\t<li>Craft ";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEditionName", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 269
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "releaseDate", array()), "localeDate", array()), "html", null, true);
        echo "</li>
\t\t\t\t";
        // line 270
        if ($this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "can", array(0 => "performUpdates"), "method")) {
            // line 271
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "isUpdateInfoCached", array(), "method") && (isset($context["totalUpdates"]) ? $context["totalUpdates"] : null))) ? ((isset($context["updateText"]) ? $context["updateText"] : null)) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 273
        echo "\t\t\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["now"]) ? $context["now"] : null), "year", array()), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t\t\t</ul>

\t\t\t";
        // line 276
        if (((((isset($context["CraftEdition"]) ? $context["CraftEdition"] : null) == (isset($context["CraftPersonal"]) ? $context["CraftPersonal"] : null)) || ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getPath", array()) == "settings")) && $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "canUpgradeEdition", array(), "method"))) {
            // line 277
            echo "\t\t\t\t<p id=\"upgradepromo\"><a>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade Craft to take your site to the next level."), "html", null, true);
            echo " <span class=\"go nowrap\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Show me"), "html", null, true);
            echo "</span></a></p>
\t\t\t";
        }
        // line 279
        echo "\t\t</div>
\t</div>

\t";
        // line 282
        if ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "hasWrongEdition", array(), "method")) {
            // line 283
            echo "\t\t<div id=\"wrongedition-modal\" class=\"modal fitted hidden\">
\t\t\t<div class=\"body\">
\t\t\t\t<p>";
            // line 285
            echo twig_escape_filter($this->env, \Craft\Craft::t("You’re running Craft {edition} with a Craft {licensedEdition} license.", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEditionName", array(), "method"), "licensedEdition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 286
            echo twig_escape_filter($this->env, \Craft\Craft::t("What would you like to do?"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<div id=\"wrongedition-switchbtn\" class=\"btn\">";
            // line 289
            echo twig_escape_filter($this->env, \Craft\Craft::t("Switch to Craft {edition}", array("edition" => $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
            // line 290
            if (($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getEdition", array(), "method") > $this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "app", array()), "getLicensedEdition", array(), "method"))) {
                // line 291
                echo "\t\t\t\t\t\t\t<div id=\"wrongedition-upgradebtn\" class=\"btn\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade your license"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 293
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 205
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 206
        echo "\t\t\t\t";
        if ((array_key_exists("crumbs", $context) && (isset($context["crumbs"]) ? $context["crumbs"] : null))) {
            // line 207
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 209
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["crumbs"]) ? $context["crumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 210
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
            // line 212
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 215
        echo "
\t\t\t\t";
        // line 216
        if ((array_key_exists("title", $context) && (isset($context["title"]) ? $context["title"] : null))) {
            // line 217
            echo "\t\t\t\t\t<h1>";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
\t\t\t\t";
        }
        // line 219
        echo "
\t\t\t\t";
        // line 220
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 221
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 222
            echo twig_escape_filter($this->env, (isset($context["extraPageHeaderHtml"]) ? $context["extraPageHeaderHtml"] : null), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 225
        echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t";
    }

    // line 231
    public function block_main($context, array $blocks = array())
    {
        // line 232
        echo "\t\t\t\t";
        $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ((isset($context["sidebar"]) ? $context["sidebar"] : null)) : (trim($this->renderBlock("sidebar", $context, $blocks))));
        // line 233
        echo "\t\t\t\t";
        $context["hasSidebar"] =  !twig_test_empty((isset($context["sidebar"]) ? $context["sidebar"] : null));
        // line 234
        echo "\t\t\t\t";
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) &&  !twig_test_empty((isset($context["docsUrl"]) ? $context["docsUrl"] : null)));
        // line 235
        echo "
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t";
        // line 239
        if ((array_key_exists("tabs", $context) && (isset($context["tabs"]) ? $context["tabs"] : null))) {
            // line 240
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("_includes/tabs", "_layouts/cp", 240)->display($context);
            // line 241
            echo "\t\t\t\t\t\t\t";
        }
        // line 242
        echo "
\t\t\t\t\t\t\t<div id=\"content\" class=\"content";
        // line 243
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            echo " has-sidebar";
        }
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            echo " has-help";
        }
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 244
        if ((isset($context["hasSidebar"]) ? $context["hasSidebar"] : null)) {
            // line 245
            echo "\t\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t";
            // line 246
            echo (isset($context["sidebar"]) ? $context["sidebar"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 249
        echo "
\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t";
        // line 251
        $this->displayBlock('content', $context, $blocks);
        // line 254
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 256
        if ((isset($context["hasHelp"]) ? $context["hasHelp"] : null)) {
            // line 257
            echo "\t\t\t\t\t\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["docsUrl"]) ? $context["docsUrl"] : null), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t\t\t";
        }
        // line 259
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 251
    public function block_content($context, array $blocks = array())
    {
        // line 252
        echo "\t\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ((isset($context["content"]) ? $context["content"] : null)) : ("")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
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
        return array (  695 => 252,  692 => 251,  684 => 259,  676 => 257,  674 => 256,  670 => 254,  668 => 251,  664 => 249,  658 => 246,  655 => 245,  653 => 244,  644 => 243,  641 => 242,  638 => 241,  635 => 240,  633 => 239,  627 => 235,  624 => 234,  621 => 233,  618 => 232,  615 => 231,  609 => 225,  603 => 222,  600 => 221,  598 => 220,  595 => 219,  589 => 217,  587 => 216,  584 => 215,  579 => 212,  568 => 210,  564 => 209,  560 => 207,  557 => 206,  554 => 205,  545 => 293,  539 => 291,  537 => 290,  533 => 289,  527 => 286,  523 => 285,  519 => 283,  517 => 282,  512 => 279,  504 => 277,  502 => 276,  491 => 273,  483 => 271,  481 => 270,  475 => 269,  467 => 268,  461 => 264,  459 => 231,  454 => 228,  452 => 205,  446 => 201,  440 => 200,  432 => 198,  429 => 197,  426 => 196,  422 => 195,  412 => 187,  404 => 184,  399 => 182,  397 => 181,  395 => 180,  388 => 179,  383 => 178,  379 => 177,  368 => 173,  356 => 167,  348 => 165,  346 => 164,  340 => 163,  334 => 160,  330 => 158,  325 => 155,  318 => 153,  305 => 151,  301 => 150,  295 => 148,  291 => 147,  286 => 145,  278 => 142,  275 => 141,  273 => 140,  270 => 139,  267 => 138,  264 => 137,  260 => 136,  257 => 135,  250 => 131,  244 => 130,  237 => 129,  234 => 128,  231 => 127,  228 => 126,  225 => 125,  222 => 124,  219 => 123,  216 => 122,  213 => 121,  211 => 120,  208 => 119,  205 => 118,  201 => 117,  198 => 116,  194 => 115,  191 => 114,  187 => 113,  183 => 112,  180 => 111,  178 => 110,  172 => 106,  169 => 105,  165 => 104,  162 => 103,  158 => 101,  149 => 99,  145 => 98,  142 => 97,  139 => 96,  136 => 95,  134 => 94,  131 => 93,  125 => 91,  122 => 90,  119 => 89,  115 => 1,  113 => 86,  31 => 4,  28 => 3,  11 => 1,);
    }
}
