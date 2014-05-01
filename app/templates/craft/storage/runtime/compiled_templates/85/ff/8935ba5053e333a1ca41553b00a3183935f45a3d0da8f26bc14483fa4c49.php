<?php

/* _includes/fieldlayoutdesigner */
class __TwigTemplate_85ff8935ba5053e333a1ca41553b00a3183935f45a3d0da8f26bc14483fa4c49 extends Craft\BaseTemplate
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
        if ((!array_key_exists("customizableTabs", $context))) {
            $context["customizableTabs"] = true;
        }
        // line 2
        if (((!$this->getContext($context, "customizableTabs")) && (!array_key_exists("pretendTabName", $context)))) {
            // line 3
            echo "\t";
            $context["pretendTabName"] = "Content";
        }
        // line 5
        echo "
";
        // line 6
        $context["groups"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 7
        $context["fields"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getAllFields", array(0 => "id"), "method");
        // line 8
        echo "
";
        // line 9
        \Craft\craft()->templates->includeTranslations(
        	"Rename",
        	"Delete",
        	"Make required",
        	"Make not required",
        	"Remove",
        	"Give your tab a name."
        );
        // line 17
        echo "
";
        // line 18
        \Craft\craft()->templates->includeCssFile("//fonts.googleapis.com/css?family=Coming+Soon");
        // line 19
        echo "
";
        // line 42
        echo "


<div id=\"fieldlayoutform\" class=\"fieldlayoutform\">

\t<h2>";
        // line 47
        echo twig_escape_filter($this->env, \Craft\Craft::t("Design your field layout"), "html", null, true);
        echo "</h2>

\t<div class=\"fld-tabs\">
\t\t";
        // line 50
        if ($this->getContext($context, "fieldLayout")) {
            // line 51
            echo "\t\t\t";
            $context["macros"] = $this;
            // line 52
            echo "
\t\t\t";
            // line 53
            if ($this->getContext($context, "customizableTabs")) {
                // line 54
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fieldLayout"), "getTabs", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 55
                    echo "\t\t\t\t\t";
                    echo $context["macros"]->gettab($this->getContext($context, "customizableTabs"), $this->getAttribute($this->getContext($context, "tab"), "name"), $this->getAttribute($this->getContext($context, "tab"), "getFields", array(), "method"));
                    echo "
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t";
                echo $context["macros"]->gettab($this->getContext($context, "customizableTabs"), $this->getContext($context, "pretendTabName"), $this->getAttribute($this->getContext($context, "fieldLayout"), "getFields", array(), "method"));
                echo "
\t\t\t";
            }
            // line 60
            echo "\t\t";
        }
        // line 61
        echo "\t</div>

\t";
        // line 63
        if ($this->getContext($context, "customizableTabs")) {
            // line 64
            echo "\t\t<div class=\"buttons\">
\t\t\t<div id=\"newtabbtn\" class=\"btn add icon\">";
            // line 65
            echo twig_escape_filter($this->env, \Craft\Craft::t("New Tab"), "html", null, true);
            echo "</div>
\t\t\t<h3>";
            // line 66
            echo twig_escape_filter($this->env, \Craft\Craft::t("…Or use one of your field groups as a starting point:"), "html", null, true);
            echo "</h3>
\t\t</div>
\t";
        }
        // line 69
        echo "
\t<div class=\"unusedfields\">
\t\t";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 72
            echo "\t\t\t";
            $context["totalUnselected"] = 0;
            // line 73
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 74
                echo "\t\t\t\t";
                if (((!$this->getContext($context, "fieldLayout")) || !twig_in_filter($this->getAttribute($this->getContext($context, "field"), "id"), $this->getAttribute($this->getContext($context, "fieldLayout"), "getFieldIds", array(), "method")))) {
                    // line 75
                    echo "\t\t\t\t\t";
                    $context["totalUnselected"] = ($this->getContext($context, "totalUnselected") + 1);
                    // line 76
                    echo "\t\t\t\t";
                }
                // line 77
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t\t\t<div class=\"fld-tab unused";
            // line 79
            if (($this->getContext($context, "totalUnselected") == 0)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<div class=\"tab sel\"><span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "name"), "html", null, true);
            echo "</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"fld-tabcontent\">
\t\t\t\t\t";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 85
                echo "\t\t\t\t\t\t";
                $context["selected"] = ($this->getContext($context, "fieldLayout") && twig_in_filter($this->getAttribute($this->getContext($context, "field"), "id"), $this->getAttribute($this->getContext($context, "fieldLayout"), "getFieldIds", array(), "method")));
                // line 86
                echo "\t\t\t\t\t\t<div class=\"fld-field unused";
                if ($this->getContext($context, "selected")) {
                    echo " hidden";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<span>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t</div>

</div>

";
        // line 97
        ob_start();
        // line 98
        echo "\tvar initFLD = function() {
\t\tnew Craft.FieldLayoutDesigner('#fieldlayoutform', {
\t\t\tcustomizableTabs: ";
        // line 100
        echo (($this->getContext($context, "customizableTabs")) ? ("true") : ("false"));
        echo "
\t\t});
\t};

\t";
        // line 104
        if (array_key_exists("tab", $context)) {
            // line 105
            echo "
\t\tvar \$fldTab = \$('#tab-";
            // line 106
            echo twig_escape_filter($this->env, $this->getContext($context, "tab"), "html", null, true);
            echo "');

\t\tif (\$fldTab.hasClass('sel'))
\t\t{
\t\t\tinitFLD();
\t\t}
\t\telse
\t\t{
\t\t\t\$fldTab.on('activate.fld', function() {
\t\t\t\tinitFLD();
\t\t\t\t\$fldTab.off('activate.fld');
\t\t\t});
\t\t}

\t";
        } else {
            // line 121
            echo "
\t\tinitFLD();

\t";
        }
        $context["js"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 126
        echo "
";
        // line 127
        \Craft\craft()->templates->includeJs($this->getContext($context, "js"));
    }

    // line 20
    public function gettab($_customizableTabs = null, $_tabName = null, $_tabFields = null)
    {
        $context = $this->env->mergeGlobals(array(
            "customizableTabs" => $_customizableTabs,
            "tabName" => $_tabName,
            "tabFields" => $_tabFields,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "\t<div class=\"fld-tab\">
\t\t<div class=\"tabs\">
\t\t\t<div class=\"tab sel";
            // line 23
            if ($this->getContext($context, "customizableTabs")) {
                echo " draggable";
            }
            echo "\">
\t\t\t\t<span>";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "tabName"), "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 25
            if ($this->getContext($context, "customizableTabs")) {
                // line 26
                echo "\t\t\t\t\t<a class=\"settings icon\" title=\"";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"fld-tabcontent\">
\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tabFields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "\t\t\t\t<div class=\"fld-field";
                if ($this->getAttribute($this->getContext($context, "field"), "required")) {
                    echo " fld-required";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "fieldId"), "html", null, true);
                echo "\">
\t\t\t\t\t<a class=\"settings icon\" title=\"";
                // line 33
                echo twig_escape_filter($this->env, \Craft\Craft::t("Edit"), "html", null, true);
                echo "\"></a>
\t\t\t\t\t<span>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field"), "getField", array(), "method"), "name"), "html", null, true);
                echo "</span>
\t\t\t\t\t<input class=\"id-input\" type=\"hidden\" name=\"fieldLayout[";
                // line 35
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "tabName"), "url"), "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "fieldId"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($this->getContext($context, "field"), "required")) {
                    echo "<input class=\"required-input\" type=\"hidden\" name=\"requiredFields[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "fieldId"), "html", null, true);
                    echo "\">";
                }
                // line 37
                echo "\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/fieldlayoutdesigner";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 39,  333 => 37,  327 => 36,  321 => 35,  317 => 34,  313 => 33,  304 => 32,  300 => 31,  295 => 28,  289 => 26,  287 => 25,  283 => 24,  277 => 23,  273 => 21,  260 => 20,  256 => 127,  253 => 126,  246 => 121,  228 => 106,  225 => 105,  223 => 104,  216 => 100,  212 => 98,  210 => 97,  204 => 93,  196 => 90,  187 => 87,  178 => 86,  175 => 85,  171 => 84,  165 => 81,  158 => 79,  155 => 78,  149 => 77,  146 => 76,  143 => 75,  140 => 74,  135 => 73,  132 => 72,  124 => 69,  118 => 66,  114 => 65,  111 => 64,  109 => 63,  105 => 61,  102 => 60,  96 => 58,  93 => 57,  84 => 55,  79 => 54,  77 => 53,  74 => 52,  71 => 51,  69 => 50,  63 => 47,  56 => 42,  53 => 19,  51 => 18,  48 => 17,  39 => 9,  36 => 8,  29 => 5,  25 => 3,  23 => 2,  19 => 1,  130 => 92,  128 => 71,  121 => 85,  115 => 81,  113 => 78,  108 => 75,  103 => 72,  101 => 64,  95 => 63,  90 => 60,  88 => 52,  82 => 51,  78 => 49,  76 => 43,  72 => 41,  70 => 40,  66 => 38,  64 => 29,  60 => 27,  58 => 17,  55 => 16,  49 => 15,  44 => 14,  38 => 12,  34 => 7,  32 => 6,  28 => 7,  26 => 6,  24 => 3,);
    }
}
