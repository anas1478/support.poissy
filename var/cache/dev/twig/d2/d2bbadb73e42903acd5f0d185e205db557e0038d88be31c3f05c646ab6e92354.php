<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6e22339e09b444aec8b978664c840d09c69535ae3d7e397efb39ae47e370cb2e extends Twig_Template
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
        $__internal_90bbdd3a215e334be2678d52b3c7f1fbf342bdc8cc509916e9c0077020370549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bbdd3a215e334be2678d52b3c7f1fbf342bdc8cc509916e9c0077020370549->enter($__internal_90bbdd3a215e334be2678d52b3c7f1fbf342bdc8cc509916e9c0077020370549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4703ab8cd4c27b269d4056661bfdd7cfe9ea96b39a3a0300b2094ec3fe66692b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4703ab8cd4c27b269d4056661bfdd7cfe9ea96b39a3a0300b2094ec3fe66692b->enter($__internal_4703ab8cd4c27b269d4056661bfdd7cfe9ea96b39a3a0300b2094ec3fe66692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_90bbdd3a215e334be2678d52b3c7f1fbf342bdc8cc509916e9c0077020370549->leave($__internal_90bbdd3a215e334be2678d52b3c7f1fbf342bdc8cc509916e9c0077020370549_prof);

        
        $__internal_4703ab8cd4c27b269d4056661bfdd7cfe9ea96b39a3a0300b2094ec3fe66692b->leave($__internal_4703ab8cd4c27b269d4056661bfdd7cfe9ea96b39a3a0300b2094ec3fe66692b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
