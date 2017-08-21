<?php

/* MapbenderCoreBundle:Element:redlining.json.twig */
class __TwigTemplate_caa2458a3937f508d9ee96cf9232b1e9791310be14f6b2dcbd9d02e66600d30d extends Twig_Template
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
        $__internal_4afd2f97c8696c74daa6031b394ba81b4b9b24a298f3cc563ca07a165e8ead6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4afd2f97c8696c74daa6031b394ba81b4b9b24a298f3cc563ca07a165e8ead6a->enter($__internal_4afd2f97c8696c74daa6031b394ba81b4b9b24a298f3cc563ca07a165e8ead6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:redlining.json.twig"));

        // line 1
        echo "{
\"mb.core.redlining.dialog.btn.cancel\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.dialog.btn.cancel"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.point\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.point"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.line\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.line"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.polygon\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.polygon"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.rectangle\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.rectangle"), "html", null, true);
        echo "\",
\"mb.core.redlining.geometrytype.text\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.label"), "html", null, true);
        echo "\"
}";
        
        $__internal_4afd2f97c8696c74daa6031b394ba81b4b9b24a298f3cc563ca07a165e8ead6a->leave($__internal_4afd2f97c8696c74daa6031b394ba81b4b9b24a298f3cc563ca07a165e8ead6a_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:redlining.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
\"mb.core.redlining.dialog.btn.cancel\": \"{{\"mb.core.redlining.dialog.btn.cancel\" | trans }}\",
\"mb.core.redlining.geometrytype.point\": \"{{\"mb.core.redlining.geometrytype.point\" | trans }}\",
\"mb.core.redlining.geometrytype.line\": \"{{\"mb.core.redlining.geometrytype.line\" | trans }}\",
\"mb.core.redlining.geometrytype.polygon\": \"{{\"mb.core.redlining.geometrytype.polygon\" | trans }}\",
\"mb.core.redlining.geometrytype.rectangle\": \"{{\"mb.core.redlining.geometrytype.rectangle\" | trans }}\",
\"mb.core.redlining.geometrytype.text\": \"{{\"mb.core.redlining.geometrytype.text.label\" | trans }}\"
}", "MapbenderCoreBundle:Element:redlining.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/redlining.json.twig");
    }
}
