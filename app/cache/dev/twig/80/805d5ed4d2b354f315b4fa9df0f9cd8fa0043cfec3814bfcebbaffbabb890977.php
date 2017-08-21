<?php

/* MapbenderCoreBundle:Element:printclient.json.twig */
class __TwigTemplate_0fd26719efa895955555652d30776caeae43791c85c66fa3b6c3ab087f34eb88 extends Twig_Template
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
        $__internal_df9359dbe0dbe32d112b8dafbb948b5ba83ff6c4307394009304d9efdee32ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9359dbe0dbe32d112b8dafbb948b5ba83ff6c4307394009304d9efdee32ab6->enter($__internal_df9359dbe0dbe32d112b8dafbb948b5ba83ff6c4307394009304d9efdee32ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:printclient.json.twig"));

        // line 1
        echo "{
\"mb.core.printclient.popup.btn.ok\": \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.popup.btn.ok"), "html", null, true);
        echo "\",
\"mb.core.printclient.popup.btn.cancel\": \"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.popup.btn.cancel"), "html", null, true);
        echo "\",
\"mb.core.printclient.info.noactivelayer\": \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.info.noactivelayer"), "html", null, true);
        echo "\",
\"mb.core.printclient.form.required\": \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.form.required"), "html", null, true);
        echo "\",
\"mb.core.printclient.btn.deactivate\": \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.btn.deactivate"), "html", null, true);
        echo "\",
\"mb.core.printclient.btn.activate\": \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.btn.activate"), "html", null, true);
        echo "\"
}
";
        
        $__internal_df9359dbe0dbe32d112b8dafbb948b5ba83ff6c4307394009304d9efdee32ab6->leave($__internal_df9359dbe0dbe32d112b8dafbb948b5ba83ff6c4307394009304d9efdee32ab6_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:printclient.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
\"mb.core.printclient.popup.btn.ok\": \"{{ \"mb.core.printclient.popup.btn.ok\" | trans}}\",
\"mb.core.printclient.popup.btn.cancel\": \"{{ \"mb.core.printclient.popup.btn.cancel\" | trans}}\",
\"mb.core.printclient.info.noactivelayer\": \"{{ \"mb.core.printclient.info.noactivelayer\" | trans}}\",
\"mb.core.printclient.form.required\": \"{{ \"mb.core.printclient.form.required\" | trans}}\",
\"mb.core.printclient.btn.deactivate\": \"{{ \"mb.core.printclient.btn.deactivate\" | trans}}\",
\"mb.core.printclient.btn.activate\": \"{{ \"mb.core.printclient.btn.activate\" | trans}}\"
}
", "MapbenderCoreBundle:Element:printclient.json.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/printclient.json.twig");
    }
}
