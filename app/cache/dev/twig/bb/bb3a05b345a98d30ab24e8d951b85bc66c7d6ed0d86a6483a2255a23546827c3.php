<?php

/* MapbenderCoreBundle:Element:layertree.json.twig */
class __TwigTemplate_8bba064d1ff607135d41e627ef03d35b3de87a261458ab54a8533c9cc3180e6c extends Twig_Template
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
        $__internal_c7f989e8611ed7bd46b450c5d1a461567fd08826ce2a9079a97243f1c9db86ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f989e8611ed7bd46b450c5d1a461567fd08826ce2a9079a97243f1c9db86ce->enter($__internal_c7f989e8611ed7bd46b450c5d1a461567fd08826ce2a9079a97243f1c9db86ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:layertree.json.twig"));

        // line 1
        echo "{
\"mb.core.layertree.confirm.allremove\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.confirm.allremove"), "html", null, true);
        echo "\",
\"mb.core.layertree.popup.btn.ok\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.layertree.const.outofscale\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.const.outofscale"), "html", null, true);
        echo "\",
\"mb.core.layertree.const.outofbounds\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.const.outofbounds"), "html", null, true);
        echo "\",
\"mb.core.layertree.const.parentinvisible\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.const.parentinvisible"), "html", null, true);
        echo "\",
\"mb.core.metadata.popup.title\" : \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.title"), "html", null, true);
        echo "\",
\"mb.core.metadata.popup.btn.ok\" : \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.metadata.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.layertree.contextmenu.nooption\": \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.contextmenu.nooption"), "html", null, true);
        echo "\"
}
";
        
        $__internal_c7f989e8611ed7bd46b450c5d1a461567fd08826ce2a9079a97243f1c9db86ce->leave($__internal_c7f989e8611ed7bd46b450c5d1a461567fd08826ce2a9079a97243f1c9db86ce_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:layertree.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
\"mb.core.layertree.confirm.allremove\": \"{{ \"mb.core.layertree.confirm.allremove\" | trans}}\",
\"mb.core.layertree.popup.btn.ok\": \"{{ \"mb.core.layertree.popup.btn.ok\" | trans}}\",
\"mb.core.layertree.const.outofscale\": \"{{ \"mb.core.layertree.const.outofscale\" | trans}}\",
\"mb.core.layertree.const.outofbounds\": \"{{ \"mb.core.layertree.const.outofbounds\" | trans}}\",
\"mb.core.layertree.const.parentinvisible\": \"{{ \"mb.core.layertree.const.parentinvisible\" | trans}}\",
\"mb.core.metadata.popup.title\" : \"{{ \"mb.core.metadata.popup.title\" | trans }}\",
\"mb.core.metadata.popup.btn.ok\" : \"{{ \"mb.core.metadata.popup.btn.ok\" | trans }}\",
\"mb.core.layertree.contextmenu.nooption\": \"{{ \"mb.core.layertree.contextmenu.nooption\" | trans}}\"
}
", "MapbenderCoreBundle:Element:layertree.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/layertree.json.twig");
    }
}
