<?php

/* _includes/forms/radio */
class __TwigTemplate_6c0c69f5a0d69528f221b0e545effdf03f23c1037edf8e2122ca03b8dfb9b14a extends Craft\BaseTemplate
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
        $context["value"] = ((array_key_exists("value", $context)) ? ($this->getContext($context, "value")) : ("1"));
        // line 3
        echo "<label>
\t<input type=\"radio\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\"";
        // line 5
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\"";
        }
        // line 6
        if (array_key_exists("class", $context)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "\"";
        }
        // line 7
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\"";
        }
        // line 8
        if ((array_key_exists("checked", $context) && $this->getContext($context, "checked"))) {
            echo " checked";
        }
        // line 9
        if (((array_key_exists("autofocus", $context) && $this->getContext($context, "autofocus")) && (!$this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 10
        if ((array_key_exists("disabled", $context) && $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        echo ">
\t";
        // line 11
        if (array_key_exists("label", $context)) {
            echo $this->getContext($context, "label");
        }
        // line 12
        echo "</label>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/radio";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  166 => 52,  150 => 47,  144 => 45,  112 => 34,  89 => 22,  68 => 19,  62 => 17,  43 => 10,  23 => 4,  61 => 32,  59 => 11,  39 => 7,  36 => 14,  156 => 22,  147 => 46,  142 => 44,  126 => 3,  121 => 105,  119 => 36,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 20,  66 => 62,  64 => 40,  56 => 54,  53 => 10,  46 => 43,  44 => 7,  29 => 5,  27 => 5,  21 => 3,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 83,  87 => 21,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 12,  60 => 56,  58 => 16,  54 => 29,  51 => 28,  49 => 9,  47 => 8,  45 => 8,  42 => 6,  40 => 5,  38 => 41,  34 => 8,  32 => 12,  30 => 7,  28 => 7,  26 => 4,  24 => 4,);
    }
}
