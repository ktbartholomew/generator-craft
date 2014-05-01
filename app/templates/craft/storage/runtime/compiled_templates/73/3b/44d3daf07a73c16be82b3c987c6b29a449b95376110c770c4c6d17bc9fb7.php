<?php

/* partials/_pages */
class __TwigTemplate_733b44d3daf07a73c16be82b3c987c6b29a449b95376110c770c4c6d17bc9fb7 extends Craft\BaseTemplate
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "entry"), "sections"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 2
            echo "  ";
            $template = $this->env->resolveTemplate(("sections/_" . $this->getAttribute($this->getContext($context, "section"), "type")));
            $template->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/_pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  138 => 38,  133 => 35,  128 => 34,  123 => 33,  118 => 32,  113 => 31,  108 => 28,  102 => 18,  96 => 40,  91 => 39,  89 => 38,  85 => 37,  82 => 36,  79 => 35,  76 => 34,  73 => 33,  70 => 32,  68 => 31,  64 => 29,  62 => 28,  54 => 23,  50 => 22,  41 => 20,  36 => 2,  27 => 11,  31 => 4,  28 => 3,);
    }
}
