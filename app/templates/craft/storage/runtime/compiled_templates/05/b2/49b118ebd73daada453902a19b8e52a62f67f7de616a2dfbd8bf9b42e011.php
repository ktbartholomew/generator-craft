<?php

/* settings/sections/_entrytypes/edit */
class __TwigTemplate_05b249b118ebd73daada453902a19b8e52a62f67f7de616a2dfbd8bf9b42e011 extends Craft\BaseTemplate
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
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 6
        ob_start();
        // line 7
        echo "\t<form method=\"post\" accept-charset=\"UTF-8\" data-saveshortcut=\"1\">
\t\t<input type=\"hidden\" name=\"action\" value=\"sections/saveEntryType\">
\t\t";
        // line 9
        if (($this->getAttribute($this->getContext($context, "section"), "type") == "single")) {
            // line 10
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections\">
\t\t";
        } else {
            // line 12
            echo "\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"settings/sections/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "id"), "html", null, true);
            echo "/entrytypes\">
\t\t";
        }
        // line 14
        echo "\t\t<input type=\"hidden\" name=\"sectionId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "section"), "id"), "html", null, true);
        echo "\">
\t\t";
        // line 15
        if ($this->getAttribute($this->getContext($context, "entryType"), "id")) {
            echo "<input type=\"hidden\" name=\"entryTypeId\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entryType"), "id"), "html", null, true);
            echo "\">";
        }
        // line 16
        echo "
\t\t";
        // line 17
        echo $context["forms"]->gettextField(array("first" => true, "label" => \Craft\Craft::t("Name"), "instructions" => \Craft\Craft::t("What this entry type will be called in the CP."), "id" => "name", "name" => "name", "value" => $this->getAttribute($this->getContext($context, "entryType"), "name"), "errors" => $this->getAttribute($this->getContext($context, "entryType"), "getErrors", array(0 => "name"), "method"), "autofocus" => true, "required" => true));
        // line 27
        echo "

\t\t";
        // line 29
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Handle"), "instructions" => \Craft\Craft::t("How you’ll refer to this entry type in the templates."), "id" => "handle", "class" => "code", "name" => "handle", "value" => $this->getAttribute($this->getContext($context, "entryType"), "handle"), "errors" => $this->getAttribute($this->getContext($context, "entryType"), "getErrors", array(0 => "handle"), "method"), "required" => true));
        // line 38
        echo "

\t\t";
        // line 40
        if (($this->getAttribute($this->getContext($context, "section"), "type") != "single")) {
            // line 41
            echo "\t\t\t<hr>

\t\t\t";
            // line 43
            echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Show title fields"), "name" => "hasTitleField", "toggle" => "titleLabel-container", "reverseToggle" => "titleFormat-container", "checked" => $this->getAttribute($this->getContext($context, "entryType"), "hasTitleField")));
            // line 49
            echo "

\t\t\t<div id=\"titleLabel-container\"";
            // line 51
            if ((!$this->getAttribute($this->getContext($context, "entryType"), "hasTitleField"))) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 52
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title Field Label"), "instructions" => \Craft\Craft::t("What do you want the entries’ “Title” fields to be labeled?"), "id" => "titleLabel", "name" => "titleLabel", "value" => $this->getAttribute($this->getContext($context, "entryType"), "titleLabel"), "errors" => $this->getAttribute($this->getContext($context, "entryType"), "getErrors", array(0 => "titleLabel"), "method"), "required" => true));
            // line 60
            echo "
\t\t\t</div>

\t\t\t<div id=\"titleFormat-container\"";
            // line 63
            if ($this->getAttribute($this->getContext($context, "entryType"), "hasTitleField")) {
                echo " class=\"hidden\"";
            }
            echo ">
\t\t\t\t";
            // line 64
            echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Title Format"), "instructions" => \Craft\Craft::t("What the auto-generated entry titles should look like. You can include tags that output entry properties, such as {ex}.", array("ex" => "<code>{myCustomField}</code>")), "id" => "titleFormat", "name" => "titleFormat", "value" => $this->getAttribute($this->getContext($context, "entryType"), "titleFormat"), "errors" => $this->getAttribute($this->getContext($context, "entryType"), "getErrors", array(0 => "titleFormat"), "method"), "required" => true));
            // line 72
            echo "
\t\t\t</div>
\t\t";
        }
        // line 75
        echo "
\t\t<hr>

\t\t";
        // line 78
        $this->env->loadTemplate("_includes/fieldlayoutdesigner")->display(array("fieldLayout" => $this->getAttribute($this->getContext($context, "entryType"), "getFieldLayout", array(), "method")));
        // line 81
        echo "
\t\t<hr>

\t\t<div class=\"buttons\">
\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, \Craft\Craft::t("Save"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
";
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 91
        if ((!$this->getAttribute($this->getContext($context, "entryType"), "handle"))) {
            // line 92
            \Craft\craft()->templates->includeJs("new Craft.HandleGenerator('#name', '#handle');");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "settings/sections/_entrytypes/edit";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 92,  128 => 91,  121 => 85,  115 => 81,  113 => 78,  108 => 75,  103 => 72,  101 => 64,  95 => 63,  90 => 60,  88 => 52,  82 => 51,  78 => 49,  76 => 43,  72 => 41,  70 => 40,  66 => 38,  64 => 29,  60 => 27,  58 => 17,  55 => 16,  49 => 15,  44 => 14,  38 => 12,  34 => 10,  32 => 9,  28 => 7,  26 => 6,  24 => 3,);
    }
}
