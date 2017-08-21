<?php

/* MapbenderCoreBundle:Element:about_dialog.html.twig */
class __TwigTemplate_7d32c67bf643819838d3e2751fb4e8f352b99647ff73aadd1eefaa0a4697bda6 extends Twig_Template
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
        $__internal_543de35b6bb343f190b625a58e52b65b07f89f94bff6329337bcb7e5c3f31f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543de35b6bb343f190b625a58e52b65b07f89f94bff6329337bcb7e5c3f31f71->enter($__internal_543de35b6bb343f190b625a58e52b65b07f89f94bff6329337bcb7e5c3f31f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:about_dialog.html.twig"));

        // line 1
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-aboutButton iconAbout iconBig\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
        echo "\">";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        }
        echo "</span>
";
        
        $__internal_543de35b6bb343f190b625a58e52b65b07f89f94bff6329337bcb7e5c3f31f71->leave($__internal_543de35b6bb343f190b625a58e52b65b07f89f94bff6329337bcb7e5c3f31f71_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:about_dialog.html.twig";
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
        return new Twig_Source("<span id=\"{{ id }}\" class=\"mb-aboutButton iconAbout iconBig\" title=\"{{ configuration.tooltip|default(title)|trans }}\">{% if configuration.label %}{{ title|trans }}{% endif %}</span>
", "MapbenderCoreBundle:Element:about_dialog.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/about_dialog.html.twig");
    }
}
