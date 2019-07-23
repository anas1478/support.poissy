<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_33beae452c6a7fe8ce8e22b41cc718b1efc661730a920cfb3c82490b896dce94 extends Twig_Template
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
        $__internal_5b5ec10b4531401744745c9860da55ce05691ef2ed20ab257c8f0f4ea96e3bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5ec10b4531401744745c9860da55ce05691ef2ed20ab257c8f0f4ea96e3bc1->enter($__internal_5b5ec10b4531401744745c9860da55ce05691ef2ed20ab257c8f0f4ea96e3bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_81a59d2b0e83eab240bf1e2d1df659d9acc536fcd7c4df9b4ee6d9c4a263d255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a59d2b0e83eab240bf1e2d1df659d9acc536fcd7c4df9b4ee6d9c4a263d255->enter($__internal_81a59d2b0e83eab240bf1e2d1df659d9acc536fcd7c4df9b4ee6d9c4a263d255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5b5ec10b4531401744745c9860da55ce05691ef2ed20ab257c8f0f4ea96e3bc1->leave($__internal_5b5ec10b4531401744745c9860da55ce05691ef2ed20ab257c8f0f4ea96e3bc1_prof);

        
        $__internal_81a59d2b0e83eab240bf1e2d1df659d9acc536fcd7c4df9b4ee6d9c4a263d255->leave($__internal_81a59d2b0e83eab240bf1e2d1df659d9acc536fcd7c4df9b4ee6d9c4a263d255_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
