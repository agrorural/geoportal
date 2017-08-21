<?php

/* MapbenderCoreBundle:Element:ruler.json.twig */
class __TwigTemplate_d2581199f3c5d33e63daea1707c050699f469278ae6f4e5fef1e4ae008bef464 extends Twig_Template
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
        $__internal_af1297aae5ca5000f8277879319cc86a4894c2558215ec19829174e791284ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1297aae5ca5000f8277879319cc86a4894c2558215ec19829174e791284ced->enter($__internal_af1297aae5ca5000f8277879319cc86a4894c2558215ec19829174e791284ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:ruler.json.twig"));

        // line 1
        echo "{
\"mb.core.ruler.popup.btn.ok\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.ruler.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.ruler.create_error\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.ruler.create_error"), "html", null, true);
        echo "\"
}";
        
        $__internal_af1297aae5ca5000f8277879319cc86a4894c2558215ec19829174e791284ced->leave($__internal_af1297aae5ca5000f8277879319cc86a4894c2558215ec19829174e791284ced_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:ruler.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 2,  22 => 1,);
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
\"mb.core.ruler.popup.btn.ok\": \"{{ \"mb.core.ruler.popup.btn.ok\" | trans}}\",
\"mb.core.ruler.create_error\": \"{{ \"mb.core.ruler.create_error\" | trans}}\"
}", "MapbenderCoreBundle:Element:ruler.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/ruler.json.twig");
    }
}
