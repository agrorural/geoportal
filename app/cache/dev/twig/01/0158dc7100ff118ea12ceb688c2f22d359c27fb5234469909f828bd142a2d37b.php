<?php

/* MapbenderWmsBundle:Element:wmsloader.html.twig */
class __TwigTemplate_f15f7d3b62b7c4f15fe67f6b354be39d5a7c70e630fefcd7f805ed935763ffe4 extends Twig_Template
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
        $__internal_afa18a1e988e07c981cf82a1eaf64818bd4c7407bdbb448352ce96198a513052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa18a1e988e07c981cf82a1eaf64818bd4c7407bdbb448352ce96198a513052->enter($__internal_afa18a1e988e07c981cf82a1eaf64818bd4c7407bdbb448352ce96198a513052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderWmsBundle:Element:wmsloader.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-wmsloader\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) : ((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))))), "html", null, true);
        echo "\">
    <p class=\"description\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.example"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["example_url"]) ? $context["example_url"] : $this->getContext($context, "example_url")), "html", null, true);
        echo "</p>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUrl\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.wmsurl"), "html", null, true);
        echo ":</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUrl\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUser\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.wmsuser"), "html", null, true);
        echo ":</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUser\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsPass\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.wmspass"), "html", null, true);
        echo ":</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsPass\" class=\"input url\" type=\"password\" />
    </div>
</div>
";
        
        $__internal_afa18a1e988e07c981cf82a1eaf64818bd4c7407bdbb448352ce96198a513052->leave($__internal_afa18a1e988e07c981cf82a1eaf64818bd4c7407bdbb448352ce96198a513052_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Element:wmsloader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  44 => 9,  36 => 4,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-wmsloader\" title=\"{{ configuration.tooltip|default(title)|trans }}\">
    <p class=\"description\">{{ \"mb.wms.wmsloader.dialog.label.example\"|trans }}: {{ example_url }}</p>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUrl\">{{ \"mb.wms.wmsloader.dialog.label.wmsurl\"|trans}}:</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUrl\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsUser\">{{ \"mb.wms.wmsloader.dialog.label.wmsuser\"|trans}}:</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsUser\" class=\"input url\" type=\"text\" />
    </div>
    <br>
    <label class=\"labelInput\" for=\"loadWmsPass\">{{ \"mb.wms.wmsloader.dialog.label.wmspass\"|trans}}:</label>
    <div class=\"inputWrapper\">
        <input name=\"loadWmsPass\" class=\"input url\" type=\"password\" />
    </div>
</div>
", "MapbenderWmsBundle:Element:wmsloader.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.html.twig");
    }
}
