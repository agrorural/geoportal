<?php

/* MapbenderCoreBundle:Element:poi.html.twig */
class __TwigTemplate_706d2e42571434d6496b617253bc1cf9a45b61fa64aa97f0b708e63e3912982b extends Twig_Template
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
        $__internal_f9333755061abd6982abbf8cc29eaba6010c6e03b777e5debc60c1c3ae34ce18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9333755061abd6982abbf8cc29eaba6010c6e03b777e5debc60c1c3ae34ce18->enter($__internal_f9333755061abd6982abbf8cc29eaba6010c6e03b777e5debc60c1c3ae34ce18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:poi.html.twig"));

        // line 1
        echo "<div class=\"mb-element mb-element-poi hidden\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.poi.sharepoi"), "html", null, true);
        echo "\">
    <div class=\"input\">
    <form id=\"poiForm\">
        <textarea id=\"body\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "body", array())), "html", null, true);
        echo ":</textarea>
    </form>
    </div>
    <div class=\"output\">
    <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.poi.text.snippet"), "html", null, true);
        echo "</p>
    <textarea></textarea>
    </div>
</div>
";
        
        $__internal_f9333755061abd6982abbf8cc29eaba6010c6e03b777e5debc60c1c3ae34ce18->leave($__internal_f9333755061abd6982abbf8cc29eaba6010c6e03b777e5debc60c1c3ae34ce18_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:poi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  31 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"mb-element mb-element-poi hidden\" id=\"{{ id }}\" title=\"{{ 'mb.core.poi.sharepoi'|trans }}\">
    <div class=\"input\">
    <form id=\"poiForm\">
        <textarea id=\"body\">{{ configuration.body | trans }}:</textarea>
    </form>
    </div>
    <div class=\"output\">
    <p>{{ 'mb.core.poi.text.snippet'|trans }}</p>
    <textarea></textarea>
    </div>
</div>
", "MapbenderCoreBundle:Element:poi.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/poi.html.twig");
    }
}
