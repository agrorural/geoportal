<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5a5107a9017bbd903b28b8c6477297636a293e5d5f0920ab273bc006c425a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f17bf23276977026c5904ed2843d6dca72cd015fdc8eb1cdf4f3766350006d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17bf23276977026c5904ed2843d6dca72cd015fdc8eb1cdf4f3766350006d16->enter($__internal_f17bf23276977026c5904ed2843d6dca72cd015fdc8eb1cdf4f3766350006d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f17bf23276977026c5904ed2843d6dca72cd015fdc8eb1cdf4f3766350006d16->leave($__internal_f17bf23276977026c5904ed2843d6dca72cd015fdc8eb1cdf4f3766350006d16_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a40fcad83d6f93897e0ef0210f3d585e526392beecbfe0b9f9f1c5110a3076df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40fcad83d6f93897e0ef0210f3d585e526392beecbfe0b9f9f1c5110a3076df->enter($__internal_a40fcad83d6f93897e0ef0210f3d585e526392beecbfe0b9f9f1c5110a3076df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a40fcad83d6f93897e0ef0210f3d585e526392beecbfe0b9f9f1c5110a3076df->leave($__internal_a40fcad83d6f93897e0ef0210f3d585e526392beecbfe0b9f9f1c5110a3076df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb88676c939bfcf24574866eb63aeb724fb420b585623a83048bc69cac6872e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb88676c939bfcf24574866eb63aeb724fb420b585623a83048bc69cac6872e5->enter($__internal_cb88676c939bfcf24574866eb63aeb724fb420b585623a83048bc69cac6872e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cb88676c939bfcf24574866eb63aeb724fb420b585623a83048bc69cac6872e5->leave($__internal_cb88676c939bfcf24574866eb63aeb724fb420b585623a83048bc69cac6872e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_faf62124ebdc6ad24bda5dcdf3ade52c0b4b2fba604b439e7e3f38de1d924416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf62124ebdc6ad24bda5dcdf3ade52c0b4b2fba604b439e7e3f38de1d924416->enter($__internal_faf62124ebdc6ad24bda5dcdf3ade52c0b4b2fba604b439e7e3f38de1d924416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_faf62124ebdc6ad24bda5dcdf3ade52c0b4b2fba604b439e7e3f38de1d924416->leave($__internal_faf62124ebdc6ad24bda5dcdf3ade52c0b4b2fba604b439e7e3f38de1d924416_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/msoto/public_html/mapbender3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
