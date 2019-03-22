<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a9a8bc25121616be8db25cafa9ad40ff2b908293a38681436e9581d64bafaba0 extends Twig_Template
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
        $__internal_cd2343f8161abb50e24962814ff966d515597d972b490b3d9a9cbaf1a99c4ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2343f8161abb50e24962814ff966d515597d972b490b3d9a9cbaf1a99c4ddc->enter($__internal_cd2343f8161abb50e24962814ff966d515597d972b490b3d9a9cbaf1a99c4ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_23278ad0d86728f4218e945e8e34f6ae7373f0bcbec45d541bcdd012ecc8ec1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23278ad0d86728f4218e945e8e34f6ae7373f0bcbec45d541bcdd012ecc8ec1f->enter($__internal_23278ad0d86728f4218e945e8e34f6ae7373f0bcbec45d541bcdd012ecc8ec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_cd2343f8161abb50e24962814ff966d515597d972b490b3d9a9cbaf1a99c4ddc->leave($__internal_cd2343f8161abb50e24962814ff966d515597d972b490b3d9a9cbaf1a99c4ddc_prof);

        
        $__internal_23278ad0d86728f4218e945e8e34f6ae7373f0bcbec45d541bcdd012ecc8ec1f->leave($__internal_23278ad0d86728f4218e945e8e34f6ae7373f0bcbec45d541bcdd012ecc8ec1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
