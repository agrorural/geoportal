<?php

/* MapbenderCoreBundle:Element:scaledisplay.html.twig */
class __TwigTemplate_22183444e41f1dbda6c5d78f90ec3ac957f3420caa64992b3e89bc5ca1b4bc8c extends Twig_Template
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
        $__internal_419ad8b2c0dbe67381cdedb7ffb8bd200a14e0e1198bffc31d273e5d07b704d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419ad8b2c0dbe67381cdedb7ffb8bd200a14e0e1198bffc31d273e5d07b704d0->enter($__internal_419ad8b2c0dbe67381cdedb7ffb8bd200a14e0e1198bffc31d273e5d07b704d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:scaledisplay.html.twig"));

        // line 1
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-scaledisplay ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "anchor", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "scalePrefix", array())), "html", null, true);
        echo "<span></span></span>";
        
        $__internal_419ad8b2c0dbe67381cdedb7ffb8bd200a14e0e1198bffc31d273e5d07b704d0->leave($__internal_419ad8b2c0dbe67381cdedb7ffb8bd200a14e0e1198bffc31d273e5d07b704d0_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:scaledisplay.html.twig";
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
        return new Twig_Source("<span id=\"{{ id }}\" class=\"mb-element mb-element-scaledisplay {{configuration.anchor}}\">{{configuration.scalePrefix|trans}}<span></span></span>", "MapbenderCoreBundle:Element:scaledisplay.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/scaledisplay.html.twig");
    }
}
