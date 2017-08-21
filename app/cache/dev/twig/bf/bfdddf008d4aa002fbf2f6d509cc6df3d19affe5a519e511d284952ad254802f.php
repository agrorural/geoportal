<?php

/* MapbenderCoreBundle::geosource.json.twig */
class __TwigTemplate_1e84ee8a4916653e6b3a6e9ce6366eca29ab6ad02edebe9387a9c97efba7aa4e extends Twig_Template
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
        $__internal_ebc66424b76a3edf1e687828eca07d4d91593d434cd1c813fdec5c92814782b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc66424b76a3edf1e687828eca07d4d91593d434cd1c813fdec5c92814782b8->enter($__internal_ebc66424b76a3edf1e687828eca07d4d91593d434cd1c813fdec5c92814782b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle::geosource.json.twig"));

        // line 1
        echo "{
\"mb.geosource.image_error.datails\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.geosource.image_error.datails"), "html", null, true);
        echo "\",
\"mb.geosource.image_error.exception\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.geosource.image_error.exception"), "html", null, true);
        echo "\",
\"mb.geosource.image_error.statuscode\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.geosource.image_error.statuscode"), "html", null, true);
        echo "\"
}
";
        
        $__internal_ebc66424b76a3edf1e687828eca07d4d91593d434cd1c813fdec5c92814782b8->leave($__internal_ebc66424b76a3edf1e687828eca07d4d91593d434cd1c813fdec5c92814782b8_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::geosource.json.twig";
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
\"mb.geosource.image_error.datails\": \"{{ \"mb.geosource.image_error.datails\" | trans }}\",
\"mb.geosource.image_error.exception\": \"{{ \"mb.geosource.image_error.exception\" | trans }}\",
\"mb.geosource.image_error.statuscode\": \"{{ \"mb.geosource.image_error.statuscode\" | trans }}\"
}
", "MapbenderCoreBundle::geosource.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/geosource.json.twig");
    }
}
