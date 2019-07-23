<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bd8d066118cb867ae2efd9160defe4894a5364824eae5712e5b33aeade1da1fd extends Twig_Template
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
        $__internal_0a113215cad48edcff3ede406fc6bdec4d08ebcfb417770fbb0e1a996a8f9943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a113215cad48edcff3ede406fc6bdec4d08ebcfb417770fbb0e1a996a8f9943->enter($__internal_0a113215cad48edcff3ede406fc6bdec4d08ebcfb417770fbb0e1a996a8f9943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_70843c439ff7c9ff97050881bf6d2ca6ccebdf2707b87a65e425553a4c715b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70843c439ff7c9ff97050881bf6d2ca6ccebdf2707b87a65e425553a4c715b95->enter($__internal_70843c439ff7c9ff97050881bf6d2ca6ccebdf2707b87a65e425553a4c715b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a113215cad48edcff3ede406fc6bdec4d08ebcfb417770fbb0e1a996a8f9943->leave($__internal_0a113215cad48edcff3ede406fc6bdec4d08ebcfb417770fbb0e1a996a8f9943_prof);

        
        $__internal_70843c439ff7c9ff97050881bf6d2ca6ccebdf2707b87a65e425553a4c715b95->leave($__internal_70843c439ff7c9ff97050881bf6d2ca6ccebdf2707b87a65e425553a4c715b95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
