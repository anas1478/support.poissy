<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5c91c21824cf80affcb71e9e9849397ab779b261db5f2f65d6d8d42ef1e13b47 extends Twig_Template
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
        $__internal_c59788f0e8b39af2e8f3a053c519d06bd933385621175fdf3e8d3cbb588b9fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59788f0e8b39af2e8f3a053c519d06bd933385621175fdf3e8d3cbb588b9fc1->enter($__internal_c59788f0e8b39af2e8f3a053c519d06bd933385621175fdf3e8d3cbb588b9fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_441bab2232e6e169327a62b145cad511544fd0f6b6379085ac5625c0a8a130d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441bab2232e6e169327a62b145cad511544fd0f6b6379085ac5625c0a8a130d4->enter($__internal_441bab2232e6e169327a62b145cad511544fd0f6b6379085ac5625c0a8a130d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c59788f0e8b39af2e8f3a053c519d06bd933385621175fdf3e8d3cbb588b9fc1->leave($__internal_c59788f0e8b39af2e8f3a053c519d06bd933385621175fdf3e8d3cbb588b9fc1_prof);

        
        $__internal_441bab2232e6e169327a62b145cad511544fd0f6b6379085ac5625c0a8a130d4->leave($__internal_441bab2232e6e169327a62b145cad511544fd0f6b6379085ac5625c0a8a130d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
