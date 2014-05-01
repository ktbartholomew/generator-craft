<?php

/* _layouts/basecp */
class __TwigTemplate_6fe8df2dbdab86394af6bb59d63ef3ac6b1937aca3e36f87f29ab20713bff744 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/base");

        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        switch ($this->getAttribute($this->getContext($context, "craft"), "locale")) {
            case "en_gb":
            {
                // line 6
                $context["datepickerLocale"] = "en-GB";
                break;
            }
            case "fr_ca":
            {
                // line 8
                $context["datepickerLocale"] = "fr-CA";
                break;
            }
            default:
            {
                // line 10
                $context["language"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getLocaleData", array(), "method"), "getLanguageID", array(0 => $this->getAttribute($this->getContext($context, "craft"), "locale")), "method");
                // line 11
                if (twig_in_filter($this->getContext($context, "language"), array(0 => "ar", 1 => "de", 2 => "fr", 3 => "it", 4 => "ja", 5 => "nb", 6 => "nl"))) {
                    // line 12
                    $context["datepickerLocale"] = $this->getContext($context, "language");
                }
            }
        }
        // line 18
        if (array_key_exists("datepickerLocale", $context)) {
            // line 19
            \Craft\craft()->templates->includeJsResource((("lib/datepicker-i18n/datepicker-" . $this->getContext($context, "datepickerLocale")) . ".js"), true);
        }
        // line 22
        \Craft\craft()->templates->includeJsResource("js/cp.js", true);
        // line 23
        \Craft\craft()->templates->includeJsResource("js/craft.js", true);
        // line 24
        \Craft\craft()->templates->includeJsResource((("lib/garnish-0.1" . (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 25
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.fileupload.js", true);
        // line 26
        \Craft\craft()->templates->includeJsResource("lib/fileupload/jquery.ui.widget.js", true);
        // line 27
        \Craft\craft()->templates->includeJsResource((("lib/jquery.placeholder" . (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 28
        \Craft\craft()->templates->includeJsResource((("lib/jquery-ui-1.10.4.custom" . (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 29
        \Craft\craft()->templates->includeJsResource((("lib/jquery-2.1.0" . (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "useCompressedJs")) ? (".min") : (""))) . ".js"), true);
        // line 30
        \Craft\craft()->templates->includeJsResource((("lib/xregexp-all" . (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "useCompressedJs")) ? ("-min") : (""))) . ".js"), true);
        // line 32
        \Craft\craft()->templates->includeTranslations(
        	"Show",
        	"Hide"
        );
        // line 34
        $context["orientation"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getLocaleData", array(), "method"), "getOrientation", array(), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_foot($context, array $blocks = array())
    {
        // line 37
        echo "\t<noscript>
\t\t<div class=\"message-container no-access\">
\t\t\t<div class=\"pane notice\">
\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, \Craft\Craft::t("JavaScript must be enabled to access the Craft control panel."), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t</noscript>

\t<script type=\"text/javascript\">
\t\twindow.Craft = {
\t\t\tsiteUid:              \"";
        // line 47
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getSiteUid", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tbaseUrl:              \"";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseCpUrl:            \"";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getCpUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tbaseSiteUrl:          \"";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getSiteUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tactionUrl:            \"";
        // line 51
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getActionUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tresourceUrl:          \"";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, \Craft\UrlHelper::getResourceUrl(), "js"), "html", null, true);
        echo "\",
\t\t\tscriptName:           \"";
        // line 53
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "getScriptName", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tomitScriptNameInUrls: ";
        // line 54
        echo (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "omitScriptNameInUrls", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tusePathInfo:          ";
        // line 55
        echo (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "usePathInfo", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\tresourceTrigger:      \"";
        // line 56
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "getResourceTrigger", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tactionTrigger:        \"";
        // line 57
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "actionTrigger"), "js"), "html", null, true);
        echo "\",
\t\t\tpath:                 \"";
        // line 58
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "getPath", array(), "method"), "js"), "html", null, true);
        echo "\",
\t\t\tlocale:               \"";
        // line 59
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "craft"), "locale"), "js"), "html", null, true);
        echo "\",
\t\t\torientation:          \"";
        // line 60
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "orientation"), "js"), "html", null, true);
        echo "\",
\t\t\tleft:                 \"";
        // line 61
        echo ((($this->getContext($context, "orientation") == "ltr")) ? ("left") : ("right"));
        echo "\",
\t\t\tright:                \"";
        // line 62
        echo ((($this->getContext($context, "orientation") == "ltr")) ? ("right") : ("left"));
        echo "\",
\t\t\tPersonal:             ";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "CraftPersonal"), "html", null, true);
        echo ",
\t\t\tClient:               ";
        // line 64
        echo twig_escape_filter($this->env, $this->getContext($context, "CraftClient"), "html", null, true);
        echo ",
\t\t\tPro:                  ";
        // line 65
        echo twig_escape_filter($this->env, $this->getContext($context, "CraftPro"), "html", null, true);
        echo ",
\t\t\tedition:              ";
        // line 66
        echo twig_escape_filter($this->env, $this->getContext($context, "CraftEdition"), "html", null, true);
        echo ",
\t\t\tisLocalized:          ";
        // line 67
        echo (($this->getAttribute($this->getContext($context, "craft"), "isLocalized", array(), "method")) ? ("true") : ("false"));
        echo ",
\t\t\ttranslations:         ";
        // line 68
        echo \Craft\craft()->templates->getTranslations();
        echo ",
\t\t\tmaxUploadSize:        ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getMaxUploadSize", array(), "method"), "html", null, true);
        echo ",
\t\t\tslugWordSeparator:    \"";
        // line 70
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "slugWordSeparator"), "js"), "html", null, true);
        echo "\"
\t\t};

\t\twindow.Craft.fileKinds = {};
\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "app"), "getFileKinds", array(), "method"));
        foreach ($context['_seq'] as $context["kind"] => $context["info"]) {
            // line 75
            echo "\t\t\twindow.Craft.fileKinds.";
            echo twig_escape_filter($this->env, $this->getContext($context, "kind"), "html", null, true);
            echo " = [];
\t\t\t";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "info"), "extensions"));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 77
                echo "\t\t\t\twindow.Craft.fileKinds.";
                echo twig_escape_filter($this->env, $this->getContext($context, "kind"), "html", null, true);
                echo ".push(\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "extension"), "html", null, true);
                echo "\");
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['kind'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t</script>
";
    }

    public function getTemplateName()
    {
        return "_layouts/basecp";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 80,  224 => 79,  213 => 77,  209 => 76,  204 => 75,  200 => 74,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  149 => 59,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  117 => 51,  113 => 50,  109 => 49,  105 => 48,  91 => 40,  86 => 37,  83 => 36,  78 => 34,  73 => 32,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  55 => 22,  52 => 19,  50 => 18,  45 => 12,  41 => 10,  35 => 8,  145 => 58,  141 => 57,  127 => 49,  121 => 52,  119 => 46,  110 => 40,  106 => 39,  101 => 47,  95 => 34,  93 => 33,  89 => 32,  85 => 31,  79 => 28,  76 => 27,  63 => 26,  61 => 25,  59 => 24,  57 => 23,  46 => 14,  43 => 11,  38 => 11,  33 => 6,  31 => 5,  29 => 6,  27 => 3,  25 => 4,);
    }
}
