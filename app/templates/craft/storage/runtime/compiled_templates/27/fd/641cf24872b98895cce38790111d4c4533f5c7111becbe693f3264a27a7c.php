<?php

/* _includes/forms/time */
class __TwigTemplate_27fd641cf24872b98895cce38790111d4c4533f5c7111becbe693f3264a27a7c extends Craft\BaseTemplate
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
        if ((!array_key_exists("value", $context))) {
            // line 2
            $context["value"] = null;
        }
        // line 5
        $context["id"] = ($this->getContext($context, "id") . "-time");
        // line 7
        if ((array_key_exists("name", $context) && $this->getContext($context, "name"))) {
            // line 8
            $context["name"] = ($this->getContext($context, "name") . "[time]");
        }
        // line 11
        \Craft\craft()->templates->includeJsResource((("lib/jquery.timepicker/jquery.timepicker" . (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"));
        // line 13
        if ((!array_key_exists("value", $context))) {
            // line 14
            $context["value"] = null;
        }
        // line 17
        echo "<div class=\"timewrapper\">";
        // line 18
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (($this->getContext($context, "value")) ? ($this->getAttribute($this->getContext($context, "value"), "localeTime", array(), "method")) : ("")))));
        // line 19
        echo "</div>";
        // line 21
        $context["localeData"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getLocaleData", array(), "method");
        // line 23
        ob_start();
        // line 24
        echo "
\tvar \$timePicker = \$('#";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId($this->getContext($context, "id")), "js"), "html", null, true);
        echo "');
\t\$timePicker.timepicker({
\t\ttimeFormat: '";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "timepickerJsFormat"), "html", null, true);
        echo "',
\t\tcloseOnWindowScroll: false,
\t\torientation: '";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "localeData"), "getOrientation", array(), "method"), "html", null, true);
        echo "',
\t\tlang: {
\t\t\tam: '";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "localeData"), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tAM: '";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "localeData"), "getAMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tpm: '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "localeData"), "getPMName", array(), "method"), "html", null, true);
        echo "',
\t\t\tPM: '";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "localeData"), "getPMName", array(), "method"), "html", null, true);
        echo "'
\t\t}
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        \Craft\craft()->templates->includeJs($this->getContext($context, "js"));
    }

    public function getTemplateName()
    {
        return "_includes/forms/time";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 39,  78 => 34,  74 => 33,  70 => 32,  61 => 29,  56 => 27,  51 => 25,  46 => 23,  44 => 21,  40 => 18,  38 => 17,  71 => 27,  66 => 31,  62 => 22,  52 => 21,  48 => 24,  42 => 19,  39 => 16,  37 => 15,  35 => 14,  33 => 13,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }
}
