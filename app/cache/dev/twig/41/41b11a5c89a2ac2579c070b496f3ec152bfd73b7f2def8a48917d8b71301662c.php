<?php

/* FOMManagerBundle:Manager:actions.html.twig */
class __TwigTemplate_4efb254f3dc7ebecea5e3f956dea338a5d4e87e7536dc72242875e118ee70abf extends Twig_Template
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
        $__internal_ed49b6354ca343b0194d828844a53922fd9cc816302eb159dc692043f71abb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed49b6354ca343b0194d828844a53922fd9cc816302eb159dc692043f71abb3e->enter($__internal_ed49b6354ca343b0194d828844a53922fd9cc816302eb159dc692043f71abb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOMManagerBundle:Manager:actions.html.twig"));

        // line 1
        if (array_key_exists("actions", $context)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 3
                echo "    ";
                if (( !$this->getAttribute($context["v"], "display", array(), "any", true, true) || ($this->getAttribute($context["v"], "display", array()) != false))) {
                    // line 4
                    echo "    ";
                    ob_start();
                    // line 5
                    echo "    ";
                    if ($this->getAttribute($context["v"], "attr", array(), "any", true, true)) {
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["v"], "attr", array()));
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            echo " ";
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                            echo "\"";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 6
                    echo "    ";
                    $context["attr"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 7
                    echo "    <a id=\"action-";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "url", array()), "html", null, true);
                    echo "\"";
                    echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
                    echo " title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["v"], "title", array())), "html", null, true);
                    echo "\" tabindex=\"-1\"></a>
    ";
                }
                // line 9
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ed49b6354ca343b0194d828844a53922fd9cc816302eb159dc692043f71abb3e->leave($__internal_ed49b6354ca343b0194d828844a53922fd9cc816302eb159dc692043f71abb3e_prof);

    }

    public function getTemplateName()
    {
        return "FOMManagerBundle:Manager:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  54 => 7,  51 => 6,  35 => 5,  32 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if actions is defined %}
    {% for k,v in actions %}
    {% if v.display is not defined or v.display != false %}
    {% set attr %}
    {% if v.attr is defined %}{% for k,v in v.attr %} {{k}}=\"{{v}}\"{% endfor %}{% endif %}
    {% endset %}
    <a id=\"action-{{ k }}\" href=\"{{ v.url }}\"{{ attr }} title=\"{{ v.title | trans }}\" tabindex=\"-1\"></a>
    {% endif %}
    {% endfor %}
{% endif %}", "FOMManagerBundle:Manager:actions.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/ManagerBundle/Resources/views/Manager/actions.html.twig");
    }
}
