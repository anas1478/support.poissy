<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_35a10deb0cec2a1ef85298aaeb700c05cc32f46bec2dc6fec592419343b4b142 extends Twig_Template
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
        $__internal_6b9b3242c011455b7466bc67a17fcdfe422dc376872503379c9629db3d968141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9b3242c011455b7466bc67a17fcdfe422dc376872503379c9629db3d968141->enter($__internal_6b9b3242c011455b7466bc67a17fcdfe422dc376872503379c9629db3d968141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0495049f25c2eefd501f3f574ea20781d0b139c1b71e469c4e259d2c01488167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0495049f25c2eefd501f3f574ea20781d0b139c1b71e469c4e259d2c01488167->enter($__internal_0495049f25c2eefd501f3f574ea20781d0b139c1b71e469c4e259d2c01488167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6b9b3242c011455b7466bc67a17fcdfe422dc376872503379c9629db3d968141->leave($__internal_6b9b3242c011455b7466bc67a17fcdfe422dc376872503379c9629db3d968141_prof);

        
        $__internal_0495049f25c2eefd501f3f574ea20781d0b139c1b71e469c4e259d2c01488167->leave($__internal_0495049f25c2eefd501f3f574ea20781d0b139c1b71e469c4e259d2c01488167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
