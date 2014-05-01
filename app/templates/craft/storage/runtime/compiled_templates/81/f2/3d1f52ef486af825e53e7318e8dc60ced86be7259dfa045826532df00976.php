<?php

/* entries/_edit */
class __TwigTemplate_81f23d1f52ef486af825e53e7318e8dc60ced86be7259dfa045826532df00976 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 4
        ob_start();
        // line 5
        echo "\t";
        if (($this->getAttribute($this->getContext($context, "entry"), "id") && ($this->getContext($context, "CraftEdition") >= $this->getContext($context, "CraftClient")))) {
            // line 6
            echo "\t\t";
            $this->env->loadTemplate("entries/_revisions")->display($context);
            // line 7
            echo "\t";
        }
        $context["extraPageHeaderHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        $context["sectionHandle"] = $this->getAttribute($this->getContext($context, "section"), "handle");
        // line 201
        if ((!$this->getAttribute($this->getContext($context, "entry"), "slug"))) {
            // line 202
            \Craft\craft()->templates->includeJs("window.slugGenerator = new Craft.SlugGenerator('#title', '#slug');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "\t<form id=\"entry-form\" method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\" data-saveshortcut-redirect=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "continueEditingUrl"), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "id"), "html", null, true);
        echo "\">
\t\t";
        // line 16
        if ($this->getAttribute($this->getContext($context, "entry"), "id")) {
            echo "<input type=\"hidden\" name=\"entryId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "id"), "html", null, true);
            echo "\">";
        }
        // line 17
        echo "\t\t";
        if ($this->getAttribute($this->getContext($context, "craft"), "isLocalized", array(), "method")) {
            echo "<input type=\"hidden\" name=\"locale\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "locale"), "html", null, true);
            echo "\">";
        }
        // line 18
        echo "
\t\t<div class=\"grid first\">
\t\t\t<div class=\"item\" data-position=\"left\" data-min-colspan=\"2\" data-max-colspan=\"3\">
\t\t\t\t<div id=\"fields\" class=\"pane\">
\t\t\t\t\t";
        // line 22
        $this->env->loadTemplate("_includes/tabs")->display($context);
        // line 23
        echo "\t\t\t\t\t";
        $this->env->loadTemplate("entries/_fields")->display($context);
        // line 24
        echo "\t\t\t\t</div>
\t\t\t</div><!--/item-->

\t\t\t<div class=\"item\" data-position=\"right\" data-colspan=\"1\">

\t\t\t\t";
        // line 29
        if ($this->getContext($context, "showPreviewBtn")) {
            // line 30
            echo "\t\t\t\t\t<div id=\"livepreview-btn\" class=\"btn big\" data-icon=\"view\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, \Craft\Craft::t("Live Preview"), "html", null, true);
            echo "
\t\t\t\t\t\t<div id=\"livepreview-spinner\" class=\"spinner hidden\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 35
        echo "
\t\t\t\t";
        // line 36
        if (($this->getAttribute($this->getContext($context, "craft"), "isLocalized", array(), "method") && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "getLocales", array(), "method")) > 1))) {
            // line 37
            echo "\t\t\t\t\t<ul id=\"locales\" class=\"pane\">
\t\t\t\t\t\t";
            // line 38
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "localeIds"));
            foreach ($context['_seq'] as $context["_key"] => $context["localeId"]) {
                // line 39
                echo "\t\t\t\t\t\t\t";
                $context["localeName"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getLocaleById", array(0 => $this->getContext($context, "localeId")), "method"), "name");
                // line 40
                echo "\t\t\t\t\t\t\t<li";
                if (($this->getContext($context, "localeId") == $this->getAttribute($this->getContext($context, "entry"), "locale"))) {
                    echo " class=\"sel\"";
                }
                echo ">";
                // line 41
                if (($this->getContext($context, "localeId") == $this->getAttribute($this->getContext($context, "entry"), "locale"))) {
                    // line 42
                    echo twig_escape_filter($this->env, $this->getContext($context, "localeName"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 43
                    echo $context["forms"]->getlightswitch(array("name" => "localeEnabled", "on" => $this->getAttribute($this->getContext($context, "entry"), "localeEnabled")));
                } else {
                    // line 48
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ((\Craft\UrlHelper::getUrl(((("entries/" . $this->getContext($context, "sectionHandle")) . "/") . $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "getSegment", array(0 => 3), "method"))) . "/") . $this->getContext($context, "localeId")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "localeName"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t<div class=\"status ";
                    // line 49
                    echo ((twig_in_filter($this->getContext($context, "localeId"), $this->getContext($context, "enabledLocales"))) ? ("enabled") : ("disabled"));
                    echo "\"></div>";
                }
                // line 51
                echo "</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t";
        // line 56
        if (($this->getAttribute($this->getContext($context, "section"), "type") != "single")) {
            // line 57
            echo "\t\t\t\t\t<div id=\"settings\" class=\"pane\">

\t\t\t\t\t\t";
            // line 59
            if ($this->getContext($context, "showEntryTypes")) {
                // line 60
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Entry Type"), "id" => "entryType", "name" => "typeId", "value" => $this->getAttribute($this->getContext($context, "entryType"), "id"), "options" => $this->getContext($context, "entryTypeOptions")));
                // line 66
                echo "
\t\t\t\t\t\t";
            }
            // line 68
            echo "
\t\t\t\t\t\t";
            // line 69
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Slug"), "id" => "slug", "name" => "slug", "value" => $this->getAttribute($this->getContext($context, "entry"), "slug"), "errors" => twig_array_merge($this->getAttribute($this->getContext($context, "entry"), "getErrors", array(0 => "slug"), "method"), $this->getAttribute($this->getContext($context, "entry"), "getErrors", array(0 => "uri"), "method")), "required" => true));
            // line 76
            echo "

\t\t\t\t\t\t";
            // line 78
            if ((($this->getAttribute($this->getContext($context, "section"), "type") == "structure") && (twig_length_filter($this->env, $this->getContext($context, "parentOptions")) > 1))) {
                // line 79
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Parent Entry"), "id" => "parentId", "name" => "parentId", "options" => $this->getContext($context, "parentOptions"), "value" => $this->getContext($context, "parentId")));
                // line 85
                echo "
\t\t\t\t\t\t";
            }
            // line 87
            echo "
\t\t\t\t\t\t";
            // line 88
            if (($this->getContext($context, "CraftEdition") >= $this->getContext($context, "CraftClient"))) {
                // line 89
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Author"), "id" => "author", "name" => "author", "options" => $this->getContext($context, "authorOptions"), "value" => $this->getAttribute($this->getContext($context, "entry"), "authorId")));
                // line 95
                echo "
\t\t\t\t\t\t";
            }
            // line 97
            echo "
\t\t\t\t\t\t";
            // line 98
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Post Date"), "id" => "postDate", "name" => "postDate", "value" => (($this->getAttribute($this->getContext($context, "entry"), "postDate")) ? ($this->getAttribute($this->getContext($context, "entry"), "postDate")) : (null)), "errors" => $this->getAttribute($this->getContext($context, "entry"), "getErrors", array(0 => "postDate"), "method")));
            // line 104
            echo "

\t\t\t\t\t\t";
            // line 106
            echo $context["forms"]->getdateTimeField(array("label" => \Craft\Craft::t("Expiration Date"), "id" => "expiryDate", "name" => "expiryDate", "value" => (($this->getAttribute($this->getContext($context, "entry"), "expiryDate")) ? ($this->getAttribute($this->getContext($context, "entry"), "expiryDate")) : (null)), "errors" => $this->getAttribute($this->getContext($context, "entry"), "getErrors", array(0 => "expiryDate"), "method")));
            // line 112
            echo "

\t\t\t\t\t\t";
            // line 114
            if ($this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => ("publishEntries" . $this->getContext($context, "permissionSuffix"))), "method")) {
                // line 115
                echo "\t\t\t\t\t\t\t";
                echo $context["forms"]->getlightswitchField(array("label" => \Craft\Craft::t("Status"), "name" => "enabled", "on" => $this->getAttribute($this->getContext($context, "entry"), "enabled")));
                // line 119
                echo "
\t\t\t\t\t\t";
            }
            // line 121
            echo "\t\t\t\t\t</div><!--/pane-->

\t\t\t\t\t";
            // line 123
            if ($this->getContext($context, "canDeleteEntry")) {
                // line 124
                echo "\t\t\t\t\t\t<div class=\"pane\">
\t\t\t\t\t\t\t<input type=\"button\" class=\"btn small formsubmit\" value=\"";
                // line 125
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" data-action=\"entries/deleteEntry\"
\t\t\t\t\t\t\t\tdata-confirm=\"";
                // line 126
                echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this entry?"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\tdata-redirect=\"entries\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t";
        }
        // line 131
        echo "\t\t\t</div><!--/item-->

\t\t\t";
        // line 133
        if (($this->getAttribute($this->getContext($context, "entry"), "classHandle") != "EntryVersion")) {
            // line 134
            echo "\t\t\t\t<div class=\"item\" data-position=\"left\" data-colspan=\"1\">
\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t";
            // line 136
            if (($this->getAttribute($this->getContext($context, "entry"), "id") && ($this->getAttribute($this->getContext($context, "entry"), "classHandle") == "EntryDraft"))) {
                // line 137
                echo "
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cpEditUrl"), "html", null, true);
                echo "/drafts/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "draftId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"draftId\" value=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "draftId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                // line 141
                echo twig_escape_filter($this->env, \Craft\Craft::t("Save draft"), "html", null, true);
                echo "\">

\t\t\t\t\t\t\t";
                // line 143
                if (($this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => ("publishEntries" . $this->getContext($context, "permissionSuffix"))), "method") && (($this->getAttribute($this->getContext($context, "entry"), "creatorId") == $this->getAttribute($this->getContext($context, "currentUser"), "id")) || $this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => ("publishPeerEntryDrafts" . $this->getContext($context, "permissionSuffix"))), "method")))) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Publish draft"), "html", null, true);
                    echo "\" data-action=\"entryRevisions/publishDraft\" data-redirect=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cpEditUrl"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                }
                // line 146
                echo "
