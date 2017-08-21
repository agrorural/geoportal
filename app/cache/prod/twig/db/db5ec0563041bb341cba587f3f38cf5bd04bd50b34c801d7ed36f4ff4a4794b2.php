<?php

/* FOMUserBundle:Group:index.html.twig */
class __TwigTemplate_0c35a978f55a6b9a6e3f9ff750552a5fd46303c86f6499ea37897b30f09cf27b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "FOMUserBundle:Group:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.groups"), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_js($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"application/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_manager_content($context, array $blocks = array())
    {
        // line 15
        echo "
";
        // line 16
        if ((isset($context["create_permission"]) ? $context["create_permission"] : null)) {
            // line 17
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.add_new_group"), "html", null, true);
            echo "\"></a>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : null)) > 0)) {
            // line 21
            echo "  <label for=\"inputFilterGroups\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.filter"), "html", null, true);
            echo "</label>
  <input id=\"inputFilterGroups\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterGroups\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"groupsHead\">
      <tr class=\"doNotFilter\">
        <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.title"), "html", null, true);
            echo "</th>
        <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.description"), "html", null, true);
            echo "</th>
        <th class=\"iconColumn\"></th>
      </tr>
    </thead>
    <tbody id=\"groupsBody\">
      ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "      <tr id=\"app-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" class=\"filterItem\">
        <td>
          <a class=\"labelText\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.edit_group"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                echo "</a>
        </td>
        <td class=\"description\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "description", array()), "html", null, true);
                echo "</td>
        <td class=\"iconColumn\">
            ";
                // line 41
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["group"])) {
                    // line 42
                    echo "            <a class=\"iconEdit iconSmall\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.edit_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\"></a>
            ";
                }
                // line 44
                echo "            ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["group"])) {
                    // line 45
                    echo "            <span class=\"iconRemove iconSmall\"
              title=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.delete_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\"
              data-url=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_delete", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\"
              data-id=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                    echo "\"
            ></span>
            ";
                }
                // line 51
                echo "        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </tbody>
  </table>
";
        } else {
            // line 57
            echo "  <p class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.group.index.no_groups_available"), "html", null, true);
            echo "</p>
  <div class=\"clearContainer\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  173 => 54,  165 => 51,  159 => 48,  155 => 47,  149 => 46,  146 => 45,  143 => 44,  133 => 42,  131 => 41,  126 => 39,  115 => 37,  109 => 35,  105 => 34,  97 => 29,  93 => 28,  82 => 21,  80 => 20,  77 => 19,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  55 => 11,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:Group:index.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/Group/index.html.twig");
    }
}
