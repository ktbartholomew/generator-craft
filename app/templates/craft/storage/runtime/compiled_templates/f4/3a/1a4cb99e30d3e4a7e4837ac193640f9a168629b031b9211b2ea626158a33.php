<?php

/* _includes/tabs */
class __TwigTemplate_f43a1a4cb99e30d3e4a7e4837ac193640f9a168629b031b9211b2ea626158a33 extends Craft\BaseTemplate
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
        $context["title"] = ((array_key_exists("title", $context)) ? (array_key_exists("title", $context)) : (null));
        // line 2
        echo "
<nav id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tabs"));
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
        foreach ($context['_seq'] as $context["tabId"] => $context["tab"]) {
            // line 6
            echo "\t\t\t";
            if ($this->getContext($context, "tab")) {
                // line 7
                echo "\t\t\t\t";
                $context["tabIsSelected"] = (((!array_key_exists("selectedTab", $context)) && $this->getAttribute($this->getContext($context, "loop"), "first")) || (array_key_exists("selectedTab", $context) && ($this->getContext($context, "selectedTab") == $this->getContext($context, "tabId"))));
                // line 9
                if (($this->getContext($context, "tabIsSelected") && ($this->getContext($context, "title") != $this->getAttribute($this->getContext($context, "tab"), "label")))) {
                    // line 10
                    echo "\t\t\t\t\t";
                    $context["title"] = (($this->getContext($context, "title") . " - ") . $this->getAttribute($this->getContext($context, "tab"), "label"));
                    // line 11
                    echo "\t\t\t\t";
                }
                // line 13
                echo "<li><a id=\"tab-";
                echo twig_escape_filter($this->env, $this->getContext($context, "tabId"), "html", null, true);
                echo "\" class=\"tab";
                if ($this->getContext($context, "tabIsSelected")) {
                    echo " sel";
                }
                if ($this->getAttribute($this->getContext($context, "tab", true), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tab"), "class"), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tab"), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tab"), "label"), "html", null, true);
                echo "</a></li>
\t\t\t";
            }
            // line 15
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['tabId'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "_includes/tabs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 16,  75 => 15,  54 => 11,  51 => 10,  46 => 7,  26 => 5,  21 => 2,  130 => 37,  126 => 35,  117 => 32,  113 => 31,  100 => 29,  96 => 27,  91 => 25,  87 => 23,  78 => 20,  65 => 18,  55 => 14,  36 => 7,  33 => 6,  31 => 5,  24 => 2,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 30,  97 => 31,  94 => 26,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 19,  67 => 17,  61 => 17,  57 => 13,  52 => 14,  49 => 9,  43 => 6,  41 => 201,  39 => 10,  35 => 7,  32 => 6,  29 => 4,  27 => 3,  25 => 2,);
    }
}
