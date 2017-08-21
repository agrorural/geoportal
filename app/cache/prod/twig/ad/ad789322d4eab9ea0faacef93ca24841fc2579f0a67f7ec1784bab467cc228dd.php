<?php

/* MapbenderManagerBundle:Repository:index.html.twig */
class __TwigTemplate_23c08cb2502c8d828de11525fce5441fb387ad3fc8a9f209864de25cb67e231e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOMManagerBundle::manager.html.twig", "MapbenderManagerBundle:Repository:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'manager_content' => array($this, 'block_manager_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOMManagerBundle::manager.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.sources"), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_js($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
  <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mapbendermanager/js/service-list.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 14
    public function block_manager_content($context, array $blocks = array())
    {
        // line 15
        if ((isset($context["create_permission"]) ? $context["create_permission"] : null)) {
            // line 16
            echo "<a class=\"iconAdd iconBig right\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_new");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.add"), "html", null, true);
            echo "\"></a>
";
        }
        // line 18
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            // line 19
            echo "  <label for=\"inputFilterServices\" class=\"labelInput left\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.filter.source"), "html", null, true);
            echo "</label><input id=\"inputFilterServices\" type=\"text\" class=\"input listFilterInput\">

  <ul id=\"listFilterServices\" class=\"listFilterContainer clear listFilterBoxes listFilterServiceBoxes\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 23
                echo "      <li class=\"filterItem\">
        <div class=\"col1\">
          <span class=\"smallerText\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", array()), "html", null, true);
                echo "</span><br>
          <span class=\"smallerText\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "type", array()), "html", null, true);
                echo "</span><br>
            ";
                // line 27
                if (($this->getAttribute($context["source"], "valid", array()) == true)) {
                    // line 28
                    echo "                <span class=\"iconStarO icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.valid"), "html", null, true);
                    echo "\"></span><br>
            ";
                } elseif ( !(null === $this->getAttribute(                // line 29
$context["source"], "valid", array()))) {
                    // line 30
                    echo "                <span class=\"iconWarningSmpl icon\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.notvalid"), "html", null, true);
                    echo "\"></span><br>
            ";
                }
                // line 32
                echo "        </div>
        <div class=\"col2 box\">
          <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_view", array("sourceId" => $this->getAttribute($context["source"], "id", array()))), "html", null, true);
                echo "\" class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", array()), "html", null, true);
                echo "<span class=\"smallerText\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "alias", array()), "html", null, true);
                echo "</span></a>
          <div class=\"description\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "description", array()), "html", null, true);
                echo "</div>
          <div class=\"buttonGroup\">
            <a class=\"iconView iconBig\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_view", array("sourceId" => $this->getAttribute($context["source"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.show_metadata"), "html", null, true);
                echo "\"></a>
            ";
                // line 38
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", (isset($context["oid"]) ? $context["oid"] : null)) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("EDIT", $context["source"]))) {
                    // line 39
                    echo "            <a class=\"iconReset iconBig\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_updateform", array("sourceId" => $this->getAttribute($context["source"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.update"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", array()), "html", null, true);
                    echo "\"></a>
            ";
                }
                // line 41
                echo "            ";
                if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", (isset($context["oid"]) ? $context["oid"] : null)) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("DELETE", $context["source"]))) {
                    // line 42
                    echo "               <span class=\"iconRemove iconBig\"
                title=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.delete"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "title", array()), "html", null, true);
                    echo "\"
                data-url=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mapbender_manager_repository_confirmdelete", array("sourceId" => $this->getAttribute($context["source"], "id", array()))), "html", null, true);
                    echo "\"
                data-id=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "id", array()), "html", null, true);
                    echo "\"></span>
            ";
                }
                // line 47
                echo "          </div>
        </div>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "  </ul>
";
        } else {
            // line 53
            echo "    <span class=\"description\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.source.no_source"), "html", null, true);
            echo "</span>
";
        }
        // line 55
        echo "
<div class=\"clearContainer\"></div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Repository:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 55,  183 => 53,  179 => 51,  170 => 47,  165 => 45,  161 => 44,  155 => 43,  152 => 42,  149 => 41,  139 => 39,  137 => 38,  131 => 37,  126 => 35,  118 => 34,  114 => 32,  108 => 30,  106 => 29,  101 => 28,  99 => 27,  95 => 26,  91 => 25,  87 => 23,  83 => 22,  76 => 19,  74 => 18,  66 => 16,  64 => 15,  61 => 14,  55 => 11,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Repository:index.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Repository/index.html.twig");
    }
}
