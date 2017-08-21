<?php

/* MapbenderWmsBundle:Element:wmsloader.json.twig */
class __TwigTemplate_869f91a9d99eff3ff1eb4f4f175d55cac65df6bd0a6daa42546a90e17fdbb354 extends Twig_Template
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
\"mb.wms.wmsloader.error.url\": \"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.url");
        echo "\",
\"mb.wms.wmsloader.error.service\": \"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.service");
        echo "\",
\"mb.wms.wmsloader.error.operation\": \"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.operation");
        echo "\",
\"mb.wms.wmsloader.error.version\": \"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.version");
        echo "\",
\"mb.wms.wmsloader.error.load\": \"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.error.load");
        echo "\",
\"mb.wms.wmsloader.dialog.btn.cancel\": \"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.btn.cancel");
        echo "\",
\"mb.wms.wmsloader.dialog.btn.load\": \"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.dialog.btn.load");
        echo "\"
}
";
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Element:wmsloader.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderWmsBundle:Element:wmsloader.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.json.twig");
    }
}
