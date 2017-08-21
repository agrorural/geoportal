<?php

/* MapbenderCoreBundle:Template:fullscreen.html.twig */
class __TwigTemplate_5d906ee9dc917bff9abb1b19c0bf52ac7f8d56e34de2778f62448707ffa228fc extends Twig_Template
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
        $__internal_84213bf2f35083a7c37d03039caf762c3ffd75b13d1cb61d4308f5916be8cff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84213bf2f35083a7c37d03039caf762c3ffd75b13d1cb61d4308f5916be8cff6->enter($__internal_84213bf2f35083a7c37d03039caf762c3ffd75b13d1cb61d4308f5916be8cff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Template:fullscreen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84213bf2f35083a7c37d03039caf762c3ffd75b13d1cb61d4308f5916be8cff6->leave($__internal_84213bf2f35083a7c37d03039caf762c3ffd75b13d1cb61d4308f5916be8cff6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e32efaa001d9ee00b26bba703b69cd5c5c8cc46cd1cfe2887b015fce14f6a9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32efaa001d9ee00b26bba703b69cd5c5c8cc46cd1cfe2887b015fce14f6a9f9->enter($__internal_e32efaa001d9ee00b26bba703b69cd5c5c8cc46cd1cfe2887b015fce14f6a9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mapbender3 - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "title", array()), "html", null, true);
        
        $__internal_e32efaa001d9ee00b26bba703b69cd5c5c8cc46cd1cfe2887b015fce14f6a9f9->leave($__internal_e32efaa001d9ee00b26bba703b69cd5c5c8cc46cd1cfe2887b015fce14f6a9f9_prof);

    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_8ff876fa77ff54b753443a514787ebcf9d56b1747f9acf8bb997c2bd50586c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff876fa77ff54b753443a514787ebcf9d56b1747f9acf8bb997c2bd50586c6b->enter($__internal_8ff876fa77ff54b753443a514787ebcf9d56b1747f9acf8bb997c2bd50586c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        
        $__internal_8ff876fa77ff54b753443a514787ebcf9d56b1747f9acf8bb997c2bd50586c6b->leave($__internal_8ff876fa77ff54b753443a514787ebcf9d56b1747f9acf8bb997c2bd50586c6b_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_e8e182e9c8fbab273ecd57b06ebb10e849e4512d8f9481812654403e90e713e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e182e9c8fbab273ecd57b06ebb10e849e4512d8f9481812654403e90e713e1->enter($__internal_e8e182e9c8fbab273ecd57b06ebb10e849e4512d8f9481812654403e90e713e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "slug", array()), "type" => "css")), "html", null, true);
        echo "\"/>
