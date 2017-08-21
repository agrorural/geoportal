<?php

/* @MapbenderCoreBundle/Resources/views/application.config.loader.js.twig */
class __TwigTemplate_1ea5159e0eabc8390551a9b77fddf0e0e356aaadfbc28a14fc3476a9287d1c9b extends Twig_Template
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
        echo "(function (\$) {
    if(Mapbender.configuration){
        \$(Mapbender.setup);
    } else {
        var url = '";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_configuration", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array())));
        echo "';
        \$.ajax({
            url: url + window.location.search,
            contentType: 'json'
        }).done(function (data, textStatus, jqXHR) {
            Mapbender.configuration = data;
            \$(Mapbender.setup);
        }).fail(function (jqXHR, textStatus, errorThrown) {
            Mapbender.info(\"Load application's configuration: \" + errorThrown);
        });
    }
})(jQuery);";
    }

    public function getTemplateName()
    {
        return "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/application.config.loader.js.twig");
    }
}
