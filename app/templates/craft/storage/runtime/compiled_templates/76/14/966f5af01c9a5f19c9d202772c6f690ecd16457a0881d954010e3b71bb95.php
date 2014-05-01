<?php

/* _layouts/cp */
class __TwigTemplate_7614966f5af01c9a5f19c9d202772c6f690ecd16457a0881d954010e3b71bb95 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

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
        \Craft\craft()->templates->includeCssResource("css/cp.css", true);
        // line 4
        \Craft\craft()->templates->includeTranslations(
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
        	"Name",
        	"Move",
        	"New Child",
        	"Remove",
        	"Reorder",
        	"Save",
        	"Settings",
        	"New order saved.",
        	"Couldn’t save new order.",
        	"Are you sure you want to delete “{name}”?",
        	"“{name}” deleted.",
        	"Couldn’t delete “{name}”.",
        	"Show/hide children",
        	"New child",
        	"Upload failed for {filename}",
        	"View file",
        	"Edit properties",
        	"Rename file",
        	"Copy reference tag",
        	"Delete file",
        	"{ctrl}C to copy.",
        	"Are you sure you want to delete these {number} files?",
        	"New subfolder",
        	"Rename folder",
        	"Delete folder",
        	"Enter the name of the folder",
        	"Really delete folder “{folder}”?",
        	"Upload files",
        	"Select Transform",
        	"Please enter your current password.",
        	"Continue",
        	"Cancel"
        );
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "\t";
        if (($this->getAttribute($this->getContext($context, "currentUser"), "admin") && $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "devMode"))) {
            // line 65
            echo "\t\t<div id=\"devmode\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Craft is running in Dev Mode."), "html", null, true);
            echo "\"></div>
\t";
        }
        // line 67
        echo "
\t";
        // line 68
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "cp"), "areAlertsCached", array(), "method")) {
            // line 69
            echo "\t\t";
            $context["alerts"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "cp"), "getAlerts", array(), "method");
            // line 70
            echo "\t\t";
            if ($this->getContext($context, "alerts")) {
                // line 71
                echo "\t\t\t<ul id=\"alerts\">
\t\t\t\t";
                // line 72
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "cp"), "getAlerts", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                    // line 73
                    echo "\t\t\t\t\t<li>";
                    echo $this->getContext($context, "alert");
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t</ul>
\t\t";
            }
            // line 77
            echo "\t";
        } else {
            // line 78
            echo "\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.fetchAlerts();");
            // line 79
            echo "\t";
        }
        // line 80
        echo "
\t<header id=\"header\">
\t\t<div class=\"container\">
\t\t\t<ul id=\"header-actions\" class=\"right\">
\t\t\t\t";
        // line 84
        $context["task"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "tasks"), "getRunningTask", array(), "method");
        // line 85
        echo "\t\t\t\t";
        if ($this->getContext($context, "task")) {
            // line 86
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs((("Craft.cp.setRunningTaskInfo(" . twig_jsonencode_filter($this->getAttribute($this->getContext($context, "task"), "getInfo", array(), "method"))) . ");"));
            // line 87
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.trackTaskProgress();");
            // line 88
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "tasks"), "areTasksPending", array(), "method")) {
            // line 89
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.runPendingTasks();");
            // line 90
            echo "\t\t\t\t";
        } elseif ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "tasks"), "haveTasksFailed", array(), "method")) {
            // line 91
            echo "\t\t\t\t\t";
            \Craft\craft()->templates->includeJs("Craft.cp.setRunningTaskInfo({ status: \"error\" });");
            // line 92
            echo "\t\t\t\t";
        }
        // line 93
        echo "
