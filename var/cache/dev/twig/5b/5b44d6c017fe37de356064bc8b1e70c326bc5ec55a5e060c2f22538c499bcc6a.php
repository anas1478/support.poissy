<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_397817afb544eb0d3f27cf12f0fba81801f847d9027735f342240e9923bb5008 extends Twig_Template
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
        $__internal_8584cedf305070419a00c3363063365e8c5ff50caaad52a8a7ab0bc25e2c334a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8584cedf305070419a00c3363063365e8c5ff50caaad52a8a7ab0bc25e2c334a->enter($__internal_8584cedf305070419a00c3363063365e8c5ff50caaad52a8a7ab0bc25e2c334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6c555f9736249ab2b19154742776fc09029b1e9084cf5e19e8a4f4df63ab3b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c555f9736249ab2b19154742776fc09029b1e9084cf5e19e8a4f4df63ab3b89->enter($__internal_6c555f9736249ab2b19154742776fc09029b1e9084cf5e19e8a4f4df63ab3b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8584cedf305070419a00c3363063365e8c5ff50caaad52a8a7ab0bc25e2c334a->leave($__internal_8584cedf305070419a00c3363063365e8c5ff50caaad52a8a7ab0bc25e2c334a_prof);

        
        $__internal_6c555f9736249ab2b19154742776fc09029b1e9084cf5e19e8a4f4df63ab3b89->leave($__internal_6c555f9736249ab2b19154742776fc09029b1e9084cf5e19e8a4f4df63ab3b89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
