<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_793ae054ddf658871f152e6de316426ebef7db2f3eb471e756468f4fc90dd156 extends Twig_Template
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
        $__internal_655a524a2cd78a38646afb2cfa101934e81360a00abbfdfd352f2b1dfb8d6d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655a524a2cd78a38646afb2cfa101934e81360a00abbfdfd352f2b1dfb8d6d2e->enter($__internal_655a524a2cd78a38646afb2cfa101934e81360a00abbfdfd352f2b1dfb8d6d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9bb74516abde60e0997fbf3b60c937394558d03cb790f4e1592fd6ced65204aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb74516abde60e0997fbf3b60c937394558d03cb790f4e1592fd6ced65204aa->enter($__internal_9bb74516abde60e0997fbf3b60c937394558d03cb790f4e1592fd6ced65204aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_655a524a2cd78a38646afb2cfa101934e81360a00abbfdfd352f2b1dfb8d6d2e->leave($__internal_655a524a2cd78a38646afb2cfa101934e81360a00abbfdfd352f2b1dfb8d6d2e_prof);

        
        $__internal_9bb74516abde60e0997fbf3b60c937394558d03cb790f4e1592fd6ced65204aa->leave($__internal_9bb74516abde60e0997fbf3b60c937394558d03cb790f4e1592fd6ced65204aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
