<?php

/* MapbenderCoreBundle:Element:zoombar.html.twig */
class __TwigTemplate_cb0d13d7b5abc7fdce88aa92ceea865734f5530b619880e6ff75d5084bcaabd1 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-element mb-element-zoombar ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "anchor", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        if (twig_in_filter("pan", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
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
        if (twig_in_filter("history", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
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
        if (twig_in_filter("zoom_box", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
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
        if (twig_in_filter("zoom_max", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
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
        if ((twig_in_filter("zoom_in_out", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array())) || twig_in_filter("zoom_slider", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array())))) {
            // line 29
            echo "      <li class=\"zoomSlider\">
        ";
            // line 30
            if (twig_in_filter("zoom_in_out", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
                // line 31
                echo "        <span class=\"iconZoomIn iconBig\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.zoombar.zoomin"), "html", null, true);
                echo "\"></span>
        ";
            }
            // line 33
            echo "        ";
            if (twig_in_filter("zoom_slider", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
                // line 34
                echo "        <ul class=\"zoomSliderLevels\"></ul>
        ";
            }
            // line 36
            echo "        ";
            if (twig_in_filter("zoom_in_out", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "components", array()))) {
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
        return array (  127 => 41,  123 => 39,  117 => 37,  114 => 36,  110 => 34,  107 => 33,  101 => 31,  99 => 30,  96 => 29,  93 => 28,  87 => 25,  84 => 24,  81 => 23,  75 => 20,  72 => 19,  69 => 18,  63 => 15,  59 => 14,  56 => 13,  54 => 12,  51 => 11,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  30 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:zoombar.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/zoombar.html.twig");
    }
}
