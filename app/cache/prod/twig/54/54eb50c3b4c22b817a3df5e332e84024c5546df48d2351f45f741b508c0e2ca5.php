<?php

/* MapbenderCoreBundle:Template:region.html.twig */
class __TwigTemplate_3610b5af5d84cbee62961b5a806215ab598e3c07352fe3705207b7b59dbee484 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(), "any", false, true), (isset($context["region"]) ? $context["region"] : null), array(), "array", true, true)) {
            // line 2
            echo "  ";
            if ((($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["region"]) ? $context["region"] : null), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["region"]) ? $context["region"] : null), array(), "array"), "name", array()) == (isset($context["region"]) ? $context["region"] : null))) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["region"]) ? $context["region"] : null), array(), "array"), "properties", array())) > 0))) {
                // line 3
                echo "      ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["region"]) ? $context["region"] : null), array(), "array"), "properties", array()), "name", array(), "array") == "tabs")) {
                    // line 4
                    echo "        <div class=\"tabContainerAlt\">
          <ul class=\"tabs\">
            ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array()), (isset($context["region"]) ? $context["region"] : null), array(), "array"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 7
                        echo "              <li id=\"tab";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "\" class=\"tab";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " active";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["element"], "title", array())), "html", null, true);
                        echo "</li>
            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 9
                    echo "          </ul>
            ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array()), (isset($context["region"]) ? $context["region"] : null), array(), "array"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 11
                        echo "              <div id=\"container";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "\" class=\"container";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " active";
                        }
                        echo "\">
                ";
                        // line 12
                        echo $this->getAttribute($context["element"], "render", array(), "method");
                        echo "
              </div>
            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "        </div>
      ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 16
(isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["region"]) ? $context["region"] : null), array(), "array"), "properties", array()), "name", array(), "array") == "accordion")) {
                    // line 17
                    echo "        <div class=\"accordionContainer\">
          ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array()), (isset($context["region"]) ? $context["region"] : null), array(), "array"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 19
                        echo "            <div id=\"accordion";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "\" class=\"accordion";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " active";
                        }
                        echo "\"><div class=\"tablecell\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["element"], "title", array())), "html", null, true);
                        echo "</div></div>
            <div id=\"container";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "\" class=\"container-accordion";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " active";
                        }
                        echo "\">
                <div class=\"accordion-cell\">
                    <div class=\"accordion-wrapper\">
                    ";
                        // line 23
                        echo $this->getAttribute($context["element"], "render", array(), "method");
                        echo "
                    </div>
                </div>
            </div>
            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "        </div>
      ";
                } else {
                    // line 30
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array()), (isset($context["region"]) ? $context["region"] : null), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                        // line 31
                        echo "          ";
                        echo $this->getAttribute($context["element"], "render", array(), "method");
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "      ";
                }
                // line 34
                echo "    ";
                // line 35
                echo "  ";
            } else {
                // line 36
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array()), (isset($context["region"]) ? $context["region"] : null), array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 37
                    echo "      ";
                    echo $this->getAttribute($context["element"], "render", array(), "method");
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Template:region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 39,  213 => 37,  208 => 36,  205 => 35,  203 => 34,  200 => 33,  191 => 31,  186 => 30,  182 => 28,  163 => 23,  153 => 20,  142 => 19,  125 => 18,  122 => 17,  120 => 16,  117 => 15,  100 => 12,  91 => 11,  74 => 10,  71 => 9,  48 => 7,  31 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Template:region.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/region.html.twig");
    }
}
