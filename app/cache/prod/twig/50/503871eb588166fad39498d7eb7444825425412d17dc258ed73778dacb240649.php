<?php

/* MapbenderPrintBundle:Element:imageexport.html.twig */
class __TwigTemplate_d270b743eb345b9ca9c273f974788629d424b4091d7c82aa06b585b63823cc70 extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-element mb-element-imageexport\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\">
  <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.print.imageexport.chooseformat"), "html", null, true);
        echo "</p>
  <input type=\"radio\" value=\"png\" name=\"imageformat\" checked>PNG<br>
  <input type=\"radio\" value=\"jpeg\" name=\"imageformat\">JPG
</div>
";
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
        return array (  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderPrintBundle:Element:imageexport.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/PrintBundle/Resources/views/Element/imageexport.html.twig");
    }
}
