<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ea0f0fd4d229f2b683a934c4973cf4d852cb7b4461ce00c7c2eaff9673060a31 extends Twig_Template
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
        $__internal_0f2dbcbfe496fcdd6b475013b2cc8adacd9e474da07b570582f3fd054b6de722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2dbcbfe496fcdd6b475013b2cc8adacd9e474da07b570582f3fd054b6de722->enter($__internal_0f2dbcbfe496fcdd6b475013b2cc8adacd9e474da07b570582f3fd054b6de722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6ff6195f12c82c6dfaba3ccedf47428c154deeaceb1bf3ab63c4079e881f3f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff6195f12c82c6dfaba3ccedf47428c154deeaceb1bf3ab63c4079e881f3f3a->enter($__internal_6ff6195f12c82c6dfaba3ccedf47428c154deeaceb1bf3ab63c4079e881f3f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0f2dbcbfe496fcdd6b475013b2cc8adacd9e474da07b570582f3fd054b6de722->leave($__internal_0f2dbcbfe496fcdd6b475013b2cc8adacd9e474da07b570582f3fd054b6de722_prof);

        
        $__internal_6ff6195f12c82c6dfaba3ccedf47428c154deeaceb1bf3ab63c4079e881f3f3a->leave($__internal_6ff6195f12c82c6dfaba3ccedf47428c154deeaceb1bf3ab63c4079e881f3f3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