\t\t\t\t\t\t\t";
                // line 147
                if (($this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => ("publishEntries" . $this->getContext($context, "permissionSuffix"))), "method") && (($this->getAttribute($this->getContext($context, "entry"), "creatorId") == $this->getAttribute($this->getContext($context, "currentUser"), "id")) || $this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => ("deletePeerEntryDrafts" . $this->getContext($context, "permissionSuffix"))), "method")))) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Delete draft"), "html", null, true);
                    echo "\" data-action=\"entryRevisions/deleteDraft\"
\t\t\t\t\t\t\t\t   data-confirm=\"";
                    // line 149
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete this draft?"), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t   data-redirect=\"";
                    // line 150
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cpEditUrl"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t";
                }
                // line 152
                echo "
\t\t\t\t\t\t";
            } else {
                // line 154
                echo "
\t\t\t\t\t\t\t";
                // line 155
                if ((((!$this->getAttribute($this->getContext($context, "entry"), "id")) || (!$this->getAttribute($this->getContext($context, "entry"), "enabled"))) || $this->getAttribute($this->getContext($context, "currentUser"), "can", array(0 => ("publishEntries" . $this->getContext($context, "permissionSuffix"))), "method"))) {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entries/saveEntry\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"entries/";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getContext($context, "sectionHandle"), "html", null, true);
                    echo "\">

\t\t\t\t\t\t\t\t<div class=\"btngroup submit first\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
                    // line 160
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
                    echo "\">

\t\t\t\t\t\t\t\t\t<div class=\"btn submit menubtn\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $this->getContext($context, "continueEditingUrl"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Save and continue editing"), "html", null, true);
                    echo "</a></li>

