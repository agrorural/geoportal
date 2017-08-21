<?php

/* MapbenderManagerBundle:Application:actions.html.twig */
class __TwigTemplate_740f759a2e013664b2ace0dd136baf349d3b38263f2ef8cf512709909de56489 extends Twig_Template
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
        if (array_key_exists("create_permission", $context)) {
            // line 2
            echo "    ";
            $context["actions"] = array("create" => array("display" =>             // line 4
(isset($context["create_permission"]) ? $context["create_permission"] : null), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_application_new"), "title" => "mb.manager.admin.application.new.title", "attr" => array("class" => "iconAdd iconBig right")));
        }
        // line 14
        $this->loadTemplate("FOMManagerBundle:Manager:actions.html.twig", "MapbenderManagerBundle:Application:actions.html.twig", 14)->display($context);
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
        return array (  26 => 14,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Application:actions.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/actions.html.twig");
    }
}
