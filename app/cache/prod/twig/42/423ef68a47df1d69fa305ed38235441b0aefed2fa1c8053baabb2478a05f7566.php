<?php

/* MapbenderCoreBundle::frontend.html.twig */
class __TwigTemplate_ed0b9c4e3e05c8484a2db14fd7033d32854e3b458f5ce37f44d9bf5aadea58e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MapbenderCoreBundle::index.html.twig", "MapbenderCoreBundle::frontend.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'frontend_content' => array($this, 'block_frontend_content'),
            'trans' => array($this, 'block_trans'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MapbenderCoreBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('frontend_content', $context, $blocks);
    }

    public function block_frontend_content($context, array $blocks = array())
    {
    }

    // line 8
    public function block_trans($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        $this->displayParentBlock("trans", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_js($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "MapbenderCoreBundle::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  52 => 9,  49 => 8,  40 => 6,  37 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MapbenderCoreBundle::frontend.html.twig", "/Users/msoto/public_html/mapbender3/mapbender/src/Mapbender/CoreBundle/Resources/views/frontend.html.twig");
    }
}
