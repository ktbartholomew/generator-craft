<?php

/* _elements/sources */
class __TwigTemplate_82ff9f274a75208d36a3d678a3f2ce2f5b188ed2203678aba7a84f50d03f41d2 extends Craft\BaseTemplate
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
        echo "<ul>
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sources"));
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
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 3
            echo "\t\t";
            if ($this->getAttribute($this->getContext($context, "source", true), "heading", array(), "any", true, true)) {
                // line 4
                echo "\t\t\t<li class=\"heading\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "source"), "heading"), "html", null, true);
                echo "</span></li>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<li>
\t\t\t\t<a data-key=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
                echo "\"";
                // line 8
                if (($this->getAttribute($this->getContext($context, "source", true), "hasThumbs", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "source"), "hasThumbs"))) {
                    echo " data-has-thumbs=\"1\"";
                }
                // line 9
                if (($this->getAttribute($this->getContext($context, "source", true), "structureId", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "source"), "structureId"))) {
                    echo " data-has-structure=\"1\" data-structure-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "source"), "structureId"), "html", null, true);
                    echo "\"";
                }
                // line 10
                if ($this->getAttribute($this->getContext($context, "source", true), "data", array(), "any", true, true)) {
                    // line 11
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "source"), "data"));
                    foreach ($context['_seq'] as $context["dataKey"] => $context["dataVal"]) {
                        echo " data-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "dataKey"), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "dataVal"), "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['dataVal'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 13
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "source"), "label"), "html", null, true);
                echo "</a>
\t\t\t\t";
                // line 14
                if (($this->getAttribute($this->getContext($context, "source", true), "nested", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "source"), "nested"))))) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"toggle\"></div>
\t\t\t\t\t";
                    // line 16
                    $this->env->loadTemplate("_elements/sources")->display(array_merge($context, array("sources" => $this->getAttribute($this->getContext($context, "source"), "nested"))));
                    // line 17
                    echo "\t\t\t\t";
                }
                // line 18
                echo "\t\t\t</li>
\t\t";
            }
            // line 20
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "_elements/sources";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 21,  99 => 20,  95 => 18,  85 => 14,  51 => 7,  42 => 4,  22 => 2,  129 => 47,  127 => 45,  123 => 43,  117 => 39,  101 => 37,  96 => 36,  90 => 16,  81 => 30,  62 => 24,  45 => 18,  43 => 17,  36 => 12,  21 => 3,  19 => 1,  88 => 34,  84 => 31,  80 => 13,  75 => 26,  66 => 11,  64 => 10,  61 => 16,  58 => 9,  55 => 14,  50 => 40,  44 => 25,  41 => 24,  34 => 11,  32 => 10,  30 => 9,  28 => 4,  26 => 3,  107 => 34,  104 => 33,  100 => 31,  92 => 17,  87 => 15,  76 => 24,  72 => 30,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 8,  48 => 6,  46 => 26,  39 => 3,  37 => 11,  33 => 9,  31 => 7,  29 => 6,  27 => 8,  25 => 2,);
    }
}
