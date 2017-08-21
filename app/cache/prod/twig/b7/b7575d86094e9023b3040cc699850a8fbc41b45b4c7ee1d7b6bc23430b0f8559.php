<?php

/* MapbenderCoreBundle:Element:srsselector.html.twig */
class __TwigTemplate_2b6a8f1073ae89a4fb483e3a6e59313c5e849e16b26fd977e1e4bcdbdbab2161 extends Twig_Template
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
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()) == true)) {
            // line 2
            echo "  <span class=\"labelInput\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "</span>
";
        }
        // line 4
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-element mb-element-srsselector dropdown\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : null))) : ((isset($context["title"]) ? $context["title"] : null)))), "html", null, true);
        echo "\">
  <select class=\"hiddenDropdown\" id=\"srsselector\"></select>
  <div class=\"dropdownValue iconDown\"></div>
  <ul class=\"dropdownList\"></ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:srsselector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:srsselector.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/srsselector.html.twig");
    }
}
