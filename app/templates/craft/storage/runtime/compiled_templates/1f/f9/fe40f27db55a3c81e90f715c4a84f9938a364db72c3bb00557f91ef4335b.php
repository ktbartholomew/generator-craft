<?php

/* _includes/forms/field */
class __TwigTemplate_1ff9fe40f27db55a3c81e90f715c4a84f9938a364db72c3bb00557f91ef4335b extends Craft\BaseTemplate
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
        $context["id"] = ((array_key_exists("id", $context)) ? ($this->getContext($context, "id")) : (null));
        // line 2
        $context["label"] = ((array_key_exists("label", $context)) ? ($this->getContext($context, "label")) : (null));
        // line 3
        $context["instructions"] = ((array_key_exists("instructions", $context)) ? ($this->getContext($context, "instructions")) : (null));
        // line 4
        $context["errors"] = ((array_key_exists("errors", $context)) ? ($this->getContext($context, "errors")) : (null));
        // line 6
        echo "<div class=\"field";
        if ((array_key_exists("first", $context) && $this->getContext($context, "first"))) {
            echo " first";
        }
        echo "\"";
        if ($this->getContext($context, "id")) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "-field\"";
        }
        echo ">
\t";
        // line 7
        if (($this->getContext($context, "label") || $this->getContext($context, "instructions"))) {
            // line 8
            echo "\t\t<div class=\"heading\">
\t\t\t";
            // line 9
            if ($this->getContext($context, "label")) {
                // line 10
                echo "\t\t\t\t<label";
                if ((array_key_exists("required", $context) && $this->getContext($context, "required"))) {
                    echo " class=\"required\"";
                }
                if ($this->getContext($context, "id")) {
                    echo " for=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "\"";
                }
                echo ">
\t\t\t\t\t";
                // line 11
                echo $this->getContext($context, "label");
                echo "
\t\t\t\t</label>
\t\t\t";
            }
            // line 14
            echo "\t\t\t";
            if ($this->getContext($context, "instructions")) {
                // line 15
                echo "\t\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter($this->getContext($context, "instructions")), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 17
            echo "\t\t</div>
\t";
        }
        // line 19
        echo "\t<div class=\"input";
        if ($this->getContext($context, "errors")) {
            echo " errors";
        }
        echo "\">
\t\t";
        // line 20
        echo $this->getContext($context, "input");
        echo "
\t</div>
\t";
        // line 22
        $this->env->loadTemplate("_includes/forms/errorList")->display(array_merge($context, array("errors" => $this->getContext($context, "errors"))));
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/field";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  90 => 22,  74 => 17,  68 => 15,  42 => 8,  21 => 2,  1014 => 184,  1009 => 183,  998 => 182,  984 => 178,  973 => 177,  959 => 173,  948 => 172,  934 => 168,  923 => 167,  909 => 163,  898 => 162,  886 => 158,  880 => 156,  878 => 155,  874 => 154,  861 => 153,  850 => 152,  836 => 148,  825 => 147,  811 => 143,  800 => 142,  786 => 138,  775 => 137,  761 => 133,  750 => 132,  736 => 128,  725 => 127,  711 => 123,  700 => 122,  686 => 118,  675 => 117,  661 => 113,  650 => 112,  636 => 108,  625 => 107,  613 => 103,  601 => 102,  589 => 95,  578 => 94,  566 => 90,  555 => 89,  543 => 85,  532 => 84,  520 => 80,  509 => 79,  497 => 75,  486 => 74,  474 => 70,  463 => 69,  451 => 65,  440 => 64,  428 => 60,  417 => 59,  405 => 55,  394 => 54,  382 => 50,  371 => 49,  359 => 45,  348 => 44,  336 => 40,  325 => 39,  313 => 35,  302 => 34,  290 => 30,  279 => 29,  267 => 25,  256 => 24,  244 => 20,  233 => 19,  221 => 15,  210 => 14,  199 => 10,  188 => 9,  176 => 2,  159 => 180,  155 => 175,  151 => 170,  147 => 165,  143 => 160,  139 => 150,  135 => 145,  131 => 140,  123 => 130,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  87 => 87,  51 => 17,  47 => 10,  39 => 15,  23 => 3,  19 => 1,  80 => 20,  75 => 22,  64 => 10,  56 => 9,  49 => 6,  40 => 7,  34 => 18,  24 => 3,  22 => 1,  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 1,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  91 => 92,  86 => 24,  83 => 82,  78 => 19,  73 => 32,  71 => 21,  69 => 29,  67 => 20,  65 => 14,  55 => 47,  52 => 7,  50 => 18,  45 => 9,  41 => 10,  35 => 22,  145 => 58,  141 => 57,  127 => 135,  121 => 52,  119 => 125,  110 => 40,  106 => 39,  101 => 47,  95 => 97,  93 => 33,  89 => 32,  85 => 20,  79 => 23,  76 => 27,  63 => 19,  61 => 25,  59 => 11,  57 => 18,  46 => 14,  43 => 32,  38 => 19,  33 => 14,  31 => 17,  29 => 6,  27 => 6,  25 => 4,);
    }
}
