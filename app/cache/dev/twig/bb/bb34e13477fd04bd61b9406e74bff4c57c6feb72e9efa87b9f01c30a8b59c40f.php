<?php

/* MapbenderCoreBundle:Element:featureinfo.json.twig */
class __TwigTemplate_413530209e2f6e2610b3c674c64d29731e99ea63a618c5390f84d1a3a1ed6d9a extends Twig_Template
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
        $__internal_18a1eee25683951184a7ddcea42e89cfc6996fce69921d82d6b5aa6ee2dfe67e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a1eee25683951184a7ddcea42e89cfc6996fce69921d82d6b5aa6ee2dfe67e->enter($__internal_18a1eee25683951184a7ddcea42e89cfc6996fce69921d82d6b5aa6ee2dfe67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:featureinfo.json.twig"));

        // line 1
        echo "{
\"mb.core.metadata.popup.title\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.title"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.popup.btn.ok\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.popup.btn.print\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.popup.btn.print"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.error.nolayer\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.nolayer"), "html", null, true);
        echo "\",
\"mb.core.featureinfo.error.noresult\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.featureinfo.error.noresult"), "html", null, true);
        echo "\"
}
";
        
        $__internal_18a1eee25683951184a7ddcea42e89cfc6996fce69921d82d6b5aa6ee2dfe67e->leave($__internal_18a1eee25683951184a7ddcea42e89cfc6996fce69921d82d6b5aa6ee2dfe67e_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:featureinfo.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
\"mb.core.metadata.popup.title\": \"{{ \"mb.core.metadata.popup.title\" | trans }}\",
\"mb.core.featureinfo.popup.btn.ok\": \"{{ \"mb.core.featureinfo.popup.btn.ok\" | trans }}\",
\"mb.core.featureinfo.popup.btn.print\": \"{{ \"mb.core.featureinfo.popup.btn.print\" | trans }}\",
\"mb.core.featureinfo.error.nolayer\": \"{{\"mb.core.featureinfo.error.nolayer\" | trans}}\",
\"mb.core.featureinfo.error.noresult\": \"{{\"mb.core.featureinfo.error.noresult\" | trans}}\"
}
", "MapbenderCoreBundle:Element:featureinfo.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/featureinfo.json.twig");
    }
}
