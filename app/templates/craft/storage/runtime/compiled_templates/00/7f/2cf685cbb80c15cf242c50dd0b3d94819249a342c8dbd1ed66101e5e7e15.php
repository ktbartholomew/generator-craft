<?php

/* settings/sections/_entrytypes/index */
class __TwigTemplate_007f2cf685cbb80c15cf242c50dd0b3d94819249a342c8dbd1ed66101e5e7e15 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/cp");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/cp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["entryTypes"] = $this->getAttribute($this->getContext($context, "section"), "getEntryTypes", array(), "method");
        // line 4
        $context["multiple"] = (twig_length_filter($this->env, $this->getContext($context, "entryTypes")) > 1);
        // line 6
        ob_start();
        // line 7
        echo "\t<table id=\"entrytypes\" class=\"data fullwidth collapsible\">
\t\t<thead>
\t\t\t<th scope=\"col\">";
        // line 9
        echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
        echo "</th>
\t\t\t<th scope=\"col\">";
        // line 10
        echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
        echo "</th>
\t\t\t";
        // line 11
        if ($this->getContext($context, "multiple")) {
            // line 12
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t\t<td class=\"thin\"></td>
\t\t\t";
        }
        // line 15
        echo "\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "section"), "getEntryTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entryType"]) {
            // line 18
            echo "\t\t\t\t<tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entryType"), "id"), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entryType"), "name"), "html", null, true);
            echo "\">
\t\t\t\t\t<th scope=\"row\" data-title=\"";
            // line 19
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(((("settings/sections/" . $this->getAttribute($this->getContext($context, "section"), "id")) . "/entrytypes/") . $this->getAttribute($this->getContext($context, "entryType"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entryType"), "name"), "html", null, true);
            echo "</a></th>
\t\t\t\t\t<td data-title=\"";
            // line 20
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entryType"), "handle"), "html", null, true);
            echo "</code></td>
\t\t\t\t\t";
            // line 21
            if ($this->getContext($context, "multiple")) {
                // line 22
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"move icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                // line 23
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entryType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t</tbody>
\t</table>

\t";
        // line 30
        if (($this->getAttribute($this->getContext($context, "section"), "type") != "single")) {
            // line 31
            echo "\t\t<div class=\"buttons\">
\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl((("settings/sections/" . $this->getAttribute($this->getContext($context, "section"), "id")) . "/entrytypes/new")), "html", null, true);
            echo "\" class=\"btn submit add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Entry Type"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        if (($this->getAttribute($this->getContext($context, "section"), "type") != "single")) {
            // line 39
            ob_start();
            // line 40
            echo "\t\tnew Craft.AdminTable({
\t\t\ttableSelector: '#entrytypes',
\t\t\tdeleteAction: 'sections/deleteEntryType',
\t\t\tminObjects: 1,
\t\t\tsortable: true,
\t\t\treorderAction: 'sections/reorderEntryTypes',
\t\t\tconfirmDeleteMessage: '";
            // line 46
            echo twig_escape_filter($this->env, \Craft\Craft::t("Are you sure you want to delete “{name}” and all entries that use it?"), "html", null, true);
            echo "',
\t\t});
\t";
            $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 49
            \Craft\craft()->templates->includeJs($this->getContext($context, "js"));
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  128 => 46,  120 => 40,  118 => 39,  116 => 38,  107 => 32,  104 => 31,  102 => 30,  97 => 27,  90 => 25,  85 => 23,  80 => 22,  78 => 21,  72 => 20,  64 => 19,  57 => 18,  53 => 17,  49 => 15,  44 => 12,  42 => 11,  38 => 10,  34 => 9,  30 => 7,  28 => 6,  26 => 4,  24 => 3,);
    }
}
