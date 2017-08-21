<?php

/* MapbenderCoreBundle:Element:gpsposition.json.twig */
class __TwigTemplate_6dabf98f215d8185153531d86500d97d21f6087b93309f838e1aec77df74fda6 extends Twig_Template
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
        $__internal_7fc4c41126be8f7711ac4d36f3c23ceb46bf957a8d5b964783d8e9f40d10d4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc4c41126be8f7711ac4d36f3c23ceb46bf957a8d5b964783d8e9f40d10d4d1->enter($__internal_7fc4c41126be8f7711ac4d36f3c23ceb46bf957a8d5b964783d8e9f40d10d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:gpsposition.json.twig"));

        // line 1
        echo "{
  \"mb.core.gpsposition.error.notsupported\":  ";
        // line 2
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.gpsposition.error.notsupported"));
        echo ",
  \"mb.core.gpsposition.error.nosignal\":  ";
        // line 3
        echo twig_jsonencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.gpsposition.error.nosignal"));
        echo "
}
";
        
        $__internal_7fc4c41126be8f7711ac4d36f3c23ceb46bf957a8d5b964783d8e9f40d10d4d1->leave($__internal_7fc4c41126be8f7711ac4d36f3c23ceb46bf957a8d5b964783d8e9f40d10d4d1_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:gpsposition.json.twig";
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
  \"mb.core.gpsposition.error.notsupported\":  {{ 'mb.core.gpsposition.error.notsupported' | trans | json_encode | raw }},
  \"mb.core.gpsposition.error.nosignal\":  {{ 'mb.core.gpsposition.error.nosignal' | trans | json_encode | raw }}
}
", "MapbenderCoreBundle:Element:gpsposition.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.json.twig");
    }
}
