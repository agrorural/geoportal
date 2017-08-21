<?php

/* MapbenderCoreBundle:Element:overview.html.twig */
class __TwigTemplate_866e31f46f09252d748c62f8b6db66166a6aaa3b637bacf66242511a32bfe633 extends Twig_Template
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
        $__internal_4e854ca0745c2d8abceb3c0234ce6f677a897a69a0b56fecdbef95dbaf4ddaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e854ca0745c2d8abceb3c0234ce6f677a897a69a0b56fecdbef95dbaf4ddaa6->enter($__internal_4e854ca0745c2d8abceb3c0234ce6f677a897a69a0b56fecdbef95dbaf4ddaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:overview.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-overview\">
    <div id=\"mb-element-overview-map\" class=\"overviewContainer\"></div>
    <div class=\"toggleOverview\"></div>
</div>
";
        
        $__internal_4e854ca0745c2d8abceb3c0234ce6f677a897a69a0b56fecdbef95dbaf4ddaa6->leave($__internal_4e854ca0745c2d8abceb3c0234ce6f677a897a69a0b56fecdbef95dbaf4ddaa6_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:overview.html.twig";
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
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-overview\">
    <div id=\"mb-element-overview-map\" class=\"overviewContainer\"></div>
    <div class=\"toggleOverview\"></div>
</div>
", "MapbenderCoreBundle:Element:overview.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/overview.html.twig");
    }
}
