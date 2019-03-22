<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_794e41daa7ea9908ca51417260b0b0167bc6a5078d3f02ea076cde805c5a0e7f extends Twig_Template
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
        $__internal_932c275afd38533f1f9f296177569f3106e3a983a350aa2e9ea896e043022eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932c275afd38533f1f9f296177569f3106e3a983a350aa2e9ea896e043022eae->enter($__internal_932c275afd38533f1f9f296177569f3106e3a983a350aa2e9ea896e043022eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9d32929839b621a71f95ae6f86e4ae175dfd5b5a3f65bf80b5da588a80810dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d32929839b621a71f95ae6f86e4ae175dfd5b5a3f65bf80b5da588a80810dce->enter($__internal_9d32929839b621a71f95ae6f86e4ae175dfd5b5a3f65bf80b5da588a80810dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_932c275afd38533f1f9f296177569f3106e3a983a350aa2e9ea896e043022eae->leave($__internal_932c275afd38533f1f9f296177569f3106e3a983a350aa2e9ea896e043022eae_prof);

        
        $__internal_9d32929839b621a71f95ae6f86e4ae175dfd5b5a3f65bf80b5da588a80810dce->leave($__internal_9d32929839b621a71f95ae6f86e4ae175dfd5b5a3f65bf80b5da588a80810dce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
