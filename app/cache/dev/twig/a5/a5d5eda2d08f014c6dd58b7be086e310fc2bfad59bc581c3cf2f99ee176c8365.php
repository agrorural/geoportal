<?php

/* @MapbenderCoreBundle/Resources/views/application.config.loader.js.twig */
class __TwigTemplate_e5d239a6ae530d80eb4e3422309c88f17bcf23dfce25a48df7edefdb6f710465 extends Twig_Template
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
        $__internal_f0ff16d3dd890245829bdc728f8219451bb12d5a7ea30e8352be01954146ff3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ff16d3dd890245829bdc728f8219451bb12d5a7ea30e8352be01954146ff3f->enter($__internal_f0ff16d3dd890245829bdc728f8219451bb12d5a7ea30e8352be01954146ff3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig"));

        // line 1
        echo "(function (\$) {
    if(Mapbender.configuration){
        \$(Mapbender.setup);
    } else {
        var url = '";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_configuration", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "slug", array())));
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
        
        $__internal_f0ff16d3dd890245829bdc728f8219451bb12d5a7ea30e8352be01954146ff3f->leave($__internal_f0ff16d3dd890245829bdc728f8219451bb12d5a7ea30e8352be01954146ff3f_prof);

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
        return array (  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function (\$) {
    if(Mapbender.configuration){
        \$(Mapbender.setup);
    } else {
        var url = '{{ path('mapbender_core_application_configuration', {'slug': application.slug})  | raw }}';
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
})(jQuery);", "@MapbenderCoreBundle/Resources/views/application.config.loader.js.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/application.config.loader.js.twig");
    }
}
