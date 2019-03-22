<?php

/* MAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_d5943170d14bbb803bd79cb1b2e2525d43e25450e47ca7835b1dc06ab01af764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MAPlatformBundle::layout.html.twig", "MAPlatformBundle:Advert:index.html.twig", 1);
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
        $__internal_94bd0222136ce55ba6629d1d005500af823a5f68db993d0f4b90fea60f687801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bd0222136ce55ba6629d1d005500af823a5f68db993d0f4b90fea60f687801->enter($__internal_94bd0222136ce55ba6629d1d005500af823a5f68db993d0f4b90fea60f687801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:index.html.twig"));

        $__internal_eb8fe3dc5652b5fb9782ec40cbb13236640812504c2dc835c447372a5c493e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8fe3dc5652b5fb9782ec40cbb13236640812504c2dc835c447372a5c493e06->enter($__internal_eb8fe3dc5652b5fb9782ec40cbb13236640812504c2dc835c447372a5c493e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94bd0222136ce55ba6629d1d005500af823a5f68db993d0f4b90fea60f687801->leave($__internal_94bd0222136ce55ba6629d1d005500af823a5f68db993d0f4b90fea60f687801_prof);

        
        $__internal_eb8fe3dc5652b5fb9782ec40cbb13236640812504c2dc835c447372a5c493e06->leave($__internal_eb8fe3dc5652b5fb9782ec40cbb13236640812504c2dc835c447372a5c493e06_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_accd108a899589a0680156110321bbead0cfd342d62af7f1a8601df156bd05f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accd108a899589a0680156110321bbead0cfd342d62af7f1a8601df156bd05f9->enter($__internal_accd108a899589a0680156110321bbead0cfd342d62af7f1a8601df156bd05f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d049f5235683ca0032bddbc7ecd5a4a65d2f727b18eab044d7b065614ffc3dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d049f5235683ca0032bddbc7ecd5a4a65d2f727b18eab044d7b065614ffc3dc2->enter($__internal_d049f5235683ca0032bddbc7ecd5a4a65d2f727b18eab044d7b065614ffc3dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index ";
        
        $__internal_d049f5235683ca0032bddbc7ecd5a4a65d2f727b18eab044d7b065614ffc3dc2->leave($__internal_d049f5235683ca0032bddbc7ecd5a4a65d2f727b18eab044d7b065614ffc3dc2_prof);

        
        $__internal_accd108a899589a0680156110321bbead0cfd342d62af7f1a8601df156bd05f9->leave($__internal_accd108a899589a0680156110321bbead0cfd342d62af7f1a8601df156bd05f9_prof);

    }

    // line 3
    public function block_maplatform_body($context, array $blocks = array())
    {
        $__internal_7c2fecf9b53b147fa59a0d9ec463530a3aaa7a21bbc5349ae9860b4732282276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2fecf9b53b147fa59a0d9ec463530a3aaa7a21bbc5349ae9860b4732282276->enter($__internal_7c2fecf9b53b147fa59a0d9ec463530a3aaa7a21bbc5349ae9860b4732282276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        $__internal_10d4d2a5fcc003091af0f916d6947b4e31894705bf9dee5ffcb66fbec02ac2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d4d2a5fcc003091af0f916d6947b4e31894705bf9dee5ffcb66fbec02ac2ae->enter($__internal_10d4d2a5fcc003091af0f916d6947b4e31894705bf9dee5ffcb66fbec02ac2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maplatform_body"));

        // line 4
        echo "    <h4>Liste des annonces</h4>
    ";
        // line 6
        echo "    <ul>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "        <li>
          <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "</a>
          par ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "
          le ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
        </li>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "        <li>
          Pas encore d'annonce sorry!
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
    <br>
    
    <footer>Responsable du site : ";
        // line 22
        echo twig_escape_filter($this->env, ($context["webmaster"] ?? $this->getContext($context, "webmaster")), "html", null, true);
        echo "</footer>
  ";
        
        $__internal_10d4d2a5fcc003091af0f916d6947b4e31894705bf9dee5ffcb66fbec02ac2ae->leave($__internal_10d4d2a5fcc003091af0f916d6947b4e31894705bf9dee5ffcb66fbec02ac2ae_prof);

        
        $__internal_7c2fecf9b53b147fa59a0d9ec463530a3aaa7a21bbc5349ae9860b4732282276->leave($__internal_7c2fecf9b53b147fa59a0d9ec463530a3aaa7a21bbc5349ae9860b4732282276_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 22,  112 => 19,  103 => 15,  94 => 11,  90 => 10,  84 => 9,  81 => 8,  76 => 7,  73 => 6,  70 => 4,  61 => 3,  41 => 2,  11 => 1,);
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
  {% block title %} {{ parent() }} - Index {% endblock %}
  {% block maplatform_body %}
    <h4>Liste des annonces</h4>
    {# <p>Check this out : <a href=\"{{ path('ma_platform_view', {'id': num}) }}\">Lien vers lannonce d'id {{ num }}</a></p> #}
    <ul>
      {% for advert in listAdverts %}
        <li>
          <a href=\"{{ path('ma_platform_view', {'id': advert.id}) }}\">{{advert.title}}</a>
          par {{advert.author}}
          le {{advert.date | date('d/m/Y')}}
        </li>

        {% else %}
        <li>
          Pas encore d'annonce sorry!
        </li>
      {% endfor %}
    </ul>
    <br>
    
    <footer>Responsable du site : {{ webmaster }}</footer>
  {% endblock %}
", "MAPlatformBundle:Advert:index.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
