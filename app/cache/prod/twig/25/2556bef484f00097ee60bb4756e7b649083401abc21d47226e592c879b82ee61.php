<?php

/* FOMUserBundle:User:container.html.twig */
class __TwigTemplate_04cb7acb8818da46c2510ffd067a691f0f284a2e8e8633414bac2037394b23a6 extends Twig_Template
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
        echo "<div id=\"userGroupTabContainer\" class=\"tabContainer userGroupTabContainer userTabContainer\">
  <ul class=\"tabs\">
    <li id=\"tabBaseData\" class=\"tab active\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.base_data"), "html", null, true);
        echo "</li>
    ";
        // line 4
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array(), "any", true, true)) {
            // line 5
            echo "      <li id=\"tabProfile\" class=\"tab\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.profile"), "html", null, true);
            echo "</li>
    ";
        }
        // line 7
        echo "    <li id=\"tabGroups\" class=\"tab\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.groups"), "html", null, true);
        echo "</li>
    <li id=\"tabSecurity\" class=\"tab\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.security"), "html", null, true);
        echo "</li>
  </ul>

  <div id=\"containerBaseData\" class=\"container active containerBaseData\">
    ";
        // line 13
        echo "    <label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.username"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("disabled" =>  !$this->getAttribute((isset($context["form"]) ? $context["form"] : null), "groups", array(), "any", true, true)));
        echo "
    <div class=\"clearContainer\"></div>
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
    <div class=\"clearContainer\"></div>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pw"]) {
            // line 21
            echo "      ";
            if (($this->getAttribute($this->getAttribute($context["pw"], "vars", array()), "name", array(), "array") == "first")) {
                // line 22
                echo "        <label class=\"left labelInput\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pw"], "vars", array()), "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.choose_password"), "html", null, true);
                echo ":<span class=\"required\">*</span></label>
      ";
            } else {
                // line 24
                echo "        <label class=\"left labelInput\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["pw"], "vars", array()), "id", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.confirm_password"), "html", null, true);
                echo ":<span class=\"required\">*</span></label>
      ";
            }
            // line 26
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["pw"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pw'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activated", array(), "any", true, true)) {
            // line 29
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activated", array()), 'widget');
            echo "<label for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activated", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"labelCheck\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.activated"), "html", null, true);
            echo "</label>
    <div class=\"clearContainer\"></div>
    ";
        }
        // line 32
        echo "  </div>
  ";
        // line 33
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array(), "any", true, true)) {
            // line 34
            echo "  <div id=\"containerProfile\" class=\"container containerProfile\">
      ";
            // line 35
            if ((isset($context["profile_template"]) ? $context["profile_template"] : null)) {
                // line 36
                echo "          ";
                $this->loadTemplate((isset($context["profile_template"]) ? $context["profile_template"] : null), "FOMUserBundle:User:container.html.twig", 36)->display($context);
                // line 37
                echo "      ";
            } else {
                // line 38
                echo "          ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "profile", array()), 'widget');
                echo "
      ";
            }
            // line 40
            echo "  </div>
  ";
        }
        // line 42
        echo "
  <div id=\"containerGroups\" class=\"container containerGroups\">
  ";
        // line 44
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "groups", array(), "any", true, true)) {
            // line 45
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "groups", array())) > 0)) {
                // line 46
                echo "
      ";
                // line 47
                $context["group_count"] = (("<span>" . twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array()))) . "</span>");
                // line 48
                echo "
      <label for=\"inputFilterUsers\" class=\"labelInput left\">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.filter"), "html", null, true);
                echo "</label>
      <input id=\"inputFilterUsers\" type=\"text\" class=\"input left listFilterInput\"/>
      <div class=\"clearContainer\"></div>

      <table id=\"listFilterUsers\" class=\"listFilterContainer tableCore tableUserGroups\" cellspacing=\"0\" cellpadding=\"0\">
        <thead>
          <tr class=\"doNotFilter\">
            <th>";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.name"), "html", null, true);
                echo "</th>
            <th class=\"description\"><span id=\"selectedUsersGroups\">";
                // line 57
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "groups", array())), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.users_of_selected", array("%users_count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "groups", array())))), "html", null, true);
                echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "groups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 62
                    echo "            <tr class=\"filterItem\">
              <td colspan=\"2\">
                <div class=\"tdContentWrapper iconGroup\">
                  ";
                    // line 65
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["group"], 'label');
                    echo "
                  ";
                    // line 66
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["group"], 'widget');
                    echo "
                </div>
              </td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </tbody>
      </table>

    ";
            } else {
                // line 75
                echo "      <p class=\"description left\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.no_goups_defined."), "html", null, true);
                echo "</p>
      <div class=\"clearContainer\"></div>
    ";
            }
            // line 78
            echo "  ";
        } else {
            // line 79
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.manage_not_allowed"), "html", null, true);
            echo "</p>
  ";
        }
        // line 81
        echo "  </div>

  <div id=\"containerSecurity\" class=\"container containerSecurity\">
    ";
        // line 84
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "acl", array(), "any", true, true)) {
            // line 85
            echo "    <a id=\"addPermission\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_overview");
            echo "\" class=\"iconAdd iconBig right\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.add_users_groups"), "html", null, true);
            echo "\"></a>
    <div class=\"clearContainer\"></div>
    ";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "acl", array()), 'widget');
            echo "
    ";
        } else {
            // line 89
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.container.manage_not_allowed_security"), "html", null, true);
            echo "</p>
    ";
        }
        // line 91
        echo "  </div>
</div>

<div class=\"clearContainer\"></div>
";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:User:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 91,  247 => 89,  242 => 87,  234 => 85,  232 => 84,  227 => 81,  221 => 79,  218 => 78,  211 => 75,  205 => 71,  194 => 66,  190 => 65,  185 => 62,  181 => 61,  172 => 57,  168 => 56,  158 => 49,  155 => 48,  153 => 47,  150 => 46,  147 => 45,  145 => 44,  141 => 42,  137 => 40,  131 => 38,  128 => 37,  125 => 36,  123 => 35,  120 => 34,  118 => 33,  115 => 32,  104 => 29,  101 => 28,  92 => 26,  84 => 24,  76 => 22,  73 => 21,  69 => 20,  63 => 17,  59 => 16,  54 => 14,  47 => 13,  40 => 8,  35 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:User:container.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/User/container.html.twig");
    }
}
