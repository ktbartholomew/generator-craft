<?php

/* settings/fields/{{object.groupId}} */
class __TwigTemplate_b5b0cc283a5fa391ee38544ec8c397838cc9ac273e5c7fee82a179c4657dc4b5 extends Craft\BaseTemplate
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
        echo "settings/fields/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "groupId"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "settings/fields/{{object.groupId}}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
