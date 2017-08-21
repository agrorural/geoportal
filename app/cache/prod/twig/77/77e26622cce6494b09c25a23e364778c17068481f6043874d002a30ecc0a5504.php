<?php

/* MapbenderCoreBundle:Element:about_dialog_content.html.twig */
class __TwigTemplate_60d262ccd0f2d1c764417563b0be8617140a6e6dbcf65f4923d3a169f82feebf extends Twig_Template
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
        echo "<p class=\"subTitle\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.versionprefix"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_version", array()), "html", null, true);
        echo "<p/>
<p class=\"description\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.learnmore"), "html", null, true);
        echo " <a class=\"linkButton\" href=\"http://mapbender3.org\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.linktitle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.aboutdialog.content.website"), "html", null, true);
        echo "</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:about_dialog_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:about_dialog_content.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/about_dialog_content.html.twig");
    }
}
