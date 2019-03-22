<?php

/* MAPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_57b7f6e3ec37889e8daf3e06bd5b5488cfb3063ff395eba9bf0118b9c0263700 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:menu.html.twig"));

        // line 2
        echo "
<table class=\"table table-hover container\">
  <tbody>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 6
            echo "    <tr class=\"table-active\">
      <td><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ma_platform_view", ["id" => twig_get_attribute($this->env, $this->source, $context["advert"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "title", []), "html", null, true);
            echo "</a></td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </tbody>
</table> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MAPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  41 => 7,  38 => 6,  34 => 5,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"MAPlatformBundle::layout.html.twig\" %} #}

<table class=\"table table-hover container\">
  <tbody>
  {% for advert in listAdverts %}
    <tr class=\"table-active\">
      <td><a href=\"{{ path('ma_platform_view', {'id': advert.id}) }}\">{{advert.title}}</a></td>
    </tr>
  {% endfor %}
  </tbody>
</table> ", "MAPlatformBundle:Advert:menu.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
