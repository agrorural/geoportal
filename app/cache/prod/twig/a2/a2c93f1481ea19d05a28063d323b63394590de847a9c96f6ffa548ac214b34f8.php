<?php

/* MapbenderManagerBundle:Application:edit.html.twig */
class __TwigTemplate_fe83acde7fa20f55f84be91f37809891cfad506af86ea1e10e26e1a289154243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "MapbenderManagerBundle:Application:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'manager_content' => array($this, 'block_manager_content'),
            'securityTab' => array($this, 'block_securityTab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOMManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "title", array()), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/lib/codemirror.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/theme/neo.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/lib/codemirror.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/mode/yaml/yaml.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/mode/css/css.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/keymap/sublime.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/codemirror/addon/selection/active-line.js"), "html", null, true);
        echo "\"></script>

  <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-edit.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 23
    public function block_manager_content($context, array $blocks = array())
    {
        // line 24
        echo "  <a class=\"iconView iconBig right\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_application", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.view"), "html", null, true);
        echo "\"></a>
  <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_update", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()))), "html", null, true);
        echo "\" method=\"post\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : null), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "  novalidate=\"novalidate\">
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.edit.base_data"), "html", null, true);
        echo "</li>
        <li id=\"tabLayout\" class=\"tab\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.layouts"), "html", null, true);
        echo "</li>
        <li id=\"tabLayers\" class=\"tab\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.layersets"), "html", null, true);
        echo "</li>
        <li id=\"tabCustomCss\" class=\"tab\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.custom_css"), "html", null, true);
        echo "</li>
        <li id=\"tabSecurity\" class=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.security.title"), "html", null, true);
        echo "</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData\">
        <div class=\"left\">";
        // line 35
        $this->loadTemplate("MapbenderManagerBundle:Application:form-basic.html.twig", "MapbenderManagerBundle:Application:edit.html.twig", 35)->display($context);
        echo "</div>
        <div class=\"right\">
            ";
        // line 37
        if (twig_test_empty((isset($context["screenshot"]) ? $context["screenshot"] : null))) {
            // line 38
            echo "                <div class=\"screenshot_img default iconAppDefault\">
                    <div class=\"cell_edit\">
                        <img src=\"\" alt=\"Load\" class=\"screenshot\" data-load=true />
                    </div>
                </div>
            ";
        } else {
            // line 44
            echo "                <div class=\"screenshot_img\">
                    <div class=\"cell_edit\">     
                        <div class=\"delete button critical hidden\">X</div>
                        <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["screenshot"]) ? $context["screenshot"] : null), "html", null, true);
            echo "?t=";
            if (((isset($context["time"]) ? $context["time"] : null) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "d.m.Y-H:i:s"), "html", null, true);
            }
            echo "\" alt=\"Load\" class=\"screenshot\" data-load=true />
                    </div>
                </div>
            ";
        }
        // line 51
        echo "        </div>
        <div class=\"clearContainer\"></div>
      </div>
      <div id=\"containerLayout\" class=\"container containerLayout\">
        ";
        // line 55
        $this->loadTemplate("MapbenderManagerBundle:Application:form-elements.html.twig", "MapbenderManagerBundle:Application:edit.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
      <div id=\"containerLayers\" class=\"container containerLayers\">
        ";
        // line 58
        $this->loadTemplate("MapbenderManagerBundle:Application:form-layersets.html.twig", "MapbenderManagerBundle:Application:edit.html.twig", 58)->display($context);
        // line 59
        echo "      </div>
      <div id=\"containerCustomCss\" class=\"container containerCustomCss\">
        ";
        // line 61
        $this->loadTemplate("MapbenderManagerBundle:Application:form-css.html.twig", "MapbenderManagerBundle:Application:edit.html.twig", 61)->display($context);
        // line 62
        echo "      </div>
      <div id=\"containerSecurity\" class=\"container containerSecurity\">
        ";
        // line 64
        $this->displayBlock('securityTab', $context, $blocks);
        // line 67
        echo "      </div>
    </div>
    <div class=\"clearContainer\"></div>
    <div class=\"right\">
        <input type=\"submit\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.save"), "html", null, true);
        echo "\" class=\"button\"/>
        <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_application_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.cancel"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"clearContainer\"></div>
    ";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
  </form>
";
    }

    // line 64
    public function block_securityTab($context, array $blocks = array())
    {
        // line 65
        echo "          ";
        $this->loadTemplate("MapbenderManagerBundle:Application:form-security.html.twig", "MapbenderManagerBundle:Application:edit.html.twig", 65)->display($context);
        // line 66
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 66,  222 => 65,  219 => 64,  212 => 75,  204 => 72,  200 => 71,  194 => 67,  192 => 64,  188 => 62,  186 => 61,  182 => 59,  180 => 58,  176 => 56,  174 => 55,  168 => 51,  157 => 47,  152 => 44,  144 => 38,  142 => 37,  137 => 35,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  115 => 28,  105 => 25,  98 => 24,  95 => 23,  89 => 20,  85 => 19,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  59 => 12,  56 => 11,  50 => 8,  46 => 7,  41 => 6,  38 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Application:edit.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/edit.html.twig");
    }
}
