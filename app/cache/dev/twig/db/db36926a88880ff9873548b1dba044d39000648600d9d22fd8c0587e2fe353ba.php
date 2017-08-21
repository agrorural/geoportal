<?php

/* MapbenderCoreBundle:Element:activityindicator.html.twig */
class __TwigTemplate_5b8a363f2e59bd2c384c93faf96f55667677b41fb8b1d40b99272cd845981efa extends Twig_Template
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
        $__internal_024e5f9d2df1cf2a7db60d309918b16b8adf53dc0ca8bd3358014dcaa0d9cba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024e5f9d2df1cf2a7db60d309918b16b8adf53dc0ca8bd3358014dcaa0d9cba5->enter($__internal_024e5f9d2df1cf2a7db60d309918b16b8adf53dc0ca8bd3358014dcaa0d9cba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:activityindicator.html.twig"));

        // line 1
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-activityindicator iconActivity right-bottom\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
        echo "\"></span>";
        
        $__internal_024e5f9d2df1cf2a7db60d309918b16b8adf53dc0ca8bd3358014dcaa0d9cba5->leave($__internal_024e5f9d2df1cf2a7db60d309918b16b8adf53dc0ca8bd3358014dcaa0d9cba5_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:activityindicator.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<span id=\"{{ id }}\" class=\"mb-element mb-element-activityindicator iconActivity right-bottom\" title=\"{{ configuration.tooltip|default(title)|trans }}\"></span>", "MapbenderCoreBundle:Element:activityindicator.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/activityindicator.html.twig");
    }
}
