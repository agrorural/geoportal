<?php

/* MapbenderCoreBundle:Element:measure_dialog.html.twig */
class __TwigTemplate_9d5378a852e34b03263c35431ca90bc3d3feae2aede40e622991a5e3411c0f0f extends Twig_Template
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
        $__internal_2dfdd4b4e31ecd0a3920bdcc4d85e2a7e4d0643efc3ac3df50ef1739ad46e77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfdd4b4e31ecd0a3920bdcc4d85e2a7e4d0643efc3ac3df50ef1739ad46e77a->enter($__internal_2dfdd4b4e31ecd0a3920bdcc4d85e2a7e4d0643efc3ac3df50ef1739ad46e77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:measure_dialog.html.twig"));

        // line 1
        echo "<div class=\"mb-element mb-element-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "type", array()), "html", null, true);
        echo "ruler\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "\"></div>
";
        
        $__internal_2dfdd4b4e31ecd0a3920bdcc4d85e2a7e4d0643efc3ac3df50ef1739ad46e77a->leave($__internal_2dfdd4b4e31ecd0a3920bdcc4d85e2a7e4d0643efc3ac3df50ef1739ad46e77a_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:measure_dialog.html.twig";
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
        return new Twig_Source("<div class=\"mb-element mb-element-{{ configuration.type }}ruler\" id=\"{{ id }}\" title=\"{{ title|trans }}\"></div>
", "MapbenderCoreBundle:Element:measure_dialog.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/measure_dialog.html.twig");
    }
}
