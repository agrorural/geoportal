<?php

/* MapbenderCoreBundle:Template:fullscreen.html.twig */
class __TwigTemplate_2cb3647c17a72b305a23ebb8b3f4cf46685cda3f1381a40b5141cca911fad6e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::frontend.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'css' => array($this, 'block_css'),
            'trans' => array($this, 'block_trans'),
            'js' => array($this, 'block_js'),
            'frontend_content' => array($this, 'block_frontend_content'),
            'logo' => array($this, 'block_logo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MapbenderCoreBundle::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Mapbender3 - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "type" => "css")), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_trans($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "type" => "trans")), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_js($context, array $blocks = array())
    {
        // line 17
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "type" => "js")), "html", null, true);
        echo "\"></script>
";
    }

    // line 22
    public function block_frontend_content($context, array $blocks = array())
    {
        // line 23
        echo "  ";
        $context["sidePaneClosed"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), "sidepane", array(), "any", false, true), "properties", array(), "any", false, true), "closed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), "sidepane", array(), "any", false, true), "properties", array(), "any", false, true), "closed", array()), false)) : (false));
        // line 24
        echo "  <div id=\"templateWrapper\" class=\"templateWrapper ";
        if (((isset($context["sidePaneClosed"]) ? $context["sidePaneClosed"] : null) == false)) {
            echo "sidePaneOpened";
        }
        echo "\">
    ";
        // line 25
        if ($this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_logo", array(), "any", true, true)) {
            // line 26
            echo "      <div class=\"logoContainer\">
        ";
            // line 27
            $this->displayBlock('logo', $context, $blocks);
            // line 30
            echo "      </div>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(), "any", false, true), "toolbar", array(), "any", true, true)) {
            // line 34
            echo "    <ul id=\"toolbar\" class=\"toolBar itemsRight top\">
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(0 => "toolbar"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 36
                echo "          <li class=\"toolBarItem\">";
                echo $this->getAttribute($context["element"], "render", array(), "method");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    </ul>
    ";
        }
        // line 40
        echo "
    ";
        // line 42
        echo "    ";
        $context["name"] = "sidepane";
        // line 43
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(), "any", false, true), (isset($context["name"]) ? $context["name"] : null), array(), "array", true, true)) {
            // line 44
            echo "      ";
            $context["region"] = $this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array()), (isset($context["name"]) ? $context["name"] : null), array(), "array");
            // line 45
            echo "      ";
            $context["properties"] = (($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array", false, true), "properties", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array", false, true), "properties", array()), array())) : (array()));
            // line 46
            echo "      ";
            $context["align"] = (($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "align", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "align", array()), "left")) : ("left"));
            // line 47
            echo "      ";
            $context["isRegionClosed"] = (($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "closed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "closed", array()), "false")) : ("false"));
            // line 48
            echo "
      <div id=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"
           data-closed=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["isRegionClosed"]) ? $context["isRegionClosed"] : null), "html", null, true);
            echo "\"
           class=\"clear sidePane ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
            echo "\"
        ";
            // line 52
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "width", array(), "any", true, true)) {
                echo " style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "width", array()), "html", null, true);
                echo "\"";
            }
            // line 53
            echo "      >
        <ul class=\"sidePaneTabs\">
          <li class=\"sidePaneTabItem toggleSideBar\"></li>
        </ul>
        <div class=\"sideContent\">
          ";
            // line 58
            $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 58)->display(array_merge($context, array("region_props" => (isset($context["region_props"]) ? $context["region_props"] : null), "application" => (isset($context["application"]) ? $context["application"] : null), "region" => (isset($context["name"]) ? $context["name"] : null))));
            // line 59
            echo "        </div>
      </div>
    ";
        }
        // line 62
        echo "
    <div id=\"content\" class=\"contentPane\">
      ";
        // line 64
        $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 64)->display(array_merge($context, array("region_props" => (isset($context["region_props"]) ? $context["region_props"] : null), "application" => (isset($context["application"]) ? $context["application"] : null), "region" => "content")));
        // line 65
        echo "    </div>

    ";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(), "any", false, true), "footer", array(), "any", true, true)) {
            // line 68
            echo "    <ul id=\"footer\" class=\"toolBar itemsRight bottom\">
        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(0 => "footer"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 70
                echo "          <li class=\"toolBarItem\">";
                echo $this->getAttribute($context["element"], "render", array(), "method");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </ul>
    ";
        }
        // line 74
        echo "  </div>

";
    }

    // line 27
    public function block_logo($context, array $blocks = array())
    {
        // line 28
        echo "          <img class=\"logo\" height=\"40\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_logo", array())), "html", null, true);
        echo "\"/>
        ";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Template:fullscreen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 28,  228 => 27,  222 => 74,  218 => 72,  209 => 70,  205 => 69,  202 => 68,  200 => 67,  196 => 65,  194 => 64,  190 => 62,  185 => 59,  183 => 58,  176 => 53,  170 => 52,  166 => 51,  162 => 50,  158 => 49,  155 => 48,  152 => 47,  149 => 46,  146 => 45,  143 => 44,  140 => 43,  137 => 42,  134 => 40,  130 => 38,  121 => 36,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  105 => 30,  103 => 27,  100 => 26,  98 => 25,  91 => 24,  88 => 23,  85 => 22,  79 => 18,  74 => 17,  71 => 16,  65 => 13,  60 => 12,  57 => 11,  50 => 8,  47 => 7,  41 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Template:fullscreen.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/fullscreen.html.twig");
    }
}
