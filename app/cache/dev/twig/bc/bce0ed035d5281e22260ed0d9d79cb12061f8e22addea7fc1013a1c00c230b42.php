<?php

/* MapbenderCoreBundle::index.html.twig */
class __TwigTemplate_0ecdbbf65eeb28515a778d58f8c7a57a67d340a40aa3bfda036d93d25f8fdebe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mobilejs' => array($this, 'block_mobilejs'),
            'favicon' => array($this, 'block_favicon'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'trans' => array($this, 'block_trans'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd3c0fd3f29b2bb2b74ef6eb96fc7912d42f346da171c729f25058499a1f7d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3c0fd3f29b2bb2b74ef6eb96fc7912d42f346da171c729f25058499a1f7d4a->enter($__internal_bd3c0fd3f29b2bb2b74ef6eb96fc7912d42f346da171c729f25058499a1f7d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle::index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Mapbender 3\" />
    ";
        // line 8
        $this->displayBlock('mobilejs', $context, $blocks);
        // line 19
        echo "    ";
        // line 20
        echo "    <link rel=\"shortcut icon\" href=\"";
        $this->displayBlock('favicon', $context, $blocks);
        echo "\" />

    ";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 23
        echo "</head>
<body class=\"";
        // line 24
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            echo "debug";
        }
        echo "\">
";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/joii/dist/joii.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 30
        $this->displayBlock('trans', $context, $blocks);
        // line 31
        $this->displayBlock('js', $context, $blocks);
        // line 32
        echo "</body>
</html>";
        
        $__internal_bd3c0fd3f29b2bb2b74ef6eb96fc7912d42f346da171c729f25058499a1f7d4a->leave($__internal_bd3c0fd3f29b2bb2b74ef6eb96fc7912d42f346da171c729f25058499a1f7d4a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fb74cd053f27701e777af4d4965e3009132cf9322681c35527fd70bc7c5118c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb74cd053f27701e777af4d4965e3009132cf9322681c35527fd70bc7c5118c->enter($__internal_2fb74cd053f27701e777af4d4965e3009132cf9322681c35527fd70bc7c5118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2fb74cd053f27701e777af4d4965e3009132cf9322681c35527fd70bc7c5118c->leave($__internal_2fb74cd053f27701e777af4d4965e3009132cf9322681c35527fd70bc7c5118c_prof);

    }

    // line 8
    public function block_mobilejs($context, array $blocks = array())
    {
        $__internal_d96f21a86434b6e9139c45f2f7ddf46a3fb48a0efdfcca3894202c20a15c3760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96f21a86434b6e9139c45f2f7ddf46a3fb48a0efdfcca3894202c20a15c3760->enter($__internal_d96f21a86434b6e9139c45f2f7ddf46a3fb48a0efdfcca3894202c20a15c3760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mobilejs"));

        // line 9
        echo "    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        && !(/Firefox/i.test(navigator.userAgent))
        ) {
            var scaleFactor = ";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("scaleFactor", $context)) ? (_twig_default_filter((isset($context["scaleFactor"]) ? $context["scaleFactor"] : $this->getContext($context, "scaleFactor")), "0.7")) : ("0.7")), "html", null, true);
        echo ";
            var density = \"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("density", $context)) ? (_twig_default_filter((isset($context["density"]) ? $context["density"] : $this->getContext($context, "density")), "240dpi")) : ("240dpi")), "html", null, true);
        echo "\";
            document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale='+scaleFactor+'; maximum-scale='+scaleFactor+'; minimum-scale='+scaleFactor+' user-scalable=no;target-densityDpi='+density+'\"/>');
        }
    </script>
    ";
        
        $__internal_d96f21a86434b6e9139c45f2f7ddf46a3fb48a0efdfcca3894202c20a15c3760->leave($__internal_d96f21a86434b6e9139c45f2f7ddf46a3fb48a0efdfcca3894202c20a15c3760_prof);

    }

    // line 20
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_1c48b8cab8c25ea1d1f20ce455277519333ba29ec9cab07108d1f7a35f99d608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c48b8cab8c25ea1d1f20ce455277519333ba29ec9cab07108d1f7a35f99d608->enter($__internal_1c48b8cab8c25ea1d1f20ce455277519333ba29ec9cab07108d1f7a35f99d608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        
        $__internal_1c48b8cab8c25ea1d1f20ce455277519333ba29ec9cab07108d1f7a35f99d608->leave($__internal_1c48b8cab8c25ea1d1f20ce455277519333ba29ec9cab07108d1f7a35f99d608_prof);

    }

    // line 22
    public function block_css($context, array $blocks = array())
    {
        $__internal_d0e0f89a95b2eca020167b5118f10effbd3cbabff43836e7091907a51a4d3a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e0f89a95b2eca020167b5118f10effbd3cbabff43836e7091907a51a4d3a55->enter($__internal_d0e0f89a95b2eca020167b5118f10effbd3cbabff43836e7091907a51a4d3a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_d0e0f89a95b2eca020167b5118f10effbd3cbabff43836e7091907a51a4d3a55->leave($__internal_d0e0f89a95b2eca020167b5118f10effbd3cbabff43836e7091907a51a4d3a55_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed60289aa691e88039393701e9f65b2f65a30a71dad1c2c9b8cd0d3b8a98dec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed60289aa691e88039393701e9f65b2f65a30a71dad1c2c9b8cd0d3b8a98dec1->enter($__internal_ed60289aa691e88039393701e9f65b2f65a30a71dad1c2c9b8cd0d3b8a98dec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ed60289aa691e88039393701e9f65b2f65a30a71dad1c2c9b8cd0d3b8a98dec1->leave($__internal_ed60289aa691e88039393701e9f65b2f65a30a71dad1c2c9b8cd0d3b8a98dec1_prof);

    }

    // line 30
    public function block_trans($context, array $blocks = array())
    {
        $__internal_3a7de2e5e03a1f9fed84dc1956075c99fa9c9b49bd0cbc84efea868e31cd1e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7de2e5e03a1f9fed84dc1956075c99fa9c9b49bd0cbc84efea868e31cd1e78->enter($__internal_3a7de2e5e03a1f9fed84dc1956075c99fa9c9b49bd0cbc84efea868e31cd1e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "trans"));

        
        $__internal_3a7de2e5e03a1f9fed84dc1956075c99fa9c9b49bd0cbc84efea868e31cd1e78->leave($__internal_3a7de2e5e03a1f9fed84dc1956075c99fa9c9b49bd0cbc84efea868e31cd1e78_prof);

    }

    // line 31
    public function block_js($context, array $blocks = array())
    {
        $__internal_25b4826006b851e416cfda804f25a6933cf6ae056fafb6dd446486e94354abb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b4826006b851e416cfda804f25a6933cf6ae056fafb6dd446486e94354abb8->enter($__internal_25b4826006b851e416cfda804f25a6933cf6ae056fafb6dd446486e94354abb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_25b4826006b851e416cfda804f25a6933cf6ae056fafb6dd446486e94354abb8->leave($__internal_25b4826006b851e416cfda804f25a6933cf6ae056fafb6dd446486e94354abb8_prof);

    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 31,  165 => 30,  154 => 25,  143 => 22,  132 => 20,  120 => 14,  116 => 13,  110 => 9,  104 => 8,  93 => 6,  85 => 32,  83 => 31,  81 => 30,  76 => 28,  72 => 27,  67 => 26,  65 => 25,  59 => 24,  56 => 23,  54 => 22,  48 => 20,  46 => 19,  44 => 8,  39 => 6,  32 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"{{ app.request.locale }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>{% block title %}{% endblock %}</title>
    <meta name=\"description\" content=\"Mapbender 3\" />
    {% block mobilejs %}
    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        && !(/Firefox/i.test(navigator.userAgent))
        ) {
            var scaleFactor = {{ scaleFactor|default('0.7') }};
            var density = \"{{ density|default('240dpi') }}\";
            document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale='+scaleFactor+'; maximum-scale='+scaleFactor+'; minimum-scale='+scaleFactor+' user-scalable=no;target-densityDpi='+density+'\"/>');
        }
    </script>
    {% endblock %}
    {##}
    <link rel=\"shortcut icon\" href=\"{% block favicon %}{% endblock %}\" />

    {% block css %}{% endblock %}
</head>
<body class=\"{% if app.debug %}debug{% endif %}\">
{% block content %}{% endblock %}
<script src=\"{{ asset('components/joii/dist/joii.min.js')}}\"></script>
<script src=\"{{ asset('components/jquery/jquery.min.js')}}\"></script>
<script src=\"{{ asset('components/jquery-ui/jquery-ui.min.js')}}\"></script>

{% block trans %}{% endblock %}
{% block js %}{% endblock %}
</body>
</html>", "MapbenderCoreBundle::index.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/index.html.twig");
    }
}
