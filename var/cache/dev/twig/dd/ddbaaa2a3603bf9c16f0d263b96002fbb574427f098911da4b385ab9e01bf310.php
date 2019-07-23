<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2c44ddd3ae4b705feaa9e0fdc75252f7f00ce89bdee501fc802e678753f00d95 extends Twig_Template
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
        $__internal_19a4882535e12528f24a675e604b06713de876336f7df27988121212a3a57156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a4882535e12528f24a675e604b06713de876336f7df27988121212a3a57156->enter($__internal_19a4882535e12528f24a675e604b06713de876336f7df27988121212a3a57156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_241d2367b36571f14287a0f5155b8ba4d8aa701463eee7116414769a511f29d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241d2367b36571f14287a0f5155b8ba4d8aa701463eee7116414769a511f29d8->enter($__internal_241d2367b36571f14287a0f5155b8ba4d8aa701463eee7116414769a511f29d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_19a4882535e12528f24a675e604b06713de876336f7df27988121212a3a57156->leave($__internal_19a4882535e12528f24a675e604b06713de876336f7df27988121212a3a57156_prof);

        
        $__internal_241d2367b36571f14287a0f5155b8ba4d8aa701463eee7116414769a511f29d8->leave($__internal_241d2367b36571f14287a0f5155b8ba4d8aa701463eee7116414769a511f29d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
