<?php

/* _elements/element */
class __TwigTemplate_8b9714e36c2b88f105e75554bc526ec0df5811919ab80fc618216e4c5e395b3d extends Craft\BaseTemplate
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
        echo \Craft\craft()->templates->invokeHook("cp.elements.element", $context);

    }

    public function getTemplateName()
    {
        return "_elements/element";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
