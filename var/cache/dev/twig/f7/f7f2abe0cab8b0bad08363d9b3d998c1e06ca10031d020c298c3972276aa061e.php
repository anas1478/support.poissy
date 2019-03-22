<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1118315ffed1b7fce2832b3e01f086696b786a14070a6de7ab05bfc951f37ac0 extends Twig_Template
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
        $__internal_667f899643feae2ddcaaee0182e325c6f03298dac881b33cd4da47fc6d0d68d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667f899643feae2ddcaaee0182e325c6f03298dac881b33cd4da47fc6d0d68d4->enter($__internal_667f899643feae2ddcaaee0182e325c6f03298dac881b33cd4da47fc6d0d68d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4c6dee3b25e5550a78291967a99bee1c48654bdb1a592743a19b0ff0717a85aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6dee3b25e5550a78291967a99bee1c48654bdb1a592743a19b0ff0717a85aa->enter($__internal_4c6dee3b25e5550a78291967a99bee1c48654bdb1a592743a19b0ff0717a85aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_667f899643feae2ddcaaee0182e325c6f03298dac881b33cd4da47fc6d0d68d4->leave($__internal_667f899643feae2ddcaaee0182e325c6f03298dac881b33cd4da47fc6d0d68d4_prof);

        
        $__internal_4c6dee3b25e5550a78291967a99bee1c48654bdb1a592743a19b0ff0717a85aa->leave($__internal_4c6dee3b25e5550a78291967a99bee1c48654bdb1a592743a19b0ff0717a85aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
