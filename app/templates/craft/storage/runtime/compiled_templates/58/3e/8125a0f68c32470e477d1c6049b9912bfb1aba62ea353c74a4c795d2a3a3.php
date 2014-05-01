<?php

/* _includes/forms/select */
class __TwigTemplate_583e8125a0f68c32470e477d1c6049b9912bfb1aba62ea353c74a4c795d2a3a3 extends Craft\BaseTemplate
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
        $context["class"] = twig_join_filter(array_filter(array(0 => "select", 1 => ((array_key_exists("class", $context)) ? ($this->getContext($context, "class")) : (null)))), " ");
        // line 6
        $context["options"] = ((array_key_exists("options", $context)) ? ($this->getContext($context, "options")) : (array()));
        // line 7
        $context["value"] = ((array_key_exists("value", $context)) ? ($this->getContext($context, "value")) : (null));
        // line 8
        $context["hasOptgroups"] = false;
        // line 10
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo "\">
\t<select";
        // line 12
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\"";
        }
        // line 13
        if ((array_key_exists("toggle", $context) && $this->getContext($context, "toggle"))) {
            echo " class=\"fieldtoggle\"";
        }
        // line 14
        if (array_key_exists("name", $context)) {
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\"";
        }
        // line 15
        if (((array_key_exists("autofocus", $context) && $this->getContext($context, "autofocus")) && (!$this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "isMobileBrowser", array(0 => true), "method")))) {
            echo " autofocus";
        }
        // line 16
        if ((array_key_exists("disabled", $context) && $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        // line 17
        if (array_key_exists("targetPrefix", $context)) {
            echo " data-target-prefix=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "targetPrefix"), "html", null, true);
            echo "\"";
        }
        echo ">
\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 19
            echo "\t\t\t";
            if ($this->getAttribute($this->getContext($context, "option", true), "optgroup", array(), "any", true, true)) {
                // line 20
                echo "\t\t\t\t";
                if ($this->getContext($context, "hasOptgroups")) {
                    // line 21
                    echo "\t\t\t\t\t</optgroup>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t";
                    $context["hasOptgroups"] = true;
                    // line 24
                    echo "\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t<optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "option"), "optgroup"), "html", null, true);
                echo "\">
\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t";
                $context["optionLabel"] = (($this->getAttribute($this->getContext($context, "option", true), "label", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "option"), "label")) : ($this->getContext($context, "option")));
                // line 28
                echo "\t\t\t\t";
                $context["optionValue"] = (($this->getAttribute($this->getContext($context, "option", true), "value", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "option"), "value")) : ($this->getContext($context, "key")));
                // line 29
                echo "\t\t\t\t";
                $context["optionDisabled"] = (($this->getAttribute($this->getContext($context, "option", true), "disabled", array(), "any", true, true)) ? ($this->getAttribute($this->getContext($context, "option"), "disabled")) : (false));
                // line 30
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "optionValue"), "html", null, true);
                echo "\"";
                if (($this->getContext($context, "optionValue") == $this->getContext($context, "value"))) {
                    echo " selected";
                }
                if ($this->getContext($context, "optionDisabled")) {
                    echo " disabled";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getContext($context, "optionLabel"), "html", null, true);
                echo "</option>
\t\t\t";
            }
            // line 32
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        if ($this->getContext($context, "hasOptgroups")) {
            // line 34
            echo "\t\t\t</optgroup>
\t\t";
        }
        // line 36
        echo "\t</select>
</div>
";
    }

    public function getTemplateName()
    {
        return "_includes/forms/select";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  123 => 34,  120 => 33,  114 => 32,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  84 => 25,  81 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  56 => 17,  52 => 16,  48 => 15,  42 => 14,  38 => 13,  32 => 12,  27 => 10,  53 => 16,  49 => 15,  45 => 14,  39 => 13,  33 => 12,  25 => 8,  23 => 7,  21 => 6,  19 => 1,);
    }
}
