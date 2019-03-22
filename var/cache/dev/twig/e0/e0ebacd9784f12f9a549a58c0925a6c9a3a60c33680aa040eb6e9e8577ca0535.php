<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_05d7e63bd33fa2271dec4c5c6d40c4163c28fada89142fc3a8742013e3198c49 extends Twig_Template
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
        $__internal_c038a1cc5539208fcec482a79bfc756052be151aaf4cf6da8cec833675a20f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c038a1cc5539208fcec482a79bfc756052be151aaf4cf6da8cec833675a20f5c->enter($__internal_c038a1cc5539208fcec482a79bfc756052be151aaf4cf6da8cec833675a20f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f7daaa85457898be541f72e552837a1f4bdb153f6ce043c037daafedf3a46a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7daaa85457898be541f72e552837a1f4bdb153f6ce043c037daafedf3a46a51->enter($__internal_f7daaa85457898be541f72e552837a1f4bdb153f6ce043c037daafedf3a46a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c038a1cc5539208fcec482a79bfc756052be151aaf4cf6da8cec833675a20f5c->leave($__internal_c038a1cc5539208fcec482a79bfc756052be151aaf4cf6da8cec833675a20f5c_prof);

        
        $__internal_f7daaa85457898be541f72e552837a1f4bdb153f6ce043c037daafedf3a46a51->leave($__internal_f7daaa85457898be541f72e552837a1f4bdb153f6ce043c037daafedf3a46a51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
