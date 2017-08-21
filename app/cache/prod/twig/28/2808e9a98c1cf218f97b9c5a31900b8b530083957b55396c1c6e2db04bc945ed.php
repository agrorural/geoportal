<?php

/* MapbenderManagerBundle:Application:form-basic.html.twig */
class __TwigTemplate_67bbb63fd672e54120cbb9d7a7fb21128cc6d5bdfacb84df59d83273d4c39457 extends Twig_Template
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
        echo "<label class=\"left labelInput\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.title"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget');
        echo "
<div class=\"clearContainer\"></div>
<label class=\"left labelInput\" for=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.url.title"), "html", null, true);
        echo ":<span class=\"required\">*</span></label>
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "slug", array()), 'widget');
        echo "<br>
<div class=\"clearContainer\"></div>

<div class=\"left\">
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "screenshotFile", array()), 'label');
        echo "
</div>

<div class=\"screenshot_upload left\"  title=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.tooltip"), "html", null, true);
        echo "\">
    <div class=\"upload left\">
        <div class=\"label left upload_button\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.button"), "html", null, true);
        echo "
        </div>
        <div class=\"label right input upload_label\">
            ";
        // line 18
        if ( !(null === (isset($context["screenshot_filename"]) ? $context["screenshot_filename"] : null))) {
            // line 19
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["screenshot_filename"]) ? $context["screenshot_filename"] : null), "html", null, true);
            echo "
            ";
        } else {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.upload.label"), "html", null, true);
            echo "
            ";
        }
        // line 23
        echo "        </div>
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "screenshotFile", array()), 'widget');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "maxFileSize", array()), 'widget');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "screenshotWidth", array()), 'widget');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "screenshotHeight", array()), 'widget');
        echo "
        
    </div>
</div>
<div class=\"clearContainer\"></div>

<label class=\"left labelInput\" for=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mb.manager.admin.application.description"), "html", null, true);
        echo "</label>
";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "description", array()), 'widget');
        echo "

";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "removeScreenShot", array()), 'widget');
        echo "
";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "uploadScreenShot", array()), 'widget');
    }

    public function getTemplateName()
    {
        return "MapbenderManagerBundle:Application:form-basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  111 => 36,  106 => 34,  100 => 33,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  70 => 21,  64 => 19,  62 => 18,  56 => 15,  50 => 12,  44 => 9,  37 => 5,  31 => 4,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderManagerBundle:Application:form-basic.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/ManagerBundle/Resources/views/Application/form-basic.html.twig");
    }
}
