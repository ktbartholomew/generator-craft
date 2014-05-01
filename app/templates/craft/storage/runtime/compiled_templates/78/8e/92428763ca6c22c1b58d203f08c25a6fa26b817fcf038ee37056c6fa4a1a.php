<?php

/* entries/_revisions */
class __TwigTemplate_788e92428763ca6c22c1b58d203f08c25a6fa26b817fcf038ee37056c6fa4a1a extends Craft\BaseTemplate
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
        if (\Craft\craft()->getEdition() < $this->getContext($context, "CraftClient"))
        {
            throw new \Craft\HttpException(404);
        }
        // line 2
        echo "
";
        // line 3
        $context["drafts"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "entryRevisions"), "getEditableDraftsByEntryId", array(0 => $this->getAttribute($this->getContext($context, "entry"), "id"), 1 => $this->getAttribute($this->getContext($context, "entry"), "locale")), "method");
        // line 4
        $context["versions"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "entryRevisions"), "getVersionsByEntryId", array(0 => $this->getAttribute($this->getContext($context, "entry"), "id"), 1 => $this->getAttribute($this->getContext($context, "entry"), "locale")), "method");
        // line 5
        $context["baseUrl"] = (((("entries/" . $this->getAttribute($this->getAttribute($this->getContext($context, "entry"), "getSection", array(), "method"), "handle")) . "/") . $this->getAttribute($this->getContext($context, "entry"), "id")) . "/");
        // line 6
        echo "
<div class=\"btn menubtn\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "revisionLabel"), "html", null, true);
        echo "</div>

<div class=\"menu padded\">
\t<ul>
\t\t<li><a";
        // line 11
        if (($this->getAttribute($this->getContext($context, "entry"), "classHandle") == "Entry")) {
            echo " class=\"sel\"";
        }
        echo " href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cpEditUrl"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("Current"), "html", null, true);
        echo "</a></li>
\t</ul>

\t";
        // line 14
        if ($this->getContext($context, "drafts")) {
            // line 15
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "drafts"));
            foreach ($context['_seq'] as $context["_key"] => $context["draft"]) {
                // line 18
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute($this->getContext($context, "entry"), "classHandle") == "EntryDraft") && ($this->getAttribute($this->getContext($context, "draft"), "draftId") == $this->getContext($context, "draftId")))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((($this->getContext($context, "baseUrl") . "drafts/") . $this->getAttribute($this->getContext($context, "draft"), "draftId"))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, \Craft\Craft::t("Draft {id}", array("id" => $this->getAttribute($this->getContext($context, "draft"), "draftId"))), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "draft"), "creator"), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t</ul>
\t";
        }
        // line 25
        echo "
\t";
        // line 26
        if ($this->getContext($context, "versions")) {
            // line 27
            echo "\t\t<hr>
\t\t<ul>
\t\t\t";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "versions"));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 30
                echo "\t\t\t\t<li><a";
                if ((($this->getAttribute($this->getContext($context, "entry"), "classHandle") == "EntryVersion") && ($this->getAttribute($this->getContext($context, "version"), "versionId") == $this->getContext($context, "versionId")))) {
                    echo " class=\"sel\"";
                }
                echo " href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((($this->getContext($context, "baseUrl") . "versions/") . $this->getAttribute($this->getContext($context, "version"), "versionId"))), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, \Craft\Craft::t("Version {id}", array("id" => $this->getAttribute($this->getContext($context, "version"), "versionId"))), "html", null, true);
                echo "
\t\t\t\t\t<span class=\"light\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "version"), "creator"), "html", null, true);
                echo "</span>
\t\t\t\t</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t</ul>
\t";
        }
        // line 37
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "entries/_revisions";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  126 => 35,  117 => 32,  113 => 31,  100 => 29,  96 => 27,  91 => 25,  87 => 23,  78 => 20,  65 => 18,  55 => 14,  36 => 7,  33 => 6,  31 => 5,  24 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 30,  97 => 31,  94 => 26,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 19,  67 => 17,  61 => 17,  57 => 15,  52 => 14,  49 => 13,  43 => 11,  41 => 201,  39 => 10,  35 => 7,  32 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
