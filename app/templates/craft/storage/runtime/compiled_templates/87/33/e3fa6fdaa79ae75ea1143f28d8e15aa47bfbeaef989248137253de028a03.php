<?php

/* _components/fieldtypes/Matrix/input */
class __TwigTemplate_8733e3fa6fdaa79ae75ea1143f28d8e15aa47bfbeaef989248137253de028a03 extends Craft\BaseTemplate
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
        echo "<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\" value=\"\">

<div class=\"matrix\" id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">
\t<div class=\"blocks\">
\t\t";
        // line 5
        $context["totalNewBlocks"] = 0;
        // line 6
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blocks"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 7
            echo "\t\t\t";
            $context["blockId"] = $this->getAttribute($this->getContext($context, "block"), "id");
            // line 8
            echo "\t\t\t";
            if ((!$this->getContext($context, "blockId"))) {
                // line 9
                echo "\t\t\t\t";
                $context["totalNewBlocks"] = ($this->getContext($context, "totalNewBlocks") + 1);
                // line 10
                echo "\t\t\t\t";
                $context["blockId"] = ("new" . $this->getContext($context, "totalNewBlocks"));
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "
\t\t\t<div class=\"matrixblock";
            // line 13
            if ((!$this->getAttribute($this->getContext($context, "block"), "enabled"))) {
                echo " disabled";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "blockId"), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getContext($context, "block"), "collapsed")) {
                echo " data-collapsed=\"1\"";
            }
            echo ">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getContext($context, "blockId"), "html", null, true);
            echo "][type]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "getType", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, $this->getContext($context, "blockId"), "html", null, true);
            echo "][enabled]\" value=\"";
            if ($this->getAttribute($this->getContext($context, "block"), "enabled")) {
                echo "1";
            }
            echo "\">
\t\t\t\t<div class=\"actions\">
\t\t\t\t\t<div class=\"status off\" title=\"";
            // line 17
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disabled"), "html", null, true);
            echo "\"></div>
\t\t\t\t\t<a class=\"settings icon menubtn\" title=\"";
            // line 18
            echo twig_escape_filter($this->env, \Craft\Craft::t("Actions"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t<div class=\"menu padded\" data-align=\"right\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"collapse\" data-action=\"collapse\">";
            // line 21
            echo twig_escape_filter($this->env, \Craft\Craft::t("Collapse"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"hidden\"><a data-icon=\"expand\" data-action=\"expand\">";
            // line 22
            echo twig_escape_filter($this->env, \Craft\Craft::t("Expand"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 23
            if ((!$this->getAttribute($this->getContext($context, "block"), "enabled"))) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"disabled\" data-action=\"disable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Disable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t<li";
            // line 24
            if ($this->getAttribute($this->getContext($context, "block"), "enabled")) {
                echo " class=\"hidden\"";
            }
            echo "><a data-icon=\"enabled\" data-action=\"enable\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Enable"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blockTypes"));
            foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<li><a data-icon=\"+\" data-action=\"add\" data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "handle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Add {type} above", array("type" => \Craft\Craft::t($this->getAttribute($this->getContext($context, "blockType"), "name")))), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a data-icon=\"remove\" data-action=\"delete\">";
            // line 34
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 37
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"fields\">
\t\t\t\t\t";
            // line 40
            $this->env->loadTemplate("_includes/fields")->display(array_merge($context, array("namespace" => ((($this->getContext($context, "name") . "[") . $this->getContext($context, "blockId")) . "][fields]"), "element" => $this->getContext($context, "block"), "fields" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "block"), "getType", array(), "method"), "getFieldLayout", array(), "method"), "getFields", array(), "method"))));
            // line 45
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t</div>
\t<div class=\"buttons\">
\t\t<div class=\"btngroup\">
\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blockTypes"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 52
            echo "\t\t\t\t<div class=\"btn";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                echo " add icon";
            }
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getContext($context, "blockType"), "name")), "html", null, true);
            echo "</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t</div>

\t\t<div class=\"btn add icon menubtn first hidden\">";
        // line 56
        echo twig_escape_filter($this->env, \Craft\Craft::t("Add a block"), "html", null, true);
        echo "</div>
\t\t<div class=\"menu\">
\t\t\t<ul>
\t\t\t\t";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blockTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 60
            echo "\t\t\t\t\t<li><a data-type=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "handle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getContext($context, "blockType"), "name")), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/input";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 62,  245 => 60,  241 => 59,  235 => 56,  231 => 54,  208 => 52,  191 => 51,  186 => 48,  170 => 45,  168 => 40,  162 => 37,  156 => 34,  151 => 31,  140 => 29,  136 => 28,  125 => 24,  117 => 23,  113 => 22,  109 => 21,  103 => 18,  88 => 15,  80 => 14,  59 => 10,  50 => 7,  30 => 5,  133 => 35,  130 => 34,  124 => 31,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  91 => 23,  89 => 22,  83 => 19,  79 => 17,  65 => 12,  62 => 11,  37 => 10,  35 => 9,  31 => 7,  29 => 6,  127 => 36,  123 => 34,  120 => 30,  114 => 32,  99 => 17,  96 => 24,  93 => 28,  90 => 27,  84 => 25,  81 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 13,  64 => 18,  56 => 9,  52 => 16,  48 => 15,  42 => 14,  38 => 13,  32 => 6,  27 => 5,  53 => 8,  49 => 15,  45 => 14,  39 => 12,  33 => 8,  25 => 3,  23 => 7,  21 => 2,  19 => 1,);
    }
}
