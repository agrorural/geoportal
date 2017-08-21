<?php

/* MapbenderManagerBundle:Application:new.html.twig */
class __TwigTemplate_94f8d1d690bcf44f4a660fd474e4d80a6686e246f271b5946a982c0fbc4044cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "MapbenderManagerBundle:Application:new.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        // line 1
        $context["application"] = array("slug" => "manager");
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.new.title"), "html", null, true);
    }

    // line 6
    public function block_js($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fomuser/js/acl-form.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/application-edit.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_manager_content($context, array $blocks = array())
    {
        // line 13
        echo "  <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_application_create");
        echo "\" method=\"post\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " novalidate=\"novalidate\">
    <div id=\"applicationTabContainer\" class=\"tabContainer applicationTabContainer\">
      <ul class=\"tabs\">
        <li id=\"tabBaseData\" class=\"tab active\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.new.base_data"), "html", null, true);
        echo "</li>
        <li id=\"tabSecurity\" class=\"tab\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.security.title"), "html", null, true);
        echo "</li>
      </ul>
      <div id=\"containerBaseData\" class=\"container active containerBaseData\">
          <div class=\"left\">
            <label class=\"left labelInput\" for=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.template"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "template", array()), 'widget');
        echo "
                <div class=\"clearContainer\"></div>
            ";
        // line 24
        $this->loadTemplate("MapbenderManagerBundle:Application:form-basic.html.twig", "MapbenderManagerBundle:Application:new.html.twig", 24)->display($context);
        // line 25
        echo "           </div>
           <div class=\"right\">
                <div class=\"messageBox hint\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.create_use"), "html", null, true);
        echo "
                </div>
           </div>
            <div class=\"clearContainer\"></div>


      </div>

      <div id=\"containerSecurity\" class=\"container\">
        ";
        // line 37
        $this->displayBlock('securityTab', $context, $blocks);
        // line 40
        echo "      </div>
    </div>

    <div class=\"clearContainer\"></div>

    <div class=\"right\">
      <input type=\"submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.btn.create"), "html", null, true);
        echo "\" class=\"button\"/>
      <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_application_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.btn.cancel"), "html", null, true);
        echo "</a>
    </div>

    <div class=\"clearContainer\"></div>

    ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
  </form>
";
    }

    // line 37
    public function block_securityTab($context, array $blocks = array())
    {
        // line 38
        echo "          ";
        $this->loadTemplate("MapbenderManagerBundle:Application:form-security.html.twig", "MapbenderManagerBundle:Application:new.html.twig", 38)->display($context);
        // line 39
        echo "        ";
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  147 => 38,  144 => 37,  137 => 52,  127 => 47,  123 => 46,  115 => 40,  113 => 37,  101 => 28,  96 => 25,  94 => 24,  89 => 22,  83 => 21,  76 => 17,  72 => 16,  61 => 13,  58 => 12,  52 => 9,  48 => 8,  43 => 7,  40 => 6,  34 => 4,  30 => 2,  28 => 1,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Application:new.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/new.html.twig");
    }
}
