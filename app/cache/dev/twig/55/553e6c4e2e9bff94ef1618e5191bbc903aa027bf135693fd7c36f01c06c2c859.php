<?php

/* MapbenderCoreBundle:Element:map.html.twig */
class __TwigTemplate_0b02b4dc66535d070ebb89d94e587cf04a16ca070e116f341eef4de8875cf3ac extends Twig_Template
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
        $__internal_a218218d9c24f5a029b520a541381f76fd2b2ea9d6c444563828f80e1a554d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a218218d9c24f5a029b520a541381f76fd2b2ea9d6c444563828f80e1a554d05->enter($__internal_a218218d9c24f5a029b520a541381f76fd2b2ea9d6c444563828f80e1a554d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:map.html.twig"));

        // line 1
        echo "<div class=\"mb-element mb-element-map\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"></div>
";
        
        $__internal_a218218d9c24f5a029b520a541381f76fd2b2ea9d6c444563828f80e1a554d05->leave($__internal_a218218d9c24f5a029b520a541381f76fd2b2ea9d6c444563828f80e1a554d05_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:map.html.twig";
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
        return new Twig_Source("<div class=\"mb-element mb-element-map\" id=\"{{ id }}\"></div>
", "MapbenderCoreBundle:Element:map.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/map.html.twig");
    }
}