";
        
        $__internal_e8e182e9c8fbab273ecd57b06ebb10e849e4512d8f9481812654403e90e713e1->leave($__internal_e8e182e9c8fbab273ecd57b06ebb10e849e4512d8f9481812654403e90e713e1_prof);

    }

    // line 11
    public function block_trans($context, array $blocks = array())
    {
        $__internal_80545ae954dd7eaa61f58e50eedd2a15794f98d2def761b3b7b884ef0714dfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80545ae954dd7eaa61f58e50eedd2a15794f98d2def761b3b7b884ef0714dfe2->enter($__internal_80545ae954dd7eaa61f58e50eedd2a15794f98d2def761b3b7b884ef0714dfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trans"));

        // line 12
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "slug", array()), "type" => "trans")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_80545ae954dd7eaa61f58e50eedd2a15794f98d2def761b3b7b884ef0714dfe2->leave($__internal_80545ae954dd7eaa61f58e50eedd2a15794f98d2def761b3b7b884ef0714dfe2_prof);

    }

    // line 16
    public function block_js($context, array $blocks = array())
    {
        $__internal_baad9e0181c8d744002753bcacb248f8d09228b1feac6438f782536c207ca3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad9e0181c8d744002753bcacb248f8d09228b1feac6438f782536c207ca3a8->enter($__internal_baad9e0181c8d744002753bcacb248f8d09228b1feac6438f782536c207ca3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 17
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "slug", array()), "type" => "js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_baad9e0181c8d744002753bcacb248f8d09228b1feac6438f782536c207ca3a8->leave($__internal_baad9e0181c8d744002753bcacb248f8d09228b1feac6438f782536c207ca3a8_prof);

    }

    // line 22
    public function block_frontend_content($context, array $blocks = array())
    {
        $__internal_2240b260d2baef31a29143ac94ec7db029852de22bbf3776493d5bd4dd135c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2240b260d2baef31a29143ac94ec7db029852de22bbf3776493d5bd4dd135c12->enter($__internal_2240b260d2baef31a29143ac94ec7db029852de22bbf3776493d5bd4dd135c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frontend_content"));

        // line 23
        echo "  ";
        $context["sidePaneClosed"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), "sidepane", array(), "any", false, true), "properties", array(), "any", false, true), "closed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), "sidepane", array(), "any", false, true), "properties", array(), "any", false, true), "closed", array()), false)) : (false));
        // line 24
        echo "  <div id=\"templateWrapper\" class=\"templateWrapper ";
        if (((isset($context["sidePaneClosed"]) ? $context["sidePaneClosed"] : $this->getContext($context, "sidePaneClosed")) == false)) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array(0 => "toolbar"), "method"));
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
        if ($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(), "any", false, true), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array", true, true)) {
            // line 44
            echo "      ";
            $context["region"] = $this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array()), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array");
            // line 45
            echo "      ";
            $context["properties"] = (($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array", false, true), "properties", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array", false, true), "properties", array()), array())) : (array()));
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
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"
           data-closed=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["isRegionClosed"]) ? $context["isRegionClosed"] : $this->getContext($context, "isRegionClosed")), "html", null, true);
            echo "\"
           class=\"clear sidePane ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : $this->getContext($context, "align")), "html", null, true);
            echo "\"
        ";
            // line 52
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "width", array(), "any", true, true)) {
                echo " style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "width", array()), "html", null, true);
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
            $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 58)->display(array_merge($context, array("region_props" => (isset($context["region_props"]) ? $context["region_props"] : $this->getContext($context, "region_props")), "application" => (isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "region" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
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
        $this->loadTemplate("MapbenderCoreBundle:Template:region.html.twig", "MapbenderCoreBundle:Template:fullscreen.html.twig", 64)->display(array_merge($context, array("region_props" => (isset($context["region_props"]) ? $context["region_props"] : $this->getContext($context, "region_props")), "application" => (isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "region" => "content")));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array(0 => "footer"), "method"));
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
        
        $__internal_2240b260d2baef31a29143ac94ec7db029852de22bbf3776493d5bd4dd135c12->leave($__internal_2240b260d2baef31a29143ac94ec7db029852de22bbf3776493d5bd4dd135c12_prof);

    }

    // line 27
    public function block_logo($context, array $blocks = array())
    {
        $__internal_f40b43701baa35531785ddf42e67b3fff0f34b204e79c05eab722c5ce50f2132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40b43701baa35531785ddf42e67b3fff0f34b204e79c05eab722c5ce50f2132->enter($__internal_f40b43701baa35531785ddf42e67b3fff0f34b204e79c05eab722c5ce50f2132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 28
        echo "          <img class=\"logo\" height=\"40\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["fom"]) ? $context["fom"] : $this->getContext($context, "fom")), "server_logo", array())), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_f40b43701baa35531785ddf42e67b3fff0f34b204e79c05eab722c5ce50f2132->leave($__internal_f40b43701baa35531785ddf42e67b3fff0f34b204e79c05eab722c5ce50f2132_prof);

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
        return array (  276 => 28,  270 => 27,  261 => 74,  257 => 72,  248 => 70,  244 => 69,  241 => 68,  239 => 67,  235 => 65,  233 => 64,  229 => 62,  224 => 59,  222 => 58,  215 => 53,  209 => 52,  205 => 51,  201 => 50,  197 => 49,  194 => 48,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  179 => 43,  176 => 42,  173 => 40,  169 => 38,  160 => 36,  156 => 35,  153 => 34,  151 => 33,  148 => 32,  144 => 30,  142 => 27,  139 => 26,  137 => 25,  130 => 24,  127 => 23,  121 => 22,  112 => 18,  107 => 17,  101 => 16,  92 => 13,  87 => 12,  81 => 11,  71 => 8,  65 => 7,  53 => 5,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MapbenderCoreBundle::frontend.html.twig\" %}

{% block title %}Mapbender3 - {{ application.title }}{% endblock %}

{% block favicon %}{{ asset('favicon.png') }}{% endblock %}

{% block css %}
  <link rel=\"stylesheet\" href=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'css'}) }}\"/>
{% endblock %}

{% block trans %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'trans'}) }}\"></script>
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': application.slug, 'type': 'js'}) }}\"></script>
{% endblock %}


{% block frontend_content %}
  {% set sidePaneClosed = region_props.sidepane.properties.closed|default(false) %}
  <div id=\"templateWrapper\" class=\"templateWrapper {% if sidePaneClosed == false %}sidePaneOpened{% endif %}\">
    {% if fom.server_logo is defined %}
      <div class=\"logoContainer\">
        {% block logo %}
          <img class=\"logo\" height=\"40\" src=\"{{ asset(fom.server_logo) }}\"/>
        {% endblock %}
      </div>
    {% endif %}

    {% if application.elements.toolbar is defined %}
    <ul id=\"toolbar\" class=\"toolBar itemsRight top\">
        {% for element in application.elements('toolbar') %}
          <li class=\"toolBarItem\">{{ element.render() | raw }}</li>
        {% endfor %}
    </ul>
    {% endif %}

    {# Right sidepane definition #}
    {% set name = 'sidepane' %}
    {% if application.elements[name] is defined %}
      {% set region = application.elements[name] %}
      {% set properties = region_props[name].properties|default({}) %}
      {% set align = properties.align|default('left') %}
      {% set isRegionClosed = properties.closed|default('false') %}

      <div id=\"{{ name }}\"
           data-closed=\"{{ isRegionClosed }}\"
           class=\"clear sidePane {{ align }}\"
        {% if properties.width is defined %} style=\"width: {{ properties.width }}\"{% endif %}
      >
        <ul class=\"sidePaneTabs\">
          <li class=\"sidePaneTabItem toggleSideBar\"></li>
        </ul>
        <div class=\"sideContent\">
          {% include \"MapbenderCoreBundle:Template:region.html.twig\"  with {'region_props': region_props, 'application': application, 'region': name } %}
        </div>
      </div>
    {% endif %}

    <div id=\"content\" class=\"contentPane\">
      {% include \"MapbenderCoreBundle:Template:region.html.twig\"  with {'region_props': region_props, 'application': application, 'region': 'content' }%}
    </div>

    {% if application.elements.footer is defined %}
    <ul id=\"footer\" class=\"toolBar itemsRight bottom\">
        {% for element in application.elements('footer')%}
          <li class=\"toolBarItem\">{{ element.render() | raw }}</li>
        {% endfor %}
    </ul>
    {% endif %}
  </div>

{% endblock %}
", "MapbenderCoreBundle:Template:fullscreen.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/fullscreen.html.twig");
    }
}