\t\t\t\t";
        // line 94
        if ($this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => "performUpdates"), "method")) {
            // line 95
            echo "\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "isUpdateInfoCached", array(), "method")) {
                // line 96
                echo "\t\t\t\t\t\t";
                $context["totalUpdates"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getTotalAvailableUpdates", array(), "method");
                // line 97
                echo "\t\t\t\t\t\t";
                if ($this->getContext($context, "totalUpdates")) {
                    // line 98
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getContext($context, "totalUpdates") == 1)) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("1 update available");
                        // line 100
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t";
                        $context["updateText"] = \Craft\Craft::t("{num} updates available", array("num" => $this->getContext($context, "totalUpdates")));
                        // line 102
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t<li class=\"updates";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "isCriticalUpdateAvailable", array(), "method")) {
                        echo " critical";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<a data-icon=\"newstamp\" href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "updateText"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t<span>";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getContext($context, "totalUpdates"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t";
            } else {
                // line 110
                echo "\t\t\t\t\t\t";
                \Craft\craft()->templates->includeJs("Craft.cp.checkForUpdates();");
                // line 111
                echo "\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t";
        }
        // line 113
        echo "
\t\t\t\t";
        // line 114
        if ($this->getAttribute($this->getContext($context, "currentUser"), "admin")) {
            // line 115
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settings\" data-icon=\"settings\" href=\"";
            // line 116
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"settingsmenu menubtn\" title=\"";
            // line 119
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\"></a>
\t\t\t\t\t\t<div id=\"settingsmenu\" class=\"menu padded\" data-align=\"right\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "cp"), "settings", array(), "method"));
            foreach ($context['_seq'] as $context["category"] => $context["items"]) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "items"));
                foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/" . $this->getContext($context, "handle"))), "html", null, true);
                    echo "\" data-icon=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "icon"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "label"), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 131
        echo "
\t\t\t\t<li>
\t\t\t\t\t<a data-icon=\"user\" class=\"myaccount menubtn\" title=\"";
        // line 133
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 136
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("myaccount"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("My Account"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t";
        // line 137
        if ((($this->getContext($context, "CraftEdition") == $this->getContext($context, "CraftClient")) && $this->getAttribute($this->getContext($context, "currentUser"), "admin"))) {
            // line 138
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("clientaccount"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Client’s Account"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "logoutUrl"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Sign out"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<h2><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getContext($context, "siteUrl"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Site Homepage"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t($this->getContext($context, "siteName")), "html", null, true);
        echo "</a></h2>

\t\t\t<nav>
\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "cp"), "nav", array(), "method"));
        foreach ($context['_seq'] as $context["handle"] => $context["item"]) {
            // line 151
            echo "\t\t\t\t\t\t<li id=\"nav-";
            echo twig_escape_filter($this->env, $this->getContext($context, "handle"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<a";
            // line 152
            if ($this->getAttribute($this->getContext($context, "item"), "sel")) {
                echo " class=\"sel\"";
            }
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "url"), "html", null, true);
            echo "\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name"), "html", null, true);
            // line 154
            if (($this->getAttribute($this->getContext($context, "item", true), "badge", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "item"), "badge"))) {
                // line 155
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "badge"), "html", null, true);
                echo "</span>";
            }
            // line 157
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['handle'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</header>

\t<div class=\"container\">
\t\t<div id=\"notifications-wrapper\">
\t\t\t<div id=\"notifications\">
\t\t\t\t";
        // line 168
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "notice", 1 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 169
            echo "\t\t\t\t\t";
            $context["message"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "session"), "getFlash", array(0 => $this->getContext($context, "type")), "method");
            // line 170
            echo "\t\t\t\t\t";
            if ($this->getContext($context, "message")) {
                // line 171
                echo "\t\t\t\t\t\t<div class=\"notification ";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "</div>
\t\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t</div>
\t\t</div>

\t\t<header id=\"page-header\">
\t\t\t";
        // line 178
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 201
        echo "\t\t</header>

\t\t<main id=\"main\" role=\"main\">
\t\t\t";
        // line 204
        $this->displayBlock('main', $context, $blocks);
        // line 235
        echo "\t\t</main>

\t\t<div id=\"footer\">
\t\t\t<ul>
\t\t\t\t<li>Craft ";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getEditionName", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getVersion", array(), "method"), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getBuild", array(), "method"), "html", null, true);
        echo "</li>
