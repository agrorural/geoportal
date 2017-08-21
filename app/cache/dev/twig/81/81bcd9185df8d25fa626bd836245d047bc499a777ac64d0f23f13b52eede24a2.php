<?php

/* MapbenderCoreBundle:Element:htmlelement.html.twig */
class __TwigTemplate_9724ffb1026220d015a171ea7387b4ff4584cdf6de2bef6654a3ae2ca1c0ebbd extends Twig_Template
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
        $__internal_5a70d7a2cc65a0b4f3af1cb15d3950615915d1664988fc0abb867e7491c9869b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a70d7a2cc65a0b4f3af1cb15d3950615915d1664988fc0abb867e7491c9869b->enter($__internal_5a70d7a2cc65a0b4f3af1cb15d3950615915d1664988fc0abb867e7491c9869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:htmlelement.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-htmlelement ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "classes", array()), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        echo twig_include($this->env, $context, twig_template_from_string($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "content", array())));
        echo "
</div>
";
        
        $__internal_5a70d7a2cc65a0b4f3af1cb15d3950615915d1664988fc0abb867e7491c9869b->leave($__internal_5a70d7a2cc65a0b4f3af1cb15d3950615915d1664988fc0abb867e7491c9869b_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:htmlelement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-htmlelement {{ configuration.classes }}\" data-title=\"{{ entity.title }}\">
    {{ include(template_from_string(configuration.content)) }}
</div>
", "MapbenderCoreBundle:Element:htmlelement.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/htmlelement.html.twig");
    }
}
