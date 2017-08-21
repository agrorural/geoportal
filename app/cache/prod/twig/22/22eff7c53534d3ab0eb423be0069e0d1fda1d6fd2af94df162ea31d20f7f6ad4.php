<?php

/* FOMUserBundle:User:index.html.twig */
class __TwigTemplate_5ab69d49cbfa9b03d38b93222b6a25aea191bfcc094e87685459d51a75a4fd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "FOMUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'manager_content' => array($this, 'block_manager_content'),
            'js' => array($this, 'block_js'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.title"), "html", null, true);
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
    public function block_manager_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if ((isset($context["create_permission"]) ? $context["create_permission"] : null)) {
            // line 12
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.add_new_user"), "html", null, true);
            echo "\"></a>
";
        }
        // line 14
        echo "
";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : null)) > 0)) {
            // line 16
            echo "  <label for=\"inputFilterUsers\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.filter"), "html", null, true);
            echo "</label>
  <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>

  <div class=\"clearContainer\"></div>
  <table id=\"listFilterUsers\" class=\"table userControlTable listFilterContainer\">
    <thead id=\"usersHead\">
      <tr class=\"doNotFilter\">
        <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.name"), "html", null, true);
            echo "</th>
        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.email"), "html", null, true);
            echo "</th>
        <th>";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.groups"), "html", null, true);
            echo "</th>
        <th></th>
      </tr>
    </thead>
    <tbody id=\"usersBody\">
      ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                echo "        <tr id=\"app-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" class=\"filterItem\">
          <td>
            ";
                // line 33
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["user"])) {
                    // line 34
                    echo "            <a class=\"labelText\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 36
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "
            ";
                }
                // line 38
                echo "          </td>
          <td><a class=\"linkButton\" href=\"mailto:";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.contact_user"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</a></td>
          <td>
            <ul>
              ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "groups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 43
                    echo "              <li class='doNotFilter'><a class=\"linkButton\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_group_edit", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_group"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            </ul>
          </td>
          <td class=\"iconColumn\">
            ";
                // line 48
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["user"])) {
                    // line 49
                    echo "              <a class=\"iconEdit iconSmall\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.edit_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\"></a>
            ";
                }
                // line 51
                echo "            ";
                if ((($this->getAttribute($context["user"], "id", array()) != 1) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["user"]))) {
                    // line 52
                    echo "              <span class=\"iconRemove iconSmall\"
                title=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.delete_user"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                    echo "\"
                data-url=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                    echo "\"
                data-id=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\"
              ></span>
            ";
                }
                // line 58
                echo "          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    </tbody>
  </table>
";
        } else {
            // line 64
            echo "  <p class=\"description left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.index.no_users_available"), "html", null, true);
            echo "</p>
";
        }
        // line 66
        echo "<div class=\"clearContainer\"></div>
";
    }

    // line 69
    public function block_js($context, array $blocks = array())
    {
        // line 70
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 71,  223 => 70,  220 => 69,  215 => 66,  209 => 64,  204 => 61,  196 => 58,  190 => 55,  186 => 54,  180 => 53,  177 => 52,  174 => 51,  164 => 49,  162 => 48,  157 => 45,  142 => 43,  138 => 42,  128 => 39,  125 => 38,  119 => 36,  107 => 34,  105 => 33,  99 => 31,  95 => 30,  87 => 25,  83 => 24,  79 => 23,  68 => 16,  66 => 15,  63 => 14,  55 => 12,  53 => 11,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:User:index.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/User/index.html.twig");
    }
}
