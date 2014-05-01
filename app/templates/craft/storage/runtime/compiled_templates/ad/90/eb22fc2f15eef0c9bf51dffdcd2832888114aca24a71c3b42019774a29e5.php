<?php

/* _elements/tableview/container */
class __TwigTemplate_ad90eb22fc2f15eef0c9bf51dffdcd2832888114aca24a71c3b42019774a29e5 extends Craft\BaseTemplate
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
        echo "<div class=\"tableview\">
\t<table class=\"data fullwidth\">
\t\t<thead>
\t\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attributes"));
        foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
            // line 5
            echo "\t\t\t\t";
            $context["ordered"] = (array_key_exists("order", $context) && ($this->getContext($context, "order") == $this->getContext($context, "attribute")));
            // line 6
            echo "\t\t\t\t<th scope=\"col\" data-attribute=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attribute"), "html", null, true);
            echo "\"";
            if ($this->getContext($context, "ordered")) {
                echo " class=\"ordered ";
                echo twig_escape_filter($this->env, $this->getContext($context, "sort"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            echo "</th>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 10
        $this->env->loadTemplate("_elements/tableview/elements")->display($context);
        // line 11
        echo "\t\t</tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "_elements/tableview/container";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  52 => 10,  48 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
