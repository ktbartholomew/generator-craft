<?php

/* entries/_titlefield */
class __TwigTemplate_4bb8f353b796cc9c79b14483d0a236e1f3b1310b46a6cf1b358754944b6dd144 extends Craft\BaseTemplate
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
        $context["__internal_8bc6326091755a7238d5805374fab8e110743b6ddea9106be2b518883cdf1153"] = $this->env->loadTemplate("_includes/forms");
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_8bc6326091755a7238d5805374fab8e110743b6ddea9106be2b518883cdf1153"]->gettextField(array("label" => \Craft\Craft::t($this->getAttribute($this->getAttribute($this->getContext($context, "entry"), "getType", array(), "method"), "titleLabel")), "id" => "title", "name" => "title", "value" => $this->getAttribute($this->getContext($context, "entry"), "title"), "errors" => $this->getAttribute($this->getContext($context, "entry"), "getErrors", array(0 => "title"), "method"), "first" => true, "autofocus" => true, "required" => true));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "entries/_titlefield";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 12,  24 => 3,  21 => 2,  19 => 1,);
    }
}
