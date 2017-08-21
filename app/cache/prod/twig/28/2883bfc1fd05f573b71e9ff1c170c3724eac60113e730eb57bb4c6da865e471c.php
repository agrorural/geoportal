<?php

/* MapbenderCoreBundle::index.html.twig */
class __TwigTemplate_abfd001f10958063b5fafca096a7194e104dcb7779cf806d7fa01e7a8b486bc4 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 8
    public function block_mobilejs($context, array $blocks = array())
    {
        // line 9
        echo "    <script language=\"JavaScript\">
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
        && !(/Firefox/i.test(navigator.userAgent))
        ) {
            var scaleFactor = ";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("scaleFactor", $context)) ? (_twig_default_filter((isset($context["scaleFactor"]) ? $context["scaleFactor"] : null), "0.7")) : ("0.7")), "html", null, true);
        echo ";
            var density = \"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("density", $context)) ? (_twig_default_filter((isset($context["density"]) ? $context["density"] : null), "240dpi")) : ("240dpi")), "html", null, true);
        echo "\";
            document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale='+scaleFactor+'; maximum-scale='+scaleFactor+'; minimum-scale='+scaleFactor+' user-scalable=no;target-densityDpi='+density+'\"/>');
        }
    </script>
    ";
    }

    // line 20
    public function block_favicon($context, array $blocks = array())
    {
    }

    // line 22
    public function block_css($context, array $blocks = array())
    {
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
    }

    // line 30
    public function block_trans($context, array $blocks = array())
    {
    }

    // line 31
    public function block_js($context, array $blocks = array())
    {
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
        return array (  134 => 31,  129 => 30,  124 => 25,  119 => 22,  114 => 20,  105 => 14,  101 => 13,  95 => 9,  92 => 8,  87 => 6,  82 => 32,  80 => 31,  78 => 30,  73 => 28,  69 => 27,  64 => 26,  62 => 25,  56 => 24,  53 => 23,  51 => 22,  45 => 20,  43 => 19,  41 => 8,  36 => 6,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle::index.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/index.html.twig");
    }
}
