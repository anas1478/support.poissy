<?php

/* ::base.html.twig */
class __TwigTemplate_4b9a69e26ba95ca49b39bf02785da23c231fc67f16793ab4c96878af82083a0c extends Twig_Template
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
        $__internal_205f46d5700fc84c6befee6b52e9e7eed09aba9a0f0fbe438257050425b4cc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205f46d5700fc84c6befee6b52e9e7eed09aba9a0f0fbe438257050425b4cc9d->enter($__internal_205f46d5700fc84c6befee6b52e9e7eed09aba9a0f0fbe438257050425b4cc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1dc69509a617bca7b6e1f41236e6118081142f1bc1695cbd4f98f6f815307c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc69509a617bca7b6e1f41236e6118081142f1bc1695cbd4f98f6f815307c76->enter($__internal_1dc69509a617bca7b6e1f41236e6118081142f1bc1695cbd4f98f6f815307c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_205f46d5700fc84c6befee6b52e9e7eed09aba9a0f0fbe438257050425b4cc9d->leave($__internal_205f46d5700fc84c6befee6b52e9e7eed09aba9a0f0fbe438257050425b4cc9d_prof);

        
        $__internal_1dc69509a617bca7b6e1f41236e6118081142f1bc1695cbd4f98f6f815307c76->leave($__internal_1dc69509a617bca7b6e1f41236e6118081142f1bc1695cbd4f98f6f815307c76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdac91048ed86f9a6db2a8b703f651482bda6ed757495692236b72b8122c35c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdac91048ed86f9a6db2a8b703f651482bda6ed757495692236b72b8122c35c6->enter($__internal_cdac91048ed86f9a6db2a8b703f651482bda6ed757495692236b72b8122c35c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28a1ec19b3d3454903502f4f5a9fc66ca5dea09c1efc147e60690e01aff9c93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a1ec19b3d3454903502f4f5a9fc66ca5dea09c1efc147e60690e01aff9c93a->enter($__internal_28a1ec19b3d3454903502f4f5a9fc66ca5dea09c1efc147e60690e01aff9c93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28a1ec19b3d3454903502f4f5a9fc66ca5dea09c1efc147e60690e01aff9c93a->leave($__internal_28a1ec19b3d3454903502f4f5a9fc66ca5dea09c1efc147e60690e01aff9c93a_prof);

        
        $__internal_cdac91048ed86f9a6db2a8b703f651482bda6ed757495692236b72b8122c35c6->leave($__internal_cdac91048ed86f9a6db2a8b703f651482bda6ed757495692236b72b8122c35c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5f0d894f48fa19c55a48dc3d1ed949fd98a1ae3a948b6cf3d1075be4768a2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f0d894f48fa19c55a48dc3d1ed949fd98a1ae3a948b6cf3d1075be4768a2e8->enter($__internal_a5f0d894f48fa19c55a48dc3d1ed949fd98a1ae3a948b6cf3d1075be4768a2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00ce861459228c890cecd7de229958e119d3d947b9c4cfa43056fa7ccdade51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ce861459228c890cecd7de229958e119d3d947b9c4cfa43056fa7ccdade51b->enter($__internal_00ce861459228c890cecd7de229958e119d3d947b9c4cfa43056fa7ccdade51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00ce861459228c890cecd7de229958e119d3d947b9c4cfa43056fa7ccdade51b->leave($__internal_00ce861459228c890cecd7de229958e119d3d947b9c4cfa43056fa7ccdade51b_prof);

        
        $__internal_a5f0d894f48fa19c55a48dc3d1ed949fd98a1ae3a948b6cf3d1075be4768a2e8->leave($__internal_a5f0d894f48fa19c55a48dc3d1ed949fd98a1ae3a948b6cf3d1075be4768a2e8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b09f284a2c794b668eaf096cb25d6edfdbb2580e47dcd2258956aa3072a50aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09f284a2c794b668eaf096cb25d6edfdbb2580e47dcd2258956aa3072a50aab->enter($__internal_b09f284a2c794b668eaf096cb25d6edfdbb2580e47dcd2258956aa3072a50aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_749b299025130e528584013977b34ba40272c271323cbf895e4d99e6fefafc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749b299025130e528584013977b34ba40272c271323cbf895e4d99e6fefafc1b->enter($__internal_749b299025130e528584013977b34ba40272c271323cbf895e4d99e6fefafc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_749b299025130e528584013977b34ba40272c271323cbf895e4d99e6fefafc1b->leave($__internal_749b299025130e528584013977b34ba40272c271323cbf895e4d99e6fefafc1b_prof);

        
        $__internal_b09f284a2c794b668eaf096cb25d6edfdbb2580e47dcd2258956aa3072a50aab->leave($__internal_b09f284a2c794b668eaf096cb25d6edfdbb2580e47dcd2258956aa3072a50aab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e59c50b66182a6fefeeb9c0a5502c8570f8eca6d8322bf082c2fbd37b0c45ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59c50b66182a6fefeeb9c0a5502c8570f8eca6d8322bf082c2fbd37b0c45ebd->enter($__internal_e59c50b66182a6fefeeb9c0a5502c8570f8eca6d8322bf082c2fbd37b0c45ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ba78a17f56dcda885afd9855c3178d7f105de6cd971e43184e8db77b073af10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba78a17f56dcda885afd9855c3178d7f105de6cd971e43184e8db77b073af10->enter($__internal_3ba78a17f56dcda885afd9855c3178d7f105de6cd971e43184e8db77b073af10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ba78a17f56dcda885afd9855c3178d7f105de6cd971e43184e8db77b073af10->leave($__internal_3ba78a17f56dcda885afd9855c3178d7f105de6cd971e43184e8db77b073af10_prof);

        
        $__internal_e59c50b66182a6fefeeb9c0a5502c8570f8eca6d8322bf082c2fbd37b0c45ebd->leave($__internal_e59c50b66182a6fefeeb9c0a5502c8570f8eca6d8322bf082c2fbd37b0c45ebd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
