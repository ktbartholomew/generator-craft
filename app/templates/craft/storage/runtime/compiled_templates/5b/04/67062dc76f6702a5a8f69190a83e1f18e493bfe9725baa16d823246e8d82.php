<?php

/* sections/_generic */
class __TwigTemplate_5b0467062dc76f6702a5a8f69190a83e1f18e493bfe9725baa16d823246e8d82 extends Craft\BaseTemplate
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
        echo "<section class=\"generic";
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "modifiers"))) {
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "section"), "modifiers"));
            foreach ($context['_seq'] as $context["_key"] => $context["modifier"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "modifier"), "className"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modifier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        echo "\">
\t";
        // line 2
        if ($this->getAttribute($this->getContext($context, "section"), "header")) {
            // line 3
            echo "\t<header>
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "header"), "html", null, true);
            echo "\t
\t</header>
\t";
        }
        // line 7
        echo "\t";
        if ($this->getAttribute($this->getContext($context, "section"), "body")) {
            // line 8
            echo "\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "body"), "html", null, true);
            echo "
\t";
        }
        // line 10
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "sections/_generic";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 8,  45 => 7,  39 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }
}
