<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_62d042373917fb48f50644c4a18071434ee6ba092124401629f87e688a7b2821 extends Twig_Template
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
        $__internal_034c991181ddd381c24f6a1344b73e134e7199a745bca2155553dc507e054115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034c991181ddd381c24f6a1344b73e134e7199a745bca2155553dc507e054115->enter($__internal_034c991181ddd381c24f6a1344b73e134e7199a745bca2155553dc507e054115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_898ec7b349c0e5d1726713a6c7ac6793ceaaa7f8365442783daa7e8322387d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898ec7b349c0e5d1726713a6c7ac6793ceaaa7f8365442783daa7e8322387d01->enter($__internal_898ec7b349c0e5d1726713a6c7ac6793ceaaa7f8365442783daa7e8322387d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_034c991181ddd381c24f6a1344b73e134e7199a745bca2155553dc507e054115->leave($__internal_034c991181ddd381c24f6a1344b73e134e7199a745bca2155553dc507e054115_prof);

        
        $__internal_898ec7b349c0e5d1726713a6c7ac6793ceaaa7f8365442783daa7e8322387d01->leave($__internal_898ec7b349c0e5d1726713a6c7ac6793ceaaa7f8365442783daa7e8322387d01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
