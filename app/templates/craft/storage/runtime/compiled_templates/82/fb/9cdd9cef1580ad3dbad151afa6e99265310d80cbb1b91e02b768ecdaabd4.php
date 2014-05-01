<?php

/* _components/fieldtypes/Matrix/settings */
class __TwigTemplate_82fb9cdd9cef1580ad3dbad151afa6e99265310d80cbb1b91e02b768ecdaabd4 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "

";
        // line 4
        ob_start();
        // line 5
        echo "\t<div class=\"mc-sidebar block-types\">
\t\t<div class=\"col-inner-container\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 8
        echo twig_escape_filter($this->env, \Craft\Craft::t("Block Types"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "settings"), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 12
            echo "\t\t\t\t\t<div class=\"matrixconfigitem mci-blocktype";
            if ($this->getAttribute($this->getContext($context, "blockType"), "hasFieldErrors")) {
                echo " error";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "id"), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getContext($context, "blockType"), "hasErrors", array(), "method")) {
                echo " data-errors=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getContext($context, "blockType"), "getErrors", array(), "method")), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t\t\t<div class=\"name\">";
            // line 13
            if ($this->getAttribute($this->getContext($context, "blockType"), "name")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "name"), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
\t\t\t\t\t\t<div class=\"handle code\">";
            // line 14
            if ($this->getAttribute($this->getContext($context, "blockType"), "handle")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "handle"), "html", null, true);
            } else {
                echo "&nbsp;";
            }
            echo "</div>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
            // line 16
            echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t<a class=\"settings icon";
            // line 17
            if ($this->getAttribute($this->getContext($context, "blockType"), "hasErrors", array(), "method")) {
                echo " error";
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, \Craft\Craft::t("Settings"), "html", null, true);
            echo "\" role=\"button\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input class=\"hidden\" name=\"blockTypes[";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "id"), "html", null, true);
            echo "][name]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "name"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<input class=\"hidden\" name=\"blockTypes[";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "id"), "html", null, true);
            echo "][handle]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "handle"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t<div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New block type"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"mc-sidebar fields\">
\t\t<div class=\"col-inner-container hidden\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 30
        echo twig_escape_filter($this->env, \Craft\Craft::t("Fields"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "settings"), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 34
            echo "\t\t\t\t\t<div data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "id"), "html", null, true);
            echo "\" class=\"hidden\">
\t\t\t\t\t\t";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "blockType"), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 36
                echo "\t\t\t\t\t\t\t<div class=\"matrixconfigitem mci-field";
                if ($this->getAttribute($this->getContext($context, "field"), "hasErrors", array(), "method")) {
                    echo " error";
                }
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "id"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"name";
                // line 37
                if ($this->getAttribute($this->getContext($context, "field"), "required")) {
                    echo " required";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "name"), "html", null, true);
                echo "&nbsp;</div>
\t\t\t\t\t\t\t\t<div class=\"handle code\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field"), "handle"), "html", null, true);
                echo "&nbsp;</div>
\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t<a class=\"move icon\" title=\"";
                // line 40
                echo twig_escape_filter($this->env, \Craft\Craft::t("Reorder"), "html", null, true);
                echo "\" role=\"button\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t<div class=\"btn add icon\">";
        echo twig_escape_filter($this->env, \Craft\Craft::t("New field"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"field-settings\">
\t\t<div class=\"col-inner-container hidden\">
\t\t\t<div class=\"heading\">
\t\t\t\t<h5>";
        // line 53
        echo twig_escape_filter($this->env, \Craft\Craft::t("Field Settings"), "html", null, true);
        echo "</h5>
\t\t\t</div>
\t\t\t<div class=\"items\">
\t\t\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "settings"), "getBlockTypes", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["blockType"]) {
            // line 57
            echo "\t\t\t\t\t<div data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blockType"), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "blockType"), "getFields", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 59
                echo "\t\t\t\t\t\t\t";
                $context["fieldId"] = $this->getAttribute($this->getContext($context, "field"), "id");
                // line 60
                echo "\t\t\t\t\t\t\t<div data-id=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "fieldId"), "html", null, true);
                echo "\" class=\"hidden\">
\t\t\t\t\t\t\t\t";
                // line 61
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name"), "id" => ($this->getContext($context, "fieldId") . "-name"), "name" => (((("blockTypes[" . $this->getAttribute($this->getContext($context, "blockType"), "id")) . "][fields][") . $this->getContext($context, "fieldId")) . "][name]"), "value" => $this->getAttribute($this->getContext($context, "field"), "name"), "errors" => $this->getAttribute($this->getContext($context, "field"), "getErrors", array(0 => "name"), "method"), "required" => true, "translatable" => true, "autofocus" => true));
                // line 70
                echo "

\t\t\t\t\t\t\t\t";
                // line 72
                echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "id" => ($this->getContext($context, "fieldId") . "-handle"), "class" => "code", "name" => (((("blockTypes[" . $this->getAttribute($this->getContext($context, "blockType"), "id")) . "][fields][") . $this->getContext($context, "fieldId")) . "][handle]"), "maxlength" => 64, "value" => $this->getAttribute($this->getContext($context, "field"), "handle"), "errors" => $this->getAttribute($this->getContext($context, "field"), "getErrors", array(0 => "handle"), "method"), "required" => true));
                // line 81
                echo "

\t\t\t\t\t\t\t\t";
                // line 83
                echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is required"), "name" => (((("blockTypes[" . $this->getAttribute($this->getContext($context, "blockType"), "id")) . "][fields][") . $this->getContext($context, "fieldId")) . "][required]"), "checked" => $this->getAttribute($this->getContext($context, "field"), "required")));
                // line 87
                echo "

