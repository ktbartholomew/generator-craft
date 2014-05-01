<?php

/* settings/fields/_edit */
class __TwigTemplate_e78ca960239727e6d49cb73c96ff58db92961046259c88382361564f70f50f31 extends Craft\BaseTemplate
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
        $context["docsUrl"] = "http://buildwithcraft.com/docs/fields#field-layouts";
        // line 5
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 7
        if (((!array_key_exists("field", $context)) && array_key_exists("fieldId", $context))) {
            // line 8
            $context["field"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getFieldById", array(0 => $this->getContext($context, "fieldId")), "method");
            // line 9
            if ((!$this->getContext($context, "field"))) {
                // line 10
                throw new \Craft\HttpException(404);
            }
        }
        // line 15
        $context["groups"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getAllGroups", array(0 => "id"), "method");
        // line 16
        if ((!$this->getContext($context, "groups"))) {
            // line 17
            throw new \Craft\HttpException(404);
        }
        // line 20
        $context["groupId"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "getQuery", array(0 => "groupId"), "method");
        // line 22
        if ((!$this->getContext($context, "groupId"))) {
            // line 23
            if (array_key_exists("field", $context)) {
                // line 24
                $context["groupId"] = $this->getAttribute($this->getContext($context, "field"), "groupId");
            } else {
                // line 26
                $context["groupId"] = $this->getAttribute(twig_get_array_keys_filter($this->getContext($context, "groups")), 0, array(), "array");
            }
        }
        // line 30
        if ((!$this->getAttribute($this->getContext($context, "groups", true), $this->getContext($context, "groupId"), array(), "array", true, true))) {
            // line 31
            throw new \Craft\HttpException(404);
        }
        // line 35
        $context["crumbs"] = array(0 => array("label" => \Craft\Craft::t("Settings"), "url" => \Craft\UrlHelper::getUrl("settings")), 1 => array("label" => \Craft\Craft::t("Fields"), "url" => \Craft\UrlHelper::getUrl("settings/fields")), 2 => array("label" => $this->getAttribute($this->getAttribute($this->getContext($context, "groups"), $this->getContext($context, "groupId"), array(), "array"), "name"), "url" => \Craft\UrlHelper::getUrl(("settings/fields/" . $this->getContext($context, "groupId")))));
        // line 41
        if (array_key_exists("fieldId", $context)) {
            // line 42
            $context["title"] = $this->getAttribute($this->getContext($context, "field"), "name");
        } else {
            // line 44
            $context["title"] = \Craft\Craft::t("Create a new field");
        }
        // line 48
        $context["fieldTypes"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getAllFieldTypes", array(), "method");
        // line 50
        if (array_key_exists("field", $context)) {
            // line 51
            $context["fieldType"] = $this->getAttribute($this->getContext($context, "field"), "getFieldType", array(), "method");
            // line 52
            $context["isFieldTypeMissing"] = (!$this->getContext($context, "fieldType"));
        } else {
            // line 54
            $context["isFieldTypeMissing"] = false;
        }
        // line 57
        if (((!array_key_exists("fieldType", $context)) || $this->getContext($context, "isFieldTypeMissing"))) {
            // line 58
            $context["fieldType"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "fields"), "getFieldType", array(0 => "PlainText"), "method");
        }
        // line 62
        ob_start();
        // line 63
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"fields/saveField\">
\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/fields/{groupId}\">
\t\t";
        // line 66
        if (array_key_exists("fieldId", $context)) {
            // line 67
            echo "\t\t\t<input type=\"hidden\" name=\"fieldId\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "fieldId"), "html", null, true);
            echo "\">
\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        $context["groupOptions"] = array();
        // line 71
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 72
            echo "\t\t\t";
            $context["groupOptions"] = twig_array_merge($this->getContext($context, "groupOptions"), array(0 => array("label" => $this->getAttribute($this->getContext($context, "group"), "name"), "value" => $this->getAttribute($this->getContext($context, "group"), "id"))));
            // line 73
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t";
        echo $context["forms"]->getselectField(array("first" => true, "label" => \Craft\Craft::t("Group"), "instructions" => \Craft\Craft::t("Which group should this field be displayed in?"), "id" => "group", "name" => "group", "options" => $this->getContext($context, "groupOptions"), "value" => $this->getContext($context, "groupId")));
        // line 82
        echo "

\t\t";
        // line 84
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this field will be called in the CP."), "id" => "name", "name" => "name", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "name")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "getErrors", array(0 => "name"), "method")) : (null)), "required" => true, "translatable" => true, "autofocus" => true));
        // line 94
        echo "

\t\t";
        // line 96
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this field in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "maxlength" => 64, "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "handle")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "getErrors", array(0 => "handle"), "method")) : (null)), "required" => true));
        // line 106
        echo "

\t\t";
        // line 108
        echo $context["forms"]->gettextareaField(array("label" => \Craft\Craft::t("Instructions"), "instructions" => \Craft\Craft::t("Helper text to guide the author."), "id" => "instructions", "class" => "nicetext", "name" => "instructions", "value" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "instructions")) : (null)), "errors" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "getErrors", array(0 => "instructions"), "method")) : (null)), "translatable" => true));
        // line 117
        echo "

