<?php

/* base.html.twig */
class __TwigTemplate_6be1d8943b2d2347898cbd5598600092ea1295560966e509374ab5259a1194dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8acac9096af23aaceec75a59df2b9481b7ca178bd68265bf800b7ef2a393ef32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8acac9096af23aaceec75a59df2b9481b7ca178bd68265bf800b7ef2a393ef32->enter($__internal_8acac9096af23aaceec75a59df2b9481b7ca178bd68265bf800b7ef2a393ef32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7291b81c68c016d58c2ed44785d99f19eb60bf0e2787b03ec284070123e4165b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7291b81c68c016d58c2ed44785d99f19eb60bf0e2787b03ec284070123e4165b->enter($__internal_7291b81c68c016d58c2ed44785d99f19eb60bf0e2787b03ec284070123e4165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8acac9096af23aaceec75a59df2b9481b7ca178bd68265bf800b7ef2a393ef32->leave($__internal_8acac9096af23aaceec75a59df2b9481b7ca178bd68265bf800b7ef2a393ef32_prof);

        
        $__internal_7291b81c68c016d58c2ed44785d99f19eb60bf0e2787b03ec284070123e4165b->leave($__internal_7291b81c68c016d58c2ed44785d99f19eb60bf0e2787b03ec284070123e4165b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f33492fc79d59d23f7f8be18273a912d23ac7b781ce304fe46a4485628c2a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f33492fc79d59d23f7f8be18273a912d23ac7b781ce304fe46a4485628c2a78->enter($__internal_1f33492fc79d59d23f7f8be18273a912d23ac7b781ce304fe46a4485628c2a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b465f6dc16e6c307730805f1dfd0fb93b1fd218800964454b3c3f363358ce87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b465f6dc16e6c307730805f1dfd0fb93b1fd218800964454b3c3f363358ce87->enter($__internal_9b465f6dc16e6c307730805f1dfd0fb93b1fd218800964454b3c3f363358ce87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b465f6dc16e6c307730805f1dfd0fb93b1fd218800964454b3c3f363358ce87->leave($__internal_9b465f6dc16e6c307730805f1dfd0fb93b1fd218800964454b3c3f363358ce87_prof);

        
        $__internal_1f33492fc79d59d23f7f8be18273a912d23ac7b781ce304fe46a4485628c2a78->leave($__internal_1f33492fc79d59d23f7f8be18273a912d23ac7b781ce304fe46a4485628c2a78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e860b862286380ca1d2d19e3c1b2ecdc0854cd86478f5499401c468abdee5a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e860b862286380ca1d2d19e3c1b2ecdc0854cd86478f5499401c468abdee5a4a->enter($__internal_e860b862286380ca1d2d19e3c1b2ecdc0854cd86478f5499401c468abdee5a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a0e0b7262c49bb80c5794513d0a70fc352bc06b916c3975a60e1ec4bc7267cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e0b7262c49bb80c5794513d0a70fc352bc06b916c3975a60e1ec4bc7267cc6->enter($__internal_a0e0b7262c49bb80c5794513d0a70fc352bc06b916c3975a60e1ec4bc7267cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a0e0b7262c49bb80c5794513d0a70fc352bc06b916c3975a60e1ec4bc7267cc6->leave($__internal_a0e0b7262c49bb80c5794513d0a70fc352bc06b916c3975a60e1ec4bc7267cc6_prof);

        
        $__internal_e860b862286380ca1d2d19e3c1b2ecdc0854cd86478f5499401c468abdee5a4a->leave($__internal_e860b862286380ca1d2d19e3c1b2ecdc0854cd86478f5499401c468abdee5a4a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00c527ad8561ebcb89540e32d8569a6a7611739787d1b7cc66b40e9d25478b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00c527ad8561ebcb89540e32d8569a6a7611739787d1b7cc66b40e9d25478b3->enter($__internal_a00c527ad8561ebcb89540e32d8569a6a7611739787d1b7cc66b40e9d25478b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e73b60f8f2fe1494b8067f3670684dd356bdc6f0a8a650ee33e57f3a2da9072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e73b60f8f2fe1494b8067f3670684dd356bdc6f0a8a650ee33e57f3a2da9072->enter($__internal_5e73b60f8f2fe1494b8067f3670684dd356bdc6f0a8a650ee33e57f3a2da9072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e73b60f8f2fe1494b8067f3670684dd356bdc6f0a8a650ee33e57f3a2da9072->leave($__internal_5e73b60f8f2fe1494b8067f3670684dd356bdc6f0a8a650ee33e57f3a2da9072_prof);

        
        $__internal_a00c527ad8561ebcb89540e32d8569a6a7611739787d1b7cc66b40e9d25478b3->leave($__internal_a00c527ad8561ebcb89540e32d8569a6a7611739787d1b7cc66b40e9d25478b3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d3088be297636597f1876f773a21835689078213d54b20c17f271bb6ffd5890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3088be297636597f1876f773a21835689078213d54b20c17f271bb6ffd5890->enter($__internal_8d3088be297636597f1876f773a21835689078213d54b20c17f271bb6ffd5890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c2332ae6e54900e23c1beb19a0186ac491108507bf245d76771c488e53c35c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2332ae6e54900e23c1beb19a0186ac491108507bf245d76771c488e53c35c9->enter($__internal_3c2332ae6e54900e23c1beb19a0186ac491108507bf245d76771c488e53c35c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3c2332ae6e54900e23c1beb19a0186ac491108507bf245d76771c488e53c35c9->leave($__internal_3c2332ae6e54900e23c1beb19a0186ac491108507bf245d76771c488e53c35c9_prof);

        
        $__internal_8d3088be297636597f1876f773a21835689078213d54b20c17f271bb6ffd5890->leave($__internal_8d3088be297636597f1876f773a21835689078213d54b20c17f271bb6ffd5890_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
