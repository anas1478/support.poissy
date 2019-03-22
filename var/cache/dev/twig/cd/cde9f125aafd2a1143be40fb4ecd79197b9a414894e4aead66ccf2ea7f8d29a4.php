<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d5e36ef05a89aa1d5a4a5b6f6f9b93cfc3777d02c8b27cef9575745135912676 extends Twig_Template
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
        $__internal_60b5b14fba97913ca684ec0fdff1253b96ea2a066d38264847650bdb78f96d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b5b14fba97913ca684ec0fdff1253b96ea2a066d38264847650bdb78f96d75->enter($__internal_60b5b14fba97913ca684ec0fdff1253b96ea2a066d38264847650bdb78f96d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9a768d39f7e7806d6f872af3e3885372e33275cae67b8d7083092d1349988968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a768d39f7e7806d6f872af3e3885372e33275cae67b8d7083092d1349988968->enter($__internal_9a768d39f7e7806d6f872af3e3885372e33275cae67b8d7083092d1349988968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_60b5b14fba97913ca684ec0fdff1253b96ea2a066d38264847650bdb78f96d75->leave($__internal_60b5b14fba97913ca684ec0fdff1253b96ea2a066d38264847650bdb78f96d75_prof);

        
        $__internal_9a768d39f7e7806d6f872af3e3885372e33275cae67b8d7083092d1349988968->leave($__internal_9a768d39f7e7806d6f872af3e3885372e33275cae67b8d7083092d1349988968_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
