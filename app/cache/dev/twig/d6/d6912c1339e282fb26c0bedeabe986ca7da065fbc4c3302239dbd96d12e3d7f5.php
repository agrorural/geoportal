<?php

/* __string_template__48e111507d4c453a79717aafffc9c1bfa98b0393787f33e0be057cad8a8218d3 */
class __TwigTemplate_13e99c2e9d0838bf515cde63b1cf69fe855e96e4b608603c7eecb207cdef4276 extends Twig_Template
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
        $__internal_5f560055cacdfa55082fc6de0c0cdc154b24ccc3fafce2d5746034ae8c0e5f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f560055cacdfa55082fc6de0c0cdc154b24ccc3fafce2d5746034ae8c0e5f68->enter($__internal_5f560055cacdfa55082fc6de0c0cdc154b24ccc3fafce2d5746034ae8c0e5f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__48e111507d4c453a79717aafffc9c1bfa98b0393787f33e0be057cad8a8218d3"));

        // line 1
        echo "<div style=\"color: #6FB536; font-weight:bold\">powered by Mapbender</div>";
        
        $__internal_5f560055cacdfa55082fc6de0c0cdc154b24ccc3fafce2d5746034ae8c0e5f68->leave($__internal_5f560055cacdfa55082fc6de0c0cdc154b24ccc3fafce2d5746034ae8c0e5f68_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__48e111507d4c453a79717aafffc9c1bfa98b0393787f33e0be057cad8a8218d3";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"color: #6FB536; font-weight:bold\">powered by Mapbender</div>", "__string_template__48e111507d4c453a79717aafffc9c1bfa98b0393787f33e0be057cad8a8218d3", "");
    }
}
