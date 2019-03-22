<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1ee0fa21e2d6ae8e2aaf2c5f61b4ddb66b5277978ebb916284be9a963474fa06 extends Twig_Template
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
        $__internal_8aadadfcc8ff9967647a38da673a5f00c6300306fec3f0e608f712ddb0761f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aadadfcc8ff9967647a38da673a5f00c6300306fec3f0e608f712ddb0761f8d->enter($__internal_8aadadfcc8ff9967647a38da673a5f00c6300306fec3f0e608f712ddb0761f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_184d2d589d18e401aaf6352540bb70c65df4350085909c9b84b4cefb5f8471ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184d2d589d18e401aaf6352540bb70c65df4350085909c9b84b4cefb5f8471ca->enter($__internal_184d2d589d18e401aaf6352540bb70c65df4350085909c9b84b4cefb5f8471ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8aadadfcc8ff9967647a38da673a5f00c6300306fec3f0e608f712ddb0761f8d->leave($__internal_8aadadfcc8ff9967647a38da673a5f00c6300306fec3f0e608f712ddb0761f8d_prof);

        
        $__internal_184d2d589d18e401aaf6352540bb70c65df4350085909c9b84b4cefb5f8471ca->leave($__internal_184d2d589d18e401aaf6352540bb70c65df4350085909c9b84b4cefb5f8471ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
