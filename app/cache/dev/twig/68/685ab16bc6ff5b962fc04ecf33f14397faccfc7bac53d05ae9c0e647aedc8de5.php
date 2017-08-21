<?php

/* MapbenderCoreBundle:Element:poi.json.twig */
class __TwigTemplate_99e5dcaf2ee311a60bc2a0c073d853bae8056167bdd3f94dc342be918fdcc985 extends Twig_Template
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
        $__internal_0435d5b34bb5c92a8bdb46bc104b8246c98839a41cd1090305c309bf272fbdb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0435d5b34bb5c92a8bdb46bc104b8246c98839a41cd1090305c309bf272fbdb5->enter($__internal_0435d5b34bb5c92a8bdb46bc104b8246c98839a41cd1090305c309bf272fbdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:poi.json.twig"));

        // line 1
        echo "{
\"mb.core.poi.popup.btn.ok\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.poi.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.poi.popup.btn.cancel\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.poi.popup.btn.cancel"), "html", null, true);
        echo "\"
}";
        
        $__internal_0435d5b34bb5c92a8bdb46bc104b8246c98839a41cd1090305c309bf272fbdb5->leave($__internal_0435d5b34bb5c92a8bdb46bc104b8246c98839a41cd1090305c309bf272fbdb5_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:poi.json.twig";
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
\"mb.core.poi.popup.btn.ok\": \"{{ \"mb.core.poi.popup.btn.ok\" | trans}}\",
\"mb.core.poi.popup.btn.cancel\": \"{{ \"mb.core.poi.popup.btn.cancel\" | trans}}\"
}", "MapbenderCoreBundle:Element:poi.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/poi.json.twig");
    }
}