\t\t\t\t\t\t\t\t";
                // line 89
                if ($this->getAttribute($this->getContext($context, "craft"), "isLocalized", array(), "method")) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => (((("blockTypes[" . $this->getAttribute($this->getContext($context, "blockType"), "id")) . "][fields][") . $this->getContext($context, "fieldId")) . "][translatable]"), "checked" => $this->getAttribute($this->getContext($context, "field"), "translatable")));
                    // line 94
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "
\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t";
                // line 99
                $context["fieldType"] = $this->getAttribute($this->getContext($context, "field"), "getFieldType", array(), "method");
                // line 100
                echo "\t\t\t\t\t\t\t\t";
                $context["isFieldTypeMissing"] = (!$this->getContext($context, "fieldType"));
                // line 101
                echo "
\t\t\t\t\t\t\t\t";
                // line 102
                if ($this->getContext($context, "isFieldTypeMissing")) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["fieldType"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getFieldType", array(0 => "PlainText"), "method");
                    // line 104
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 105
                echo "
\t\t\t\t\t\t\t\t";
                // line 106
                echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Field Type"), "instructions" => (($this->getAttribute($this->getContext($context, "field"), "isNew", array(), "method")) ? (null) : ((("<span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>"))), "id" => ($this->getContext($context, "fieldId") . "-type"), "name" => (((("blockTypes[" . $this->getAttribute($this->getContext($context, "blockType"), "id")) . "][fields][") . $this->getContext($context, "fieldId")) . "][type]"), "options" => $this->getContext($context, "fieldTypes"), "value" => $this->getAttribute($this->getContext($context, "fieldType"), "getClassHandle", array(), "method"), "errors" => (($this->getContext($context, "isFieldTypeMissing")) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($this->getContext($context, "field"), "type"))))) : (null))));
                // line 114
                echo "

\t\t\t\t\t\t\t\t<div class=\"fieldtype-settings\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 118
                $_namespace = (((("blockTypes[" . $this->getAttribute($this->getContext($context, "blockType"), "id")) . "][fields][") . $this->getContext($context, "fieldId")) . "][typesettings]");
                if ($_namespace) {
                    $_originalNamespace = \Craft\craft()->templates->getNamespace();
                    \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                    ob_start();
                    try {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($this->getContext($context, "fieldType"), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } catch (Exception $e) {
                        ob_end_clean();

                        throw $e;
                    }
                    echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                    \Craft\craft()->templates->setNamespace($_originalNamespace);
                } else {
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this->getContext($context, "fieldType"), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                unset($_originalNamespace, $_namespace);
                // line 121
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t\t<a class=\"error delete\">";
                // line 126
                echo twig_escape_filter($this->env, \Craft\Craft::t("Delete"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        $context["blockTypeInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 135
        echo "
<div class=\"matrix-configurator\">
\t";
        // line 137
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Configuration"), "instructions" => \Craft\Craft::t("Define the types of blocks that can be created within this Matrix field, as well as the fields each block type is made up of."), "name" => "config"), $this->getContext($context, "blockTypeInput"));
        // line 141
        echo "
</div>

";
        // line 144
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Max Blocks"), "instructions" => \Craft\Craft::t("The maximum number of blocks the field is allowed to have."), "id" => "maxBlocks", "name" => "maxBlocks", "value" => $this->getAttribute($this->getContext($context, "settings"), "maxBlocks"), "size" => 3, "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "maxBlocks"), "method")));
        // line 152
        echo "
";
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Matrix/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 152,  336 => 144,  331 => 141,  329 => 137,  325 => 135,  319 => 131,  312 => 129,  303 => 126,  296 => 121,  277 => 119,  270 => 118,  264 => 114,  262 => 106,  259 => 105,  253 => 103,  251 => 102,  248 => 101,  245 => 100,  238 => 96,  234 => 94,  231 => 90,  229 => 89,  225 => 87,  223 => 83,  219 => 81,  213 => 70,  211 => 61,  206 => 60,  203 => 59,  199 => 58,  194 => 57,  190 => 56,  184 => 53,  134 => 36,  130 => 35,  125 => 34,  104 => 23,  93 => 20,  78 => 17,  74 => 16,  57 => 13,  48 => 18,  41 => 15,  52 => 40,  50 => 33,  37 => 24,  31 => 14,  25 => 4,  33 => 11,  166 => 44,  150 => 47,  144 => 45,  112 => 34,  89 => 22,  68 => 19,  62 => 17,  43 => 10,  23 => 4,  61 => 32,  59 => 11,  39 => 29,  36 => 21,  156 => 40,  147 => 46,  142 => 44,  126 => 3,  121 => 33,  119 => 36,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 20,  66 => 62,  64 => 40,  56 => 54,  53 => 23,  46 => 43,  44 => 32,  29 => 5,  27 => 5,  21 => 2,  19 => 1,  258 => 163,  256 => 104,  249 => 156,  243 => 99,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 72,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 46,  169 => 140,  165 => 138,  163 => 51,  158 => 49,  154 => 48,  151 => 38,  149 => 13,  145 => 117,  143 => 37,  139 => 4,  137 => 42,  133 => 40,  131 => 84,  127 => 82,  124 => 37,  118 => 73,  115 => 30,  110 => 93,  108 => 70,  105 => 32,  99 => 67,  97 => 30,  92 => 29,  90 => 83,  87 => 19,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 14,  63 => 12,  60 => 32,  58 => 26,  54 => 29,  51 => 19,  49 => 9,  47 => 8,  45 => 8,  42 => 12,  40 => 5,  38 => 11,  34 => 8,  32 => 8,  30 => 6,  28 => 7,  26 => 10,  24 => 3,);
    }
}
