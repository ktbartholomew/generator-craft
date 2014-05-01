<?php

/* settings/fields */
class __TwigTemplate_e5947c06e1c82797bbe4be25ae241d961c0d44c353966cc2feab5344c9a1ba30 extends Craft\BaseTemplate
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
        // line 2
        $context["title"] = \Craft\Craft::t("Fields");
        // line 4
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields";
        // line 6
        \Craft\craft()->templates->includeJsResource("js/fields.js");
        // line 8
        \Craft\craft()->templates->includeTranslations(
        	"What do you want to name your group?",
        	"Could not create the group:",
        	"Could not create the group:",
        	"Are you sure you want to delete this group and all its fields?",
        	"Could not delete the group.",
        	"Group renamed."
        );
        // line 17
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")));
        // line 22
        $context["groups"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 24
        if (array_key_exists("groupId", $context)) {
            // line 25
            if ((!$this->getAttribute($this->getContext($context, "groups", true), $this->getContext($context, "groupId"), array(), "array", true, true))) {
                // line 26
                throw new \Craft\HttpException(404);
            }
            // line 29
            $context["fields"] = $this->getAttribute($this->getAttribute($this->getContext($context, "groups"), $this->getContext($context, "groupId"), array(), "array"), "getFields", array(), "method");
        } else {
            // line 31
            $context["fields"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getAllFields", array(), "method");
        }
        // line 35
        ob_start();
        // line 36
        echo "
\t<nav>
\t\t<ul id=\"groups\">
\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl("settings/fields"), "html", null, true);
        echo "\"";
        if ((!array_key_exists("groupId", $context))) {
            echo " class=\"sel\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("All Fields"), "html", null, true);
        echo "</a></li>
\t\t\t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 41
            echo "\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/" . $this->getAttribute($this->getContext($context, "group"), "id"))), "html", null, true);
            echo "\"";
            if ((array_key_exists("groupId", $context) && ($this->getAttribute($this->getContext($context, "group"), "id") == $this->getContext($context, "groupId")))) {
                echo " class=\"sel\"";
            }
            echo " data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "name"), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t</ul>
\t</nav>

\t<div class=\"buttons\">
\t\t<div id=\"newgroupbtn\" class=\"btn add icon\">";
        // line 47
        echo twig_escape_filter($this->env, \Craft\Craft::t("New Group"), "html", null, true);
        echo "</div>

