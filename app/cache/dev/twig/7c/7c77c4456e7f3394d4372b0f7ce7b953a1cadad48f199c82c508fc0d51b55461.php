<?php

/* MapbenderCoreBundle:Element:redlining.html.twig */
class __TwigTemplate_3e220650bfdfc2ae0211b9679e80445a5618bf463f502c0998b212c5367c28b5 extends Twig_Template
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
        $__internal_3bbf6ff69bfebe3e4661d761d7655f7dc4de1b9990219b95c89d4b86041f6b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbf6ff69bfebe3e4661d761d7655f7dc4de1b9990219b95c89d4b86041f6b71->enter($__internal_3bbf6ff69bfebe3e4661d761d7655f7dc4de1b9990219b95c89d4b86041f6b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:redlining.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-redlining hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "\">
    ";
        // line 2
        if (twig_in_filter("point", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "geometrytypes", array()))) {
            // line 3
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"point\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.point"), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "    ";
        if (twig_in_filter("line", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "geometrytypes", array()))) {
            // line 6
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"line\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.line"), "html", null, true);
            echo "\">
    ";
        }
        // line 8
        echo "    ";
        if (twig_in_filter("polygon", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "geometrytypes", array()))) {
            // line 9
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"polygon\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.polygon"), "html", null, true);
            echo "\">
    ";
        }
        // line 11
        echo "    ";
        if (twig_in_filter("rectangle", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "geometrytypes", array()))) {
            // line 12
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"rectangle\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.rectangle"), "html", null, true);
            echo "\">
    ";
        }
        // line 14
        echo "    ";
        if (twig_in_filter("text", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "geometrytypes", array()))) {
            // line 15
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.label"), "html", null, true);
            echo "\">
        <div id=\"redlining-text-wrapper\" class=\"text-wrapper hidden\">
            <label class=\"labelInput\" for=\"loadWmsUrl\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.text.label"), "html", null, true);
            echo ":</label>
            <div class=\"inputWrapper\">
                <input name=\"label-text\" class=\"input\" type=\"text\" />
            </div>
        </div>
    ";
        }
        // line 23
        echo "    <table class=\"geometry-table\">
        <tr class=\"geometry-item\" data-id=\"\">
            <td class=\"geometry-name\"></td>
            <td class=\"geometry-actions\">
                <span class=\"geometry-remove iconRemove iconSmall\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometry.action.remove"), "html", null, true);
        echo "\"></span>
                <span class=\"geometry-edit iconEdit iconSmall\" title=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometry.action.edit"), "html", null, true);
        echo "\"></span>
                <span class=\"geometry-zoom iconZoomSelect iconSmall\" title=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometry.action.zoom"), "html", null, true);
        echo "\"></span>
            </td>
        </tr>
    </table>
</div>
";
        
        $__internal_3bbf6ff69bfebe3e4661d761d7655f7dc4de1b9990219b95c89d4b86041f6b71->leave($__internal_3bbf6ff69bfebe3e4661d761d7655f7dc4de1b9990219b95c89d4b86041f6b71_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:redlining.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  92 => 28,  88 => 27,  82 => 23,  73 => 17,  67 => 15,  64 => 14,  58 => 12,  55 => 11,  49 => 9,  46 => 8,  40 => 6,  37 => 5,  31 => 3,  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-redlining hidden\" data-title=\"{{ title|trans }}\">
    {% if 'point' in configuration.geometrytypes %}
        <input type=\"button\" class=\"redlining-tool button\" name=\"point\" value=\"{{ \"mb.core.redlining.geometrytype.point\"|trans}}\">
    {% endif %}
    {% if 'line' in configuration.geometrytypes %}
        <input type=\"button\" class=\"redlining-tool button\" name=\"line\" value=\"{{ \"mb.core.redlining.geometrytype.line\"|trans}}\">
    {% endif %}
    {% if 'polygon' in configuration.geometrytypes %}
        <input type=\"button\" class=\"redlining-tool button\" name=\"polygon\" value=\"{{ \"mb.core.redlining.geometrytype.polygon\"|trans}}\">
    {% endif %}
    {% if 'rectangle' in configuration.geometrytypes %}
        <input type=\"button\" class=\"redlining-tool button\" name=\"rectangle\" value=\"{{ \"mb.core.redlining.geometrytype.rectangle\"|trans}}\">
    {% endif %}
    {% if 'text' in configuration.geometrytypes %}
        <input type=\"button\" class=\"redlining-tool button\" name=\"text\" value=\"{{ \"mb.core.redlining.geometrytype.text.label\"|trans}}\">
        <div id=\"redlining-text-wrapper\" class=\"text-wrapper hidden\">
            <label class=\"labelInput\" for=\"loadWmsUrl\">{{ \"mb.core.redlining.geometrytype.text.label\"|trans}}:</label>
            <div class=\"inputWrapper\">
                <input name=\"label-text\" class=\"input\" type=\"text\" />
            </div>
        </div>
    {% endif %}
    <table class=\"geometry-table\">
        <tr class=\"geometry-item\" data-id=\"\">
            <td class=\"geometry-name\"></td>
            <td class=\"geometry-actions\">
                <span class=\"geometry-remove iconRemove iconSmall\" title=\"{{\"mb.core.redlining.geometry.action.remove\" | trans }}\"></span>
                <span class=\"geometry-edit iconEdit iconSmall\" title=\"{{\"mb.core.redlining.geometry.action.edit\" | trans }}\"></span>
                <span class=\"geometry-zoom iconZoomSelect iconSmall\" title=\"{{\"mb.core.redlining.geometry.action.zoom\" | trans }}\"></span>
            </td>
        </tr>
    </table>
</div>
", "MapbenderCoreBundle:Element:redlining.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/redlining.html.twig");
    }
}
