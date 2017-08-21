<?php

/* FOMCoreBundle::skel.html.twig */
class __TwigTemplate_20b6038462c6981b532a58cbff47d0f99f54cac56d091a206d731498623b24a8 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array()), "html", null, true);
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 14
    public function block_favicon($context, array $blocks = array())
    {
    }

    // line 16
    public function block_css($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    // line 23
    public function block_trans($context, array $blocks = array())
    {
    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
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
        return array (  108 => 24,  103 => 23,  98 => 19,  93 => 16,  88 => 14,  83 => 7,  78 => 25,  75 => 24,  73 => 23,  68 => 21,  63 => 20,  61 => 19,  55 => 18,  52 => 17,  50 => 16,  45 => 14,  35 => 7,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMCoreBundle::skel.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/CoreBundle/Resources/views/skel.html.twig");
    }
}
