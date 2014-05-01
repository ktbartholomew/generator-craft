<?php

/* _components/fieldtypes/Assets/settings */
class __TwigTemplate_4533018a483a57a193935bda4aef10fe544821183507bf66618e9009b80e4d29 extends Craft\BaseTemplate
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
        // line 27
        echo "
";
        // line 28
        $context["__internal_450bd9852a9468d5073d31008ae7db1ae63846249e7b6197e16b29f39e157d9d"] = $this;
        // line 29
        echo "
";
        // line 30
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Restrict uploads to a single folder?"), "id" => "useSingleFolder-toggle", "name" => "useSingleFolder", "class" => "use-single-folder-cb", "value" => 1, "checked" => $this->getAttribute($this->getContext($context, "settings"), "useSingleFolder"), "toggle" => "single-folder-settings", "reverseToggle" => "multi-folder-settings"));
        // line 39
        echo "

<div id=\"multi-folder-settings\"";
        // line 41
        if ($this->getAttribute($this->getContext($context, "settings"), "useSingleFolder")) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 42
        if ($this->getContext($context, "sourceOptions")) {
            // line 43
            echo "\t\t";
            echo $context["forms"]->getcheckboxSelectField(array("label" => \Craft\Craft::t("Sources"), "instructions" => \Craft\Craft::t("Which sources do you want to select {type} from?", array("type" => twig_lower_filter($this->env, $this->getContext($context, "type")))), "id" => "sources", "name" => "sources", "options" => $this->getContext($context, "sourceOptions"), "values" => $this->getAttribute($this->getContext($context, "settings"), "sources")));
            // line 50
            echo "
\t";
        } else {
            // line 52
            echo "\t\t";
            echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Sources")), (("<p class=\"error\">" . \Craft\Craft::t("No sources exist yet.")) . "</p>"));
            // line 54
            echo "
\t";
        }
        // line 56
        echo "

\t";
        // line 58
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Default Upload Location"), "instructions" => ((\Craft\Craft::t("Where should files be uploaded when they are dragged directly onto the field, or uploaded from the front end?") . " ") . \Craft\Craft::t("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>.")), "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "defaultUploadLocationSubpath"), "method")), $context["__internal_450bd9852a9468d5073d31008ae7db1ae63846249e7b6197e16b29f39e157d9d"]->getuploadLocationInput("defaultUploadLocation", $this->getContext($context, "settings"), $this->getContext($context, "sourceOptions")));
        // line 62
        echo "
</div>

<div id=\"single-folder-settings\"";
        // line 65
        if ((!$this->getAttribute($this->getContext($context, "settings"), "useSingleFolder"))) {
            echo " class=\"hidden\"";
        }
        echo ">
\t";
        // line 66
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Upload Location"), "instructions" => \Craft\Craft::t("Note that the subfolder path can contain variables like <code>{slug}</code> or <code>{author.username}</code>."), "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "singleUploadLocationSubpath"), "method")), $context["__internal_450bd9852a9468d5073d31008ae7db1ae63846249e7b6197e16b29f39e157d9d"]->getuploadLocationInput("singleUploadLocation", $this->getContext($context, "settings"), $this->getContext($context, "sourceOptions")));
        // line 70
        echo "
</div>

";
        // line 73
        echo $context["forms"]->getcheckboxField(array("label" => \Craft\Craft::t("Restrict allowed file types?"), "class" => "restrictFiles", "id" => "", "name" => "restrictFiles", "value" => 1, "checked" => $this->getAttribute($this->getContext($context, "settings"), "restrictFiles"), "toggle" => "restrict-allowed-types"));
        // line 81
        echo "

<div id=\"restrict-allowed-types\" ";
        // line 83
        if ((!$this->getAttribute($this->getContext($context, "settings"), "restrictFiles"))) {
            echo "class=\"hidden indent\"";
        }
        echo ">
\t";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fileKindOptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 85
            echo "\t\t";
            echo $context["forms"]->getcheckboxField(array("label" => $this->getAttribute($this->getContext($context, "option"), "label"), "id" => ("allowedKinds-" . $this->getAttribute($this->getContext($context, "option"), "value")), "name" => "allowedKinds[]", "value" => $this->getAttribute($this->getContext($context, "option"), "value"), "checked" => twig_in_filter($this->getAttribute($this->getContext($context, "option"), "value"), $this->getAttribute($this->getContext($context, "settings"), "allowedKinds"))));
            // line 91
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "</div>

