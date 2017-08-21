<?php

/* MapbenderWmsBundle:Repository:form.html.twig */
class __TwigTemplate_1c05eebd135d6fef195bea8a794e3afd2050213d2ba4ae3206279c524289eed1 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_create", array("managertype" => twig_lower_filter($this->env, twig_constant("Mapbender\\CoreBundle\\Entity\\Source::TYPE_WMS")))), "html", null, true);
        echo "\" method=\"post\" novalidate=\"novalidate\" autocomplete=\"false\">
  ";
        // line 3
        echo "  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"text\" name=\"somefakename\" tabindex=\"-1\"/>
  <input style=\"position: absolute; display: block; top: -1000px; left: 0\" type=\"password\" name=\"anotherfakename\" tabindex=\"-1\"/>
  ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "onlyvalid", array()), 'widget');
        echo "<label for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "onlyvalid", array()), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\" class=\"labelCheck\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.onlyvalid"), "html", null, true);
        echo "</label>
  <div class=\"clearContainer\"></div>
  <label class=\"left labelInput\" for=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "originUrl", array()), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.serviceurl"), "html", null, true);
        echo "</label>
  ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "originUrl", array()), 'widget');
        echo "
  <div class=\"clearContainer\"></div>
  <label class=\"left labelInput\" for=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.username"), "html", null, true);
        echo "</label>
  ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "
  <div class=\"clearContainer\"></div>
  <label class=\"left labelInput\" for=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), "vars", array()), "id", array(), "array"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.password"), "html", null, true);
        echo "</label>
  ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
        echo "
  <div class=\"clearContainer\"></div>
  <div class=\"right\">
    <input class=\"button\" type=\"submit\" name=\"load\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.load"), "html", null, true);
        echo "\" />
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_manager_repository_index");
        echo "\" class=\"button critical\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.wms.wmsloader.repo.form.label.cancel"), "html", null, true);
        echo "</a>
  </div>
  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MapbenderWmsBundle:Repository:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  75 => 18,  71 => 17,  65 => 14,  59 => 13,  54 => 11,  48 => 10,  43 => 8,  37 => 7,  28 => 5,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderWmsBundle:Repository:form.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/WmsBundle/Resources/views/Repository/form.html.twig");
    }
}
