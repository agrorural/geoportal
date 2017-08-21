<?php

/* FOMUserBundle:Login:box.html.twig */
class __TwigTemplate_1c04b940877c7476293d85aefaa30a31fc7de408ef2bd58e2288ebbe53a71ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'css' => array($this, 'block_css'),
            'trans' => array($this, 'block_trans'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
            'box_content' => array($this, 'block_box_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["application"] = array("slug" => "manager");
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
      document.write('<meta name=\"viewport\" content=\"width=device-width; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;target-densityDpi=240dpi\"/>');
    }
  </script>
  ";
        // line 15
        echo "  <link rel=\"shortcut icon\" href=\"";
        $this->displayBlock('favicon', $context, $blocks);
        echo "\"/>

  ";
        // line 17
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "
  ";
        // line 23
        $this->displayBlock('trans', $context, $blocks);
        // line 31
        echo "
  ";
        // line 32
        $this->displayBlock('js', $context, $blocks);
        // line 38
        echo "</head>
<body class=\"";
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            echo "debug";
        }
        echo "\">
";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_favicon($context, array $blocks = array())
    {
    }

    // line 17
    public function block_css($context, array $blocks = array())
    {
        // line 18
        echo "    <link rel=\"stylesheet\"
          href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "mb3-login", "type" => "css")), "html", null, true);
        echo "\"/>

  ";
    }

    // line 23
    public function block_trans($context, array $blocks = array())
    {
        // line 24
        echo "    <script type=\"text/javascript\"
            src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "type" => "trans")), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      var Mapbender = Mapbender || {};
      Mapbender.configuration = {elements: {}};
    </script>
  ";
    }

    // line 32
    public function block_js($context, array $blocks = array())
    {
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => $this->getAttribute((isset($context["application"]) ? $context["application"] : null), "slug", array()), "type" => "js")), "html", null, true);
        echo "\"></script>
  ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "  <div class=\"authWrapper\">
    <div class=\"head\">
      <hr class=\"dekoSeperator\">
    </div>
    <div class=\"logoContainer\">
      <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3\"
                                                               src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_logo", array())), "html", null, true);
        echo "\"/></a>
    </div>
    ";
        // line 49
        $this->displayBlock('box_content', $context, $blocks);
        // line 50
        echo "  </div>
";
    }

    // line 49
    public function block_box_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:Login:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 49,  161 => 50,  159 => 49,  154 => 47,  150 => 46,  143 => 41,  140 => 40,  134 => 36,  129 => 34,  124 => 33,  121 => 32,  111 => 25,  108 => 24,  105 => 23,  98 => 19,  95 => 18,  92 => 17,  87 => 15,  82 => 7,  77 => 52,  75 => 40,  69 => 39,  66 => 38,  64 => 32,  61 => 31,  59 => 23,  56 => 22,  54 => 17,  48 => 15,  38 => 7,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:Login:box.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/Login/box.html.twig");
    }
}
