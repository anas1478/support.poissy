<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_91fe222834edece86345cf3f43092895b430829aee808fcfd4c9a165a92e2b9a extends Twig_Template
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
        $__internal_5d6b55be4e3f8542be1a4c78d1ecd26c60f1c184dc1fc923f313f34d8c38b856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6b55be4e3f8542be1a4c78d1ecd26c60f1c184dc1fc923f313f34d8c38b856->enter($__internal_5d6b55be4e3f8542be1a4c78d1ecd26c60f1c184dc1fc923f313f34d8c38b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1ca05e6710ea7d3c8d3424a86cf7523e543c1ce5943748c4b9a8ff208fce0f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca05e6710ea7d3c8d3424a86cf7523e543c1ce5943748c4b9a8ff208fce0f78->enter($__internal_1ca05e6710ea7d3c8d3424a86cf7523e543c1ce5943748c4b9a8ff208fce0f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5d6b55be4e3f8542be1a4c78d1ecd26c60f1c184dc1fc923f313f34d8c38b856->leave($__internal_5d6b55be4e3f8542be1a4c78d1ecd26c60f1c184dc1fc923f313f34d8c38b856_prof);

        
        $__internal_1ca05e6710ea7d3c8d3424a86cf7523e543c1ce5943748c4b9a8ff208fce0f78->leave($__internal_1ca05e6710ea7d3c8d3424a86cf7523e543c1ce5943748c4b9a8ff208fce0f78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
