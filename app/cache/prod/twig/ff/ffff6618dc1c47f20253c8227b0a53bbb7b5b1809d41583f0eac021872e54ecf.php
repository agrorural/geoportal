<?php

/* MapbenderPrintBundle:Element:imageexport.json.twig */
class __TwigTemplate_519b7aec3b35d9c936ae974645919f11460b0cd0f757194cc4c5e313daa9ea88 extends Twig_Template
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
\"mb.print.imageexport.popup.btn.ok\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.print.imageexport.popup.btn.cancel\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.popup.btn.cancel"), "html", null, true);
        echo "\",
\"mb.print.imageexport.info.noactivelayer\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.info.noactivelayer"), "html", null, true);
        echo "\"
}";
    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:imageexport.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderPrintBundle:Element:imageexport.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.json.twig");
    }
}
