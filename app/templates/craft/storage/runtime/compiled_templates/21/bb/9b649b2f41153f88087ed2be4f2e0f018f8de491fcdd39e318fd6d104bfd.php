<?php

/* _elements/tableview/elements */
class __TwigTemplate_21bb9b649b2f41153f88087ed2be4f2e0f018f8de491fcdd39e318fd6d104bfd extends Craft\BaseTemplate
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elements"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 2
            echo "\t<tr";
            if (twig_in_filter($this->getAttribute($this->getContext($context, "element"), "id"), $this->getContext($context, "disabledElementIds"))) {
                echo " class=\"disabled\"";
            }
            echo "\">
\t\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attributes"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["attribute"] => $context["label"]) {
                // line 4
                echo "\t\t\t";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    // line 5
                    echo "\t\t\t\t<td scope=\"row\" data-title=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                    echo "\">
\t\t\t\t\t";
                    // line 6
                    $this->env->loadTemplate("_elements/element")->display($context);
                    // line 7
                    echo "\t\t\t\t</td>
\t\t\t";
                } else {
                    // line 9
                    echo "\t\t\t\t<td data-title=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getContext($context, "elementType"), "getTableAttributeHtml", array(0 => $this->getContext($context, "element"), 1 => $this->getContext($context, "attribute")), "method");
                    echo "</td>
\t\t\t";
                }
                // line 11
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t</tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "_elements/tableview/elements";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 12,  82 => 11,  74 => 9,  70 => 7,  68 => 6,  63 => 5,  60 => 4,  43 => 3,  36 => 2,  54 => 11,  52 => 10,  48 => 8,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
