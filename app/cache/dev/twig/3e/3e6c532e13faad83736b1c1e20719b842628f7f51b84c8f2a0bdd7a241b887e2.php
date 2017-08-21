<?php

/* MapbenderCoreBundle:Element:scalebar.html.twig */
class __TwigTemplate_27aa3adf0ae7d77e5f5b4fb66453e0b7160e69f84a4c51b302b29e8379263b5e extends Twig_Template
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
        $__internal_51bf01296118851c8f3e888320cdb6a40763bb2275f82e0ab9acf9b5e2fec2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bf01296118851c8f3e888320cdb6a40763bb2275f82e0ab9acf9b5e2fec2b0->enter($__internal_51bf01296118851c8f3e888320cdb6a40763bb2275f82e0ab9acf9b5e2fec2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:scalebar.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-scaleline smallText\">
  <div class=\"scaleBorder\"></div>
</div>";
        
        $__internal_51bf01296118851c8f3e888320cdb6a40763bb2275f82e0ab9acf9b5e2fec2b0->leave($__internal_51bf01296118851c8f3e888320cdb6a40763bb2275f82e0ab9acf9b5e2fec2b0_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:scalebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-scaleline smallText\">
  <div class=\"scaleBorder\"></div>
</div>", "MapbenderCoreBundle:Element:scalebar.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/scalebar.html.twig");
    }
}
