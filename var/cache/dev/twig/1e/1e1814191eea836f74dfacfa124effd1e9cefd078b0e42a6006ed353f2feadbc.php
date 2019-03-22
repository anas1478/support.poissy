<?php

/* MAPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_06ad6c331723adc3d858d2086d6b2879a31253e23072c4173a0de99a103735b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MAPlatformBundle::layout.html.twig", "MAPlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_1609d68de1b3ec8981876dfaaedbeeedc07ca9df6038ff36cd010351d05c97af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1609d68de1b3ec8981876dfaaedbeeedc07ca9df6038ff36cd010351d05c97af->enter($__internal_1609d68de1b3ec8981876dfaaedbeeedc07ca9df6038ff36cd010351d05c97af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:view.html.twig"));

        $__internal_fc8e1d5808f77e11b0a8dd2e2001e10fd413bbe32beffdb78cdb28b039ccaee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8e1d5808f77e11b0a8dd2e2001e10fd413bbe32beffdb78cdb28b039ccaee7->enter($__internal_fc8e1d5808f77e11b0a8dd2e2001e10fd413bbe32beffdb78cdb28b039ccaee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1609d68de1b3ec8981876dfaaedbeeedc07ca9df6038ff36cd010351d05c97af->leave($__internal_1609d68de1b3ec8981876dfaaedbeeedc07ca9df6038ff36cd010351d05c97af_prof);

        
        $__internal_fc8e1d5808f77e11b0a8dd2e2001e10fd413bbe32beffdb78cdb28b039ccaee7->leave($__internal_fc8e1d5808f77e11b0a8dd2e2001e10fd413bbe32beffdb78cdb28b039ccaee7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28f29c3c9bc9a84c76df3e4b6b28a34fa2f60380a4bdbb70c2c3a850d9cd0a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f29c3c9bc9a84c76df3e4b6b28a34fa2f60380a4bdbb70c2c3a850d9cd0a38->enter($__internal_28f29c3c9bc9a84c76df3e4b6b28a34fa2f60380a4bdbb70c2c3a850d9cd0a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c7cada2961521bbb9823542c3beb670b349f3d636a31bc1732787f50f8bf53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7cada2961521bbb9823542c3beb670b349f3d636a31bc1732787f50f8bf53c->enter($__internal_8c7cada2961521bbb9823542c3beb670b349f3d636a31bc1732787f50f8bf53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Vue de mon annonce ";
        
        $__internal_8c7cada2961521bbb9823542c3beb670b349f3d636a31bc1732787f50f8bf53c->leave($__internal_8c7cada2961521bbb9823542c3beb670b349f3d636a31bc1732787f50f8bf53c_prof);

        
        $__internal_28f29c3c9bc9a84c76df3e4b6b28a34fa2f60380a4bdbb70c2c3a850d9cd0a38->leave($__internal_28f29c3c9bc9a84c76df3e4b6b28a34fa2f60380a4bdbb70c2c3a850d9cd0a38_prof);

    }

    // line 5
    public function block_maplatform_body($context, array $blocks = array())
    {
        $__internal_c2390dda7cda0521e3dcdd485c913ad53e5c3dc85f7bb552699f2cc454ed2edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2390dda7cda0521e3dcdd485c913ad53e5c3dc85f7bb552699f2cc454ed2edd->enter($__internal_c2390dda7cda0521e3dcdd485c913ad53e5c3dc85f7bb552699f2cc454ed2edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        $__internal_98873d6901e87385816dbf8761d33d274429bb98904e9dfe9b6a587b260c84e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98873d6901e87385816dbf8761d33d274429bb98904e9dfe9b6a587b260c84e7->enter($__internal_98873d6901e87385816dbf8761d33d274429bb98904e9dfe9b6a587b260c84e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        // line 6
        echo "
<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
<i>Par ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

<div class=\"well\">
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
</div>

<br>
<br>

<a class=\"btn btn-danger\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_home");
        echo "\" ><i class=\"fa fa-arrow-left\"></i> Retour à la liste des annonces </a>

<a class=\"btn btn-outline-primary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" ><i class=\"fa fa-edit\"></i> Modifier l'annonce </a>

<a class=\"btn btn-outline-danger\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" ><i class=\"fa fa-times\"></i> Supprimer l'annonce </a>

";
        
        $__internal_98873d6901e87385816dbf8761d33d274429bb98904e9dfe9b6a587b260c84e7->leave($__internal_98873d6901e87385816dbf8761d33d274429bb98904e9dfe9b6a587b260c84e7_prof);

        
        $__internal_c2390dda7cda0521e3dcdd485c913ad53e5c3dc85f7bb552699f2cc454ed2edd->leave($__internal_c2390dda7cda0521e3dcdd485c913ad53e5c3dc85f7bb552699f2cc454ed2edd_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  99 => 19,  94 => 17,  85 => 11,  77 => 8,  73 => 7,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
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

{% block title %} {{ parent() }} - Vue de mon annonce {% endblock %}

{% block maplatform_body %}

<h2>{{advert.title}}</h2>
<i>Par {{advert.author}}, le {{advert.date | date('d/m/Y')}}</i>

<div class=\"well\">
    {{advert.content}}
</div>

<br>
<br>

<a class=\"btn btn-danger\" href=\"{{ path('ma_platform_home')}}\" ><i class=\"fa fa-arrow-left\"></i> Retour à la liste des annonces </a>

<a class=\"btn btn-outline-primary\" href=\"{{ path('ma_platform_edit', {'id': advert.id})}}\" ><i class=\"fa fa-edit\"></i> Modifier l'annonce </a>

<a class=\"btn btn-outline-danger\" href=\"{{ path('ma_platform_delete', {'id': advert.id})}}\" ><i class=\"fa fa-times\"></i> Supprimer l'annonce </a>

{% endblock %}", "MAPlatformBundle:Advert:view.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