\t\t";
        // line 49
        if (array_key_exists("groupId", $context)) {
            // line 50
            echo "\t\t\t<div id=\"groupsettingsbtn\" class=\"btn settings icon menubtn\" title=\"";
            echo "Settings";
            echo "\"></div>
\t\t\t<div class=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a data-action=\"rename\" role=\"button\">";
            // line 53
            echo twig_escape_filter($this->env, \Craft\Craft::t("Rename selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t<li><a data-action=\"delete\" role=\"button\">";
            // line 54
            echo twig_escape_filter($this->env, \Craft\Craft::t("Delete selected group"), "html", null, true);
            echo "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 58
        echo "\t</div>
";
        $context["sidebar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 62
        ob_start();
        // line 63
        echo "
\t<p id=\"nofields\"";
        // line 64
        if ($this->getContext($context, "fields")) {
            echo " class=\"hidden\"";
        }
        echo ">
\t\t";
        // line 65
        if (array_key_exists("groupId", $context)) {
            // line 66
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("This group doesn’t have any fields yet."), "html", null, true);
            echo "
\t\t";
        } else {
            // line 68
            echo "\t\t\t";
            echo twig_escape_filter($this->env, \Craft\Craft::t("No fields exist yet."), "html", null, true);
            echo "
\t\t";
        }
        // line 70
        echo "\t</p>

\t";
        // line 72
        if ($this->getContext($context, "fields")) {
            // line 73
            echo "\t\t<table id=\"fields\" class=\"data fullwidth collapsible\">
\t\t\t<thead>
\t\t\t\t<th scope=\"col\">";
            // line 75
            echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 76
            echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
            echo "</th>
\t\t\t\t<th scope=\"col\">";
            // line 77
            echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 78
            if ((!array_key_exists("groupId", $context))) {
                echo "<th scope=\"col\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                echo "</th>";
            }
            // line 79
            echo "\t\t\t\t<td class=\"thin\"></td>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 83
                echo "\t\t\t\t\t<tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "id"), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getContext($context, "field"), "name")), "html", null, true);
                echo "\">
\t\t\t\t\t\t<th scope=\"row\" data-title=\"";
                // line 84
                echo twig_escape_filter($this->env, \Craft\Craft::t("Name"), "html", null, true);
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(("settings/fields/edit/" . $this->getAttribute($this->getContext($context, "field"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t($this->getAttribute($this->getContext($context, "field"), "name")), "html", null, true);
                echo "</a>";
                // line 85
                if ($this->getAttribute($this->getContext($context, "field"), "required")) {
                    echo " <span class=\"required\"></span>";
                }
                // line 86
                echo "</th>
\t\t\t\t\t\t<td data-title=\"";
                // line 87
                echo twig_escape_filter($this->env, \Craft\Craft::t("Handle"), "html", null, true);
                echo "\"><code>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "handle"), "html", null, true);
                echo "</code></td>
\t\t\t\t\t\t<td data-title=\"";
                // line 88
                echo twig_escape_filter($this->env, \Craft\Craft::t("Type"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 89
                $context["fieldType"] = $this->getAttribute($this->getContext($context, "field"), "getFieldType", array(), "method");
                // line 90
                echo "\t\t\t\t\t\t\t";
                if ($this->getContext($context, "fieldType")) {
                    // line 91
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fieldType"), "name"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t<span class=\"error\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "type"), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 96
                if ((!array_key_exists("groupId", $context))) {
                    echo "<td data-title=\"";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Group"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field"), "group"), "name"), "html", null, true);
                    echo "</td>";
                }
                // line 97
                echo "\t\t\t\t\t\t<td class=\"thin\"><a class=\"delete icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "\" role=\"button\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        }
        // line 103
        echo "
\t";
        // line 104
        if ($this->getContext($context, "groups")) {
            // line 105
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 106
            $context["newFieldUrl"] = \Craft\UrlHelper::getUrl("settings/fields/new", ((array_key_exists("groupId", $context)) ? (array("groupId" => $this->getContext($context, "groupId"))) : (null)));
            // line 107
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "newFieldUrl"), "html", null, true);
            echo "\" class=\"submit btn add icon\">";
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Field"), "html", null, true);
            echo "</a>
\t\t</div>
\t";
        }
        // line 110
        echo "
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 114
        $context["js"] = ('' === $tmp = "\tnew Craft.AdminTable({
\t\ttableSelector: '#fields',
\t\tnoObjectsSelector: '#nofields',
\t\tdeleteAction: 'fields/deleteField'
\t});
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 121
        \Craft\craft()->templates->includeJs($this->getContext($context, "js"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 121,  288 => 114,  284 => 110,  275 => 107,  273 => 106,  270 => 105,  268 => 104,  265 => 103,  260 => 100,  250 => 97,  242 => 96,  239 => 95,  233 => 93,  227 => 91,  224 => 90,  222 => 89,  218 => 88,  212 => 87,  209 => 86,  205 => 85,  198 => 84,  191 => 83,  187 => 82,  182 => 79,  176 => 78,  172 => 77,  168 => 76,  164 => 75,  160 => 73,  158 => 72,  154 => 70,  148 => 68,  142 => 66,  140 => 65,  134 => 64,  131 => 63,  129 => 62,  125 => 58,  118 => 54,  114 => 53,  107 => 50,  105 => 49,  100 => 47,  94 => 43,  77 => 41,  73 => 40,  63 => 39,  58 => 36,  56 => 35,  53 => 31,  50 => 29,  47 => 26,  45 => 25,  43 => 24,  41 => 22,  39 => 17,  30 => 8,  28 => 6,  26 => 4,  24 => 2,);
    }
}
