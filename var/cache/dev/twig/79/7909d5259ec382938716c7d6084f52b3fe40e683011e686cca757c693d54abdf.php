<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ab32b48df39491f2facca9683a0feeed47265b75043e08537a11fb136f24771c extends Twig_Template
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
        $__internal_fdd6db6a41c2382987cc94fec6a671307e514bfd8b6c93468a6aaa09e0100233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd6db6a41c2382987cc94fec6a671307e514bfd8b6c93468a6aaa09e0100233->enter($__internal_fdd6db6a41c2382987cc94fec6a671307e514bfd8b6c93468a6aaa09e0100233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_084948a83eca62bb9806da0c2f203da27b469e9ba61aeecd111f131c8bd07283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084948a83eca62bb9806da0c2f203da27b469e9ba61aeecd111f131c8bd07283->enter($__internal_084948a83eca62bb9806da0c2f203da27b469e9ba61aeecd111f131c8bd07283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fdd6db6a41c2382987cc94fec6a671307e514bfd8b6c93468a6aaa09e0100233->leave($__internal_fdd6db6a41c2382987cc94fec6a671307e514bfd8b6c93468a6aaa09e0100233_prof);

        
        $__internal_084948a83eca62bb9806da0c2f203da27b469e9ba61aeecd111f131c8bd07283->leave($__internal_084948a83eca62bb9806da0c2f203da27b469e9ba61aeecd111f131c8bd07283_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
