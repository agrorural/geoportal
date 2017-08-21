<?php

/* MapbenderCoreBundle:Element:gpsposition.html.twig */
class __TwigTemplate_f3cf00539af2a7942d15ca7e7eae17882b94b8890cfd95348d37528fe9e7bf00 extends Twig_Template
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
        // line 1
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-gpsButton iconBig ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array()), "iconGps")) : ("iconGps")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : null))) : ((isset($context["title"]) ? $context["title"] : null)))), "html", null, true);
        echo "\">";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        }
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:gpsposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:gpsposition.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.html.twig");
    }
}
