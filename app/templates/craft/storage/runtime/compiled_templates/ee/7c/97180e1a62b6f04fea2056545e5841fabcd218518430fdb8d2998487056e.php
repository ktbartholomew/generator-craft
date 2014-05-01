<?php

/* _includes/field */
class __TwigTemplate_ee7c97180e1a62b6f04fea2056545e5841fabcd218518430fdb8d2998487056e extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("element", $context))) {
            $context["element"] = null;
        }
        // line 4
        echo "
";
        // line 5
        $context["value"] = (($this->getContext($context, "element")) ? ($this->getAttribute($this->getContext($context, "element"), $this->getAttribute($this->getContext($context, "field"), "handle"))) : (null));
        // line 6
        $context["errors"] = (($this->getContext($context, "element")) ? ($this->getAttribute($this->getContext($context, "element"), "getErrors", array(0 => $this->getAttribute($this->getContext($context, "field"), "handle")), "method")) : (null));
        // line 7
        $context["fieldtype"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "populateFieldType", array(0 => $this->getContext($context, "field"), 1 => $this->getContext($context, "element")), "method");
        // line 8
        echo "
";
        // line 9
        if ($this->getContext($context, "fieldtype")) {
            // line 10
            echo "\t";
            $context["input"] = $this->getAttribute($this->getContext($context, "fieldtype"), "getInputHtml", array(0 => $this->getAttribute($this->getContext($context, "field"), "handle"), 1 => $this->getContext($context, "value")), "method");
        } else {
            // line 12
            echo "\t";
            $context["input"] = (("<p class=\"error\">" . \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($this->getContext($context, "field"), "type")))) . "</p>");
        }
        // line 14
        echo "
";
        // line 15
        echo $context["forms"]->getfield(array("label" => twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getContext($context, "field"), "name"))), "required" => $this->getContext($context, "required"), "translatable" => $this->getAttribute($this->getContext($context, "field"), "translatable"), "instructions" => \Craft\Craft::t($this->getAttribute($this->getContext($context, "field"), "instructions")), "id" => $this->getAttribute($this->getContext($context, "field"), "handle"), "errors" => $this->getContext($context, "errors")), $this->getContext($context, "input"));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "_includes/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  50 => 14,  40 => 9,  28 => 4,  64 => 6,  59 => 5,  45 => 11,  42 => 10,  37 => 8,  30 => 4,  23 => 2,  72 => 14,  89 => 16,  75 => 15,  54 => 11,  51 => 10,  46 => 12,  26 => 5,  21 => 2,  130 => 37,  126 => 35,  117 => 32,  113 => 31,  100 => 29,  96 => 27,  91 => 25,  87 => 23,  78 => 20,  65 => 18,  55 => 22,  36 => 7,  33 => 6,  31 => 5,  24 => 3,  19 => 1,  427 => 196,  422 => 193,  419 => 192,  416 => 191,  411 => 189,  407 => 188,  404 => 187,  401 => 186,  398 => 185,  390 => 183,  388 => 182,  382 => 178,  369 => 176,  367 => 175,  364 => 174,  361 => 173,  358 => 172,  355 => 171,  352 => 170,  349 => 169,  346 => 168,  344 => 167,  337 => 165,  329 => 160,  323 => 157,  320 => 156,  318 => 155,  315 => 154,  311 => 152,  306 => 150,  302 => 149,  297 => 148,  295 => 147,  292 => 146,  284 => 144,  282 => 143,  277 => 141,  273 => 140,  267 => 139,  263 => 137,  261 => 136,  257 => 134,  255 => 133,  251 => 131,  248 => 130,  241 => 126,  237 => 125,  234 => 124,  232 => 123,  228 => 121,  224 => 119,  221 => 115,  219 => 114,  215 => 112,  213 => 106,  209 => 104,  207 => 98,  204 => 97,  200 => 95,  197 => 89,  195 => 88,  192 => 87,  188 => 85,  185 => 79,  183 => 78,  179 => 76,  177 => 69,  174 => 68,  170 => 66,  167 => 60,  165 => 59,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  145 => 51,  141 => 49,  134 => 48,  131 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  104 => 30,  97 => 31,  94 => 26,  92 => 29,  85 => 24,  82 => 23,  80 => 22,  74 => 19,  67 => 11,  61 => 17,  57 => 12,  52 => 14,  49 => 9,  43 => 6,  41 => 201,  39 => 10,  35 => 7,  32 => 6,  29 => 6,  27 => 3,  25 => 4,);
    }
}
