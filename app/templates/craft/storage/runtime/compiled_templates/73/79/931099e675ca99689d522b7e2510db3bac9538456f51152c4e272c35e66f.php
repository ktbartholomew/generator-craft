<?php

/* _upgrademodal */
class __TwigTemplate_7379931099e675ca99689d522b7e2510db3bac9538456f51152c4e272c35e66f extends Craft\BaseTemplate
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
        // line 31
        echo "
";
        // line 32
        $context["__internal_d827d015c6e4bfd3714255544b0d8ffb4531a3abf0b8a852eb39e58d9ca73746"] = $this;
        // line 33
        $context["forms"] = $this->env->loadTemplate("_includes/forms");
        // line 34
        echo "

<div id=\"upgrademodal-compare\" class=\"body\">
\t<table class=\"data fullwidth\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td></td>
\t\t\t\t<th scope=\"col\"><h1 class=\"logo craftclient\">Craft Client</h1></th>
\t\t\t\t<th scope=\"col\"><h1 class=\"logo craftpro\">Craft Pro</h1></th>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 46
        echo $context["__internal_d827d015c6e4bfd3714255544b0d8ffb4531a3abf0b8a852eb39e58d9ca73746"]->getbuybtn($this->getContext($context, "CraftClient"), $this->getAttribute($this->getContext($context, "editions"), $this->getContext($context, "CraftClient"), array(), "array"), $this->getContext($context, "licensedEdition"), $this->getContext($context, "canTestEditions"));
        echo "</td>
