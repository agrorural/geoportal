<?php

/* MapbenderCoreBundle:Element:layertree.html.twig */
class __TwigTemplate_e023a8b17592259465f7fde91fa6ae79e50dce2cd746f1f72b51381d4ac95085 extends Twig_Template
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
        echo "\" class=\"mb-element mb-element-layertree hidden\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\">
  <li class=\"hidden leave showLeaves\" data-state=\"\" data-title=\"\">
    <div class=\"leaveContainer\">
      <span class=\"layer-spinner\"></span>
      <span class=\"layer-state\"></span>
      <span class=\"iconFolder left\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.tooltip.sublayers_openclose"), "html", null, true);
        echo "\"></span>
      <div class=\"checkWrapper left iconCheckbox sourceVisibilityWrapper\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.sourcevisibility_onoff"), "html", null, true);
        echo "\">
        <input class=\"layer-selected checkbox\" type=\"checkbox\" name=\"sourceVisibility\">
      </div>
      <div class=\"left iconOk selectAll\" title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.allvisibility_on"), "html", null, true);
        echo "\"></div>
      <div class=\"checkWrapper left iconCheckbox selectedWrapper\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.visibility_onoff"), "html", null, true);
        echo "\">
        <input class=\"layer-selected checkbox\" type=\"checkbox\" name=\"selected\">
      </div>
      <div class=\"checkWrapper left iconInfo featureInfoWrapper\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.featureinfo_onoff"), "html", null, true);
        echo "\">
        <input class=\"layer-info checkbox\" type=\"checkbox\" name=\"info\"/>
      </div>
      <span class=\"layer-title labelCheck\"></span>
      ";
        // line 18
        if ((($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array()) != null)) && (twig_length_filter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array())) > 0))) {
            // line 19
            echo "      <span class=\"iconMenu right layer-menu-btn\">
        <div id=\"layer-menu\" class=\"layer-menu hidden\">
          <span class=\"iconCancel exit-button\" title=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.tooltip.menu.close"), "html", null, true);
            echo "\"></span>
          ";
            // line 22
            if (twig_in_filter("opacity", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array()))) {
                // line 23
                echo "          <div id=\"layer-opacity\" class=\"layer-opacity-bar layer-slider-bar\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.opacity"), "html", null, true);
                echo "\">
            <div class=\"layer-opacity-handle layer-slider-handle\">100</div>
          </div>
          ";
            }
            // line 27
            echo "          ";
            if (twig_in_filter("dimension", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array()))) {
                // line 28
                echo "          <div class=\"layer-dimension-checkbox checkWrapper left iconCheckbox\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension_onoff"), "html", null, true);
                echo "\">
            <input type=\"checkbox\" class=\"checkbox\"/>
          </div>
          <span id=\"layer-dimension-value-\" class=\"layer-dimension-title labelCheck\" title=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension.current_value"), "html", null, true);
                echo "\"></span>
          <div id=\"layer-dimension-\" class=\"layer-dimension-bar layer-slider-bar\" title=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension"), "html", null, true);
                echo "\">
            <div class=\"layer-dimension-handle layer-slider-handle\"></div>
          </div>
          <input type=\"text\" class=\"layer-dimension-textfield inputText\" name=\"dimension-extent\" title=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.dimension"), "html", null, true);
                echo "\"/>
          ";
            }
            // line 37
            echo "          ";
            if (twig_in_filter("zoomtolayer", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array()))) {
                // line 38
                echo "          <div class=\"layer-zoom iconSearch iconSmall\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.zoomtolayer"), "html", null, true);
                echo "\"></div>
          ";
            }
            // line 40
            echo "          ";
            if (twig_in_filter("metadata", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array()))) {
                // line 41
                echo "          <div class=\"layer-metadata iconFileText iconSmall\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.metadata"), "html", null, true);
                echo "\"></div>
          ";
            }
            // line 43
            echo "          ";
            if (twig_in_filter("layerremove", $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "menu", array()))) {
                // line 44
                echo "          <div class=\"layer-remove-btn iconRemove iconSmall\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.tooltip.removelayer"), "html", null, true);
                echo "\"></div>
          ";
            }
            // line 46
            echo "        </div>
      </span>
      ";
        }
        // line 49
        echo "    </div>
    <ul id=\"list-first\" class=\"layers\"></ul>
  </li>
  ";
        // line 52
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "showHeader", array())) {
            // line 53
            echo "  <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.sources"), "html", null, true);
            echo " (<span id=\"counter\">0</span>)<a href=\"#\" id=\"delete-all\" class=\"icononly\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.layertree.label.deleteallsources"), "html", null, true);
            echo "\">&times;</a></h2>
  ";
        }
        // line 55
        echo "  <ul id=\"list-root\" class=\"layers\" ></ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:layertree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  141 => 53,  139 => 52,  134 => 49,  129 => 46,  123 => 44,  120 => 43,  114 => 41,  111 => 40,  105 => 38,  102 => 37,  97 => 35,  91 => 32,  87 => 31,  80 => 28,  77 => 27,  69 => 23,  67 => 22,  63 => 21,  59 => 19,  57 => 18,  50 => 14,  44 => 11,  40 => 10,  34 => 7,  30 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:layertree.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/layertree.html.twig");
    }
}
