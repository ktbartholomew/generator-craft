<?php

/* login */
class __TwigTemplate_0c034dddca684a677310e8c9c4732ebb91302490a7e3ccd28a32aeb8bd1f5571 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_layouts/basecp");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_layouts/basecp";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 3
        $context["title"] = \Craft\Craft::t("Login");
        // line 4
        \Craft\craft()->templates->includeCssResource("css/login.css");
        // line 5
        \Craft\craft()->templates->includeJsResource("js/login.js");
        // line 6
        \Craft\craft()->templates->includeTranslations(
        	"Reset Password",
        	"Check your email for instructions to reset your password."
        );
        // line 11
        $context["username"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "rememberUsernameDuration")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "session"), "rememberedUsername")) : (""));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    <script type=\"text/javascript\">
\t\tvar cookieTest = 'CraftCookieTest='+Math.floor(Math.random() * 1000000);
\t\tdocument.cookie = cookieTest;
\t\tvar cookiesEnabled = document.cookie.search(cookieTest) != -1;
\t\tif (cookiesEnabled)
\t\t{
\t\t\tdocument.cookie = cookieTest + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

\t\t\tdocument.write(
\t\t\t\t'<form id=\"login-form\" method=\"post\" accept-charset=\"UTF-8\" ";
        // line 23
        if ((($this->getContext($context, "CraftEdition") >= $this->getContext($context, "CraftClient")) && $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "rebrand"), "isLogoUploaded"))) {
            // line 24
            $context["logo"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "rebrand"), "logo");
            // line 25
            $context["padding"] = ($this->getAttribute($this->getContext($context, "logo"), "height") + 30);
            // line 26
            echo "\t\t\t\t\t\tstyle=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logo"), "url"), "html", null, true);
            echo "); background-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logo"), "width"), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logo"), "height"), "html", null, true);
            echo "px; padding-top: ";
            echo twig_escape_filter($this->env, $this->getContext($context, "padding"), "html", null, true);
            echo "px; margin-top: -";
            echo twig_escape_filter($this->env, round(((156 + $this->getContext($context, "padding")) / 2)), "html", null, true);
            echo "px\"";
        }
        // line 27
        echo ">' +
\t\t\t\t\t'";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->gettextField(array("id" => "loginName", "name" => "username", "placeholder" => \Craft\Craft::t("Username or Email"), "value" => $this->getContext($context, "username"))), "js"), "html", null, true);
        echo "' +

\t\t\t\t\t'<div id=\"login-fields\" class=\"nested-fields\">' +
\t\t\t\t\t\t'";
        // line 31
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->getpasswordField(array("id" => "password", "name" => "password", "placeholder" => \Craft\Craft::t("Password"))), "js"), "html", null, true);
        echo "' +
\t\t\t\t\t\t'<a id=\"forgot-password\">";
        // line 32
        echo twig_escape_filter($this->env, \Craft\Craft::t("Forget your password?"), "html", null, true);
        echo "</a>' +
\t\t\t\t\t\t";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "rememberedUserSessionDuration")) {
            // line 34
            echo "\t\t\t\t\t\t\t'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["forms"]->getcheckboxField(array("id" => "rememberMe", "label" => \Craft\Craft::t("Keep me logged in"))), "js"), "html", null, true);
            echo "' +
\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t'</div>' +

\t\t\t\t\t'<div class=\"buttons\">' +
\t\t\t\t\t\t'<div id=\"ssl-icon\" class=\"disabled\"><div class=\"";
        // line 39
        echo (($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "isSecure")) ? ("secure") : ("insecure"));
        echo " icon\"></div></div>' +
\t\t\t\t\t\t'<input id=\"submit\" class=\"btn submit disabled\" type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, \Craft\Craft::t("Login"), "html", null, true);
        echo "\">' +
\t\t\t\t\t\t'<div id=\"spinner\" class=\"spinner hidden\"></div>' +
\t\t\t\t\t'</div>' +
\t\t\t\t'</form>'
\t\t\t);

\t\t\t";
        // line 46
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "request"), "isMobileBrowser", array(0 => true), "method"))) {
            // line 47
            echo "\t\t\t\tdocument.getElementById(\"";
            echo (($this->getContext($context, "username")) ? ("password") : ("loginName"));
            echo "\").focus();
\t\t\t";
        }
        // line 49
        echo "\t\t\twindow.returnUrl = '";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "session"), "returnUrl"), "js"), "html", null, true);
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.write(
\t\t\t\t'<div class=\"no-access\">' +
\t\t\t\t\t'<div class=\"pane\">' +
\t\t\t\t\t\t'<div class=\"pane-body\">' +
\t\t\t\t\t\t\t'<div class=\"notice\">' +
\t\t\t\t\t\t\t\t'<div class=\"icon\"></div>' +
\t\t\t\t\t\t\t\t'<p>";
        // line 59
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cookies must be enabled to access the Craft control panel."), "html", null, true);
        echo "<br>' +
\t\t\t\t\t\t\t\t\t'<a class=\"go\" href=\"\">";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("See how"), "html", null, true);
        echo "</a>' +
\t\t\t\t\t\t\t\t'</p>' +
\t\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t'</div>' +
\t\t\t\t'</div>'
\t\t\t);
\t\t}
\t</script>
";
    }

    public function getTemplateName()
    {
        return "login";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 60,  141 => 59,  127 => 49,  121 => 47,  119 => 46,  110 => 40,  106 => 39,  101 => 36,  95 => 34,  93 => 33,  89 => 32,  85 => 31,  79 => 28,  76 => 27,  63 => 26,  61 => 25,  59 => 24,  57 => 23,  46 => 14,  43 => 13,  38 => 11,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }
}
