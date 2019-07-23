<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d581cd68b7729b4167862b11cc447affeb016f18b2676da0b9d15474505a3292 extends Twig_Template
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
        $__internal_59d1dde6924bd4864301108bb1473723d4ea2b773389cdbd759737c1d0da5e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d1dde6924bd4864301108bb1473723d4ea2b773389cdbd759737c1d0da5e9f->enter($__internal_59d1dde6924bd4864301108bb1473723d4ea2b773389cdbd759737c1d0da5e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_82f73da485d2aa49e408f59c94230ab1900fefacf0fa60779943f26e38fefd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f73da485d2aa49e408f59c94230ab1900fefacf0fa60779943f26e38fefd46->enter($__internal_82f73da485d2aa49e408f59c94230ab1900fefacf0fa60779943f26e38fefd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59d1dde6924bd4864301108bb1473723d4ea2b773389cdbd759737c1d0da5e9f->leave($__internal_59d1dde6924bd4864301108bb1473723d4ea2b773389cdbd759737c1d0da5e9f_prof);

        
        $__internal_82f73da485d2aa49e408f59c94230ab1900fefacf0fa60779943f26e38fefd46->leave($__internal_82f73da485d2aa49e408f59c94230ab1900fefacf0fa60779943f26e38fefd46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
