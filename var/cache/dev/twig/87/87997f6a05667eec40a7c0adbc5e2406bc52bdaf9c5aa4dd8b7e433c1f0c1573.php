<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_44977a65bd7bfd3ae30de504dca9400da8f43e8f28852eaee5b9044f99ab0800 extends Twig_Template
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
        $__internal_1a57f0695a4cb281572a80c16627d96f389ffc4f33cd79909123c4a8f856d888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a57f0695a4cb281572a80c16627d96f389ffc4f33cd79909123c4a8f856d888->enter($__internal_1a57f0695a4cb281572a80c16627d96f389ffc4f33cd79909123c4a8f856d888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4f0136c6148ba12b599c426adf59b540d1e245d54b678f499d61664d0674de9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f0136c6148ba12b599c426adf59b540d1e245d54b678f499d61664d0674de9e->enter($__internal_4f0136c6148ba12b599c426adf59b540d1e245d54b678f499d61664d0674de9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1a57f0695a4cb281572a80c16627d96f389ffc4f33cd79909123c4a8f856d888->leave($__internal_1a57f0695a4cb281572a80c16627d96f389ffc4f33cd79909123c4a8f856d888_prof);

        
        $__internal_4f0136c6148ba12b599c426adf59b540d1e245d54b678f499d61664d0674de9e->leave($__internal_4f0136c6148ba12b599c426adf59b540d1e245d54b678f499d61664d0674de9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
