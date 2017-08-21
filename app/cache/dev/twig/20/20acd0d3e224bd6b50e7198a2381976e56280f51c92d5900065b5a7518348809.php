<?php

/* FOMManagerBundle::manager.html.twig */
class __TwigTemplate_087b532dae9b9636f41c8c1f275b5b11cb6dcbe9434721af05f5130ff8621147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMCoreBundle::skel.html.twig", "FOMManagerBundle::manager.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
            'manager_content' => array($this, 'block_manager_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOMCoreBundle::skel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ad7c4ff379d67f6e701f902ce36bf2c40f2a4504e27203208840824215e59b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad7c4ff379d67f6e701f902ce36bf2c40f2a4504e27203208840824215e59b4->enter($__internal_8ad7c4ff379d67f6e701f902ce36bf2c40f2a4504e27203208840824215e59b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOMManagerBundle::manager.html.twig"));

        // line 3
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ad7c4ff379d67f6e701f902ce36bf2c40f2a4504e27203208840824215e59b4->leave($__internal_8ad7c4ff379d67f6e701f902ce36bf2c40f2a4504e27203208840824215e59b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c039cc0d4cfbb9642380c8719afcf7c3a2a25710b4f3e7355adc4add0a8bd202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c039cc0d4cfbb9642380c8719afcf7c3a2a25710b4f3e7355adc4add0a8bd202->enter($__internal_c039cc0d4cfbb9642380c8719afcf7c3a2a25710b4f3e7355adc4add0a8bd202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "")) : ("")), "html", null, true);
        
        $__internal_c039cc0d4cfbb9642380c8719afcf7c3a2a25710b4f3e7355adc4add0a8bd202->leave($__internal_c039cc0d4cfbb9642380c8719afcf7c3a2a25710b4f3e7355adc4add0a8bd202_prof);

    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_5baace563b11c34219c97b456735a622ff3e15a7522242e3cf6099515154680b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baace563b11c34219c97b456735a622ff3e15a7522242e3cf6099515154680b->enter($__internal_5baace563b11c34219c97b456735a622ff3e15a7522242e3cf6099515154680b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        
        $__internal_5baace563b11c34219c97b456735a622ff3e15a7522242e3cf6099515154680b->leave($__internal_5baace563b11c34219c97b456735a622ff3e15a7522242e3cf6099515154680b_prof);

    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        $__internal_f692cf258c29705d36e88c481ac5fa01eb535492a303f8ecde823379c8d9fbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f692cf258c29705d36e88c481ac5fa01eb535492a303f8ecde823379c8d9fbac->enter($__internal_f692cf258c29705d36e88c481ac5fa01eb535492a303f8ecde823379c8d9fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "manager", "type" => "css")), "html", null, true);
        echo "\"/>
