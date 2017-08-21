<?php

/* MapbenderManagerBundle:Application:form-layersets.html.twig */
class __TwigTemplate_893d3348f7a097d5c3c9f59012f0ce3bb56507125f6a4dcde27de25c99599331 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_newlayerset", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()))), "html", null, true);
        echo "\" class=\"iconAdd right addLayerset iconBig\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.add"), "html", null, true);
        echo "\"></a>
";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "layersets", array())) > 0)) {
            // line 3
            echo "  <label for=\"inputFilterLayersets\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.layerset"), "html", null, true);
            echo "</label><input id=\"inputFilterLayersets\" type=\"text\" class=\"input listFilterInput\">
  <div class=\"clearContainer\"></div>

  <ul id=\"listFilterLayersets\" class=\"listFilterContainer clear listFilterBoxes listFilterServiceBoxes\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "layersets", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["layerset"]) {
                // line 8
                echo "      <li class=\"filterItem\">
        <h3 class=\"subTitle\">";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "title", array()), "html", null, true);
                echo "</h3>
        <table class=\"tableCore layersetTable\" data-id=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "id", array()), "html", null, true);
                echo "\">
          <thead>
            <tr class='doNotFilter'>
              <th title=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.id_description"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.id"), "html", null, true);
                echo "</th>
              <th>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.title"), "html", null, true);
                echo "</th>
              <th>";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.type"), "html", null, true);
                echo "</th>
              <th class=\"iconColumn\">
                <a class=\"iconAdd iconSmall addInstance\" title=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.add"), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_listsources", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "layersetId" => $this->getAttribute($context["layerset"], "id", array()))), "html", null, true);
                echo "\"></a>
                <a class=\"iconEdit iconSmall editLayerset\" title=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.edit"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "title", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_editlayerset", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "layersetId" => $this->getAttribute($context["layerset"], "id", array()))), "html", null, true);
                echo "\"></a>
                <a class=\"iconRemove iconSmall removeLayerset\" title=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.delete.title"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "title", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_confirmdeletelayerset", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "layersetId" => $this->getAttribute($context["layerset"], "id", array()))), "html", null, true);
                echo "\"></a>
              </th>
            </tr>
          </thead>
          <tbody>
            ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["layerset"], "instances", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["instance"]) {
                    // line 25
                    echo "              <tr class=\"sourceinst\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", array()), "html", null, true);
                    echo "\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_instanceweight", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "layersetId" => $this->getAttribute($context["layerset"], "id", array()), "instanceId" => $this->getAttribute($context["instance"], "id", array()))), "html", null, true);
                    echo "\">
                <td class=\"idColumn description\" title=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.layerset.id_description"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "source", array()), "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", array()), "html", null, true);
                    echo "</td>
                <td class=\"titleColumn description\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "source", array()), "title", array()), "html", null, true);
                    echo ")</td>
                <td class=\"typeColumn description\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instance"], "source", array()), "type", array()), "html", null, true);
                    echo "</td>
                <td class=\"iconColumn\">
                  <div class=\"checkWrapper left iconCheckbox iconSmall ";
                    // line 30
                    if ($this->getAttribute($context["instance"], "enabled", array())) {
                        echo "iconCheckboxActive";
                    }
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.show_hide"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", array()), "html", null, true);
                    echo "\">
                    <input class=\"checkbox\" data-url=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_instanceenabled", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "layersetId" => $this->getAttribute($context["layerset"], "id", array()), "instanceId" => $this->getAttribute($context["instance"], "id", array()))), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "id", array()), "html", null, true);
                    echo "\" type=\"checkbox\" ";
                    if ($this->getAttribute($context["instance"], "enabled", array())) {
                        echo " checked=\"checked\" ";
                    }
                    echo ">
                  </div>
                  <a class=\"iconEdit iconSmall editInstance\" title=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.edit"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", array()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_instance", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "instanceId" => $this->getAttribute($context["instance"], "id", array()))), "html", null, true);
                    echo "\"></a>
                  <span class=\"iconRemove iconSmall removeInstance\" title=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.delete"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["instance"], "title", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["layerset"], "id", array()), "html", null, true);
                    echo "\" data-slug=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_application_deleteinstance", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "layersetId" => $this->getAttribute($context["layerset"], "id", array()), "instanceId" => $this->getAttribute($context["instance"], "id", array()))), "html", null, true);
                    echo "\"></span>
                </td>
              </tr>
            ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 38
                    echo "              <tr>
                <td colspan=\"4\" class=\"description\">";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.no_instance_added"), "html", null, true);
                    echo "</td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "          </tbody>
        </table>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layerset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  </ul>
";
        } else {
            // line 48
            echo "  <p class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.instance.no_layer_added"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:form-layersets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 48,  192 => 46,  183 => 42,  174 => 39,  171 => 38,  154 => 34,  146 => 33,  135 => 31,  125 => 30,  120 => 28,  114 => 27,  106 => 26,  99 => 25,  94 => 24,  82 => 19,  74 => 18,  68 => 17,  63 => 15,  59 => 14,  53 => 13,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  28 => 3,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Application:form-layersets.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-layersets.html.twig");
    }
}
