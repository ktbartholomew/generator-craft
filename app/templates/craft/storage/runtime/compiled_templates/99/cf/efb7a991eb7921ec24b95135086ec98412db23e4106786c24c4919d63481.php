<?php

/* _includes/forms/lightswitch */
class __TwigTemplate_99cfefb7a991eb7921ec24b95135086ec98412db23e4106786c24c4919d63481 extends Craft\BaseTemplate
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
        $context["on"] = ((array_key_exists("on", $context)) ? ($this->getContext($context, "on")) : (false));
        // line 2
        echo "
<div class=\"lightswitch";
        // line 3
        if ($this->getContext($context, "on")) {
            echo " on";
        }
        echo "\"";
        if (array_key_exists("toggle", $context)) {
            echo " data-target=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "toggle"), "html", null, true);
            echo "\"";
        }
        echo " tabindex=\"0\">
\t<div class=\"lightswitch-container\">
\t\t<div class=\"label on\"></div>
\t\t<div class=\"handle\"></div>
\t\t<div class=\"label off\"></div>
\t</div>
\t";
        // line 9
        if (array_key_exists("name", $context)) {
            // line 10
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" value=\"";
            echo (($this->getContext($context, "on")) ? ("1") : (""));
            echo "\">";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/lightswitch";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  43 => 10,  41 => 9,  84 => 39,  78 => 34,  74 => 33,  70 => 32,  61 => 29,  56 => 27,  51 => 25,  46 => 23,  44 => 21,  40 => 18,  38 => 17,  71 => 27,  66 => 31,  62 => 22,  52 => 21,  48 => 24,  42 => 19,  39 => 16,  37 => 15,  35 => 14,  33 => 13,  31 => 11,  28 => 8,  26 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
