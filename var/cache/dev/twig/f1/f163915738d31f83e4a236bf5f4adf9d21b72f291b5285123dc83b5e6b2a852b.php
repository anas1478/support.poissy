<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4563229670b84b8194c60a7615f3b9bbad7b7872910d5f4be7467da27d52085a extends Twig_Template
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
        $__internal_2eebda9bb7e18f59ec8c78373efc7d56b4a36a9d987ab12fd4a358bef4562b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eebda9bb7e18f59ec8c78373efc7d56b4a36a9d987ab12fd4a358bef4562b8f->enter($__internal_2eebda9bb7e18f59ec8c78373efc7d56b4a36a9d987ab12fd4a358bef4562b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2af8bc627f8f371358f791827971386bf56e4cb90d5d50eac77171e4029d97e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af8bc627f8f371358f791827971386bf56e4cb90d5d50eac77171e4029d97e5->enter($__internal_2af8bc627f8f371358f791827971386bf56e4cb90d5d50eac77171e4029d97e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2eebda9bb7e18f59ec8c78373efc7d56b4a36a9d987ab12fd4a358bef4562b8f->leave($__internal_2eebda9bb7e18f59ec8c78373efc7d56b4a36a9d987ab12fd4a358bef4562b8f_prof);

        
        $__internal_2af8bc627f8f371358f791827971386bf56e4cb90d5d50eac77171e4029d97e5->leave($__internal_2af8bc627f8f371358f791827971386bf56e4cb90d5d50eac77171e4029d97e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
