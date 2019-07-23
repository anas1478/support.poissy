<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba9369e72640e9a3a67ea027850fa0c96af246f5eedc126415f0590f74e0c48c extends Twig_Template
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
        $__internal_714b67ce37c359b116cb9d4017c8ba90df28edd44e7d014e936753a37c04aae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714b67ce37c359b116cb9d4017c8ba90df28edd44e7d014e936753a37c04aae3->enter($__internal_714b67ce37c359b116cb9d4017c8ba90df28edd44e7d014e936753a37c04aae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5485ec126055c268ca1c4812de69a41b3c56d48a3fcd81f042e00de6a7f32f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5485ec126055c268ca1c4812de69a41b3c56d48a3fcd81f042e00de6a7f32f21->enter($__internal_5485ec126055c268ca1c4812de69a41b3c56d48a3fcd81f042e00de6a7f32f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_714b67ce37c359b116cb9d4017c8ba90df28edd44e7d014e936753a37c04aae3->leave($__internal_714b67ce37c359b116cb9d4017c8ba90df28edd44e7d014e936753a37c04aae3_prof);

        
        $__internal_5485ec126055c268ca1c4812de69a41b3c56d48a3fcd81f042e00de6a7f32f21->leave($__internal_5485ec126055c268ca1c4812de69a41b3c56d48a3fcd81f042e00de6a7f32f21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
