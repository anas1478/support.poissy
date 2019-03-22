<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cfa990f5b05fc1686b069cea49173f9a9cc74d5dac483b83c741d115b15f489f extends Twig_Template
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
        $__internal_a758b8103ec3ef7e96c55e9a3301d2b52a9a8716243e76ce3ec93ee7e9f2e652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a758b8103ec3ef7e96c55e9a3301d2b52a9a8716243e76ce3ec93ee7e9f2e652->enter($__internal_a758b8103ec3ef7e96c55e9a3301d2b52a9a8716243e76ce3ec93ee7e9f2e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_21438d05891be7679944ac7d78f71da065b6987adf8add0cded3c426f6298f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21438d05891be7679944ac7d78f71da065b6987adf8add0cded3c426f6298f30->enter($__internal_21438d05891be7679944ac7d78f71da065b6987adf8add0cded3c426f6298f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a758b8103ec3ef7e96c55e9a3301d2b52a9a8716243e76ce3ec93ee7e9f2e652->leave($__internal_a758b8103ec3ef7e96c55e9a3301d2b52a9a8716243e76ce3ec93ee7e9f2e652_prof);

        
        $__internal_21438d05891be7679944ac7d78f71da065b6987adf8add0cded3c426f6298f30->leave($__internal_21438d05891be7679944ac7d78f71da065b6987adf8add0cded3c426f6298f30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
