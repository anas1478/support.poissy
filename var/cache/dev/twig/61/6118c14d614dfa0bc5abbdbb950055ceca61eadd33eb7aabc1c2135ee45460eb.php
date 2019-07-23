<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e98e8cb73dd82c47c6c5996d100024f5d28202b510ae38d0427323e4cb9dbb13 extends Twig_Template
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
        $__internal_ec110e23a25320c68f172875ef1afc2804db5e6849e1d802ac46fbb494114559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec110e23a25320c68f172875ef1afc2804db5e6849e1d802ac46fbb494114559->enter($__internal_ec110e23a25320c68f172875ef1afc2804db5e6849e1d802ac46fbb494114559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3223c19396f66dd47025e171ce91de114dec99d28193de9b27d0e172f9f432be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3223c19396f66dd47025e171ce91de114dec99d28193de9b27d0e172f9f432be->enter($__internal_3223c19396f66dd47025e171ce91de114dec99d28193de9b27d0e172f9f432be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ec110e23a25320c68f172875ef1afc2804db5e6849e1d802ac46fbb494114559->leave($__internal_ec110e23a25320c68f172875ef1afc2804db5e6849e1d802ac46fbb494114559_prof);

        
        $__internal_3223c19396f66dd47025e171ce91de114dec99d28193de9b27d0e172f9f432be->leave($__internal_3223c19396f66dd47025e171ce91de114dec99d28193de9b27d0e172f9f432be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
