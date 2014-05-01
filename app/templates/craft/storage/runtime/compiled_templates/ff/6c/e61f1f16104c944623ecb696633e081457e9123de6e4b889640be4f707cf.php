<?php

/* _includes/forms/textarea */
class __TwigTemplate_ff6ce61f1f16104c944623ecb696633e081457e9123de6e4b889640be4f707cf extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "text", 1 => (((array_key_exists("class", $context) && $this->getContext($context, "class"))) ? ($this->getContext($context, "class")) : (null)), 2 => (((array_key_exists("placeholder", $context) && $this->getContext($context, "placeholder"))) ? ("nicetext") : (null)), 3 => (((array_key_exists("size", $context) && $this->getContext($context, "size"))) ? (null) : ("fullwidth")))), " ");
        // line 8
        $context["rows"] = ((array_key_exists("rows", $context)) ? ($this->getContext($context, "rows")) : (2));
        // line 9
        $context["cols"] = ((array_key_exists("cols", $context)) ? ($this->getContext($context, "cols")) : (50));
        // line 11
        echo "<textarea class=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "rows"), "html", null, true);
        echo "\" cols=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "cols"), "html", null, true);
        echo "\"";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\"";
        }
        // line 13
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\"";
        }
        // line 14
        if (((array_key_exists("autofocus", $context) && $this->getContext($context, "autofocus")) && (!$this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 15
        if ((array_key_exists("disabled", $context) && $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        // line 16
        if (array_key_exists("placeholder", $context)) {
            echo " placeholder=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "placeholder"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? ($this->getContext($context, "value")) : (null)), "html", null, true);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/textarea";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  49 => 15,  45 => 14,  39 => 13,  33 => 12,  25 => 11,  23 => 9,  21 => 8,  19 => 1,);
    }
}
