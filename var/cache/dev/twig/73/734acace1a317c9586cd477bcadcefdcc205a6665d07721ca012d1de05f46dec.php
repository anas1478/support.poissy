<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bb787138ae8e82a6020420a70c2e66fecf22ffcb230764f56b62bd463fba3f22 extends Twig_Template
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
        $__internal_d60a1cf3ef23694a1e74e4460378b28fc83a0869927d8df07c12e25e3d25e4a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60a1cf3ef23694a1e74e4460378b28fc83a0869927d8df07c12e25e3d25e4a2->enter($__internal_d60a1cf3ef23694a1e74e4460378b28fc83a0869927d8df07c12e25e3d25e4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_046ed7d3f41885dabeb818eeaab7d5cc34124526e78ea9cc8a4f25fe7e96ea80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046ed7d3f41885dabeb818eeaab7d5cc34124526e78ea9cc8a4f25fe7e96ea80->enter($__internal_046ed7d3f41885dabeb818eeaab7d5cc34124526e78ea9cc8a4f25fe7e96ea80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d60a1cf3ef23694a1e74e4460378b28fc83a0869927d8df07c12e25e3d25e4a2->leave($__internal_d60a1cf3ef23694a1e74e4460378b28fc83a0869927d8df07c12e25e3d25e4a2_prof);

        
        $__internal_046ed7d3f41885dabeb818eeaab7d5cc34124526e78ea9cc8a4f25fe7e96ea80->leave($__internal_046ed7d3f41885dabeb818eeaab7d5cc34124526e78ea9cc8a4f25fe7e96ea80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