\t\t";
        // line 119
        if ($this->getAttribute($this->getContext($context, "craft"), "isLocalized", array(), "method")) {
            // line 120
            echo "\t\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("This field is translatable"), "name" => "translatable", "checked" => ((array_key_exists("field", $context)) ? ($this->getAttribute($this->getContext($context, "field"), "translatable")) : (false))));
            // line 124
            echo "
\t\t";
        }
        // line 126
        echo "
\t\t<hr>

\t\t";
        // line 129
        echo $context["forms"]->getselectField(array("label" => \Craft\Craft::t("Field Type"), "instructions" => (\Craft\Craft::t("What type of field is this?") . ((array_key_exists("fieldId", $context)) ? ((("<br><span class=\"error\">" . \Craft\Craft::t("Careful—changing this may result in data loss.")) . "</span>")) : (""))), "id" => "type", "name" => "type", "options" => $this->getContext($context, "fieldTypes"), "value" => $this->getAttribute($this->getContext($context, "fieldType"), "getClassHandle", array(), "method"), "errors" => (($this->getContext($context, "isFieldTypeMissing")) ? (array(0 => \Craft\Craft::t("The fieldtype class “{class}” could not be found.", array("class" => $this->getAttribute($this->getContext($context, "field"), "type"))))) : (null)), "toggle" => true));
        // line 138
        echo "

\t\t";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fieldTypes"));
        foreach ($context['_seq'] as $context["_key"] => $context["_fieldType"]) {
            // line 141
            echo "\t\t\t";
            $context["isCurrent"] = ($this->getAttribute($this->getContext($context, "_fieldType"), "getClassHandle", array(), "method") == $this->getAttribute($this->getContext($context, "fieldType"), "getClassHandle", array(), "method"));
            // line 142
            echo "\t\t\t<div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "_fieldType"), "getClassHandle", array(), "method"), "html", null, true);
            echo "\"";
            if ((!$this->getContext($context, "isCurrent"))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 143
            $_namespace = (("types[" . $this->getAttribute($this->getContext($context, "_fieldType"), "getClassHandle", array(), "method")) . "]");
            if ($_namespace) {
                $_originalNamespace = \Craft\craft()->templates->getNamespace();
                \Craft\craft()->templates->setNamespace(\Craft\craft()->templates->namespaceInputName($_namespace));
                ob_start();
                try {
                    // line 144
                    echo "\t\t\t\t\t";
                    if ($this->getContext($context, "isCurrent")) {
                        // line 145
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute($this->getContext($context, "fieldType"), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    } else {
                        // line 147
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute($this->getContext($context, "_fieldType"), "getSettingsHtml", array(), "method");
                        echo "
\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t";
                } catch (Exception $e) {
                    ob_end_clean();

                    throw $e;
                }
                echo \Craft\craft()->templates->namespaceInputs(ob_get_clean(), $_namespace);
                \Craft\craft()->templates->setNamespace($_originalNamespace);
            } else {
                // line 144
                echo "\t\t\t\t\t";
                if ($this->getContext($context, "isCurrent")) {
                    // line 145
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($this->getContext($context, "fieldType"), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                } else {
                    // line 147
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($this->getContext($context, "_fieldType"), "getSettingsHtml", array(), "method");
                    echo "
\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t";
            }
            unset($_originalNamespace, $_namespace);
            // line 150
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_fieldType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 162
        if (((!array_key_exists("field", $context)) || (!$this->getAttribute($this->getContext($context, "field"), "handle")))) {
            // line 163
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/fields/_edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 129,  158 => 126,  154 => 124,  151 => 120,  149 => 119,  145 => 117,  143 => 108,  139 => 106,  137 => 96,  133 => 94,  131 => 84,  127 => 82,  124 => 74,  118 => 73,  115 => 72,  110 => 71,  108 => 70,  105 => 69,  99 => 67,  97 => 66,  92 => 63,  90 => 62,  87 => 58,  85 => 57,  82 => 54,  79 => 52,  77 => 51,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 41,  63 => 35,  60 => 31,  58 => 30,  54 => 26,  51 => 24,  49 => 23,  47 => 22,  45 => 20,  42 => 17,  40 => 16,  38 => 15,  34 => 10,  32 => 9,  30 => 8,  28 => 7,  26 => 5,  24 => 3,);
    }
}
