<?php

/* MapbenderCoreBundle:Element:coordinatesdisplay.html.twig */
class __TwigTemplate_e27dbc2c1cd5513d63b77af8a4669dc025cbb8cc28d1335cfd7e7de0c5cceea0 extends Twig_Template
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
        $__internal_ec19650039147672729fb07f4dd7282a4b10ecdf71d3b3a03efc4a98be7dd5b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec19650039147672729fb07f4dd7282a4b10ecdf71d3b3a03efc4a98be7dd5b0->enter($__internal_ec19650039147672729fb07f4dd7282a4b10ecdf71d3b3a03efc4a98be7dd5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig"));

        // line 1
        echo "<span id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-coordsdisplay ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "anchor", array()), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array()) == true)) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "
    ";
        }
        // line 5
        echo "    <span class=\"";
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "label", array()) == false)) {
            echo "iconCoordinates";
        }
        echo "\" id=\"coordinatesdisplay\"></span>
</span>
";
        
        $__internal_ec19650039147672729fb07f4dd7282a4b10ecdf71d3b3a03efc4a98be7dd5b0->leave($__internal_ec19650039147672729fb07f4dd7282a4b10ecdf71d3b3a03efc4a98be7dd5b0_prof);

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
        return array (  37 => 5,  31 => 3,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span id=\"{{ id }}\" class=\"mb-element mb-element-coordsdisplay {{configuration.anchor}}\">
    {% if configuration.label == true %}
        {{ title| trans }}
    {% endif %}
    <span class=\"{% if configuration.label == false %}iconCoordinates{% endif %}\" id=\"coordinatesdisplay\"></span>
</span>
", "MapbenderCoreBundle:Element:coordinatesdisplay.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/coordinatesdisplay.html.twig");
    }
}
