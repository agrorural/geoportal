<?php

/* MapbenderCoreBundle:Element:coordinatesdisplay.html.twig */
class __TwigTemplate_fad0d08b90377f95b50a6ccf4fce3e99d038906aac36a353b66baee32b046946 extends Twig_Template
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
        echo "\" class=\"mb-element mb-element-coordsdisplay ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "anchor", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()) == true)) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            echo "
    ";
        }
        // line 5
        echo "    <span class=\"";
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()) == false)) {
            echo "iconCoordinates";
        }
        echo "\" id=\"coordinatesdisplay\"></span>
</span>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/coordinatesdisplay.html.twig");
    }
}