";
        // line 95
        echo twig_escape_filter($this->env, $this->getContext($context, "targetLocaleField"), "html", null, true);
        echo "

";
        // line 97
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Limit"), "instructions" => \Craft\Craft::t("Limit the number of selectable {type}.", array("type" => twig_lower_filter($this->env, $this->getContext($context, "type")))), "id" => "limit", "name" => "limit", "value" => $this->getAttribute($this->getContext($context, "settings"), "limit"), "size" => 2, "errors" => $this->getAttribute($this->getContext($context, "settings"), "getErrors", array(0 => "limit"), "method")));
        // line 105
        echo "
";
    }

    // line 3
    public function getuploadLocationInput($_name = null, $_settings = null, $_sourceOptions = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "settings" => $_settings,
            "sourceOptions" => $_sourceOptions,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "\t";
            $context["__internal_ac7f9bd6499d484e11fafb00104eb77d16ddd31362f15eb7a87cfe2011ee7e83"] = $this->env->loadTemplate("_includes/forms");
            // line 5
            echo "\t<table class=\"inputs fullwidth\">
\t\t<tr>
\t\t\t<td class=\"thin\">
\t\t\t\t";
            // line 8
            echo $context["__internal_ac7f9bd6499d484e11fafb00104eb77d16ddd31362f15eb7a87cfe2011ee7e83"]->getselect(array("id" => ($this->getContext($context, "name") . "Source"), "name" => ($this->getContext($context, "name") . "Source"), "options" => $this->getContext($context, "sourceOptions"), "value" => $this->getAttribute($this->getContext($context, "settings"), ($this->getContext($context, "name") . "Source"), array(), "array")));
            // line 13
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 16
            echo $context["__internal_ac7f9bd6499d484e11fafb00104eb77d16ddd31362f15eb7a87cfe2011ee7e83"]->gettext(array("id" => ($this->getContext($context, "name") . "Subpath"), "class" => "ltr", "name" => ($this->getContext($context, "name") . "Subpath"), "value" => $this->getAttribute($this->getContext($context, "settings"), ($this->getContext($context, "name") . "Subpath"), array(), "array"), "placeholder" => \Craft\Craft::t("path/to/subfolder")));
            // line 22
            echo "
\t\t\t</td>
\t\t</tr>
\t</table>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_components/fieldtypes/Assets/settings";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 22,  147 => 8,  142 => 5,  126 => 3,  121 => 105,  119 => 97,  114 => 95,  103 => 91,  100 => 85,  96 => 84,  86 => 81,  84 => 73,  71 => 65,  66 => 62,  64 => 58,  56 => 54,  53 => 52,  46 => 43,  44 => 42,  29 => 29,  27 => 28,  21 => 2,  19 => 1,  258 => 163,  256 => 162,  249 => 156,  243 => 152,  236 => 150,  232 => 149,  226 => 147,  220 => 145,  217 => 144,  207 => 149,  201 => 147,  195 => 145,  192 => 144,  185 => 143,  176 => 142,  173 => 141,  169 => 140,  165 => 138,  163 => 129,  158 => 126,  154 => 16,  151 => 120,  149 => 13,  145 => 117,  143 => 108,  139 => 4,  137 => 96,  133 => 94,  131 => 84,  127 => 82,  124 => 74,  118 => 73,  115 => 72,  110 => 93,  108 => 70,  105 => 69,  99 => 67,  97 => 66,  92 => 63,  90 => 83,  87 => 58,  85 => 57,  82 => 54,  79 => 70,  77 => 66,  75 => 50,  73 => 48,  70 => 44,  67 => 42,  65 => 41,  63 => 35,  60 => 56,  58 => 30,  54 => 26,  51 => 24,  49 => 50,  47 => 22,  45 => 20,  42 => 17,  40 => 16,  38 => 41,  34 => 39,  32 => 30,  30 => 8,  28 => 7,  26 => 5,  24 => 27,);
    }
}
