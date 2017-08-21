<?php

/* FOMUserBundle:ACL:index.html.twig */
class __TwigTemplate_ec5449b97862737cf0010e2b1b17cb35c7a0ac379471d662b1df1ea08d08a30c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "FOMUserBundle:ACL:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.access_control_lists"), "html", null, true);
    }

    // line 5
    public function block_manager_content($context, array $blocks = array())
    {
        // line 6
        echo "<table class=\"table userControlTable\">
  <thead>
    <tr>
      <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.name"), "html", null, true);
        echo "</th>
      <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.class"), "html", null, true);
        echo "</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["classes"]) ? $context["classes"] : null)));
        foreach ($context['_seq'] as $context["class"] => $context["name"]) {
            // line 16
            echo "      <tr id=\"app-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["class"]), "html", null, true);
            echo "\">
        <td>
          <a class=\"labelText\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_edit", array("class" => $context["class"])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.edit"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
        </td>
        <td class=\"description\">";
            // line 20
            echo twig_escape_filter($this->env, $context["class"], "html", null, true);
            echo "</td>
        <td class=\"iconColumn\">
          <a class=\"iconEdit iconSmall\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_acl_edit", array("class" => $context["class"])), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.acl.index.edit"), "html", null, true);
            echo "\"></a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['class'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:ACL:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  79 => 22,  74 => 20,  65 => 18,  59 => 16,  55 => 15,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:ACL:index.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/ACL/index.html.twig");
    }
}
