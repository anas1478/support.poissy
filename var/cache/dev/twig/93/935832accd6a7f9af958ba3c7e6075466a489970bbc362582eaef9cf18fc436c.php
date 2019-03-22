<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_fa3833ec85ce12610865728eec9f259e6344144f36ed757c712cc8c6d989cfa9 extends Twig_Template
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
        $__internal_78f8806458af097b5b8b18639c3cdb2c941678c8552acfdbf2eefbe957381809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f8806458af097b5b8b18639c3cdb2c941678c8552acfdbf2eefbe957381809->enter($__internal_78f8806458af097b5b8b18639c3cdb2c941678c8552acfdbf2eefbe957381809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_34c15398705f6333c6a3d3ddb812caaace1734c04b694d00af934042f0a5b245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c15398705f6333c6a3d3ddb812caaace1734c04b694d00af934042f0a5b245->enter($__internal_34c15398705f6333c6a3d3ddb812caaace1734c04b694d00af934042f0a5b245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_78f8806458af097b5b8b18639c3cdb2c941678c8552acfdbf2eefbe957381809->leave($__internal_78f8806458af097b5b8b18639c3cdb2c941678c8552acfdbf2eefbe957381809_prof);

        
        $__internal_34c15398705f6333c6a3d3ddb812caaace1734c04b694d00af934042f0a5b245->leave($__internal_34c15398705f6333c6a3d3ddb812caaace1734c04b694d00af934042f0a5b245_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
