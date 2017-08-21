<?php

/* MapbenderWmsBundle:Element:wmsloader.json.twig */
class __TwigTemplate_ca388bfe16f20eafbc02fd7803cba8adddf33fac7532460e31290a86ce4f45c4 extends Twig_Template
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
        $__internal_96678d003c0670d455369f3de89ff3704c31adcd5f9d97bc00cebeb0988e39ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96678d003c0670d455369f3de89ff3704c31adcd5f9d97bc00cebeb0988e39ed->enter($__internal_96678d003c0670d455369f3de89ff3704c31adcd5f9d97bc00cebeb0988e39ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderWmsBundle:Element:wmsloader.json.twig"));

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
        
        $__internal_96678d003c0670d455369f3de89ff3704c31adcd5f9d97bc00cebeb0988e39ed->leave($__internal_96678d003c0670d455369f3de89ff3704c31adcd5f9d97bc00cebeb0988e39ed_prof);

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
        return array (  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\"mb.wms.wmsloader.error.url\": \"{{ \"mb.wms.wmsloader.error.url\" | trans | raw }}\",
\"mb.wms.wmsloader.error.service\": \"{{ \"mb.wms.wmsloader.error.service\" | trans | raw }}\",
\"mb.wms.wmsloader.error.operation\": \"{{ \"mb.wms.wmsloader.error.operation\" | trans | raw }}\",
\"mb.wms.wmsloader.error.version\": \"{{ \"mb.wms.wmsloader.error.version\" | trans | raw }}\",
\"mb.wms.wmsloader.error.load\": \"{{ \"mb.wms.wmsloader.error.load\" | trans | raw }}\",
\"mb.wms.wmsloader.dialog.btn.cancel\": \"{{ \"mb.wms.wmsloader.dialog.btn.cancel\" | trans | raw }}\",
\"mb.wms.wmsloader.dialog.btn.load\": \"{{ \"mb.wms.wmsloader.dialog.btn.load\" | trans | raw }}\"
}
", "MapbenderWmsBundle:Element:wmsloader.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/WmsBundle/Resources/views/Element/wmsloader.json.twig");
    }
}
