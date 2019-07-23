<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_34c3e1bf8a4b742fe9633dc2e1b4607aa561606bbf70af50d88340b899254c61 extends Twig_Template
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
        $__internal_d08de17bcc1823ae7104f0cdda897bf6b30e798efb415056bdf997dda03b8d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08de17bcc1823ae7104f0cdda897bf6b30e798efb415056bdf997dda03b8d6c->enter($__internal_d08de17bcc1823ae7104f0cdda897bf6b30e798efb415056bdf997dda03b8d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e687f19c926f319678a5f921e08b987cc83f25eb99f376e5226ffec30e35416e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e687f19c926f319678a5f921e08b987cc83f25eb99f376e5226ffec30e35416e->enter($__internal_e687f19c926f319678a5f921e08b987cc83f25eb99f376e5226ffec30e35416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d08de17bcc1823ae7104f0cdda897bf6b30e798efb415056bdf997dda03b8d6c->leave($__internal_d08de17bcc1823ae7104f0cdda897bf6b30e798efb415056bdf997dda03b8d6c_prof);

        
        $__internal_e687f19c926f319678a5f921e08b987cc83f25eb99f376e5226ffec30e35416e->leave($__internal_e687f19c926f319678a5f921e08b987cc83f25eb99f376e5226ffec30e35416e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
