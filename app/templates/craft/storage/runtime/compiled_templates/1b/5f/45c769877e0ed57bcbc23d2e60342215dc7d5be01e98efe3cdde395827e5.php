<?php

/* _layout */
class __TwigTemplate_1b5f45c769877e0ed57bcbc23d2e60342215dc7d5be01e98efe3cdde395827e5 extends Craft\BaseTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metaDescription' => array($this, 'block_metaDescription'),
            'head_end' => array($this, 'block_head_end'),
            'body_start' => array($this, 'block_body_start'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts_start' => array($this, 'block_scripts_start'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta content=\"initial-scale=1, minimum-scale=1, width=device-width\" name=\"viewport\">
  <meta http-equiv=\"x-ua-compatible\" content=\"IE=edge\">
  <meta name=\"description\" value=\"";
        // line 18
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\">

\t<title>";
        // line 20
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "seo"), "metaTitle"), "html", null, true);
        echo "</title>

\t<link rel=\"home\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "siteUrl"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "environmentVariables"), "frontEndAssets", array(), "array"), "html", null, true);
        echo "css/site.css\">
\t<!--[if lt IE 9]>
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
  <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
\t";
        // line 28
        $this->displayBlock('head_end', $context, $blocks);
        // line 29
        echo "</head>
<body>
\t";
        // line 31
        $this->displayBlock('body_start', $context, $blocks);
        // line 32
        echo "\t";
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "\t";
        $this->displayBlock('scripts_start', $context, $blocks);
        // line 52
        echo "\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js\"></script>
\t<script src=\"/bower_components/requirejs/require.js\" data-main=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "environmentVariables"), "frontEndAssets", array(), "array"), "html", null, true);
        echo "js/site.js\"></script>
\t";
        // line 54
        $this->displayBlock('body_end', $context, $blocks);
        // line 55
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "config"), "environmentVariables"), "env", array(), "array") == "dev")) {
            echo "<script src=\"http://localhost:35729/livereload.js\"></script>";
        }
        // line 56
        echo "</body>
</html>
";
    }

    // line 18
    public function block_metaDescription($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "seo"), "metaDescription"), "html", null, true);
    }

    // line 28
    public function block_head_end($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body_start($context, array $blocks = array())
    {
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "\t\t";
        $context["pages"] = $this->getAttribute($this->getAttribute($this->getContext($context, "craft"), "entries"), "section", array(0 => "pages"), "method");
        // line 34
        echo "\t\t<nav id=\"site-nav\">
\t\t\t<ul role=\"navigation\">
\t\t\t\t";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            $_thisItemLevel = (int)$this->getAttribute($context["page"], 'level', array(), Twig_TemplateInterface::ANY_CALL, false, true);
            if (isset($context['nav'])) {
                $_tmpContext = $context;
                $context = $_contextsByLevel[$context['nav']['level']];
                if ($_thisItemLevel > $context['nav']['level']) {
                    for ($_i = $context['nav']['level']; $_i < $_thisItemLevel; $_i++) {
                                                // line 40
                        echo "              <ul>
                ";
                    }
                } else {
                                        // line 44
                    echo "          </li>
        ";
                    if ($_thisItemLevel < $context['nav']['level']) {
                        for ($_i = $context['nav']['level']-1; $_i >= $_thisItemLevel; $_i--) {
                            if (isset($_contextsByLevel[$_i])) {
                                $context = $_contextsByLevel[$_i];
                                                                // line 42
                                echo "              </ul>
            ";
                                                                // line 44
                                echo "          </li>
        ";
                                unset($_contextsByLevel[$_i]);
                            }
                        }
                    }
                }
                $context = $_tmpContext;
                unset($_tmpContext);
            } else {
                $_firstItemLevel = $_thisItemLevel;
            }
            $context['nav']['level'] = $_thisItemLevel;
            if (isset($_contextsByLevel[$_thisItemLevel-1])) {
                $context['nav']['parent'] = $_contextsByLevel[$_thisItemLevel-1];
                if (method_exists($context["page"], 'setParent')) {
                    $context["page"]->setParent($context['nav']['parent']["page"]);
                }
            } else {
                $context['nav']['parent'] = null;
            }
            $_contextsByLevel[$_thisItemLevel] = $context;
            // line 37
            echo "          <li>
            ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "getLink", array(), "method"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (isset($_thisItemLevel)) {
            $_tmpContext = $context;
            if ($_thisItemLevel > $_firstItemLevel) {
                for ($_i = $_thisItemLevel; $_i > $_firstItemLevel; $_i--) {
                    if (isset($_contextsByLevel[$_i])) {
                        $context = $_contextsByLevel[$_i];
                                                // line 44
                        echo "          </li>
        ";
                                                // line 42
                        echo "              </ul>
            ";
                    }
                }
            }
            $context = $_contextsByLevel[$_firstItemLevel];
                        // line 44
            echo "          </li>
        ";
            $context = $_tmpContext;
            unset($_thisItemLevel, $_firstItemLevel, $_i, $_contextsByLevel, $_tmpContext);
        }
        // line 46
        echo "\t\t\t</ul>
\t\t</nav>
\t";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 51
    public function block_scripts_start($context, array $blocks = array())
    {
    }

    // line 54
    public function block_body_end($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "_layout";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 54,  225 => 51,  220 => 50,  215 => 49,  209 => 46,  203 => 44,  196 => 42,  193 => 44,  179 => 38,  176 => 37,  153 => 44,  150 => 42,  143 => 44,  138 => 40,  128 => 36,  124 => 34,  121 => 33,  118 => 32,  113 => 31,  108 => 28,  102 => 18,  96 => 56,  91 => 55,  89 => 54,  85 => 53,  82 => 52,  79 => 51,  76 => 50,  73 => 49,  70 => 32,  68 => 31,  64 => 29,  62 => 28,  54 => 23,  50 => 22,  41 => 20,  36 => 18,  27 => 11,);
    }
}
