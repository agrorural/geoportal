<?php

/* MapbenderCoreBundle:Element:featureinfo.html.twig */
class __TwigTemplate_59c59c212d9c67ec12f4e721554588e98465ef20a53f22d300508c2b7b832b91 extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-element mb-element-featureinfo hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\">
    <div id=\"js-error-featureinfo\" class=\"error hidden\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "</div>
";
        // line 3
        if (( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "displayType", array(), "any", true, true) || ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "displayType", array()) == ""))) {
            // line 4
            echo "    <div class=\"js-header-parent js-content-parent\">
        <div id=\"\" class=\"js-header js-header-content\" data-idname=\"common\"></div>
        <div id=\"\" class=\"js-content js-content-content\" data-idname=\"content\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 8
(isset($context["configuration"]) ? $context["configuration"] : null), "displayType", array()) == "tabs")) {
            // line 9
            echo "    <div class=\"tabContainer featureInfoTabContainer js-content-parent accordionContainer\">
        <ul class=\"tabs js-header-parent\">
            <li id=\"\" class=\"tab js-header js-header-content\" data-idname=\"tab\"></li>
        </ul>
        <div id=\"\" class=\"container js-content js-content-content\" data-idname=\"container\"></div>
    </div>
";
        } elseif (($this->getAttribute(        // line 15
(isset($context["configuration"]) ? $context["configuration"] : null), "displayType", array()) == "accordion")) {
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
        return array (  65 => 29,  50 => 16,  48 => 15,  40 => 9,  38 => 8,  32 => 4,  30 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:featureinfo.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.html.twig");
    }
}
