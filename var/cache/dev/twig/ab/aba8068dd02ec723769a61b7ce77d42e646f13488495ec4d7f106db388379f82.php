<?php

/* MAPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_5f226285b51c822248b6f2d22ad8ee4d781d0b2cebe885f9b41fa2399f9ca24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MAPlatformBundle::layout.html.twig", "MAPlatformBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1cf54d588a7630aa1387fd44957ff68380dabfc95c911383999dcc93ae0d25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cf54d588a7630aa1387fd44957ff68380dabfc95c911383999dcc93ae0d25b->enter($__internal_d1cf54d588a7630aa1387fd44957ff68380dabfc95c911383999dcc93ae0d25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:add.html.twig"));

        $__internal_34efb25296d56d5a2fd5aa7988110e2535f27cf2d56c2b2495b7e8401050c269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34efb25296d56d5a2fd5aa7988110e2535f27cf2d56c2b2495b7e8401050c269->enter($__internal_34efb25296d56d5a2fd5aa7988110e2535f27cf2d56c2b2495b7e8401050c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cf54d588a7630aa1387fd44957ff68380dabfc95c911383999dcc93ae0d25b->leave($__internal_d1cf54d588a7630aa1387fd44957ff68380dabfc95c911383999dcc93ae0d25b_prof);

        
        $__internal_34efb25296d56d5a2fd5aa7988110e2535f27cf2d56c2b2495b7e8401050c269->leave($__internal_34efb25296d56d5a2fd5aa7988110e2535f27cf2d56c2b2495b7e8401050c269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf3e424d9d97d01d04224ce601cab7d116b12c5423c26cfb050e0740739c39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf3e424d9d97d01d04224ce601cab7d116b12c5423c26cfb050e0740739c39e->enter($__internal_4cf3e424d9d97d01d04224ce601cab7d116b12c5423c26cfb050e0740739c39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bb7dfe9229ac6da02bb4dd9c50d710399796f268fefb9e9857d8afe02a63e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb7dfe9229ac6da02bb4dd9c50d710399796f268fefb9e9857d8afe02a63e31->enter($__internal_6bb7dfe9229ac6da02bb4dd9c50d710399796f268fefb9e9857d8afe02a63e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Ajouter une annonce</h2>

";
        // line 7
        echo twig_include($this->env, $context, "MAPlatformBundle:Advert:form.html.twig");
        echo "

<p>Attention cette annonce sera ajoute directement sur la page d'accueil apres validation du formulaire</p>
";
        
        $__internal_6bb7dfe9229ac6da02bb4dd9c50d710399796f268fefb9e9857d8afe02a63e31->leave($__internal_6bb7dfe9229ac6da02bb4dd9c50d710399796f268fefb9e9857d8afe02a63e31_prof);

        
        $__internal_4cf3e424d9d97d01d04224ce601cab7d116b12c5423c26cfb050e0740739c39e->leave($__internal_4cf3e424d9d97d01d04224ce601cab7d116b12c5423c26cfb050e0740739c39e_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MAPlatformBundle::layout.html.twig\" %}

{% block body %}

<h2>Ajouter une annonce</h2>

{{ include(\"MAPlatformBundle:Advert:form.html.twig\" )}}

<p>Attention cette annonce sera ajoute directement sur la page d'accueil apres validation du formulaire</p>
{% endblock %}", "MAPlatformBundle:Advert:add.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
