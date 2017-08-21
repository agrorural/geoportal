<?php

/* MapbenderCoreBundle:Element:legend.json.twig */
class __TwigTemplate_f26c45cfd37401e57b3e95e889a1f6bea15ce6a61f25885bc3e4e0ca6050a227 extends Twig_Template
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
        $__internal_1beb49d3bd1074d35c35cc8e93f25281ccf4b4c33b2107e37ffb16a8b1c990e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beb49d3bd1074d35c35cc8e93f25281ccf4b4c33b2107e37ffb16a8b1c990e5->enter($__internal_1beb49d3bd1074d35c35cc8e93f25281ccf4b4c33b2107e37ffb16a8b1c990e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:legend.json.twig"));

        // line 1
        echo "{
\"mb.core.legend.nolegend\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.legend.nolegend"), "html", null, true);
        echo "\",
\"mb.core.legend.popup.btn.ok\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.legend.popup.btn.ok"), "html", null, true);
        echo "\" 
}
";
        
        $__internal_1beb49d3bd1074d35c35cc8e93f25281ccf4b4c33b2107e37ffb16a8b1c990e5->leave($__internal_1beb49d3bd1074d35c35cc8e93f25281ccf4b4c33b2107e37ffb16a8b1c990e5_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:legend.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\"mb.core.legend.nolegend\": \"{{ \"mb.core.legend.nolegend\" | trans}}\",
\"mb.core.legend.popup.btn.ok\": \"{{ \"mb.core.legend.popup.btn.ok\" | trans }}\" 
}
", "MapbenderCoreBundle:Element:legend.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/legend.json.twig");
    }
}
