<?php

/* MapbenderCoreBundle:Element:redlining.html.twig */
class __TwigTemplate_e37453236bcb93ea4ed86b33a2f4a17305052b58de85112e74e62f7c3cd6528d extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-element mb-element-redlining hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\">
    ";
        // line 2
        if (twig_in_filter("point", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "geometrytypes", array()))) {
            // line 3
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"point\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.point"), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "    ";
        if (twig_in_filter("line", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "geometrytypes", array()))) {
            // line 6
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"line\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.line"), "html", null, true);
            echo "\">
    ";
        }
        // line 8
        echo "    ";
        if (twig_in_filter("polygon", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "geometrytypes", array()))) {
            // line 9
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"polygon\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.polygon"), "html", null, true);
            echo "\">
    ";
        }
        // line 11
        echo "    ";
        if (twig_in_filter("rectangle", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "geometrytypes", array()))) {
            // line 12
            echo "        <input type=\"button\" class=\"redlining-tool button\" name=\"rectangle\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.redlining.geometrytype.rectangle"), "html", null, true);
            echo "\">
    ";
        }
        // line 14
        echo "    ";
        if (twig_in_filter("text", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "geometrytypes", array()))) {
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
        return array (  93 => 29,  89 => 28,  85 => 27,  79 => 23,  70 => 17,  64 => 15,  61 => 14,  55 => 12,  52 => 11,  46 => 9,  43 => 8,  37 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:redlining.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/redlining.html.twig");
    }
}
