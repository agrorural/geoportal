<?php

/* MapbenderPrintBundle:Element:imageexport.json.twig */
class __TwigTemplate_7e7e8381c409e32bfa99510dd3638f441d93971a3e020eaef394f2d87e2c6478 extends Twig_Template
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
        $__internal_41c9902c36f1f01f20e341076edb49f4bb52269c157726343c85623fd9cfd798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c9902c36f1f01f20e341076edb49f4bb52269c157726343c85623fd9cfd798->enter($__internal_41c9902c36f1f01f20e341076edb49f4bb52269c157726343c85623fd9cfd798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderPrintBundle:Element:imageexport.json.twig"));

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
        
        $__internal_41c9902c36f1f01f20e341076edb49f4bb52269c157726343c85623fd9cfd798->leave($__internal_41c9902c36f1f01f20e341076edb49f4bb52269c157726343c85623fd9cfd798_prof);

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
        return array (  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
\"mb.print.imageexport.popup.btn.ok\": \"{{ \"mb.print.imageexport.popup.btn.ok\" | trans}}\",
\"mb.print.imageexport.popup.btn.cancel\": \"{{ \"mb.print.imageexport.popup.btn.cancel\" | trans}}\",
\"mb.print.imageexport.info.noactivelayer\": \"{{ \"mb.print.imageexport.info.noactivelayer\" | trans}}\"
}", "MapbenderPrintBundle:Element:imageexport.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.json.twig");
    }
}
