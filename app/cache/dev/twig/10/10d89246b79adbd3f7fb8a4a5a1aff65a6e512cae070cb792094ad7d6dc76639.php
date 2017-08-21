<?php

/* MapbenderCoreBundle:Element:printclient.html.twig */
class __TwigTemplate_0319d1200e3845e1caf7824819080a4725175c1b6765b68c3b16dbef46c7ae17 extends Twig_Template
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
        $__internal_89bd5a0e2bc0ce9eae560060d0a219b8653e0905b06426e887c354c887ce0451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bd5a0e2bc0ce9eae560060d0a219b8653e0905b06426e887c354c887ce0451->enter($__internal_89bd5a0e2bc0ce9eae560060d0a219b8653e0905b06426e887c354c887ce0451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MapbenderCoreBundle:Element:printclient.html.twig"));

        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"mb-element mb-element-printclient\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
        echo "\">
    
    ";
        // line 3
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "type", array(), "array", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "type", array()) == "element"))) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "templates", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "quality_levels", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "scales", array()));
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
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "rotatable", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "rotatable", array()) == 1))) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "optional_fields", array()));
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
                echo twig_escape_filter($this->env, (isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")), "html", null, true);
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
        if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "legend", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "legend", array()) == 1))) {
            // line 64
            echo "            ";
            $context["legend_checked"] = "checked";
            // line 65
            echo "            ";
            if (($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "legend_default_behaviour", array(), "any", true, true) && ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : $this->getContext($context, "configuration")), "legend_default_behaviour", array()) == 0))) {
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
            echo twig_escape_filter($this->env, (isset($context["legend_checked"]) ? $context["legend_checked"] : $this->getContext($context, "legend_checked")), "html", null, true);
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
        
        $__internal_89bd5a0e2bc0ce9eae560060d0a219b8653e0905b06426e887c354c887ce0451->leave($__internal_89bd5a0e2bc0ce9eae560060d0a219b8653e0905b06426e887c354c887ce0451_prof);

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
        return array (  220 => 76,  215 => 73,  210 => 71,  205 => 69,  199 => 67,  196 => 66,  193 => 65,  190 => 64,  188 => 63,  185 => 62,  182 => 61,  172 => 59,  169 => 58,  166 => 57,  164 => 56,  161 => 55,  159 => 54,  154 => 53,  151 => 52,  146 => 51,  144 => 50,  141 => 49,  137 => 47,  130 => 44,  128 => 43,  121 => 38,  110 => 36,  106 => 35,  100 => 32,  93 => 27,  82 => 25,  78 => 24,  72 => 21,  65 => 16,  54 => 14,  50 => 13,  44 => 10,  39 => 7,  32 => 4,  30 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"{{ id }}\" class=\"mb-element mb-element-printclient\" title=\"{{ title |trans }}\">
    
    {%  if configuration['type'] is defined and configuration.type == 'element' %}
        <input type=\"button\" class=\"button\" id=\"printToggle\" active=\"false\" value=\"{{ 'mb.core.printclient.btn.activate' | trans }}\"/>
        <br>    
    {% endif %}
    
    <form id=\"formats\" action=\"\">
        
        <label class=\"labelInput\">{{ 'mb.core.printclient.label.template' | trans }}</label>
        <div class=\"dropdown\">
            <select name=\"template\" class=\"hiddenDropdown\">
                {% for id, template in configuration.templates %}
                    <option value=\"{{ id }}\">{{ template.label }}</option>
                {% endfor %}
            </select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        <label class=\"labelInput\">{{ 'mb.core.printclient.label.quality' | trans }}</label>
        <div class=\"dropdown\">
            <select name=\"quality\" class=\"hiddenDropdown\">
                {% for key , label in configuration.quality_levels %}
                    <option value=\"{{ key }}\">{{ label }}</option>
                {% endfor %}
            </select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        <label class=\"labelInput\">{{ 'mb.core.printclient.label.scale' | trans }}</label>
        <div class=\"dropdown\">
            <select name=\"scale_select\" class=\"hiddenDropdown\">
                {% for key in configuration.scales %}
                    <option value=\"{{ key }}\">1:{{ key }}</option>
                {% endfor %}
            </select>
            <div class=\"dropdownValue iconDown\"></div>
            <ul class=\"dropdownList\"></ul>
        </div>

        {% if configuration.rotatable is defined and configuration.rotatable == 1 %}
            <label class=\"labelInput\" for=\"rotation\">{{ 'mb.core.printclient.label.rotation' | trans }}</label>
            <input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\"/>
\t    {% else %}
\t\t\t<input class=\"input\" type=\"text\" name=\"rotation\" value=\"0\" style=\"display: none\"/>
        {% endif %}

        {% if configuration.optional_fields is defined %}
            {% for key,field in configuration.optional_fields %}
                {% set required = '' %}
                <label class=\"labelInput\">{{ field.label }}
                    {% if field.options.required == true %}
                        <span class=\"required\">*</span>
                        {% set required = 'required=required' %}
                    {% endif %}
                </label>
                <input type=\"text\" class=\"input validationInput\" name=\"extra[{{ key }}]\" {{ required }}>
            {% endfor %}
        {% endif %}
        
        {% if configuration.legend is defined and configuration.legend == 1 %}
            {% set legend_checked = 'checked' %}
            {% if configuration.legend_default_behaviour is defined and configuration.legend_default_behaviour == 0 %}
                {% set legend_checked = '' %}
            {% endif %}    
            <div class=\"checkWrapper left iconCheckbox iconCheckboxActive \" data-icon=\"iconCheckbox\">
                <input class=\"checkbox\" type=\"checkbox\" name=\"printLegend\" value=\"1\" {{ legend_checked }}>
            </div>
            <label class=\"labelCheck\">{{ 'mb.core.printclient.label.legend' | trans }}</label>
        {% endif %}
        
        <div id=\"layers\"></div>
        <input type=\"submit\" style=\"display: none\"/>
        <input type=\"button\" class=\"button printSubmit hidden\" value=\"{{ 'mb.core.printclient.popup.btn.ok' | trans }}\"/>
    
    </form>
</div>
", "MapbenderCoreBundle:Element:printclient.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/Element/printclient.html.twig");
    }
}
