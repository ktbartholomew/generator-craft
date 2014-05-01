<?php

/* _includes/forms/elementSelect */
class __TwigTemplate_97b4b3cf3da5297abec6a3228696d0ca3c3a06846c6c9cbb62d737394c532025 extends Craft\BaseTemplate
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
        if ((array_key_exists("name", $context) && $this->getContext($context, "name"))) {
            // line 2
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" value=\"\">
";
        }
        // line 5
        $context["elements"] = ((array_key_exists("elements", $context)) ? ($this->getContext($context, "elements")) : (array()));
        // line 6
        $context["jsClass"] = (((array_key_exists("jsClass", $context) && $this->getContext($context, "jsClass"))) ? ($this->getContext($context, "jsClass")) : ("Craft.BaseElementSelectInput"));
        // line 7
        $context["sources"] = (((array_key_exists("sources", $context) && $this->getContext($context, "sources"))) ? ($this->getContext($context, "sources")) : (null));
        // line 8
        $context["criteria"] = (((array_key_exists("criteria", $context) && $this->getContext($context, "criteria"))) ? ($this->getContext($context, "criteria")) : (null));
        // line 9
        $context["sourceElementId"] = (((array_key_exists("sourceElementId", $context) && $this->getContext($context, "sourceElementId"))) ? ($this->getContext($context, "sourceElementId")) : (null));
        // line 10
        $context["storageKey"] = (((array_key_exists("storageKey", $context) && $this->getContext($context, "storageKey"))) ? ($this->getContext($context, "storageKey")) : (null));
        // line 12
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\" class=\"elementselect\">
\t<div class=\"elements\">
\t\t";
        // line 14
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
            // line 15
            echo "\t\t\t";
            $this->env->loadTemplate("_elements/element")->display(array_merge($context, array("context" => "field")));
            // line 16
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</div>

\t<div class=\"btn add icon dashed\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "addButtonLabel"), "html", null, true);
        echo "</div>
</div>

";
        // line 22
        ob_start();
        // line 23
        echo "\tnew ";
        echo twig_escape_filter($this->env, $this->getContext($context, "jsClass"), "html", null, true);
        echo "(
\t\t\"";
        // line 24
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputId($this->getContext($context, "id")), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 25
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\craft()->templates->namespaceInputName($this->getContext($context, "name")), "js"), "html", null, true);
        echo "\",
\t\t\"";
        // line 26
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elementType"), "getClassHandle", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t";
        // line 27
        echo twig_jsonencode_filter($this->getContext($context, "sources"));
        echo ",
\t\t";
        // line 28
        echo twig_jsonencode_filter($this->getContext($context, "criteria"));
        echo ",
\t\t";
        // line 29
        echo twig_escape_filter($this->env, (($this->getContext($context, "sourceElementId")) ? ($this->getContext($context, "sourceElementId")) : ("null")), "html", null, true);
        echo ",
\t\t";
        // line 30
        echo twig_escape_filter($this->env, (($this->getContext($context, "limit")) ? ($this->getContext($context, "limit")) : ("null")), "html", null, true);
        echo ",
\t\t\"";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "storageKey"), "js"), "html", null, true);
        echo "\"
\t);
";
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        \Craft\craft()->templates->includeJs($this->getContext($context, "js"));
    }

    public function getTemplateName()
    {
        return "_includes/forms/elementSelect";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  130 => 34,  124 => 31,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  91 => 23,  89 => 22,  83 => 19,  79 => 17,  65 => 16,  62 => 15,  37 => 10,  35 => 9,  31 => 7,  29 => 6,  127 => 36,  123 => 34,  120 => 30,  114 => 32,  99 => 30,  96 => 24,  93 => 28,  90 => 27,  84 => 25,  81 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  64 => 18,  56 => 17,  52 => 16,  48 => 15,  42 => 14,  38 => 13,  32 => 12,  27 => 5,  53 => 16,  49 => 15,  45 => 14,  39 => 12,  33 => 8,  25 => 8,  23 => 7,  21 => 2,  19 => 1,);
    }
}
