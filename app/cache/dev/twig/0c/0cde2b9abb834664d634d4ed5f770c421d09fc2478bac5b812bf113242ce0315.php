<?php

/* MapbenderCoreBundle::frontend.html.twig */
class __TwigTemplate_ff77ddb3136818d25f45b36bd1e69582e0603109ed989456370acebb3b573838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::index.html.twig", "MapbenderCoreBundle::frontend.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'frontend_content' => array($this, 'block_frontend_content'),
            'trans' => array($this, 'block_trans'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MapbenderCoreBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_607924e375446dda8524293bca30786db0e743460598b86343c10c5c42b31c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607924e375446dda8524293bca30786db0e743460598b86343c10c5c42b31c17->enter($__internal_607924e375446dda8524293bca30786db0e743460598b86343c10c5c42b31c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle::frontend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_607924e375446dda8524293bca30786db0e743460598b86343c10c5c42b31c17->leave($__internal_607924e375446dda8524293bca30786db0e743460598b86343c10c5c42b31c17_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_2d7e5f0477a2e1c8059f8520b5b3af5371d485b11bdd3371b1d406a9055855a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7e5f0477a2e1c8059f8520b5b3af5371d485b11bdd3371b1d406a9055855a1->enter($__internal_2d7e5f0477a2e1c8059f8520b5b3af5371d485b11bdd3371b1d406a9055855a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_2d7e5f0477a2e1c8059f8520b5b3af5371d485b11bdd3371b1d406a9055855a1->leave($__internal_2d7e5f0477a2e1c8059f8520b5b3af5371d485b11bdd3371b1d406a9055855a1_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_033d872701154baf858d3e887bd967ca0daf5b5f3187c8e943a2d2e782bf50f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033d872701154baf858d3e887bd967ca0daf5b5f3187c8e943a2d2e782bf50f6->enter($__internal_033d872701154baf858d3e887bd967ca0daf5b5f3187c8e943a2d2e782bf50f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->displayBlock('frontend_content', $context, $blocks);
        
        $__internal_033d872701154baf858d3e887bd967ca0daf5b5f3187c8e943a2d2e782bf50f6->leave($__internal_033d872701154baf858d3e887bd967ca0daf5b5f3187c8e943a2d2e782bf50f6_prof);

    }

    public function block_frontend_content($context, array $blocks = array())
    {
        $__internal_6578b6882c8588123e30cae6cd85e8ee783f513a779ed11d66bc210842ab1b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6578b6882c8588123e30cae6cd85e8ee783f513a779ed11d66bc210842ab1b9b->enter($__internal_6578b6882c8588123e30cae6cd85e8ee783f513a779ed11d66bc210842ab1b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "frontend_content"));

        
        $__internal_6578b6882c8588123e30cae6cd85e8ee783f513a779ed11d66bc210842ab1b9b->leave($__internal_6578b6882c8588123e30cae6cd85e8ee783f513a779ed11d66bc210842ab1b9b_prof);

    }

    // line 8
    public function block_trans($context, array $blocks = array())
    {
        $__internal_b8fbecd7695ab7f9f16bfc0dbe695c10e8f68563b1d53c73d19f4b9b4c00beea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fbecd7695ab7f9f16bfc0dbe695c10e8f68563b1d53c73d19f4b9b4c00beea->enter($__internal_b8fbecd7695ab7f9f16bfc0dbe695c10e8f68563b1d53c73d19f4b9b4c00beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trans"));

        // line 9
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
";
        
        $__internal_b8fbecd7695ab7f9f16bfc0dbe695c10e8f68563b1d53c73d19f4b9b4c00beea->leave($__internal_b8fbecd7695ab7f9f16bfc0dbe695c10e8f68563b1d53c73d19f4b9b4c00beea_prof);

    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        $__internal_fa88283b8022262dd369a99da60a0e32a58258fdb8219bb5cb85192e17352633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa88283b8022262dd369a99da60a0e32a58258fdb8219bb5cb85192e17352633->enter($__internal_fa88283b8022262dd369a99da60a0e32a58258fdb8219bb5cb85192e17352633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
        
        $__internal_fa88283b8022262dd369a99da60a0e32a58258fdb8219bb5cb85192e17352633->leave($__internal_fa88283b8022262dd369a99da60a0e32a58258fdb8219bb5cb85192e17352633_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  89 => 11,  79 => 9,  73 => 8,  55 => 6,  49 => 5,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MapbenderCoreBundle::index.html.twig\" %}

{% block css %}{% endblock %}

{% block content %}
    {% block frontend_content %}{% endblock %}
{% endblock %}
{% block trans %}
  {{parent()}}
{% endblock %}
{% block js %}
  {{parent()}}
{% endblock %}

", "MapbenderCoreBundle::frontend.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/frontend.html.twig");
    }
}
