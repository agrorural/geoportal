<?php

/* FOMUserBundle:User:form.html.twig */
class __TwigTemplate_a361402a738bd0a536868d4ab49a8875c5902b0ade480d522cf61fc976a33251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "FOMUserBundle:User:form.html.twig", 1);
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
        // line 4
        echo "  ";
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.edit_user"), "html", null, true);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.new_user"), "html", null, true);
            echo "
  ";
        }
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_js($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"application/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"application/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fommanager/js/form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"application/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/user-control.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile_assets"]) ? $context["profile_assets"] : null), "js", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 21
            echo "    <script type=\"application/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["url"]), "html", null, true);
            echo "\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_manager_content($context, array $blocks = array())
    {
        // line 26
        echo "  ";
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 27
            echo "    <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : null), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo " novalidate=\"novalidate\">
  ";
        } else {
            // line 29
            echo "    <form action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_user_create");
            echo "\" method=\"post\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["form_name"]) ? $context["form_name"] : null), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo " autocomplete=\"off\" novalidate=\"novalidate\">
  ";
        }
        // line 31
        echo "
   ";
        // line 32
        $this->loadTemplate("FOMUserBundle:User:container.html.twig", "FOMUserBundle:User:form.html.twig", 32)->display($context);
        // line 33
        echo "
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "

    <div class=\"right\">
      <input class=\"button\" type=\"submit\" value=\"";
        // line 37
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.save"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.create"), "html", null, true);
        }
        echo "\"/>
      <a class=\"button critical\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fom_user_user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.user.form.cancel"), "html", null, true);
        echo "</a>
    </div>
  </form>

<div class=\"clearContainer\"></div>

";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:User:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  136 => 37,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  112 => 29,  102 => 27,  99 => 26,  96 => 25,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  64 => 16,  61 => 15,  54 => 12,  51 => 11,  43 => 7,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:User:form.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/User/form.html.twig");
    }
}
