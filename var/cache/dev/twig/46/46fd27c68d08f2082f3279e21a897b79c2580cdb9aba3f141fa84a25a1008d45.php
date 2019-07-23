<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3d5ea67613f9efd2889eb7900b0c5179125f439cbc69379b55234e3da1585beb extends Twig_Template
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
        $__internal_3362fb759fefacd6616cf19f04123b8f0eb9a405c64df0a670429145b61f11eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3362fb759fefacd6616cf19f04123b8f0eb9a405c64df0a670429145b61f11eb->enter($__internal_3362fb759fefacd6616cf19f04123b8f0eb9a405c64df0a670429145b61f11eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_14a24c252e85ed78a7714f9ce510d9ba01fb20edff8964afba5796f0d295ec73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a24c252e85ed78a7714f9ce510d9ba01fb20edff8964afba5796f0d295ec73->enter($__internal_14a24c252e85ed78a7714f9ce510d9ba01fb20edff8964afba5796f0d295ec73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3362fb759fefacd6616cf19f04123b8f0eb9a405c64df0a670429145b61f11eb->leave($__internal_3362fb759fefacd6616cf19f04123b8f0eb9a405c64df0a670429145b61f11eb_prof);

        
        $__internal_14a24c252e85ed78a7714f9ce510d9ba01fb20edff8964afba5796f0d295ec73->leave($__internal_14a24c252e85ed78a7714f9ce510d9ba01fb20edff8964afba5796f0d295ec73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
