<?php

/* MapbenderCoreBundle:Welcome:list.html.twig */
class __TwigTemplate_bf4bbed22daa08a851903d2550a7eb7a8fd3242ff91fc970d7d405f3b6d62d88 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.applications"), "html", null, true);
    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-list.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 10
    public function block_manager_content($context, array $blocks = array())
    {
        // line 11
        echo "
  ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["applications"]) ? $context["applications"] : null)) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["applications"]) ? $context["applications"] : null));
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
                    echo twig_escape_filter($this->env, (isset($context["uploads_web_url"]) ? $context["uploads_web_url"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "slug", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "screenshot", array()), "html", null, true);
                    echo "?t=";
                    if (((isset($context["time"]) ? $context["time"] : null) != null)) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "d.m.Y-H:i:s"), "html", null, true);
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
        return array (  241 => 69,  235 => 67,  230 => 64,  221 => 60,  215 => 57,  211 => 56,  205 => 55,  202 => 54,  200 => 53,  197 => 52,  181 => 50,  179 => 49,  176 => 48,  166 => 46,  164 => 45,  161 => 44,  151 => 42,  149 => 41,  140 => 39,  135 => 37,  131 => 36,  126 => 34,  120 => 33,  117 => 32,  105 => 28,  89 => 23,  78 => 20,  76 => 19,  73 => 18,  69 => 17,  65 => 15,  63 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 10,  44 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Welcome:list.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Welcome/list.html.twig");
    }
}
