<?php

/* _includes/forms/checkbox */
class __TwigTemplate_ab4b840ed526a966e0c172e67d827bcc81a549c554e93ed9de32dd0ff2d8c80f extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => ((array_key_exists("class", $context)) ? ($this->getContext($context, "class")) : (null)), 1 => ((((array_key_exists("toggle", $context) && (!twig_test_empty($this->getContext($context, "toggle")))) || (array_key_exists("reverseToggle", $context) && (!twig_test_empty($this->getContext($context, "reverseToggle")))))) ? ("fieldtoggle") : (null)), 2 => "checkbox")), " ");
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ($this->getContext($context, "value")) : (1));
        // line 9
        echo "<label>
\t";
        // line 10
        if ((array_key_exists("name", $context) && ((twig_length_filter($this->env, $this->getContext($context, "name")) < 3) || (twig_slice($this->env, $this->getContext($context, "name"), (-2)) != "[]")))) {
            // line 11
            echo "\t\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" value=\"\">
\t";
        }
        // line 14
        echo "<input type=\"checkbox\" value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\"";
        // line 15
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\"";
        }
        // line 16
        echo "\t\tclass=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "\"";
        // line 17
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\"";
        }
        // line 18
        if ((array_key_exists("checked", $context) && $this->getContext($context, "checked"))) {
            echo " checked";
        }
        // line 19
        if (((array_key_exists("autofocus", $context) && $this->getContext($context, "autofocus")) && (!$this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 20
        if ((array_key_exists("disabled", $context) && $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        // line 21
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "toggle"), "html", null, true);
            echo "\"";
        }
        // line 22
        if (array_key_exists("reverseToggle", $context)) {
            echo " data-reverse-target=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "reverseToggle"), "html", null, true);
            echo "\"";
        }
        echo ">
\t";
        // line 23
        if (array_key_exists("label", $context)) {
            echo $this->getContext($context, "label");
        }
        // line 24
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/checkbox";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  72 => 22,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  48 => 17,  44 => 16,  26 => 10,  37 => 6,  28 => 11,  92 => 23,  90 => 22,  74 => 17,  68 => 15,  42 => 8,  21 => 7,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  123 => 130,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  87 => 87,  51 => 17,  47 => 10,  39 => 15,  23 => 9,  19 => 1,  80 => 23,  75 => 22,  64 => 10,  56 => 9,  49 => 6,  40 => 7,  34 => 14,  24 => 3,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 1,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  91 => 92,  86 => 24,  83 => 82,  78 => 19,  73 => 32,  71 => 21,  69 => 29,  67 => 20,  65 => 14,  55 => 47,  52 => 7,  50 => 18,  45 => 9,  41 => 10,  35 => 22,  145 => 58,  141 => 57,  127 => 135,  121 => 52,  119 => 125,  110 => 40,  106 => 39,  101 => 47,  95 => 97,  93 => 33,  89 => 32,  85 => 20,  79 => 23,  76 => 27,  63 => 19,  61 => 25,  59 => 11,  57 => 18,  46 => 14,  43 => 32,  38 => 15,  33 => 14,  31 => 17,  29 => 6,  27 => 6,  25 => 4,);
    }
}
