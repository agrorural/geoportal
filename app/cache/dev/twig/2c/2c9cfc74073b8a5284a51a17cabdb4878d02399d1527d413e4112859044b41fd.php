<?php

/* MapbenderCoreBundle:Template:region.html.twig */
class __TwigTemplate_5777bf4254eca279c6e8da4e7e00b36f43ca322ec68a77e0e9df25e9ab01d631 extends Twig_Template
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
        $__internal_2bb69861586dc0a789fbd08696ff3945a967e07b8b651868ceeef984fc0e3774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb69861586dc0a789fbd08696ff3945a967e07b8b651868ceeef984fc0e3774->enter($__internal_2bb69861586dc0a789fbd08696ff3945a967e07b8b651868ceeef984fc0e3774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Template:region.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : null), "elements", array(), "any", false, true), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array", true, true)) {
            // line 2
            echo "  ";
            if ((($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : null), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : $this->getContext($context, "region_props")), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"), "name", array()) == (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")))) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : $this->getContext($context, "region_props")), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"), "properties", array())) > 0))) {
                // line 3
                echo "      ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["region_props"]) ? $context["region_props"] : $this->getContext($context, "region_props")), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"), "properties", array()), "name", array(), "array") == "tabs")) {
                    // line 4
                    echo "        <div class=\"tabContainerAlt\">
          <ul class=\"tabs\">
            ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array()), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"));
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
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array()), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"));
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
(isset($context["region_props"]) ? $context["region_props"] : $this->getContext($context, "region_props")), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"), "properties", array()), "name", array(), "array") == "accordion")) {
                    // line 17
                    echo "        <div class=\"accordionContainer\">
          ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array()), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"));
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
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array()), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"));
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["application"]) ? $context["application"] : $this->getContext($context, "application")), "elements", array()), (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), array(), "array"));
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
        
        $__internal_2bb69861586dc0a789fbd08696ff3945a967e07b8b651868ceeef984fc0e3774->leave($__internal_2bb69861586dc0a789fbd08696ff3945a967e07b8b651868ceeef984fc0e3774_prof);

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
        return array (  225 => 39,  216 => 37,  211 => 36,  208 => 35,  206 => 34,  203 => 33,  194 => 31,  189 => 30,  185 => 28,  166 => 23,  156 => 20,  145 => 19,  128 => 18,  125 => 17,  123 => 16,  120 => 15,  103 => 12,  94 => 11,  77 => 10,  74 => 9,  51 => 7,  34 => 6,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if application.elements[region] is defined %}
  {% if region_props[region] is defined and region_props[region].name == region and region_props[region].properties | length > 0 %}
      {% if region_props[region].properties['name'] == 'tabs' %}
        <div class=\"tabContainerAlt\">
          <ul class=\"tabs\">
            {%  for element in application.elements[region] %}
              <li id=\"tab{{loop.index}}\" class=\"tab{% if loop.first %} active{% endif %}\">{{ element.title | trans }}</li>
            {% endfor %}
          </ul>
            {%  for element in application.elements[region] %}
              <div id=\"container{{loop.index}}\" class=\"container{% if loop.first %} active{% endif %}\">
                {{ element.render() | raw }}
              </div>
            {% endfor %}
        </div>
      {% elseif region_props[region].properties['name'] == 'accordion' %}
        <div class=\"accordionContainer\">
          {%  for element in application.elements[region] %}
            <div id=\"accordion{{loop.index}}\" class=\"accordion{% if loop.first %} active{% endif %}\"><div class=\"tablecell\">{{ element.title | trans }}</div></div>
            <div id=\"container{{loop.index}}\" class=\"container-accordion{% if loop.first %} active{% endif %}\">
                <div class=\"accordion-cell\">
                    <div class=\"accordion-wrapper\">
                    {{ element.render() | raw }}
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
      {% else %}
        {% for element in application.elements[region] %}
          {{ element.render() | raw }}
        {% endfor %}
      {% endif %}
    {#% endfor %#}
  {% else %}
    {% for element in application.elements[region] %}
      {{ element.render() | raw }}
    {% endfor %}
  {% endif %}
{% endif %}
", "MapbenderCoreBundle:Template:region.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Template/region.html.twig");
    }
}
