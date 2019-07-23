<?php

/* MAPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_461b2a61b2dcc699b74ae987761c92f7fbf52cd7f25abc6cf9e80ae8e781decf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MAPlatformBundle::layout.html.twig", "MAPlatformBundle:Advert:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maplatform_body' => array($this, 'block_maplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MAPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ddd78b63a078cae61476dd7984d0745b80f233ac22e7d6aa50c378a8c737a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ddd78b63a078cae61476dd7984d0745b80f233ac22e7d6aa50c378a8c737a53->enter($__internal_2ddd78b63a078cae61476dd7984d0745b80f233ac22e7d6aa50c378a8c737a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:edit.html.twig"));

        $__internal_5b27c7f65d15367812238cd5f3e5ac55cb58f71e554723a08936cd2227c6ebe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b27c7f65d15367812238cd5f3e5ac55cb58f71e554723a08936cd2227c6ebe1->enter($__internal_5b27c7f65d15367812238cd5f3e5ac55cb58f71e554723a08936cd2227c6ebe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ddd78b63a078cae61476dd7984d0745b80f233ac22e7d6aa50c378a8c737a53->leave($__internal_2ddd78b63a078cae61476dd7984d0745b80f233ac22e7d6aa50c378a8c737a53_prof);

        
        $__internal_5b27c7f65d15367812238cd5f3e5ac55cb58f71e554723a08936cd2227c6ebe1->leave($__internal_5b27c7f65d15367812238cd5f3e5ac55cb58f71e554723a08936cd2227c6ebe1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_210ef3d95f7cba3fdb1c20fd063f217f1698cea73ce1843bede690523070f3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210ef3d95f7cba3fdb1c20fd063f217f1698cea73ce1843bede690523070f3b4->enter($__internal_210ef3d95f7cba3fdb1c20fd063f217f1698cea73ce1843bede690523070f3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4df6e3f1e008a5cd6e4211e8d8d8bd1458194fe59c10f0c920f3d31f0da7b580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df6e3f1e008a5cd6e4211e8d8d8bd1458194fe59c10f0c920f3d31f0da7b580->enter($__internal_4df6e3f1e008a5cd6e4211e8d8d8bd1458194fe59c10f0c920f3d31f0da7b580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4df6e3f1e008a5cd6e4211e8d8d8bd1458194fe59c10f0c920f3d31f0da7b580->leave($__internal_4df6e3f1e008a5cd6e4211e8d8d8bd1458194fe59c10f0c920f3d31f0da7b580_prof);

        
        $__internal_210ef3d95f7cba3fdb1c20fd063f217f1698cea73ce1843bede690523070f3b4->leave($__internal_210ef3d95f7cba3fdb1c20fd063f217f1698cea73ce1843bede690523070f3b4_prof);

    }

    // line 7
    public function block_maplatform_body($context, array $blocks = array())
    {
        $__internal_a2a232f94b285d97a148a610e9018764826739f1d607e2717d05dde678caef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a232f94b285d97a148a610e9018764826739f1d607e2717d05dde678caef15->enter($__internal_a2a232f94b285d97a148a610e9018764826739f1d607e2717d05dde678caef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        $__internal_3c27db586b124b489095de998d0cf432730a83dc01025b9113568150a452ae6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c27db586b124b489095de998d0cf432730a83dc01025b9113568150a452ae6d->enter($__internal_3c27db586b124b489095de998d0cf432730a83dc01025b9113568150a452ae6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        // line 8
        echo "    <h2>Modifier une annonce</h2>
    ";
        // line 9
        echo twig_include($this->env, $context, "MAPlatformBundle:Advert:form.html.twig");
        echo "
    <p>
        Ici a lieu la modification d'une annonce existante
    </p>
    <p>
        <a class=\"btn btn-danger\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" ><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour à la liste des annonces </a>
    <p>
";
        
        $__internal_3c27db586b124b489095de998d0cf432730a83dc01025b9113568150a452ae6d->leave($__internal_3c27db586b124b489095de998d0cf432730a83dc01025b9113568150a452ae6d_prof);

        
        $__internal_a2a232f94b285d97a148a610e9018764826739f1d607e2717d05dde678caef15->leave($__internal_a2a232f94b285d97a148a610e9018764826739f1d607e2717d05dde678caef15_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  75 => 9,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block title %}
    Modifier une annonce - {{parent()}}
{% endblock %}

{% block maplatform_body %}
    <h2>Modifier une annonce</h2>
    {{ include(\"MAPlatformBundle:Advert:form.html.twig\" )}}
    <p>
        Ici a lieu la modification d'une annonce existante
    </p>
    <p>
        <a class=\"btn btn-danger\" href=\"{{ path('ma_platform_view', {'id': advert.id})}}\" ><i class=\"glyphicon glyphicon-chevron-left\"></i>Retour à la liste des annonces </a>
    <p>
{% endblock %}", "MAPlatformBundle:Advert:edit.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
