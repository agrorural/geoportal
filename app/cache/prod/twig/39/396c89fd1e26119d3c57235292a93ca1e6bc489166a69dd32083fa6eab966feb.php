<?php

/* FOMUserBundle:Login:login.html.twig */
class __TwigTemplate_a4f811f92dd872e510f3d44f2d5496c29b99bd3bb40ce8f8a1f0c6dba1263065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMUserBundle:Login:box.html.twig", "FOMUserBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'title' => array($this, 'block_title'),
            'box_content' => array($this, 'block_box_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOMUserBundle:Login:box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "mb3-login", "type" => "css")), "html", null, true);
        echo "\"/>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.title"), "html", null, true);
    }

    // line 8
    public function block_box_content($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"loginBox login\">
    <h2 class=\"contentTitle\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.caption"), "html", null, true);
        echo "</h2>

    <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_login_logincheck");
        echo "\" method=\"post\" id=\"login\" novalidate=\"novalidate\">
      ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 14
            echo "        <div class=\"messageBox error\">
          ";
            // line 15
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()) == "Bad credentials")) {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.errors.bad-credentials"), "html", null, true);
                echo "
          ";
            } else {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
                echo "
          ";
            }
            // line 20
            echo "        </div>
      ";
        }
        // line 22
        echo "
      <label class=\"left labelInput\" for=\"username\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.username"), "html", null, true);
        echo ":</label>
      <input class=\"input\" id=\"username\" type=\"text\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" autofocus />

      <div class=\"clearContainer\"></div>

      <label class=\"left labelInput\" for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.password"), "html", null, true);
        echo ":</label>
      <input class=\"input\" type=\"password\" id=\"password\" name=\"_password\" />

      <div class=\"clearContainer\"></div>

      ";
        // line 33
        if (((isset($context["selfregister"]) ? $context["selfregister"] : null) == true)) {
            // line 34
            echo "      <a class=\"linkButton iconLinkButton left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_registration_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.register"), "html", null, true);
            echo "</a>
      ";
        }
        // line 36
        echo "      ";
        if (((isset($context["reset_password"]) ? $context["reset_password"] : null) == true)) {
            // line 37
            echo "      <a class=\"linkButton iconLinkButton left\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_password_form");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.forgot_password"), "html", null, true);
            echo "?</a>
      ";
        }
        // line 39
        echo "
      <input type=\"submit\" class=\"right button\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.user.login.login.login"), "html", null, true);
        echo "\" />
      <div class=\"clearContainer\"></div>
    </form>
  </div>
  <script type=\"text/javascript\">
    if(top != window) {
      top.location.href = location.href;
      top.location.reload();
    }
    var Mapbender = Mapbender || {};
    Mapbender.configuration = {elements:{}};
  </script>      
";
    }

    public function getTemplateName()
    {
        return "FOMUserBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  127 => 39,  119 => 37,  116 => 36,  108 => 34,  106 => 33,  98 => 28,  91 => 24,  87 => 23,  84 => 22,  80 => 20,  74 => 18,  68 => 16,  66 => 15,  63 => 14,  61 => 13,  57 => 12,  52 => 10,  49 => 9,  46 => 8,  40 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMUserBundle:Login:login.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/UserBundle/Resources/views/Login/login.html.twig");
    }
}
