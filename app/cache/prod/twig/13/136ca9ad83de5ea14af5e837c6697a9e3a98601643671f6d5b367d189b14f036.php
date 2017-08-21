<?php

/* FOMManagerBundle::manager.html.twig */
class __TwigTemplate_7ccd7d1ac9046eaf59c051da534630aa46a1c36907aec098f6b17d9e2ad4d1a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMCoreBundle::skel.html.twig", "FOMManagerBundle::manager.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'content' => array($this, 'block_content'),
            'manager_content' => array($this, 'block_manager_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOMCoreBundle::skel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        $this->displayBlock('title', $context, $blocks);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), "")) : ("")), "html", null, true);
    }

    // line 5
    public function block_favicon($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "manager", "type" => "css")), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "manager", "type" => "js")), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_application_assets", array("slug" => "manager", "type" => "trans")), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "  <div class=\"head\"><hr class=\"dekoSeperator\"></div>
    <div id=\"wrapper\" class=\"page\">

      <div class=\"leftPane\">
        <div class=\"logoContainer\">
          <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mapbender_core_welcome_list");
        echo "\"><img class=\"logo\" alt=\"Mapbender 3 Manager\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_logo", array())), "html", null, true);
        echo "\" /></a>
        </div>
        ";
        // line 26
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != "")) {
            // line 27
            echo "          ";
            echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("FOMManagerBundle:Manager:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()))), array());
            // line 28
            echo "        ";
        }
        // line 29
        echo "      </div>

      <div class=\"rightPane\">

        ";
        // line 34
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "bag", array(0 => "flashes"), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 35
            echo "          <div class=\"flashBox ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 36
            echo twig_escape_filter($this->env, twig_first($this->env, $context["flash"]), "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        <div class=\"accountBar shadowBox\">
          ";
        // line 41
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != "")) {
            // line 42
            echo "            <ul id=\"accountMenu\" class=\"accountMenu\">
                <li id=\"accountOpen\" class=\"iconDown smallText\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.logged_as"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "<span class=\"openedIcon\"></span></li>
                ";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "password", array()) != "")) {
                echo " <li><a class=\"linkButton iconSettings\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fom_user_user_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.you_account"), "html", null, true);
                echo "</a></li>";
            }
            // line 45
            echo "                <li><a class=\"linkButton iconSignOut\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fom_user_login_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.logout"), "html", null, true);
            echo "</a></li>
            </ul>
          ";
        } else {
            // line 48
            echo "            <a class=\"linkButton iconSignIn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fom_user_login_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("fom.core.manager.btn.login"), "html", null, true);
            echo "</a>
          ";
        }
        // line 50
        echo "        </div>
        <div class=\"contentPane\">
          <div id=\"version\" class=\"mapbenderVersion smallText\">v. ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fom"]) ? $context["fom"] : null), "server_version", array()), "html", null, true);
        echo "</div>
          <div class=\"content shadowBox\">
            <h1 class=\"contentTitle\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "</h1>

            ";
        // line 56
        $this->displayBlock('manager_content', $context, $blocks);
        // line 57
        echo "          </div>
        </div>
      </div>
    </div>
";
    }

    // line 56
    public function block_manager_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOMManagerBundle::manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 56,  188 => 57,  186 => 56,  181 => 54,  176 => 52,  172 => 50,  164 => 48,  155 => 45,  147 => 44,  141 => 43,  138 => 42,  136 => 41,  132 => 39,  123 => 36,  118 => 35,  113 => 34,  107 => 29,  104 => 28,  101 => 27,  99 => 26,  92 => 24,  85 => 19,  82 => 18,  76 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  53 => 8,  50 => 7,  44 => 5,  38 => 3,  34 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMManagerBundle::manager.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/ManagerBundle/Resources/views/manager.html.twig");
    }
}
