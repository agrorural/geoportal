<?php

/* MapbenderManagerBundle:Application:form-elements.html.twig */
class __TwigTemplate_a3e9b9b369b07f171611f79f678e52db685937be440fa8674ea0b5b7c23f5f79 extends Twig_Template
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
        echo "<span class=\"description right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.template"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((array_key_exists("template_name", $context)) ? (_twig_default_filter((isset($context["template_name"]) ? $context["template_name"] : null), "Unknown")) : ("Unknown")), "html", null, true);
        echo "</span> 

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 5
            echo "  <div class=\"clearContainer\"></div>
  <div class=\"";
            // line 6
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo " region\">
    <h3 class=\"left subTitle\">";
            // line 7
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["region"]), "html", null, true);
            echo "</h3>
    ";
            // line 8
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["region"], array(), "array", true, true)) {
                // line 9
                echo "    <div class=\"right regionProperties\">
      ";
                // line 12
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["region"], array(), "array"), 'widget');
                echo "
        ";
                // line 15
                echo "    </div>
    ";
            }
            // line 17
            echo "    <div class=\"clearContainer\"></div>
      <table class=\"elementsTable tableCore\" data-region=\"";
            // line 18
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "\">
        <thead>
          <tr>
            <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.title"), "html", null, true);
            echo "</th>
            <th class=\"type\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.type"), "html", null, true);
            echo "</th>
            <th class=\"iconColumn\">
              <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_element_select", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "region" => $context["region"])), "html", null, true);
            echo "\" class=\"iconAdd iconSmall addElement\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.add"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "\"></a>
            </th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 29
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "getElementsByRegion", array(0 => $context["region"]), "method")) > 0)) {
                // line 30
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "getElementsByRegion", array(0 => $context["region"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 31
                    echo "              <tr class=\"element\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
                    echo "\" data-href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_weight", array("id" => $this->getAttribute($context["element"], "id", array()))), "html", null, true);
                    echo "\">
                <td class=\"titleColumn description\">";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["element"], "title", array())), "html", null, true);
                    echo "</td>
                <td class=\"typeColumn description\">";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->env->getExtension('Mapbender\CoreBundle\Extension\ElementExtension')->element_class_title($context["element"])), "html", null, true);
                    echo "</td>
                <td class=\"iconColumn\">
                  <div class=\"checkWrapper left iconCheckbox iconSmall ";
                    // line 35
                    if ($this->getAttribute($context["element"], "enabled", array())) {
                        echo "iconCheckboxActive";
                    }
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.show_hide"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", array()), "html", null, true);
                    echo "\">
                    <input class=\"checkbox\"
                           data-url=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_enable", array("id" => $this->getAttribute($context["element"], "id", array()))), "html", null, true);
                    echo "\"
                           data-id=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
                    echo "\" type=\"checkbox\" ";
                    if ($this->getAttribute($context["element"], "enabled", array())) {
                        echo " checked=\"checked\" ";
                    }
                    echo ">
                  </div>
                  <span class=\"iconEdit editElement iconSmall\"
                        title=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.edit"), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", array()), "html", null, true);
                    echo "\"
                        data-url=\"";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_edit", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "id" => $this->getAttribute($context["element"], "id", array()))), "html", null, true);
                    echo "\"></span>
                  <span class=\"iconKey secureElement ";
                    // line 43
                    if ($this->getAttribute((isset($context["aclManager"]) ? $context["aclManager"] : null), "hasObjectAclEntries", array(0 => $context["element"]), "method")) {
                        echo "has ";
                    }
                    echo "iconSmall\"
                        title=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.managerbundle.acl_element"), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "title", array()), "html", null, true);
                    echo "

";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["aclManager"]) ? $context["aclManager"] : null), "getObjectAclEntriesAsArray", array(0 => $context["element"]), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["acl"]) {
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($context["acl"], "type", array()), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["acl"], "name", array()), "html", null, true);
                        echo "
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acl'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "\"
                        data-url=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_security", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "id" => $this->getAttribute($context["element"], "id", array()))), "html", null, true);
                    echo "\"></span>
                  <span class=\"iconRemove removeElement iconSmall\"
                        title=\"";
                    // line 51
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("mb.manager.be.element.delete", array("%element_title%" => $this->getAttribute($context["element"], "title", array())), "messages");
                    echo "\"
                        data-id=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
                    echo "\"
                        data-slug=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "html", null, true);
                    echo "\"
                        data-url=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_element_confirmdelete", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "id" => $this->getAttribute($context["element"], "id", array()))), "html", null, true);
                    echo "\"></span>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "              <tr class=\"placeholderRow\"></tr>
          ";
            } else {
                // line 60
                echo "            <tr class=\"dummy\">
              <td class=\"description\">";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.element.no_element_added."), "html", null, true);
                echo "</td>
              <td></td>
              <td></td>
            </tr>
          ";
            }
            // line 66
            echo "        </tbody>
      </table>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:form-elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 66,  208 => 61,  205 => 60,  201 => 58,  191 => 54,  187 => 53,  183 => 52,  179 => 51,  174 => 49,  171 => 48,  161 => 47,  157 => 46,  150 => 44,  144 => 43,  140 => 42,  134 => 41,  124 => 38,  120 => 37,  109 => 35,  104 => 33,  100 => 32,  93 => 31,  88 => 30,  86 => 29,  74 => 24,  69 => 22,  65 => 21,  59 => 18,  56 => 17,  52 => 15,  47 => 12,  44 => 9,  42 => 8,  38 => 7,  34 => 6,  31 => 5,  27 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Application:form-elements.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-elements.html.twig");
    }
}
