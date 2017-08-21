<?php

/* FOMManagerBundle:Manager:menu.html.twig */
class __TwigTemplate_e226c2ef8511575924650c80eb80e52e9484f17c0445bb17cb721814903fd066 extends Twig_Template
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
        echo "<ul class=\"navLevel1 navigation\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["k"] => $context["itemLvlOne"]) {
            // line 3
            echo "
    <li id=\"manager-";
            // line 4
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" class=\"navItem ";
            if ($this->getAttribute($context["itemLvlOne"], "active", array(), "any", true, true)) {
                echo " activeItem ";
            }
            echo "\">
      <a class=\"iconLinkButton\" href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["itemLvlOne"], "route", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["itemLvlOne"], "title", array())), "html", null, true);
            echo "</a>

    ";
            // line 7
            if ($this->getAttribute($context["itemLvlOne"], "subroutes", array(), "any", true, true)) {
                // line 8
                echo "      <ul class=\"navLevel2\">

        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["itemLvlOne"], "subroutes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemLvlTwo"]) {
                    // line 11
                    echo "          <li class=\"";
                    if ($this->getAttribute($context["itemLvlTwo"], "active", array(), "any", true, true)) {
                        echo " activeItem ";
                    }
                    echo " navItem\">
            <a";
                    // line 12
                    if ($this->getAttribute($context["itemLvlTwo"], "idx", array(), "any", true, true)) {
                        echo " id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemLvlTwo"], "idx", array()), "html", null, true);
                        echo "\"";
                    }
                    echo " class=\"iconLinkButton\" href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["itemLvlTwo"], "route", array()));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["itemLvlTwo"], "title", array())), "html", null, true);
                    echo "</a>

            ";
                    // line 14
                    if ($this->getAttribute($context["itemLvlTwo"], "subroutes", array(), "any", true, true)) {
                        // line 15
                        echo "              <ul class=\"navLevel3\">

                ";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["itemLvlTwo"], "subroutes", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["itemLvlThree"]) {
                            // line 18
                            echo "                  <li class=\"navItem ";
                            if ($this->getAttribute($context["itemLvlThree"], "active", array(), "any", true, true)) {
                                echo " activeItem ";
                            }
                            echo "\">
                    <a class=\"iconLinkButton\" href=\"";
                            // line 19
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["itemLvlThree"], "route", array()));
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["itemLvlThree"], "title", array())), "html", null, true);
                            echo "</a>
                  </li>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemLvlThree'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "
              </ul>
            ";
                    }
                    // line 25
                    echo "
          </li>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemLvlTwo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "      </ul>
    ";
            }
            // line 31
            echo "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['itemLvlOne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "FOMManagerBundle:Manager:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 34,  120 => 31,  116 => 29,  107 => 25,  102 => 22,  91 => 19,  84 => 18,  80 => 17,  76 => 15,  74 => 14,  61 => 12,  54 => 11,  50 => 10,  46 => 8,  44 => 7,  37 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMManagerBundle:Manager:menu.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/ManagerBundle/Resources/views/Manager/menu.html.twig");
    }
}
