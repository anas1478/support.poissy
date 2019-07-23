<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_23f9b21f11519258e04514a3d5dc557fcbdaff19b44681d5e8e5cd18cc98487f extends Twig_Template
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
        $__internal_2f635afaf7fe36ad3fb60c0f66259e16738747fcc6e84c6eb494070a92d6ed8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f635afaf7fe36ad3fb60c0f66259e16738747fcc6e84c6eb494070a92d6ed8d->enter($__internal_2f635afaf7fe36ad3fb60c0f66259e16738747fcc6e84c6eb494070a92d6ed8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a4eea95c49603de835440c2170401b0ee6bc67c53cc00b6cc024135009508ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4eea95c49603de835440c2170401b0ee6bc67c53cc00b6cc024135009508ec5->enter($__internal_a4eea95c49603de835440c2170401b0ee6bc67c53cc00b6cc024135009508ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f635afaf7fe36ad3fb60c0f66259e16738747fcc6e84c6eb494070a92d6ed8d->leave($__internal_2f635afaf7fe36ad3fb60c0f66259e16738747fcc6e84c6eb494070a92d6ed8d_prof);

        
        $__internal_a4eea95c49603de835440c2170401b0ee6bc67c53cc00b6cc024135009508ec5->leave($__internal_a4eea95c49603de835440c2170401b0ee6bc67c53cc00b6cc024135009508ec5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
