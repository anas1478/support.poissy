<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_fa3d7c8cc22336a9e628bbfec13e54cb71bc7b4c740e548b78307e36e59384e3 extends Twig_Template
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
        $__internal_f137c56cd484977a48324cf9e74cabe46ce3a3de6030c79e2c0fda6b6cc1b534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f137c56cd484977a48324cf9e74cabe46ce3a3de6030c79e2c0fda6b6cc1b534->enter($__internal_f137c56cd484977a48324cf9e74cabe46ce3a3de6030c79e2c0fda6b6cc1b534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cf2c62f067be08b0c128cc88bc37dc12cb0a69e9ee3add6960206f626b023b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2c62f067be08b0c128cc88bc37dc12cb0a69e9ee3add6960206f626b023b15->enter($__internal_cf2c62f067be08b0c128cc88bc37dc12cb0a69e9ee3add6960206f626b023b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f137c56cd484977a48324cf9e74cabe46ce3a3de6030c79e2c0fda6b6cc1b534->leave($__internal_f137c56cd484977a48324cf9e74cabe46ce3a3de6030c79e2c0fda6b6cc1b534_prof);

        
        $__internal_cf2c62f067be08b0c128cc88bc37dc12cb0a69e9ee3add6960206f626b023b15->leave($__internal_cf2c62f067be08b0c128cc88bc37dc12cb0a69e9ee3add6960206f626b023b15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
