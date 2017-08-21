<?php

/* MapbenderCoreBundle:Element:button.html.twig */
class __TwigTemplate_b2303b76da3cedb4e70e3ef20bde57175772501bf8d444dced4e219a4cfe3025 extends Twig_Template
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
        $__internal_514350f429dc2327e7ee0bd35c7fb5fe690e406fa7e19552f82f702469afaaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514350f429dc2327e7ee0bd35c7fb5fe690e406fa7e19552f82f702469afaaad->enter($__internal_514350f429dc2327e7ee0bd35c7fb5fe690e406fa7e19552f82f702469afaaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:button.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "group", array(), "any", true, true)) {
            // line 2
            echo "  <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
            echo "\" class=\"mb-button ";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array(), "any", true, true)) {
                echo " iconBig ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "icon", array()), "html", null, true);
            }
            echo "\">";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            }
            echo "</label><input type=\"checkbox\" class=\"mb-hiddenCheckbox\" name=\"mb-button-group[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "group", array()), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"/>
";
        } else {
            // line 4
            echo "  <span id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"iconBig ";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "icon", array()), "html", null, true);
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
            echo "\">";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            }
            echo "</span>
";
        }
        
        $__internal_514350f429dc2327e7ee0bd35c7fb5fe690e406fa7e19552f82f702469afaaad->leave($__internal_514350f429dc2327e7ee0bd35c7fb5fe690e406fa7e19552f82f702469afaaad_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if configuration.group is defined %}
  <label for=\"{{ id }}\" title=\"{{ configuration.tooltip|default(title)|trans }}\" class=\"mb-button {% if configuration.icon is defined %} iconBig {{ configuration.icon }}{% endif %}\">{% if configuration.label %}{{ title|trans }}{% endif %}</label><input type=\"checkbox\" class=\"mb-hiddenCheckbox\" name=\"mb-button-group[{{ configuration.group }}]\" value=\"{{ id }}\" id=\"{{ id }}\"/>
{% else %}
  <span id=\"{{ id }}\" class=\"iconBig {% if configuration.icon is defined %} {{ configuration.icon }}{% endif %}\" title=\"{{ configuration.tooltip|default(title)|trans }}\">{% if configuration.label %}{{ title|trans }}{% endif %}</span>
{% endif %}
", "MapbenderCoreBundle:Element:button.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/button.html.twig");
    }
}
