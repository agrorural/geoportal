<?php

/* MapbenderCoreBundle:Element:scaleselector.html.twig */
class __TwigTemplate_e9fdc6ee30fa1f45dc409ee974019112290ba91c631b6096c350e04c132a8b5b extends Twig_Template
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
        $__internal_16439b89048978db587ecef8cf268b625616d99995260e8a491530f069bfae5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16439b89048978db587ecef8cf268b625616d99995260e8a491530f069bfae5f->enter($__internal_16439b89048978db587ecef8cf268b625616d99995260e8a491530f069bfae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:scaleselector.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array()) == true)) {
            // line 2
            echo "  <span class=\"labelInput\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "</span>
";
        }
        // line 4
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-scaleselector dropdown\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
        echo "\">
  <select class=\"hiddenDropdown\"></select>
  <div class=\"dropdownValue iconDown\"></div>
  <ul class=\"dropdownList\"></ul>
</div>
";
        
        $__internal_16439b89048978db587ecef8cf268b625616d99995260e8a491530f069bfae5f->leave($__internal_16439b89048978db587ecef8cf268b625616d99995260e8a491530f069bfae5f_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:scaleselector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if configuration.label == true %}
  <span class=\"labelInput\">{{ title|trans }}</span>
{% endif %}
<div id=\"{{ id }}\" class=\"mb-element mb-element-scaleselector dropdown\" title=\"{{ configuration.tooltip|default(title)|trans }}\">
  <select class=\"hiddenDropdown\"></select>
  <div class=\"dropdownValue iconDown\"></div>
  <ul class=\"dropdownList\"></ul>
</div>
", "MapbenderCoreBundle:Element:scaleselector.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/scaleselector.html.twig");
    }
}
