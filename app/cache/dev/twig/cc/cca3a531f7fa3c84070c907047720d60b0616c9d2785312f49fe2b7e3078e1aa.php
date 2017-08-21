<?php

/* MapbenderCoreBundle:Element:zoombar.html.twig */
class __TwigTemplate_b44972ee337a56f54ea0dddcd486b38f5ce73fae0840ab248846a6e861155b06 extends Twig_Template
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
        $__internal_2a405f27a42156fee612928b6211ebc583d258d688b8e3df230a526b3578f558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a405f27a42156fee612928b6211ebc583d258d688b8e3df230a526b3578f558->enter($__internal_2a405f27a42156fee612928b6211ebc583d258d688b8e3df230a526b3578f558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:zoombar.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-zoombar ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "anchor", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        if (twig_in_filter("pan", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
            // line 4
            echo "  <div class=\"pan\">
    <span class=\"panUp iconTop\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.panup"), "html", null, true);
            echo "\"></span>
    <span class=\"panRight iconRight\" title=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.panright"), "html", null, true);
            echo "\"></span>
    <span class=\"panDown iconDown\" title=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.pandown"), "html", null, true);
            echo "\"></span>
    <span class=\"panLeft iconLeft\" title=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.panleft"), "html", null, true);
            echo "\"></span>
  </div>
  ";
        }
        // line 11
        echo "  <ul class=\"toolPane\">
    ";
        // line 12
        if (twig_in_filter("history", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
            // line 13
            echo "      <li class=\"history\">
        <span class=\"historyPrev iconPrev\" title=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.goback"), "html", null, true);
            echo "\"></span>
        <span class=\"historyNext iconNext\" title=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.goforward"), "html", null, true);
            echo "\"></span>
      </li>
    ";
        }
        // line 18
        echo "    ";
        if (twig_in_filter("zoom_box", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
            // line 19
            echo "      <li class=\"zoomBox\">
        <span class=\"iconZoomSelect iconBig\" title=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoombybox"), "html", null, true);
            echo "\"></span>
      </li>
    ";
        }
        // line 23
        echo "    ";
        if (twig_in_filter("zoom_max", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
            // line 24
            echo "      <li class=\"zoomWorld\">
        <span class=\"iconZoomMin iconBig\" title=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoombyworld"), "html", null, true);
            echo "\"></span>
      </li>
    ";
        }
        // line 28
        echo "    ";
        if ((twig_in_filter("zoom_in_out", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array())) || twig_in_filter("zoom_slider", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array())))) {
            // line 29
            echo "      <li class=\"zoomSlider\">
        ";
            // line 30
            if (twig_in_filter("zoom_in_out", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
                // line 31
                echo "        <span class=\"iconZoomIn iconBig\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoomin"), "html", null, true);
                echo "\"></span>
        ";
            }
            // line 33
            echo "        ";
            if (twig_in_filter("zoom_slider", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
                // line 34
                echo "        <ul class=\"zoomSliderLevels\"></ul>
        ";
            }
            // line 36
            echo "        ";
            if (twig_in_filter("zoom_in_out", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "components", array()))) {
                // line 37
                echo "        <span class=\"iconZoomOut iconBig\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoomout"), "html", null, true);
                echo "\"></span>
        ";
            }
            // line 39
            echo "      </li>
    ";
        }
        // line 41
        echo "  </ul>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a405f27a42156fee612928b6211ebc583d258d688b8e3df230a526b3578f558->leave($__internal_2a405f27a42156fee612928b6211ebc583d258d688b8e3df230a526b3578f558_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:zoombar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  126 => 39,  120 => 37,  117 => 36,  113 => 34,  110 => 33,  104 => 31,  102 => 30,  99 => 29,  96 => 28,  90 => 25,  87 => 24,  84 => 23,  78 => 20,  75 => 19,  72 => 18,  66 => 15,  62 => 14,  59 => 13,  57 => 12,  54 => 11,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<div id=\"{{ id }}\" class=\"mb-element mb-element-zoombar {{configuration.anchor}}\">
  {% if 'pan' in configuration.components %}
  <div class=\"pan\">
    <span class=\"panUp iconTop\" title=\"{{ \"mb.core.zoombar.panup\" | trans }}\"></span>
    <span class=\"panRight iconRight\" title=\"{{ \"mb.core.zoombar.panright\" | trans }}\"></span>
    <span class=\"panDown iconDown\" title=\"{{ \"mb.core.zoombar.pandown\" | trans }}\"></span>
    <span class=\"panLeft iconLeft\" title=\"{{ \"mb.core.zoombar.panleft\" | trans }}\"></span>
  </div>
  {% endif %}
  <ul class=\"toolPane\">
    {% if 'history' in configuration.components %}
      <li class=\"history\">
        <span class=\"historyPrev iconPrev\" title=\"{{ \"mb.core.zoombar.goback\" | trans }}\"></span>
        <span class=\"historyNext iconNext\" title=\"{{ \"mb.core.zoombar.goforward\" | trans }}\"></span>
      </li>
    {% endif %}
    {% if 'zoom_box' in configuration.components %}
      <li class=\"zoomBox\">
        <span class=\"iconZoomSelect iconBig\" title=\"{{ \"mb.core.zoombar.zoombybox\" | trans }}\"></span>
      </li>
    {% endif %}
    {% if 'zoom_max' in configuration.components %}
      <li class=\"zoomWorld\">
        <span class=\"iconZoomMin iconBig\" title=\"{{ \"mb.core.zoombar.zoombyworld\" | trans }}\"></span>
      </li>
    {% endif %}
    {% if 'zoom_in_out' in configuration.components or 'zoom_slider' in configuration.components %}
      <li class=\"zoomSlider\">
        {% if 'zoom_in_out' in configuration.components %}
        <span class=\"iconZoomIn iconBig\" title=\"{{ \"mb.core.zoombar.zoomin\" | trans }}\"></span>
        {% endif %}
        {% if 'zoom_slider' in configuration.components %}
        <ul class=\"zoomSliderLevels\"></ul>
        {% endif %}
        {% if 'zoom_in_out' in configuration.components %}
        <span class=\"iconZoomOut iconBig\" title=\"{{ \"mb.core.zoombar.zoomout\" | trans }}\"></span>
        {% endif %}
      </li>
    {% endif %}
  </ul>
</div>
{% endspaceless %}
", "MapbenderCoreBundle:Element:zoombar.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/zoombar.html.twig");
    }
}
