<?php

/* MapbenderCoreBundle:Element:measure_dialog.html.twig */
class __TwigTemplate_fb9b16452385c0880da0be8fb70c39dd5e10799abdedab63f7218f6bdcad70d3 extends Twig_Template
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
        echo "<div class=\"mb-element mb-element-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "type", array()), "html", null, true);
        echo "ruler\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:measure_dialog.html.twig";
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
        return new Twig_Source("", "MapbenderCoreBundle:Element:measure_dialog.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/measure_dialog.html.twig");
    }
}