\t\t\t\t<li>";
        // line 240
        echo twig_escape_filter($this->env, \Craft\Craft::t("Released on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "releaseDate"), "localeDate"), "html", null, true);
        echo "</li>
\t\t\t\t";
        // line 241
        if ($this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => "performUpdates"), "method")) {
            // line 242
            echo "\t\t\t\t\t<li><a id=\"footer-updates\" href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("updates"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "isUpdateInfoCached", array(), "method") && $this->getContext($context, "totalUpdates"))) ? ($this->getContext($context, "updateText")) : (\Craft\Craft::t("Check for updates"))), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        // line 244
        echo "\t\t\t\t<li>";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Copyright"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "now"), "year"), "html", null, true);
        echo " Pixel &amp; Tonic, Inc. ";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All rights reserved."), "html", null, true);
        echo "</li>
\t\t\t</ul>

\t\t\t";
        // line 247
        if (((($this->getContext($context, "CraftEdition") == $this->getContext($context, "CraftPersonal")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "getPath") == "settings")) && $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "canUpgradeEdition", array(), "method"))) {
            // line 248
            echo "\t\t\t\t<p id=\"upgradepromo\"><a>";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade Craft to take your site to the next level."), "html", null, true);
            echo " <span class=\"go\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Show me"), "html", null, true);
            echo "</span></a></p>
\t\t\t";
        }
        // line 250
        echo "\t\t</div>
\t</div>

