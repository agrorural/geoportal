<?php

/* MapbenderCoreBundle:Element:button.html.twig */
class __TwigTemplate_00b2cbed15d28bfe4bd91bb0da5a625e3f19c5489c62a65cf61b57b760f4e7f0 extends Twig_Template
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
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "group", array(), "any", true, true)) {
            // line 2
            echo "  <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : null))) : ((isset($context["title"]) ? $context["title"] : null)))), "html", null, true);
            echo "\" class=\"mb-button ";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array(), "any", true, true)) {
                echo " iconBig ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array()), "html", null, true);
            }
            echo "\">";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            }
            echo "</label><input type=\"checkbox\" class=\"mb-hiddenCheckbox\" name=\"mb-button-group[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "group", array()), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"/>
";
        } else {
            // line 4
            echo "  <span id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"iconBig ";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "icon", array()), "html", null, true);
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "tooltip", array()), (isset($context["title"]) ? $context["title"] : null))) : ((isset($context["title"]) ? $context["title"] : null)))), "html", null, true);
            echo "\">";
            if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
            }
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:button.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/button.html.twig");
    }
}
