<?php

/* MapbenderCoreBundle:Welcome:list.html.twig */
class __TwigTemplate_c77374d8469fffd5e01a2371ba139e17b2f1b8b42e0a2a8c4f7e5ae226324037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "MapbenderCoreBundle:Welcome:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'js' => array($this, 'block_js'),
            'manager_content' => array($this, 'block_manager_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOMManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_114ed0027f4deeea07bb0681c40ce0a0f02b7bc99cda7d270e8f32803b2bb774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114ed0027f4deeea07bb0681c40ce0a0f02b7bc99cda7d270e8f32803b2bb774->enter($__internal_114ed0027f4deeea07bb0681c40ce0a0f02b7bc99cda7d270e8f32803b2bb774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Welcome:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_114ed0027f4deeea07bb0681c40ce0a0f02b7bc99cda7d270e8f32803b2bb774->leave($__internal_114ed0027f4deeea07bb0681c40ce0a0f02b7bc99cda7d270e8f32803b2bb774_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21b18f2c37d5b32bd276a524214311d983ea308657527109eab53dbb53fe3c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b18f2c37d5b32bd276a524214311d983ea308657527109eab53dbb53fe3c79->enter($__internal_21b18f2c37d5b32bd276a524214311d983ea308657527109eab53dbb53fe3c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.applications"), "html", null, true);
        
        $__internal_21b18f2c37d5b32bd276a524214311d983ea308657527109eab53dbb53fe3c79->leave($__internal_21b18f2c37d5b32bd276a524214311d983ea308657527109eab53dbb53fe3c79_prof);

    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        $__internal_e06cb700a024e4981bc0ab3605a4af72fb09d30fd7f61c9377cce145fb99bff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06cb700a024e4981bc0ab3605a4af72fb09d30fd7f61c9377cce145fb99bff8->enter($__internal_e06cb700a024e4981bc0ab3605a4af72fb09d30fd7f61c9377cce145fb99bff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 6
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-list.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e06cb700a024e4981bc0ab3605a4af72fb09d30fd7f61c9377cce145fb99bff8->leave($__internal_e06cb700a024e4981bc0ab3605a4af72fb09d30fd7f61c9377cce145fb99bff8_prof);

    }

    // line 10
    public function block_manager_content($context, array $blocks = array())
    {
        $__internal_a6b1ba6a91af427aefd369e68ac6513f3499335bd65847d8c19d91bd1ad323cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b1ba6a91af427aefd369e68ac6513f3499335bd65847d8c19d91bd1ad323cd->enter($__internal_a6b1ba6a91af427aefd369e68ac6513f3499335bd65847d8c19d91bd1ad323cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "manager_content"));

        // line 11
        echo "
  ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["applications"]) ? $context["applications"] : $this->getContext($context, "applications"))) > 0)) {
            // line 13
            echo "    <label for=\"inputFilterApplications\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.application"), "html", null, true);
            echo ":</label><input id=\"inputFilterApplications\" type=\"text\" class=\"input listFilterInput\">
    ";
            // line 14
            $this->loadTemplate("MapbenderManagerBundle:Application:actions.html.twig", "MapbenderCoreBundle:Welcome:list.html.twig", 14)->display($context);
            // line 15
            echo "
    <ul id=\"listFilterApplications\" class=\"listFilterContainer clear listFilterBoxes listFilterApplicationBoxes\">
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : $this->getContext($context, "applications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 18
                echo "        <li class=\"filterItem\">
          ";
                // line 19
                if ( !(null === $this->getAttribute($context["application"], "screenshot", array()))) {
                    // line 20
                    echo "            <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                    echo "\">
              <div class=\"col1\">
                <div class=\"cell\">
                  <img src=\"";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["uploads_web_url"]) ? $context["uploads_web_url"] : $this->getContext($context, "uploads_web_url")), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "screenshot", array()), "html", null, true);
                    echo "?t=";
                    if (((isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")) != null)) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : $this->getContext($context, "time")), "d.m.Y-H:i:s"), "html", null, true);
                    }
                    echo "\" alt=\"screenshot\">
                </div>
              </div>
            </a>
          ";
                } else {
                    // line 28
                    echo "            <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                    echo "\">
              <div class=\"col1 iconAppDefault\"></div>
            </a>
          ";
                }
                // line 32
                echo "          <div class=\"col2 box\">
            <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                echo "\" class=\"title\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view_this"), "html", null, true);
                echo "\">
              ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                echo "
            </a>
            <span class=\"smallerText\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", array()), "html", null, true);
                echo "</span>
            <div class=\"description\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "description", array()), "html", null, true);
                echo "</div>
            <div class=\"buttonGroup\">
              <a class=\"iconView iconBig\" target=\"_blank\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                echo "\"></a>

              ";
                // line 41
                if ((($this->getAttribute($context["application"], "source", array()) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["application"]))) {
                    // line 42
                    echo "                <a class=\"iconCopy iconBig\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_copydirectly", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.duplicate"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 44
                echo "
              ";
                // line 45
                if ((($this->getAttribute($context["application"], "source", array()) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["application"]))) {
                    // line 46
                    echo "                <a class=\"iconEdit iconBig\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_edit", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.edit.title"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 48
                echo "
              ";
                // line 49
                if ((($this->getAttribute($context["application"], "source", array()) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["application"]))) {
                    // line 50
                    echo "                <a href=\"#\" class=\"iconPublish iconBig ";
                    if ($this->getAttribute($context["application"], "published", array())) {
                        echo "enabled iconPublishActive";
                    } else {
                        echo "disabled";
                    }
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.public.on_off"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                    echo "\" data-application-slug=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", array()), "html", null, true);
                    echo "\"></a>
              ";
                }
                // line 52
                echo "
              ";
                // line 53
                if ((($this->getAttribute($context["application"], "source", array()) === constant("Mapbender\\CoreBundle\\Entity\\Application::SOURCE_DB")) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["application"]))) {
                    // line 54
                    echo "                <span class=\"iconRemove iconBig\"
                      title=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.delete"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "title", array()), "html", null, true);
                    echo "\"
                      data-url=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_delete", array("slug" => $this->getAttribute($context["application"], "slug", array()))), "html", null, true);
                    echo "\"
                      data-slug=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", array()), "html", null, true);
                    echo "\"
                ></span>
              ";
                }
                // line 60
                echo "            </div>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "    </ul>
    <div class=\"clearContainer\"></div>
  ";
        } else {
            // line 67
            echo "    <span class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.no_application"), "html", null, true);
            echo "</span>
  ";
        }
        // line 69
        echo "  <div class=\"clearContainer\"></div>

