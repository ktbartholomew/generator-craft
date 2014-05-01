<?php

/* _includes/forms/date */
class __TwigTemplate_fcad1934b03d41a127a7b52d7235b9d2504b32370d3d45ea36cf17c0813f8701 extends Craft\BaseTemplate
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
        $context["id"] = ($this->getContext($context, "id") . "-date");
        // line 7
        if ((array_key_exists("name", $context) && $this->getContext($context, "name"))) {
            // line 8
            $context["name"] = ($this->getContext($context, "name") . "[date]");
        }
        // line 11
        echo "<div class=\"datewrapper\">";
        // line 12
        $this->env->loadTemplate("_includes/forms/text")->display(array_merge($context, array("autocomplete" => false, "size" => 10, "value" => (($this->getContext($context, "value")) ? ($this->getAttribute($this->getContext($context, "value"), "localeDate", array(), "method")) : ("")))));
        // line 13
        echo "</div>";
        // line 15
        ob_start();
        // line 16
        echo "
\tvar \$datePicker = \$('#";
        // line 17
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId($this->getContext($context, "id")), "js"), "html", null, true);
        echo "');
\t\$datePicker.datepicker({
\t\tconstrainInput: false,
\t\tdateFormat: '";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "datepickerJsFormat"), "html", null, true);
        echo "',
\t\tdefaultDate: new Date(";
        // line 21
        if ($this->getContext($context, "value")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "year"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "value"), "month") - 1), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "day"), "html", null, true);
        }
        echo "),
\t\tprevText:   '";
        // line 22
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t("Prev"), "js"), "html", null, true);
        echo "',
\t\tnextText:   '";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\Craft::t("Next"), "js"), "html", null, true);
        echo "',
\t});";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        \Craft\craft()->templates->includeJs($this->getContext($context, "js"));
    }

    public function getTemplateName()
    {
        return "_includes/forms/date";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  66 => 23,  62 => 22,  52 => 21,  48 => 20,  42 => 17,  39 => 16,  37 => 15,  35 => 13,  33 => 12,  31 => 11,  28 => 8,  26 => 7,  24 => 5,  21 => 2,  19 => 1,);
    }
}
