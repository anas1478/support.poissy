<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b17fa646ffcf823dbb7a49403e1ff71f1283087ff9ca763be77074a705c28e86 extends Twig_Template
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
        $__internal_834cbe3388b2f0712da13fba9f57d7f0e6de41d74b54fd73c531a80c659c75b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834cbe3388b2f0712da13fba9f57d7f0e6de41d74b54fd73c531a80c659c75b0->enter($__internal_834cbe3388b2f0712da13fba9f57d7f0e6de41d74b54fd73c531a80c659c75b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2430b899e19b42c8ac7b8e6c47bd322b637022bfe9ca8db4c4caf393a647667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2430b899e19b42c8ac7b8e6c47bd322b637022bfe9ca8db4c4caf393a647667d->enter($__internal_2430b899e19b42c8ac7b8e6c47bd322b637022bfe9ca8db4c4caf393a647667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_834cbe3388b2f0712da13fba9f57d7f0e6de41d74b54fd73c531a80c659c75b0->leave($__internal_834cbe3388b2f0712da13fba9f57d7f0e6de41d74b54fd73c531a80c659c75b0_prof);

        
        $__internal_2430b899e19b42c8ac7b8e6c47bd322b637022bfe9ca8db4c4caf393a647667d->leave($__internal_2430b899e19b42c8ac7b8e6c47bd322b637022bfe9ca8db4c4caf393a647667d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