\t\t\t\t<td>";
        // line 47
        echo $context["__internal_d827d015c6e4bfd3714255544b0d8ffb4531a3abf0b8a852eb39e58d9ca73746"]->getbuybtn($this->getContext($context, "CraftPro"), $this->getAttribute($this->getContext($context, "editions"), $this->getContext($context, "CraftPro"), array(), "array"), $this->getContext($context, "licensedEdition"), $this->getContext($context, "canTestEditions"));
        echo "</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"section\">";
        // line 52
        echo twig_escape_filter($this->env, \Craft\Craft::t("Content Publishing"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 55
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited Singles and Channels"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 60
        echo twig_escape_filter($this->env, \Craft\Craft::t("Structure sections"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 65
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entry versioning"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 70
        echo twig_escape_filter($this->env, \Craft\Craft::t("Entry drafts"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"users\">";
        // line 76
        echo twig_escape_filter($this->env, \Craft\Craft::t("User Accounts"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 79
        echo twig_escape_filter($this->env, \Craft\Craft::t("Additional user accounts"), "html", null, true);
        echo "</th>
\t\t\t\t<td>";
        // line 80
        echo twig_escape_filter($this->env, \Craft\Craft::t("One “Client” account"), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 81
        echo twig_escape_filter($this->env, \Craft\Craft::t("Unlimited"), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 84
        echo twig_escape_filter($this->env, \Craft\Craft::t("User groups"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 89
        echo twig_escape_filter($this->env, \Craft\Craft::t("User permissions"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 94
        echo twig_escape_filter($this->env, \Craft\Craft::t("Public user registration"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"brush\">";
        // line 100
        echo twig_escape_filter($this->env, \Craft\Craft::t("System Branding"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 103
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom login screen logo"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 108
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom HTML email template"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 113
        echo twig_escape_filter($this->env, \Craft\Craft::t("Custom email message wording"), "html", null, true);
        echo "</th>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"assets\">";
        // line 119
        echo twig_escape_filter($this->env, \Craft\Craft::t("Assets"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 122
        echo twig_escape_filter($this->env, \Craft\Craft::t("Amazon S3 support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 127
        echo twig_escape_filter($this->env, \Craft\Craft::t("Rackspace Cloud Files support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 132
        echo twig_escape_filter($this->env, \Craft\Craft::t("Google Cloud Storage support"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th class=\"group\" colspan=\"3\" data-icon=\"language\">";
        // line 138
        echo twig_escape_filter($this->env, \Craft\Craft::t("Localization and Translation"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 141
        echo twig_escape_filter($this->env, \Craft\Craft::t("Section and entry locale targeting"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 146
        echo twig_escape_filter($this->env, \Craft\Craft::t("Content translations"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"feature\" scope=\"row\">";
        // line 151
        echo twig_escape_filter($this->env, \Craft\Craft::t("Locale-specific user permissions"), "html", null, true);
        echo "</th>
\t\t\t\t<td></td>
\t\t\t\t<td><span data-icon=\"check\"></span></td>
\t\t\t</tr>
\t\t\t<tr class=\"buybtns\">
\t\t\t\t<td></td>
\t\t\t\t<td>";
        // line 157
        echo $context["__internal_d827d015c6e4bfd3714255544b0d8ffb4531a3abf0b8a852eb39e58d9ca73746"]->getbuybtn($this->getContext($context, "CraftClient"), $this->getAttribute($this->getContext($context, "editions"), $this->getContext($context, "CraftClient"), array(), "array"), $this->getContext($context, "licensedEdition"), $this->getContext($context, "canTestEditions"));
        echo "</td>
\t\t\t\t<td>";
        // line 158
        echo $context["__internal_d827d015c6e4bfd3714255544b0d8ffb4531a3abf0b8a852eb39e58d9ca73746"]->getbuybtn($this->getContext($context, "CraftPro"), $this->getAttribute($this->getContext($context, "editions"), $this->getContext($context, "CraftPro"), array(), "array"), $this->getContext($context, "licensedEdition"), $this->getContext($context, "canTestEditions"));
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>
</div>


<div id=\"upgrademodal-checkout\" class=\"body hidden\">
\t<h1 class=\"logo\"></h1>

\t<form class=\"pane\">
\t\t<div class=\"header\">
\t\t\t<p class=\"price\"></p>
\t\t</div>

\t\t";
        // line 173
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Name on the card"), "id" => "cc-name"));
        // line 176
        echo "

\t\t";
        // line 178
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("Credit card number"), "id" => "cc-num", "autocomplete" => false));
        // line 182
        echo "

\t\t<table class=\"inputs fullwidth\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"cc-month\">
\t\t\t\t\t\t";
        // line 188
        ob_start();
        // line 189
        echo "\t\t\t\t\t\t\t<div class=\"select fullwidth\">
\t\t\t\t\t\t\t\t<select id=\"cc-month\">
\t\t\t\t\t\t\t\t\t";
        // line 191
        $context["localeData"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "i18n"), "getLocaleData", array(), "method");
        // line 192
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["month2"] = sprintf("%02d", $this->getContext($context, "month"));
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "month2"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "month2"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "localeData"), "getMonthName", array(0 => $this->getContext($context, "month")), "method"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        $context["monthInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 199
        echo "
\t\t\t\t\t\t";
        // line 200
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Expiration month"), "id" => "cc-month"), $this->getContext($context, "monthInput"));
        // line 203
        echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"thin cc-year\">
\t\t\t\t\t\t";
        // line 207
        ob_start();
        // line 208
        echo "\t\t\t\t\t\t\t<div class=\"select fullwidth\">
\t\t\t\t\t\t\t\t<select id=\"cc-year\">
\t\t\t\t\t\t\t\t\t";
        // line 210
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($this->getContext($context, "now"), "year"), ($this->getAttribute($this->getContext($context, "now"), "year") + 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "year"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "year"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        $context["yearInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 216
        echo "
\t\t\t\t\t\t";
        // line 217
        echo $context["forms"]->getfield(array("label" => \Craft\Craft::t("Exp. year"), "id" => "cc-year"), $this->getContext($context, "yearInput"));
        // line 220
        echo "
\t\t\t\t\t</td>

\t\t\t\t\t<td class=\"thin cc-cvc\">
\t\t\t\t\t\t";
        // line 224
        echo $context["forms"]->gettextField(array("label" => \Craft\Craft::t("CVC"), "id" => "cc-cvc", "size" => 5, "autocomplete" => false));
        // line 229
        echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>

\t\t<div class=\"footer\">
\t\t\t<div class=\"buttons right\">
\t\t\t\t<div id=\"upgrademodal-cancelcheckout\" class=\"btn\">";
        // line 237
        echo twig_escape_filter($this->env, \Craft\Craft::t("Cancel"), "html", null, true);
        echo "</div>
\t\t\t\t<input type=\"submit\" class=\"btn submit\" value=\"";
        // line 238
        echo twig_escape_filter($this->env, \Craft\Craft::t("Purchase"), "html", null, true);
        echo "\">
\t\t\t\t<div class=\"spinner hidden\"></div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<p class=\"secure icon light centeralign\">";
        // line 244
        echo \Craft\Craft::t("Your payment is safe and secure with {stripe}.", array("stripe" => "<a href=\"https://stripe.com/\" target=\"_blank\">Stripe</a>"));
        echo "
</div>


<div id=\"upgrademodal-success\" class=\"body hidden\">
\t<div class=\"message\">
\t\t<p>";
        // line 250
        echo "Craft has been upgraded successfully!";
        echo "</p>
\t\t<div class=\"btn\">";
        // line 251
        echo twig_escape_filter($this->env, \Craft\Craft::t("Reload"), "html", null, true);
        echo "</div>
\t</div>
</div>
";
    }

    // line 1
    public function getbuybtn($_edition = null, $_info = null, $_licensedEdition = null, $_canTestEditions = null)
    {
        $context = $this->env->mergeGlobals(array(
            "edition" => $_edition,
            "info" => $_info,
            "licensedEdition" => $_licensedEdition,
            "canTestEditions" => $_canTestEditions,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "\t\t";
            // line 4
            echo "\t\t";
            if (($this->getContext($context, "edition") == $this->getContext($context, "CraftEdition"))) {
                // line 5
                echo "\t\t\t<div class=\"installed\">";
                echo twig_escape_filter($this->env, \Craft\Craft::t("Installed"), "html", null, true);
                echo "</div><br>
\t\t";
            }
            // line 7
            echo "
\t\t<div class=\"btngroup\">
\t\t\t";
            // line 10
            echo "\t\t\t";
            if (($this->getContext($context, "edition") > $this->getContext($context, "licensedEdition"))) {
                // line 11
                echo "\t\t\t\t<div class=\"btn buybtn\" data-edition=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "edition"), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 12
                if ($this->getAttribute($this->getContext($context, "info"), "salePrice")) {
                    // line 13
                    echo "\t\t\t\t\t\t<span class=\"listedprice\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "formattedPrice"), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "formattedSalePrice"), "html", null, true);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "formattedPrice"), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 19
            echo "
\t\t\t";
            // line 21
            echo "\t\t\t";
            if ($this->getContext($context, "canTestEditions")) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getContext($context, "edition") == $this->getContext($context, "CraftEdition"))) {
                    // line 23
                    echo "\t\t\t\t\t<div class=\"btn test\" data-edition=\"0\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Uninstall"), "html", null, true);
                    echo "</div>
\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t<div class=\"btn test\" data-edition=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "edition"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, \Craft\Craft::t("Test"), "html", null, true);
                    echo "</div>
\t\t\t\t";
                }
                // line 27
                echo "\t\t\t";
            }
            // line 28
            echo "\t\t</div>
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_upgrademodal";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 28,  477 => 27,  469 => 25,  463 => 23,  460 => 22,  457 => 21,  454 => 19,  450 => 17,  444 => 15,  436 => 13,  434 => 12,  429 => 11,  426 => 10,  422 => 7,  416 => 5,  413 => 4,  411 => 3,  409 => 2,  395 => 1,  387 => 251,  383 => 250,  374 => 244,  365 => 238,  361 => 237,  351 => 229,  349 => 224,  343 => 220,  341 => 217,  338 => 216,  333 => 213,  322 => 211,  318 => 210,  314 => 208,  312 => 207,  306 => 203,  304 => 200,  301 => 199,  296 => 196,  283 => 194,  280 => 193,  275 => 192,  273 => 191,  269 => 189,  267 => 188,  259 => 182,  257 => 178,  253 => 176,  251 => 173,  233 => 158,  229 => 157,  220 => 151,  212 => 146,  204 => 141,  198 => 138,  189 => 132,  181 => 127,  173 => 122,  167 => 119,  158 => 113,  150 => 108,  142 => 103,  136 => 100,  127 => 94,  119 => 89,  111 => 84,  105 => 81,  101 => 80,  97 => 79,  91 => 76,  82 => 70,  74 => 65,  66 => 60,  58 => 55,  52 => 52,  44 => 47,  40 => 46,  26 => 34,  24 => 33,  22 => 32,  19 => 31,);
    }
}
