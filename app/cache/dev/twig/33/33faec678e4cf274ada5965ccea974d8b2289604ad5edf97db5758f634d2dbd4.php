<?php

/* MapbenderCoreBundle:Element:legend.html.twig */
class __TwigTemplate_30876e3b1f9a5aa80094fa8ea3e92da67fefbcfd5d6518c46b5e67c39edfebaf extends Twig_Template
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
        $__internal_9278437ac7464b48282f555271c3067c72ad747e2f1ad6f1aed5398d4ca6310c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9278437ac7464b48282f555271c3067c72ad747e2f1ad6f1aed5398d4ca6310c->enter($__internal_9278437ac7464b48282f555271c3067c72ad747e2f1ad6f1aed5398d4ca6310c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:legend.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-legend\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "\">
    <div id=\"imgtest\"></div>
    <div id=\"legends\"></div>
</div>
";
        
        $__internal_9278437ac7464b48282f555271c3067c72ad747e2f1ad6f1aed5398d4ca6310c->leave($__internal_9278437ac7464b48282f555271c3067c72ad747e2f1ad6f1aed5398d4ca6310c_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:legend.html.twig";
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
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-legend\" title=\"{{ title |trans }}\">
    <div id=\"imgtest\"></div>
    <div id=\"legends\"></div>
</div>
", "MapbenderCoreBundle:Element:legend.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/legend.html.twig");
    }
}
