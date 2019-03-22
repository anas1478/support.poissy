<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_629a3d6505615b26d525ce92d52d1606fa5d7de11c97fe0dac6ce91c90717333 extends Twig_Template
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
        $__internal_f47e2c0caedaebac63638b62b38e964ad62c1bc85764cff483f4970545cdd465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47e2c0caedaebac63638b62b38e964ad62c1bc85764cff483f4970545cdd465->enter($__internal_f47e2c0caedaebac63638b62b38e964ad62c1bc85764cff483f4970545cdd465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_140676336a9f098d4dcf3eb0ac6af9131c60111c324a97222c63100d579f5471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140676336a9f098d4dcf3eb0ac6af9131c60111c324a97222c63100d579f5471->enter($__internal_140676336a9f098d4dcf3eb0ac6af9131c60111c324a97222c63100d579f5471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f47e2c0caedaebac63638b62b38e964ad62c1bc85764cff483f4970545cdd465->leave($__internal_f47e2c0caedaebac63638b62b38e964ad62c1bc85764cff483f4970545cdd465_prof);

        
        $__internal_140676336a9f098d4dcf3eb0ac6af9131c60111c324a97222c63100d579f5471->leave($__internal_140676336a9f098d4dcf3eb0ac6af9131c60111c324a97222c63100d579f5471_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