\t";
        // line 253
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "hasWrongEdition", array(), "method")) {
            // line 254
            echo "\t\t<div id=\"wrongedition-modal\" class=\"modal fitted hidden\">
\t\t\t<div class=\"body\">
\t\t\t\t<p>";
            // line 256
            echo twig_escape_filter($this->env, \Craft\Craft::t("You’re running Craft {edition} with a Craft {licensedEdition} license.", array("edition" => $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getEditionName", array(), "method"), "licensedEdition" => $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 257
            echo twig_escape_filter($this->env, \Craft\Craft::t("What would you like to do?"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"btngroup\">
\t\t\t\t\t\t<div id=\"wrongedition-switchbtn\" class=\"btn\">";
            // line 260
            echo twig_escape_filter($this->env, \Craft\Craft::t("Switch to Craft {edition}", array("edition" => $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getLicensedEditionName", array(), "method"))), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
            // line 261
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getEdition", array(), "method") > $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getLicensedEdition", array(), "method"))) {
                // line 262
                echo "\t\t\t\t\t\t\t<div id=\"wrongedition-upgradebtn\" class=\"btn\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Upgrade your license"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            // line 264
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
    }

    // line 178
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 179
        echo "\t\t\t\t";
        if ((array_key_exists("crumbs", $context) && $this->getContext($context, "crumbs"))) {
            // line 180
            echo "\t\t\t\t\t<nav id=\"crumbs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 182
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "crumbs"));
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 183
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "crumb"), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "crumb"), "label"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 188
        echo "
\t\t\t\t";
        // line 189
        if ((array_key_exists("title", $context) && $this->getContext($context, "title"))) {
            // line 190
            echo "\t\t\t\t\t<h1>";
            echo $this->getContext($context, "title");
            echo "</h1>
\t\t\t\t";
        }
        // line 192
        echo "
\t\t\t\t";
        // line 193
        if (array_key_exists("extraPageHeaderHtml", $context)) {
            // line 194
            echo "\t\t\t\t\t<div id=\"extra-headers\">
\t\t\t\t\t\t";
            // line 195
            echo twig_escape_filter($this->env, $this->getContext($context, "extraPageHeaderHtml"), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 198
        echo "
\t\t\t\t<div class=\"clear\"></div>
\t\t\t";
    }

    // line 204
    public function block_main($context, array $blocks = array())
    {
        // line 205
        echo "\t\t\t\t";
        $context["sidebar"] = ((array_key_exists("sidebar", $context)) ? ($this->getContext($context, "sidebar")) : (trim($this->renderBlock("sidebar", $context, $blocks))));
        // line 206
        echo "\t\t\t\t";
        $context["hasSidebar"] = (!twig_test_empty($this->getContext($context, "sidebar")));
        // line 207
        echo "\t\t\t\t";
        $context["hasHelp"] = (array_key_exists("docsUrl", $context) && (!twig_test_empty($this->getContext($context, "docsUrl"))));
        // line 208
        echo "
\t\t\t\t<div class=\"grid\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t";
        // line 212
        if ((array_key_exists("tabs", $context) && $this->getContext($context, "tabs"))) {
            // line 213
            echo "\t\t\t\t\t\t\t\t";
            $this->env->loadTemplate("_includes/tabs")->display($context);
            // line 214
            echo "\t\t\t\t\t\t\t";
        }
        // line 215
        echo "
\t\t\t\t\t\t\t<div id=\"content\" class=\"content";
        // line 216
        if ($this->getContext($context, "hasSidebar")) {
            echo " has-sidebar";
        }
        if ($this->getContext($context, "hasHelp")) {
            echo " has-help";
        }
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 217
        if ($this->getContext($context, "hasSidebar")) {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t<div id=\"sidebar\" class=\"sidebar\">
\t\t\t\t\t\t\t\t\t\t";
            // line 219
            echo $this->getContext($context, "sidebar");
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 222
        echo "
\t\t\t\t\t\t\t\t";
        // line 223
        $this->displayBlock('content', $context, $blocks);
        // line 226
        echo "
\t\t\t\t\t\t\t\t";
        // line 227
        if ($this->getContext($context, "hasHelp")) {
            // line 228
            echo "\t\t\t\t\t\t\t\t\t<a id=\"help\" class=\"help\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Help"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "docsUrl"), "html", null, true);
            echo "\" target=\"_blank\"></a>
\t\t\t\t\t\t\t\t";
        }
        // line 230
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 223
    public function block_content($context, array $blocks = array())
    {
        // line 224
        echo "\t\t\t\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ((array_key_exists("content", $context)) ? ($this->getContext($context, "content")) : ("")), "html", null, true);
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
        return array (  655 => 224,  652 => 223,  644 => 230,  636 => 228,  634 => 227,  631 => 226,  629 => 223,  626 => 222,  620 => 219,  617 => 218,  615 => 217,  606 => 216,  603 => 215,  600 => 214,  597 => 213,  595 => 212,  589 => 208,  586 => 207,  583 => 206,  580 => 205,  577 => 204,  571 => 198,  565 => 195,  562 => 194,  560 => 193,  557 => 192,  551 => 190,  549 => 189,  546 => 188,  541 => 185,  530 => 183,  526 => 182,  522 => 180,  519 => 179,  516 => 178,  507 => 264,  501 => 262,  499 => 261,  495 => 260,  489 => 257,  485 => 256,  481 => 254,  479 => 253,  474 => 250,  466 => 248,  464 => 247,  453 => 244,  445 => 242,  443 => 241,  437 => 240,  429 => 239,  423 => 235,  421 => 204,  416 => 201,  414 => 178,  408 => 174,  402 => 173,  394 => 171,  391 => 170,  388 => 169,  384 => 168,  374 => 160,  366 => 157,  361 => 155,  359 => 154,  357 => 153,  350 => 152,  345 => 151,  341 => 150,  330 => 146,  318 => 140,  310 => 138,  308 => 137,  302 => 136,  296 => 133,  292 => 131,  286 => 127,  280 => 126,  267 => 124,  262 => 123,  258 => 122,  252 => 119,  244 => 116,  241 => 115,  239 => 114,  233 => 112,  230 => 111,  227 => 110,  217 => 105,  211 => 104,  204 => 103,  201 => 102,  198 => 101,  195 => 100,  192 => 99,  189 => 98,  186 => 97,  180 => 95,  178 => 94,  175 => 93,  172 => 92,  169 => 91,  163 => 89,  160 => 88,  157 => 87,  154 => 86,  149 => 84,  143 => 80,  140 => 79,  137 => 78,  134 => 77,  117 => 72,  114 => 71,  111 => 70,  106 => 68,  103 => 67,  97 => 65,  94 => 64,  91 => 63,  236 => 113,  224 => 109,  218 => 75,  214 => 74,  207 => 69,  205 => 68,  197 => 63,  191 => 62,  188 => 61,  183 => 96,  174 => 55,  171 => 54,  166 => 90,  155 => 49,  151 => 85,  145 => 45,  138 => 44,  130 => 75,  127 => 41,  125 => 40,  121 => 73,  118 => 38,  115 => 36,  110 => 34,  108 => 69,  105 => 32,  99 => 31,  93 => 30,  85 => 29,  78 => 28,  74 => 27,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 17,  45 => 16,  39 => 13,  32 => 12,  30 => 4,  28 => 3,  26 => 4,  24 => 2,);
    }
}