";
        
        $__internal_a6b1ba6a91af427aefd369e68ac6513f3499335bd65847d8c19d91bd1ad323cd->leave($__internal_a6b1ba6a91af427aefd369e68ac6513f3499335bd65847d8c19d91bd1ad323cd_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Welcome:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 69,  256 => 67,  251 => 64,  242 => 60,  236 => 57,  232 => 56,  226 => 55,  223 => 54,  221 => 53,  218 => 52,  202 => 50,  200 => 49,  197 => 48,  187 => 46,  185 => 45,  182 => 44,  172 => 42,  170 => 41,  161 => 39,  156 => 37,  152 => 36,  147 => 34,  141 => 33,  138 => 32,  126 => 28,  110 => 23,  99 => 20,  97 => 19,  94 => 18,  90 => 17,  86 => 15,  84 => 14,  79 => 13,  77 => 12,  74 => 11,  68 => 10,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOMManagerBundle::manager.html.twig\" %}

{% block title %}{{ \"mb.manager.admin.applications\" | trans }}{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ asset('bundles/mapbendermanager/js/application-list.js') }}\"></script>
{% endblock %}

{% block manager_content %}

  {% if applications | length > 0 %}
    <label for=\"inputFilterApplications\" class=\"labelInput left\">{{\"mb.manager.admin.filter.application\"|trans}}:</label><input id=\"inputFilterApplications\" type=\"text\" class=\"input listFilterInput\">
    {% include \"MapbenderManagerBundle:Application:actions.html.twig\" %}

    <ul id=\"listFilterApplications\" class=\"listFilterContainer clear listFilterBoxes listFilterApplicationBoxes\">
      {% for application in applications %}
        <li class=\"filterItem\">
          {% if application.screenshot is not null %}
            <a target=\"_blank\" href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.view' | trans }} {{ application.title }}\">
              <div class=\"col1\">
                <div class=\"cell\">
                  <img src=\"{{ uploads_web_url }}/{{application.slug}}/{{application.screenshot}}?t={% if time != null %}{{ time | date('d.m.Y-H:i:s') }}{% endif %}\" alt=\"screenshot\">
                </div>
              </div>
            </a>
          {% else %}
            <a target=\"_blank\" href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.view' | trans }} {{ application.title }}\">
              <div class=\"col1 iconAppDefault\"></div>
            </a>
          {% endif %}
          <div class=\"col2 box\">
            <a href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" class=\"title\" title=\"{{ 'mb.manager.admin.application.view_this' | trans }}\">
              {{ application.title }}
            </a>
            <span class=\"smallerText\">{{ application.slug }}</span>
            <div class=\"description\">{{ application.description }}</div>
            <div class=\"buttonGroup\">
              <a class=\"iconView iconBig\" target=\"_blank\" href=\"{{ path('mapbender_core_application_application', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.view' | trans }} {{ application.title }}\"></a>

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('EDIT', application) %}
                <a class=\"iconCopy iconBig\" href=\"{{ path('mapbender_manager_application_copydirectly', {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.duplicate'|trans }} {{ application.title }}\"></a>
              {% endif %}

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('EDIT', application) %}
                <a class=\"iconEdit iconBig\" href=\"{{ path('mapbender_manager_application_edit',  {'slug': application.slug}) }}\" title=\"{{ 'mb.manager.admin.application.edit.title' | trans }} {{ application.title }}\"></a>
              {% endif %}

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('EDIT', application) %}
                <a href=\"#\" class=\"iconPublish iconBig {% if application.published %}enabled iconPublishActive{% else %}disabled{% endif %}\" title=\"{{ 'mb.manager.admin.application.public.on_off' | trans }} {{ application.title }}\" data-application-slug=\"{{ application.slug }}\"></a>
              {% endif %}

              {% if application.source is constant('Mapbender\\\\CoreBundle\\\\Entity\\\\Application::SOURCE_DB') and is_granted('DELETE', application) %}
                <span class=\"iconRemove iconBig\"
                      title=\"{{'mb.manager.admin.application.delete'|trans}} {{ application.title }}\"
                      data-url=\"{{ path('mapbender_manager_application_delete', { 'slug': application.slug}) }}\"
                      data-slug=\"{{ application.slug }}\"
                ></span>
              {% endif %}
            </div>
          </div>
        </li>
      {% endfor %}
    </ul>
    <div class=\"clearContainer\"></div>
  {% else %}
    <span class=\"description\">{{ 'mb.manager.admin.application.no_application' | trans }}</span>
  {% endif %}
  <div class=\"clearContainer\"></div>

{% endblock %}
", "MapbenderCoreBundle:Welcome:list.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Welcome/list.html.twig");
    }
}
