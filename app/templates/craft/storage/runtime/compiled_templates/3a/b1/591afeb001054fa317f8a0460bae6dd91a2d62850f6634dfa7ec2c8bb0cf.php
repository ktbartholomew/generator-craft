<?php

/* _components/fieldtypes/Number/settings */
class __TwigTemplate_3ab1591afeb001054fa317f8a0460bae6dd91a2d62850f6634dfa7ec2c8bb0cf extends Craft\BaseTemplate
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
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Min Value"), "id" => "min", "name" => "min", "value" => $this->getAttribute($this->getContext($context, "settings"), "min"), "size" => 5, "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "min"), "method")));
        // line 10
        echo "

";
        // line 12
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Value"), "id" => "max", "name" => "max", "value" => $this->getAttribute($this->getContext($context, "settings"), "max"), "size" => 5, "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "max"), "method")));
        // line 19
        echo "

";
        // line 21
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Decimal Points"), "id" => "decimals", "name" => "decimals", "value" => $this->getAttribute($this->getContext($context, "settings"), "decimals"), "size" => 1, "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "decimals"), "method")));
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Number/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  166 => 52,  150 => 47,  144 => 45,  112 => 34,  89 => 22,  68 => 19,  62 => 17,  43 => 10,  23 => 4,  61 => 32,  59 => 11,  39 => 7,  36 => 21,  156 => 22,  147 => 46,  142 => 44,  126 => 3,  121 => 105,  119 => 36,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 20,  66 => 62,  64 => 40,  56 => 54,  53 => 10,  46 => 43,  44 => 7,  29 => 5,  27 => 5,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 83,  87 => 21,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 12,  60 => 56,  58 => 16,  54 => 29,  51 => 28,  49 => 9,  47 => 8,  45 => 8,  42 => 6,  40 => 5,  38 => 28,  34 => 8,  32 => 19,  30 => 12,  28 => 7,  26 => 10,  24 => 3,);
    }
}