";
        
        $__internal_f692cf258c29705d36e88c481ac5fa01eb535492a303f8ecde823379c8d9fbac->leave($__internal_f692cf258c29705d36e88c481ac5fa01eb535492a303f8ecde823379c8d9fbac_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_9f80a43c1e754be7ca882f1b11d97396e3b32ab79fb2025518c03dde4b7fbf32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f80a43c1e754be7ca882f1b11d97396e3b32ab79fb2025518c03dde4b7fbf32->enter($__internal_9f80a43c1e754be7ca882f1b11d97396e3b32ab79fb2025518c03dde4b7fbf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "manager", "type" => "js")), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "manager", "type" => "trans")), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_9f80a43c1e754be7ca882f1b11d97396e3b32ab79fb2025518c03dde4b7fbf32->leave($__internal_9f80a43c1e754be7ca882f1b11d97396e3b32ab79fb2025518c03dde4b7fbf32_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_3501e9cc4f8f40d467c134ff083f71ef3ba27dc8adf25e3828035ce0d5b8f463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3501e9cc4f8f40d467c134ff083f71ef3ba27dc8adf25e3828035ce0d5b8f463->enter($__internal_3501e9cc4f8f40d467c134ff083f71ef3ba27dc8adf25e3828035ce0d5b8f463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "  <div class=\"head\"><hr class=\"dekoSeperator\"></div>
    <div id=\"wrapper\" class=\"page\">

      <div class=\"leftPane\">
        <div class=\"logoContainer\">
          <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3 Manager\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["fom"]) ? $context["fom"] : $this->getContext($context, "fom")), "server_logo", array())), "html", null, true);
        echo "\" /></a>
        </div>
        ";
        // line 26
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != "")) {
            // line 27
            echo "          ";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOMManagerBundle:Manager:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))), array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </div>

      <div class=\"rightPane\">

        ";
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "bag", array(0 => "flashes"), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 35
            echo "          <div class=\"flashBox ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 36
            echo twig_escape_filter($this->env, twig_first($this->env, $context["flash"]), "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        <div class=\"accountBar shadowBox\">
          ";
        // line 41
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != "")) {
            // line 42
            echo "            <ul id=\"accountMenu\" class=\"accountMenu\">
                <li id=\"accountOpen\" class=\"iconDown smallText\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.logged_as"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"openedIcon\"></span></li>
                ";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "password", array()) != "")) {
                echo " <li><a class=\"linkButton iconSettings\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fom_user_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.you_account"), "html", null, true);
                echo "</a></li>";
            }
            // line 45
            echo "                <li><a class=\"linkButton iconSignOut\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fom_user_login_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.logout"), "html", null, true);
            echo "</a></li>
            </ul>
          ";
        } else {
            // line 48
            echo "            <a class=\"linkButton iconSignIn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_login_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.login"), "html", null, true);
            echo "</a>
          ";
        }
        // line 50
        echo "        </div>
        <div class=\"contentPane\">
          <div id=\"version\" class=\"mapbenderVersion smallText\">v. ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fom"]) ? $context["fom"] : $this->getContext($context, "fom")), "server_version", array()), "html", null, true);
        echo "</div>
          <div class=\"content shadowBox\">
            <h1 class=\"contentTitle\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "</h1>

            ";
        // line 56
        $this->displayBlock('manager_content', $context, $blocks);
        // line 57
        echo "          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_3501e9cc4f8f40d467c134ff083f71ef3ba27dc8adf25e3828035ce0d5b8f463->leave($__internal_3501e9cc4f8f40d467c134ff083f71ef3ba27dc8adf25e3828035ce0d5b8f463_prof);

    }

    // line 56
    public function block_manager_content($context, array $blocks = array())
    {
        $__internal_ef92448646c6f3758de3d4f882a7bea166af3dadaecd9ae14a567cbdbdc420f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef92448646c6f3758de3d4f882a7bea166af3dadaecd9ae14a567cbdbdc420f8->enter($__internal_ef92448646c6f3758de3d4f882a7bea166af3dadaecd9ae14a567cbdbdc420f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "manager_content"));

        
        $__internal_ef92448646c6f3758de3d4f882a7bea166af3dadaecd9ae14a567cbdbdc420f8->leave($__internal_ef92448646c6f3758de3d4f882a7bea166af3dadaecd9ae14a567cbdbdc420f8_prof);

    }

    public function getTemplateName()
    {
        return "FOMManagerBundle::manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 56,  221 => 57,  219 => 56,  214 => 54,  209 => 52,  205 => 50,  197 => 48,  188 => 45,  180 => 44,  174 => 43,  171 => 42,  169 => 41,  165 => 39,  156 => 36,  151 => 35,  146 => 34,  140 => 29,  137 => 28,  134 => 27,  132 => 26,  125 => 24,  118 => 19,  112 => 18,  103 => 15,  99 => 14,  95 => 13,  90 => 12,  84 => 11,  74 => 8,  68 => 7,  56 => 5,  44 => 3,  37 => 1,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOMCoreBundle::skel.html.twig\" %}

{% set title %}{% block title %}{{ title|default('') }}{% endblock %}{% endset %}

{% block favicon %}{{ asset('favicon.png') }}{% endblock %}

{% block css %}
  <link rel=\"stylesheet\" href=\"{{ path('mapbender_core_application_assets', {'slug': 'manager','type': 'css'}) }}\"/>
{% endblock %}

{% block js %}
  {{parent()}}
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': 'manager','type': 'js'}) }}\"></script>
  <script type=\"text/javascript\" src=\"{{ path('mapbender_core_application_assets', {'slug': 'manager','type': 'trans'}) }}\"></script>
  <script type=\"text/javascript\" src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"head\"><hr class=\"dekoSeperator\"></div>
    <div id=\"wrapper\" class=\"page\">

      <div class=\"leftPane\">
        <div class=\"logoContainer\">
          <a href=\"{{ path('mapbender_core_welcome_list') }}\"><img class=\"logo\" alt=\"Mapbender 3 Manager\" src=\"{{ asset(fom.server_logo)}}\" /></a>
        </div>
        {% if app.user != \"\" %}
          {% render controller(\"FOMManagerBundle:Manager:menu\", { \"request\": app.request }) %}
        {% endif %}
      </div>

      <div class=\"rightPane\">

        {# flash me baby #}
        {% for key, flash in app.session.bag('flashes') %}
          <div class=\"flashBox {{ key }}\">
            {{ flash | first }}
          </div>
        {% endfor %}

        <div class=\"accountBar shadowBox\">
          {% if app.user != \"\" %}
            <ul id=\"accountMenu\" class=\"accountMenu\">
                <li id=\"accountOpen\" class=\"iconDown smallText\">{{ \"fom.core.manager.logged_as\"|trans}}: {{ app.user.username }}<span class=\"openedIcon\"></span></li>
                {% if app.user.password != \"\" %} <li><a class=\"linkButton iconSettings\" href=\"{{ url('fom_user_user_edit', {'id': app.user.id}) }}\">{{ \"fom.core.manager.you_account\"|trans }}</a></li>{% endif %}
                <li><a class=\"linkButton iconSignOut\" href=\"{{ url('fom_user_login_logout') }}\">{{ \"fom.core.manager.btn.logout\"|trans }}</a></li>
            </ul>
          {% else %}
            <a class=\"linkButton iconSignIn\" href=\"{{ path('fom_user_login_login') }}\">{{ \"fom.core.manager.btn.login\"|trans}}</a>
          {% endif %}
        </div>
        <div class=\"contentPane\">
          <div id=\"version\" class=\"mapbenderVersion smallText\">v. {{ fom.server_version }}</div>
          <div class=\"content shadowBox\">
            <h1 class=\"contentTitle\">{{ title|trans }}</h1>

            {% block manager_content %}{% endblock %}
          </div>
        </div>
      </div>
    </div>
{% endblock %}", "FOMManagerBundle::manager.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/ManagerBundle/Resources/views/manager.html.twig");
    }
}
