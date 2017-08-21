<?php

/* FOMManagerBundle:Manager:actions.html.twig */
class __TwigTemplate_20923eee2c8f8a3ffe72fcf776ba8c4794d6aab3a5599228d8558761d7aa1a8c extends Twig_Template
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
        if (array_key_exists("actions", $context)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : null));
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
                    echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
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
        return array (  63 => 9,  51 => 7,  48 => 6,  32 => 5,  29 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOMManagerBundle:Manager:actions.html.twig", "/Users/msoto/public_html/mapbender3/fom/src/FOM/ManagerBundle/Resources/views/Manager/actions.html.twig");
    }
}
