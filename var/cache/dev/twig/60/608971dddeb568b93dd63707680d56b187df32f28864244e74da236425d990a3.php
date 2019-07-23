<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_606b76fec7f61da5af3e6d1381d061b13886c9f985f8dc0ddd1cb2b7b256f9d0 extends Twig_Template
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
        $__internal_db64e7175c035851eeb4acac2ad9742285320967f5cfce4d85f17a38e002d4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db64e7175c035851eeb4acac2ad9742285320967f5cfce4d85f17a38e002d4d1->enter($__internal_db64e7175c035851eeb4acac2ad9742285320967f5cfce4d85f17a38e002d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1c1d6a8df117724712ae2c26ceae3c4a005b23206edcda9b7383878d508b1600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1d6a8df117724712ae2c26ceae3c4a005b23206edcda9b7383878d508b1600->enter($__internal_1c1d6a8df117724712ae2c26ceae3c4a005b23206edcda9b7383878d508b1600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_db64e7175c035851eeb4acac2ad9742285320967f5cfce4d85f17a38e002d4d1->leave($__internal_db64e7175c035851eeb4acac2ad9742285320967f5cfce4d85f17a38e002d4d1_prof);

        
        $__internal_1c1d6a8df117724712ae2c26ceae3c4a005b23206edcda9b7383878d508b1600->leave($__internal_1c1d6a8df117724712ae2c26ceae3c4a005b23206edcda9b7383878d508b1600_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
