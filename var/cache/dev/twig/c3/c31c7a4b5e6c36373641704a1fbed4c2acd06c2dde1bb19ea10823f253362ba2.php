<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f9a7a84477b4a304ea7cdfde989edc1b858e9669043bb2b7aa8fa877edfaa27a extends Twig_Template
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
        $__internal_3f33f0fae40e9c57e30c98482dd0b3e776eccbfa09d3c6f65b5e2e4f2951c13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f33f0fae40e9c57e30c98482dd0b3e776eccbfa09d3c6f65b5e2e4f2951c13b->enter($__internal_3f33f0fae40e9c57e30c98482dd0b3e776eccbfa09d3c6f65b5e2e4f2951c13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e58353d4651611083294bd24835aed85aa033c3c62c05d7ed50f93299fe1bc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58353d4651611083294bd24835aed85aa033c3c62c05d7ed50f93299fe1bc2a->enter($__internal_e58353d4651611083294bd24835aed85aa033c3c62c05d7ed50f93299fe1bc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3f33f0fae40e9c57e30c98482dd0b3e776eccbfa09d3c6f65b5e2e4f2951c13b->leave($__internal_3f33f0fae40e9c57e30c98482dd0b3e776eccbfa09d3c6f65b5e2e4f2951c13b_prof);

        
        $__internal_e58353d4651611083294bd24835aed85aa033c3c62c05d7ed50f93299fe1bc2a->leave($__internal_e58353d4651611083294bd24835aed85aa033c3c62c05d7ed50f93299fe1bc2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
