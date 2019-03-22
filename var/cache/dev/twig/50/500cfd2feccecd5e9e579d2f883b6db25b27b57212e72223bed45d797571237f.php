<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7cbf3beb941f77404a6833a70f380de423c5c0ea4999b590f62cce3fbe5403c7 extends Twig_Template
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
        $__internal_62a62870158957abdd6cd71678b1952fe3c7069f43080b42e5f67eec3f36bca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a62870158957abdd6cd71678b1952fe3c7069f43080b42e5f67eec3f36bca3->enter($__internal_62a62870158957abdd6cd71678b1952fe3c7069f43080b42e5f67eec3f36bca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b8ffaf9e36bd84654b2d3f4b45a75979953bc6d487e5053aa11bc68ef47cce9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ffaf9e36bd84654b2d3f4b45a75979953bc6d487e5053aa11bc68ef47cce9c->enter($__internal_b8ffaf9e36bd84654b2d3f4b45a75979953bc6d487e5053aa11bc68ef47cce9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_62a62870158957abdd6cd71678b1952fe3c7069f43080b42e5f67eec3f36bca3->leave($__internal_62a62870158957abdd6cd71678b1952fe3c7069f43080b42e5f67eec3f36bca3_prof);

        
        $__internal_b8ffaf9e36bd84654b2d3f4b45a75979953bc6d487e5053aa11bc68ef47cce9c->leave($__internal_b8ffaf9e36bd84654b2d3f4b45a75979953bc6d487e5053aa11bc68ef47cce9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
