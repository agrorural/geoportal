<?php

/* MapbenderPrintBundle:Element:imageexport.html.twig */
class __TwigTemplate_a4ba3ce39961adc32b29a6e015591288937f62562c59c009d5edb450c73d536e extends Twig_Template
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
        $__internal_5e7be5912da4d7b83cbb90e4f52ee4acdb7cd4057c1bc91439bc54f8ec227b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7be5912da4d7b83cbb90e4f52ee4acdb7cd4057c1bc91439bc54f8ec227b58->enter($__internal_5e7be5912da4d7b83cbb90e4f52ee4acdb7cd4057c1bc91439bc54f8ec227b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderPrintBundle:Element:imageexport.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-imageexport\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "\">
  <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.chooseformat"), "html", null, true);
        echo "</p>
  <input type=\"radio\" value=\"png\" name=\"imageformat\" checked>PNG<br>
  <input type=\"radio\" value=\"jpeg\" name=\"imageformat\">JPG
</div>
";
        
        $__internal_5e7be5912da4d7b83cbb90e4f52ee4acdb7cd4057c1bc91439bc54f8ec227b58->leave($__internal_5e7be5912da4d7b83cbb90e4f52ee4acdb7cd4057c1bc91439bc54f8ec227b58_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderPrintBundle:Element:imageexport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-imageexport\" title=\"{{ title|trans }}\">
  <p>{{ 'mb.print.imageexport.chooseformat'| trans }}</p>
  <input type=\"radio\" value=\"png\" name=\"imageformat\" checked>PNG<br>
  <input type=\"radio\" value=\"jpeg\" name=\"imageformat\">JPG
</div>
", "MapbenderPrintBundle:Element:imageexport.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.html.twig");
    }
}
