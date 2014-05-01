<?php

/* _components/fieldtypes/RichText/settings */
class __TwigTemplate_374f71d7cea1fb6cf9ee47a69c49054354a9e6212399bfff29cbb7fdccb6f2ef extends Craft\BaseTemplate
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
        // line 4
        if ((twig_length_filter($this->env, $this->getContext($context, "configOptions")) > 1)) {
            // line 5
            echo "\t";
            ob_start();
            // line 6
            echo "\t\t";
            echo $context["forms"]->getselect(array("id" => "configFle", "name" => "configFile", "options" => $this->getContext($context, "configOptions"), "value" => $this->getAttribute($this->getContext($context, "settings"), "configFile")));
            // line 11
            echo "
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 14
            echo "\t";
            ob_start();
            // line 15
            echo "\t\t<p>";
            echo \Craft\Craft::t("You don’t have any <a href=\"http://buildwithcraft.com/docs/rich-text-fields#redactor-configs\" target=\"_blank\">Redactor configs</a> yet.");
            echo "</p>
\t";
            $context["configInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 18
        echo "
";
        // line 19
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Config"), "instructions" => (((\Craft\Craft::t("You can save custom Redactor configs as .json files in craft/config/redactor/.") . " <a href=\"http://imperavi.com/redactor/docs/settings/\">") . \Craft\Craft::t("View available settings")) . "</a>."), "id" => "configFile"), $this->getContext($context, "configInput"));
        // line 23
        echo "


";
        // line 26
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Clean up HTML?"), "instructions" => \Craft\Craft::t("Removes <code>&lt;span&gt;</code>’s, empty tags, and most <code>style</code> attributes on save."), "id" => "cleanupHtml", "name" => "cleanupHtml", "checked" => $this->getAttribute($this->getContext($context, "settings"), "cleanupHtml")));
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/RichText/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  41 => 15,  52 => 40,  50 => 33,  37 => 24,  31 => 14,  25 => 4,  33 => 11,  166 => 52,  150 => 47,  144 => 45,  112 => 34,  89 => 22,  68 => 19,  62 => 17,  43 => 10,  23 => 4,  61 => 32,  59 => 11,  39 => 29,  36 => 21,  156 => 22,  147 => 46,  142 => 44,  126 => 3,  121 => 105,  119 => 36,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 20,  66 => 62,  64 => 40,  56 => 54,  53 => 23,  46 => 43,  44 => 32,  29 => 5,  27 => 5,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 83,  87 => 21,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 18,  63 => 12,  60 => 32,  58 => 26,  54 => 29,  51 => 19,  49 => 9,  47 => 8,  45 => 8,  42 => 6,  40 => 5,  38 => 14,  34 => 8,  32 => 19,  30 => 6,  28 => 7,  26 => 10,  24 => 3,);
    }
}
