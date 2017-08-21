<?php

/* MapbenderCoreBundle:Element:gpsposition.html.twig */
class __TwigTemplate_8656b552003e773e0898d77fb843d32dd80b01ae26c0c14c5e92372b9b794c27 extends Twig_Template
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
        $__internal_6825efaa6bbd73bcdc7f027088069826ca0423454ca88bef2301118f0c53b9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6825efaa6bbd73bcdc7f027088069826ca0423454ca88bef2301118f0c53b9a9->enter($__internal_6825efaa6bbd73bcdc7f027088069826ca0423454ca88bef2301118f0c53b9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:gpsposition.html.twig"));

        // line 1
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-gpsButton iconBig ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array()), "iconGps")) : ("iconGps")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
        echo "\">";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        }
        echo "</span>
";
        
        $__internal_6825efaa6bbd73bcdc7f027088069826ca0423454ca88bef2301118f0c53b9a9->leave($__internal_6825efaa6bbd73bcdc7f027088069826ca0423454ca88bef2301118f0c53b9a9_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:gpsposition.html.twig";
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
        return new Twig_Source("<span id=\"{{ id }}\" class=\"mb-gpsButton iconBig {{ configuration.icon|default('iconGps') }}\" title=\"{{ configuration.tooltip|default(title)|trans }}\">{% if configuration.label %}{{ title|trans }}{% endif %}</span>
", "MapbenderCoreBundle:Element:gpsposition.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.html.twig");
    }
}