\t\t\t\t\t\t\t\t\t\t\t";
                    // line 167
                    $context["nextEntryParams"] = array();
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getContext($context, "showEntryTypes")) {
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["nextEntryParams"] = twig_array_merge($this->getContext($context, "nextEntryParams"), array(0 => "typeId={type.id}"));
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ((($this->getAttribute($this->getContext($context, "section"), "type") == "structure") && (twig_length_filter($this->env, $this->getContext($context, "parentOptions")) > 1))) {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["nextEntryParams"] = twig_array_merge($this->getContext($context, "nextEntryParams"), array(0 => "parentId={parent.id}"));
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 175
                    if (($this->getAttribute($this->getContext($context, "section"), "type") != "single")) {
                        // line 176
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"formsubmit\" data-redirect=\"entries/";
                        echo twig_escape_filter($this->env, $this->getContext($context, "sectionHandle"), "html", null, true);
                        echo "/new";
                        if ($this->getContext($context, "nextEntryParams")) {
                            echo "?";
                            echo twig_escape_filter($this->env, twig_join_filter($this->getContext($context, "nextEntryParams"), "&"), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Save and add another"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 178
                    echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                    // line 182
                    if (($this->getAttribute($this->getContext($context, "entry"), "id") && ($this->getContext($context, "CraftEdition") >= $this->getContext($context, "CraftClient")))) {
                        // line 183
                        echo "\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn formsubmit\" value=\"";
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                        echo "\" data-action=\"entryRevisions/saveDraft\" data-redirect=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cpEditUrl"), "html", null, true);
                        echo "/drafts/{draftId}\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t\t\t";
                } else {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t";
                    if (($this->getContext($context, "CraftEdition") >= $this->getContext($context, "CraftClient"))) {
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"entryRevisions/saveDraft\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
                        // line 188
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cpEditUrl"), "html", null, true);
                        echo "/drafts/{draftId}\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn submit first\" value=\"";
                        // line 189
                        echo twig_escape_filter($this->env, \Craft\Craft::t("Save as a draft"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t";
                    }
                    // line 191
                    echo "\t\t\t\t\t\t\t";
                }
                // line 192
                echo "\t\t\t\t\t\t";
            }
            // line 193
            echo "\t\t\t\t\t</div>
\t\t\t\t</div><!--/item-->
\t\t\t";
        }
        // line 196
        echo "\t\t</div><!--/grid-->
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
        return array (  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  97 => 31,  94 => 30,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 18,  67 => 17,  61 => 16,  57 => 15,  52 => 14,  49 => 13,  43 => 202,  41 => 201,  39 => 10,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  25 => 2,);
    }
}
