<?php

/* MapbenderWmsBundle:Element:wmsloader.html.twig */
class __TwigTemplate_2c29e1b614c94bbee718590f026cd5ce313646e7fede4d02dc168f1a3a8798d2 extends Twig_Template
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
        echo "\" class=\"mb-element mb-element-wmsloader\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : null))) : ((isset($context["title"]) ? $context["title"] : null)))), "html", null, true);
        echo "\">
    <p class=\"description\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.label.example"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["example_url"]) ? $context["example_url"] : null), "html", null, true);
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
        return array (  49 => 14,  41 => 9,  33 => 4,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderWmsBundle:Element:wmsloader.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.html.twig");
    }
}
