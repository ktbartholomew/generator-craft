<?php

/* _layouts/elementindex */
class __TwigTemplate_39e7ee9a00fe2b176a69c51b9d874d2fbe6d70f3cfa02b69996a43cf1f6852a9 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'initJs' => array($this, 'block_initJs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["elementTypeClass"] = $this->getContext($context, "elementType");
        // line 4
        $context["elementType"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "elements"), "getElementType", array(0 => $this->getContext($context, "elementTypeClass")), "method");
        // line 5
        $context["context"] = "index";
        // line 7
        if ((!$this->getContext($context, "elementType"))) {
            // line 8
            throw new \Craft\HttpException(404);
        }
        // line 11
        $context["sources"] = $this->getAttribute($this->getContext($context, "elementType"), "getSources", array(0 => "index"), "method");
        // line 23
        ob_start();
        // line 24
        echo "\t<div class=\"elementindex\">
\t\t";
        // line 25
        $this->env->loadTemplate("_elements/indexcontainer")->display($context);
        // line 26
        echo "\t</div>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 40
        \Craft\craft()->templates->includeJs($this->renderBlock("initJs", $context, $blocks));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        if ((!twig_test_empty($this->getContext($context, "sources")))) {
            // line 16
            echo "\t\t<nav>
\t\t\t";
            // line 17
            $this->env->loadTemplate("_elements/sources")->display($context);
            // line 18
            echo "\t\t</nav>
\t";
        }
    }

    // line 30
    public function block_initJs($context, array $blocks = array())
    {
        // line 31
        echo "\tCraft.createElementIndex('";
        echo twig_escape_filter($this->env, $this->getContext($context, "elementTypeClass"), "html", null, true);
        echo "', \$('#main'), {
\t\tcontext:        '";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "context"), "html", null, true);
        echo "',
\t\tshowStatusMenu: ";
        // line 33
        echo ((array_key_exists("showStatusMenu", $context)) ? (twig_jsonencode_filter($this->getContext($context, "showStatusMenu"))) : ("'auto'"));
        echo ",
\t\tshowLocaleMenu: ";
        // line 34
        echo ((array_key_exists("showLocaleMenu", $context)) ? (twig_jsonencode_filter($this->getContext($context, "showLocaleMenu"))) : ("'auto'"));
        echo ",
\t\tstorageKey:     'elementindex.";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "elementTypeClass"), "html", null, true);
        echo "',
\t\tcriteria:       { localeEnabled: null }
\t});
";
    }

    public function getTemplateName()
    {
        return "_layouts/elementindex";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  84 => 33,  80 => 32,  75 => 31,  66 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  50 => 40,  44 => 25,  41 => 24,  34 => 8,  32 => 7,  30 => 5,  28 => 4,  26 => 3,  107 => 34,  104 => 33,  100 => 31,  92 => 35,  87 => 26,  76 => 24,  72 => 30,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  48 => 39,  46 => 26,  39 => 23,  37 => 11,  33 => 9,  31 => 7,  29 => 6,  27 => 3,  25 => 2,);
    }
}
