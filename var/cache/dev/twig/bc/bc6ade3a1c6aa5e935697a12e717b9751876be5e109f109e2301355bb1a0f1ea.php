<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8320396771d8fb1eec3cc522447e22899a2cb88c63e6d14591fdb45f80a6988b extends Twig_Template
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
        $__internal_7018ebd1108fe5b4f1cedbb33562bfc039a602ae9f16703cdb7d5ee3c623ff5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7018ebd1108fe5b4f1cedbb33562bfc039a602ae9f16703cdb7d5ee3c623ff5f->enter($__internal_7018ebd1108fe5b4f1cedbb33562bfc039a602ae9f16703cdb7d5ee3c623ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_659b274078684e42d3fd447e46edc2ce251167f979525dcee3848c10a4d39bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659b274078684e42d3fd447e46edc2ce251167f979525dcee3848c10a4d39bad->enter($__internal_659b274078684e42d3fd447e46edc2ce251167f979525dcee3848c10a4d39bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7018ebd1108fe5b4f1cedbb33562bfc039a602ae9f16703cdb7d5ee3c623ff5f->leave($__internal_7018ebd1108fe5b4f1cedbb33562bfc039a602ae9f16703cdb7d5ee3c623ff5f_prof);

        
        $__internal_659b274078684e42d3fd447e46edc2ce251167f979525dcee3848c10a4d39bad->leave($__internal_659b274078684e42d3fd447e46edc2ce251167f979525dcee3848c10a4d39bad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
