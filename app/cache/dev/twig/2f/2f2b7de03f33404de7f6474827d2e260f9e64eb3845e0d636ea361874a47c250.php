<?php

/* FOMCoreBundle::skel.html.twig */
class __TwigTemplate_966135dc2392f43bc1ed715e93687f9f9a49292df830857328277fa7f511cfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'trans' => array($this, 'block_trans'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c67e70cff741741819dad34aa9e626830c392b2254924061d909446f88ad2e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67e70cff741741819dad34aa9e626830c392b2254924061d909446f88ad2e73->enter($__internal_c67e70cff741741819dad34aa9e626830c392b2254924061d909446f88ad2e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOMCoreBundle::skel.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Mapbender 3\">
      <script language=\"JavaScript\">
          if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
              document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale=0.6; maximum-scale=0.6; minimum-scale=0.6; user-scalable=no;target-densityDpi=240dpi\"/>');
          }
      </script>
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        $this->displayBlock('favicon', $context, $blocks);
        echo "\" />

    ";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 17
        echo "  </head>
  <body class=\"";
        // line 18
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            echo "debug";
        }
        echo "\">
    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 23
        $this->displayBlock('trans', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 25
        echo "  </body>
</html>";
        
        $__internal_c67e70cff741741819dad34aa9e626830c392b2254924061d909446f88ad2e73->leave($__internal_c67e70cff741741819dad34aa9e626830c392b2254924061d909446f88ad2e73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5ecbc711a65d693ae5a3e1c08a9fed40a802160aa48b449274e05be96c09e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ecbc711a65d693ae5a3e1c08a9fed40a802160aa48b449274e05be96c09e1b->enter($__internal_d5ecbc711a65d693ae5a3e1c08a9fed40a802160aa48b449274e05be96c09e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d5ecbc711a65d693ae5a3e1c08a9fed40a802160aa48b449274e05be96c09e1b->leave($__internal_d5ecbc711a65d693ae5a3e1c08a9fed40a802160aa48b449274e05be96c09e1b_prof);

    }

    // line 14
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_c98bfff97c36495ce1365af322252214fe64d30ac0bdf426a58a24609047d571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98bfff97c36495ce1365af322252214fe64d30ac0bdf426a58a24609047d571->enter($__internal_c98bfff97c36495ce1365af322252214fe64d30ac0bdf426a58a24609047d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        
        $__internal_c98bfff97c36495ce1365af322252214fe64d30ac0bdf426a58a24609047d571->leave($__internal_c98bfff97c36495ce1365af322252214fe64d30ac0bdf426a58a24609047d571_prof);

    }

    // line 16
    public function block_css($context, array $blocks = array())
    {
        $__internal_9d7ee40587bdf499347c5f34dcb4d9b4d6c0f688e2d01670b40a62fedd402db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7ee40587bdf499347c5f34dcb4d9b4d6c0f688e2d01670b40a62fedd402db6->enter($__internal_9d7ee40587bdf499347c5f34dcb4d9b4d6c0f688e2d01670b40a62fedd402db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_9d7ee40587bdf499347c5f34dcb4d9b4d6c0f688e2d01670b40a62fedd402db6->leave($__internal_9d7ee40587bdf499347c5f34dcb4d9b4d6c0f688e2d01670b40a62fedd402db6_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbafb76193c9d0ab64c8c7ac98207cd9d73d30907cb38cfbe5f7a237336c63af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbafb76193c9d0ab64c8c7ac98207cd9d73d30907cb38cfbe5f7a237336c63af->enter($__internal_fbafb76193c9d0ab64c8c7ac98207cd9d73d30907cb38cfbe5f7a237336c63af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fbafb76193c9d0ab64c8c7ac98207cd9d73d30907cb38cfbe5f7a237336c63af->leave($__internal_fbafb76193c9d0ab64c8c7ac98207cd9d73d30907cb38cfbe5f7a237336c63af_prof);

    }

    // line 23
    public function block_trans($context, array $blocks = array())
    {
        $__internal_ed49081faa6235d389ed175ebfd4487292d5fb0f33efebc6bd4e929d28e12af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed49081faa6235d389ed175ebfd4487292d5fb0f33efebc6bd4e929d28e12af8->enter($__internal_ed49081faa6235d389ed175ebfd4487292d5fb0f33efebc6bd4e929d28e12af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trans"));

        
        $__internal_ed49081faa6235d389ed175ebfd4487292d5fb0f33efebc6bd4e929d28e12af8->leave($__internal_ed49081faa6235d389ed175ebfd4487292d5fb0f33efebc6bd4e929d28e12af8_prof);

    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
        $__internal_6a0219ff58140284b9f68ef34bb02ddb7989255ca2961cb692b612213831dd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a0219ff58140284b9f68ef34bb02ddb7989255ca2961cb692b612213831dd19->enter($__internal_6a0219ff58140284b9f68ef34bb02ddb7989255ca2961cb692b612213831dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_6a0219ff58140284b9f68ef34bb02ddb7989255ca2961cb692b612213831dd19->leave($__internal_6a0219ff58140284b9f68ef34bb02ddb7989255ca2961cb692b612213831dd19_prof);

    }

    public function getTemplateName()
    {
        return "FOMCoreBundle::skel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 24,  133 => 23,  122 => 19,  111 => 16,  100 => 14,  89 => 7,  81 => 25,  78 => 24,  76 => 23,  71 => 21,  66 => 20,  64 => 19,  58 => 18,  55 => 17,  53 => 16,  48 => 14,  38 => 7,  31 => 3,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# ATTENTION: This template ist deprecated, use \"MapbenderCoreBundle::index.html.twig\" instead #}
<!DOCTYPE html>
<html class=\"no-js\" lang=\"{{ app.request.locale }}\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>{% block title %}{% endblock %}</title>
    <meta name=\"description\" content=\"Mapbender 3\">
      <script language=\"JavaScript\">
          if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
              document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale=0.6; maximum-scale=0.6; minimum-scale=0.6; user-scalable=no;target-densityDpi=240dpi\"/>');
          }
      </script>
    <link rel=\"shortcut icon\" href=\"{% block favicon %}{% endblock %}\" />

    {% block css %}{% endblock %}
  </head>
  <body class=\"{% if app.debug %}debug{% endif %}\">
    {% block content %}{% endblock %}
    <script src=\"{{ asset('components/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{ asset('components/jquery-ui/jquery-ui.min.js')}}\"></script>

    {% block trans %}{% endblock %}
    {% block js %}{% endblock %}
  </body>
</html>", "FOMCoreBundle::skel.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/CoreBundle/Resources/views/skel.html.twig");
    }
}
