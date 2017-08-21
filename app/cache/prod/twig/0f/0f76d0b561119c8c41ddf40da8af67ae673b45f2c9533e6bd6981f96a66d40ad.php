<?php

/* MapbenderCoreBundle:Element:gpsposition.json.twig */
class __TwigTemplate_0213aba2bab44273946287f6d9f6c29febd75380a0a64c420d65a9563eea2954 extends Twig_Template
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
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:gpsposition.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/gpsposition.json.twig");
    }
}
