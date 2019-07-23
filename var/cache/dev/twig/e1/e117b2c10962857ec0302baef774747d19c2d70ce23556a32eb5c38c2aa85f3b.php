<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_659ce58f52c1f294b47b7efc1491f4768c88f768ef809e637ec9ec8ff9bd8ca1 extends Twig_Template
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
        $__internal_df265f686b2c04055cea2f4379cc14f93d6b49cdd2fba3da71a1dbadd10d0789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df265f686b2c04055cea2f4379cc14f93d6b49cdd2fba3da71a1dbadd10d0789->enter($__internal_df265f686b2c04055cea2f4379cc14f93d6b49cdd2fba3da71a1dbadd10d0789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0077685d01081011f024ee1c1e7ed9242035a64cffa336c4b8610ebefc25e5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0077685d01081011f024ee1c1e7ed9242035a64cffa336c4b8610ebefc25e5a2->enter($__internal_0077685d01081011f024ee1c1e7ed9242035a64cffa336c4b8610ebefc25e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_df265f686b2c04055cea2f4379cc14f93d6b49cdd2fba3da71a1dbadd10d0789->leave($__internal_df265f686b2c04055cea2f4379cc14f93d6b49cdd2fba3da71a1dbadd10d0789_prof);

        
        $__internal_0077685d01081011f024ee1c1e7ed9242035a64cffa336c4b8610ebefc25e5a2->leave($__internal_0077685d01081011f024ee1c1e7ed9242035a64cffa336c4b8610ebefc25e5a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
