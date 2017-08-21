<?php

/* MapbenderCoreBundle:Element:poi.html.twig */
class __TwigTemplate_f75caafb39557e0a35ab907a3f340773133e6e3a7740c7d26857677c8448f9ac extends Twig_Template
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
        echo "<div class=\"mb-element mb-element-poi hidden\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.poi.sharepoi"), "html", null, true);
        echo "\">
    <div class=\"input\">
    <form id=\"poiForm\">
        <textarea id=\"body\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "body", array())), "html", null, true);
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
        return array (  35 => 8,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:poi.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/poi.html.twig");
    }
}
