<?php

/* MapbenderManagerBundle:Application:actions.html.twig */
class __TwigTemplate_0c83d91eb216725fb5ede507b5d48cb0652e994a959b5326143d3cd4c9be0769 extends Twig_Template
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
        $__internal_d63108a6fcd244a05d3a048fc248b8f8aad0852b149b96730506957c7dcae855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63108a6fcd244a05d3a048fc248b8f8aad0852b149b96730506957c7dcae855->enter($__internal_d63108a6fcd244a05d3a048fc248b8f8aad0852b149b96730506957c7dcae855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderManagerBundle:Application:actions.html.twig"));

        // line 1
        if (array_key_exists("create_permission", $context)) {
            // line 2
            echo "    ";
            $context["actions"] = array("create" => array("display" =>             // line 4
(isset($context["create_permission"]) ? $context["create_permission"] : $this->getContext($context, "create_permission")), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_application_new"), "title" => "mb.manager.admin.application.new.title", "attr" => array("class" => "iconAdd iconBig right")));
        }
        // line 14
        $this->loadTemplate("FOMManagerBundle:Manager:actions.html.twig", "MapbenderManagerBundle:Application:actions.html.twig", 14)->display($context);
        
        $__internal_d63108a6fcd244a05d3a048fc248b8f8aad0852b149b96730506957c7dcae855->leave($__internal_d63108a6fcd244a05d3a048fc248b8f8aad0852b149b96730506957c7dcae855_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 14,  26 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if create_permission is defined %}
    {% set actions = {
        'create': {
            'display': create_permission,
            'url': url('mapbender_manager_application_new'),
            'title': 'mb.manager.admin.application.new.title',
            'attr': {
                'class': 'iconAdd iconBig right'
            }
        }
    }
    %}
{% endif %}
{% include \"FOMManagerBundle:Manager:actions.html.twig\" %}", "MapbenderManagerBundle:Application:actions.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/actions.html.twig");
    }
}
