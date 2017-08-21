<?php

/* MapbenderCoreBundle:Element:printclient.html.twig */
class __TwigTemplate_ed1837b88b9d752762d7237c78c21592ea48fca9f0ffcff5d3edb92f0a5d1762 extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"mb-element mb-element-printclient\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "\">
    
    ";
        // line 3
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "type", array(), "array", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "type", array()) == "element"))) {
            // line 4
            echo "        <input type=\"button\" class=\"button\" id=\"printToggle\" active=\"false\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.btn.activate"), "html", null, true);
            echo "\"/>
        <br>    
    ";
        }
        // line 7
        echo "    
    <form id=\"formats\" action=\"\">
        
        <label class=\"labelInput\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.template"), "html", null, true);
        echo "</label>
        <div class=\"dropdown\">
            <select name=\"template\" class=\"hiddenDropdown\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "templates", array()));
        foreach ($context['_seq'] as $context["id"] => $context["template"]) {
            // line 14
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "label", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        <label class=\"labelInput\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.quality"), "html", null, true);
        echo "</label>
        <div class=\"dropdown\">
            <select name=\"quality\" class=\"hiddenDropdown\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "quality_levels", array()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 25
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        <label class=\"labelInput\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.scale"), "html", null, true);
        echo "</label>
        <div class=\"dropdown\">
            <select name=\"scale_select\" class=\"hiddenDropdown\">
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "scales", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 36
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">1:";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        ";
        // line 43
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "rotatable", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "rotatable", array()) == 1))) {
            // line 44
            echo "            <label class=\"labelInput\" for=\"rotation\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.rotation"), "html", null, true);
            echo "</label>
            <input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\"/>
\t    ";
        } else {
            // line 47
            echo "\t\t\t<input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\" style=\"display: none\"/>
        ";
        }
        // line 49
        echo "
        ";
        // line 50
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "optional_fields", array(), "any", true, true)) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "optional_fields", array()));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 52
                echo "                ";
                $context["required"] = "";
                // line 53
                echo "                <label class=\"labelInput\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                echo "
                    ";
                // line 54
                if (($this->getAttribute($this->getAttribute($context["field"], "options", array()), "required", array()) == true)) {
                    // line 55
                    echo "                        <span class=\"required\">*</span>
                        ";
                    // line 56
                    $context["required"] = "required=required";
                    // line 57
                    echo "                    ";
                }
                // line 58
                echo "                </label>
                <input type=\"text\" class=\"input validationInput\" name=\"extra[";
                // line 59
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "]\" ";
                echo twig_escape_filter($this->env, (isset($context["required"]) ? $context["required"] : null), "html", null, true);
                echo ">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        ";
        }
        // line 62
        echo "        
        ";
        // line 63
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "legend", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "legend", array()) == 1))) {
            // line 64
            echo "            ";
            $context["legend_checked"] = "checked";
            // line 65
            echo "            ";
            if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "legend_default_behaviour", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "legend_default_behaviour", array()) == 0))) {
                // line 66
                echo "                ";
                $context["legend_checked"] = "";
                // line 67
                echo "            ";
            }
            echo "    
            <div class=\"checkWrapper left iconCheckbox iconCheckboxActive \" data-icon=\"iconCheckbox\">
                <input class=\"checkbox\" type=\"checkbox\" name=\"printLegend\" value=\"1\" ";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["legend_checked"]) ? $context["legend_checked"] : null), "html", null, true);
            echo ">
            </div>
            <label class=\"labelCheck\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.label.legend"), "html", null, true);
            echo "</label>
        ";
        }
        // line 73
        echo "        
        <div id=\"layers\"></div>
        <input type=\"submit\" style=\"display: none\"/>
        <input type=\"button\" class=\"button printSubmit hidden\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.core.printclient.popup.btn.ok"), "html", null, true);
        echo "\"/>
    
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle:Element:printclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 76,  212 => 73,  207 => 71,  202 => 69,  196 => 67,  193 => 66,  190 => 65,  187 => 64,  185 => 63,  182 => 62,  179 => 61,  169 => 59,  166 => 58,  163 => 57,  161 => 56,  158 => 55,  156 => 54,  151 => 53,  148 => 52,  143 => 51,  141 => 50,  138 => 49,  134 => 47,  127 => 44,  125 => 43,  118 => 38,  107 => 36,  103 => 35,  97 => 32,  90 => 27,  79 => 25,  75 => 24,  69 => 21,  62 => 16,  51 => 14,  47 => 13,  41 => 10,  36 => 7,  29 => 4,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle:Element:printclient.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/printclient.html.twig");
    }
}
