<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_33ceb73a48e4e166912b510e10c50d08c737183222687585ea9508da6277b3b9 extends Twig_Template
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
        $__internal_3aacdc1d3af6bd5c800e7bc0c7d3dc2a813ea82d42cb532f7253427e5834377b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aacdc1d3af6bd5c800e7bc0c7d3dc2a813ea82d42cb532f7253427e5834377b->enter($__internal_3aacdc1d3af6bd5c800e7bc0c7d3dc2a813ea82d42cb532f7253427e5834377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3b1995f7e390841d748797c3e28237fc987ffc3f058fdfcee9e37b42fd49d5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1995f7e390841d748797c3e28237fc987ffc3f058fdfcee9e37b42fd49d5c9->enter($__internal_3b1995f7e390841d748797c3e28237fc987ffc3f058fdfcee9e37b42fd49d5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3aacdc1d3af6bd5c800e7bc0c7d3dc2a813ea82d42cb532f7253427e5834377b->leave($__internal_3aacdc1d3af6bd5c800e7bc0c7d3dc2a813ea82d42cb532f7253427e5834377b_prof);

        
        $__internal_3b1995f7e390841d748797c3e28237fc987ffc3f058fdfcee9e37b42fd49d5c9->leave($__internal_3b1995f7e390841d748797c3e28237fc987ffc3f058fdfcee9e37b42fd49d5c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
