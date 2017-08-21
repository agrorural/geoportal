<?php

/* MapbenderCoreBundle:Element:featureinfo.html.twig */
class __TwigTemplate_f5e266712d5555b56bd0a9ac2b0b2ce5612205671a2e09de1f9ae90fcc769614 extends Twig_Template
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
        $__internal_ab19f138aefdb6a366ca9cba70c6146ce960494fcf243445705a3abd9ba6e9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab19f138aefdb6a366ca9cba70c6146ce960494fcf243445705a3abd9ba6e9a3->enter($__internal_ab19f138aefdb6a366ca9cba70c6146ce960494fcf243445705a3abd9ba6e9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:featureinfo.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-featureinfo hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "\">
    <div id=\"js-error-featureinfo\" class=\"error hidden\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "</div>
";
        // line 3
        if (( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "displayType", array(), "any", true, true) || ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "displayType", array()) == ""))) {
            // line 4
            echo "    <div class=\"js-header-parent js-content-parent\">
        <div id=\"\" class=\"js-header js-header-content\" data-idname=\"common\"></div>
        <div id=\"\" class=\"js-content js-content-content\" data-idname=\"content\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 8
(isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "displayType", array()) == "tabs")) {
            // line 9
            echo "    <div class=\"tabContainer featureInfoTabContainer js-content-parent accordionContainer\">
        <ul class=\"tabs js-header-parent\">
            <li id=\"\" class=\"tab js-header js-header-content\" data-idname=\"tab\"></li>
        </ul>
        <div id=\"\" class=\"container js-content js-content-content\" data-idname=\"container\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 15
(isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "displayType", array()) == "accordion")) {
            // line 16
            echo "    <div class=\"accordionContainer featureInfoTabContainer js-header-parent js-content-parent\">
        <div id=\"\" class=\"accordion js-header\" data-idname=\"accordion\">
            <div class=\"tabcell js-header-content\"></div>
        </div>
        <div id=\"\" class=\"container js-content\" data-idname=\"container\">
            <div class=\"accordion-cell\">
                <div class=\"accordion-wrapper\">
                    <div class=\"js-content-content\"></div>
                </div>
            </div>
       </div>
    </div>
";
        }
        // line 29
        echo "</div>
";
        
        $__internal_ab19f138aefdb6a366ca9cba70c6146ce960494fcf243445705a3abd9ba6e9a3->leave($__internal_ab19f138aefdb6a366ca9cba70c6146ce960494fcf243445705a3abd9ba6e9a3_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:featureinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  53 => 16,  51 => 15,  43 => 9,  41 => 8,  35 => 4,  33 => 3,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-featureinfo hidden\" data-title=\"{{ title |trans }}\">
    <div id=\"js-error-featureinfo\" class=\"error hidden\">{{ \"mb.core.featureinfo.error.nolayer\" | trans }}</div>
{% if configuration.displayType is not defined or configuration.displayType == '' %}
    <div class=\"js-header-parent js-content-parent\">
        <div id=\"\" class=\"js-header js-header-content\" data-idname=\"common\"></div>
        <div id=\"\" class=\"js-content js-content-content\" data-idname=\"content\"></div>
    </div>
{% elseif configuration.displayType == 'tabs' %}
    <div class=\"tabContainer featureInfoTabContainer js-content-parent accordionContainer\">
        <ul class=\"tabs js-header-parent\">
            <li id=\"\" class=\"tab js-header js-header-content\" data-idname=\"tab\"></li>
        </ul>
        <div id=\"\" class=\"container js-content js-content-content\" data-idname=\"container\"></div>
    </div>
{% elseif configuration.displayType == 'accordion' %}
    <div class=\"accordionContainer featureInfoTabContainer js-header-parent js-content-parent\">
        <div id=\"\" class=\"accordion js-header\" data-idname=\"accordion\">
            <div class=\"tabcell js-header-content\"></div>
        </div>
        <div id=\"\" class=\"container js-content\" data-idname=\"container\">
            <div class=\"accordion-cell\">
                <div class=\"accordion-wrapper\">
                    <div class=\"js-content-content\"></div>
                </div>
            </div>
       </div>
    </div>
{% endif %}
</div>
", "MapbenderCoreBundle:Element:featureinfo.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.html.twig");
    }
}
