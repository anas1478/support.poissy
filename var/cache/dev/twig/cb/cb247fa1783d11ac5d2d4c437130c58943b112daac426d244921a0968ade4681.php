<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fc789d371fd79bff26ec554060bd83bcca207ffb216f884c93a1f62524f5d5fe extends Twig_Template
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
        $__internal_ea2e4f1c06e433e973a35fac6cf6f29082ff49b8a94cc53777be8c30e26eb87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2e4f1c06e433e973a35fac6cf6f29082ff49b8a94cc53777be8c30e26eb87b->enter($__internal_ea2e4f1c06e433e973a35fac6cf6f29082ff49b8a94cc53777be8c30e26eb87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_893a0ddd8600b8ee8c98c19a4e0db1c9b3908b1c2cef6209332920329bc4fa7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893a0ddd8600b8ee8c98c19a4e0db1c9b3908b1c2cef6209332920329bc4fa7b->enter($__internal_893a0ddd8600b8ee8c98c19a4e0db1c9b3908b1c2cef6209332920329bc4fa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ea2e4f1c06e433e973a35fac6cf6f29082ff49b8a94cc53777be8c30e26eb87b->leave($__internal_ea2e4f1c06e433e973a35fac6cf6f29082ff49b8a94cc53777be8c30e26eb87b_prof);

        
        $__internal_893a0ddd8600b8ee8c98c19a4e0db1c9b3908b1c2cef6209332920329bc4fa7b->leave($__internal_893a0ddd8600b8ee8c98c19a4e0db1c9b3908b1c2cef6209332920329bc4fa7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
