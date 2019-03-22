<?php

/* MAPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_630118798e28f785b51063d97f48e9c2ae8acac391957ed5248ea17771b0290d extends Twig_Template
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
        $__internal_8ce367b8821f77085df760b9f26d008e631f594ac80d643bd688f9c3a84c640f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce367b8821f77085df760b9f26d008e631f594ac80d643bd688f9c3a84c640f->enter($__internal_8ce367b8821f77085df760b9f26d008e631f594ac80d643bd688f9c3a84c640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:index.html.twig"));

        $__internal_40aab09dd4e8ed50a71680f57b395361bc9337d5d55a5a00b7c3994678d83cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40aab09dd4e8ed50a71680f57b395361bc9337d5d55a5a00b7c3994678d83cbc->enter($__internal_40aab09dd4e8ed50a71680f57b395361bc9337d5d55a5a00b7c3994678d83cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAPlatformBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page </title>
  </head>
  <body>
    <h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, ($context["prenom"] ?? $this->getContext($context, "prenom")), "html", null, true);
        echo "!</h1>

    <p>
     L'histoire des petites annonces n'est pas dissociable de celle de la presse. Lorsque Théophraste Renaudot crée La Gazette en 1631 avec l'appui du cardinal de Richelieu, il organise dans ce premier journal français un bureau d'adresses et de renseignement. La petite annonce naît donc de deux mouvements conjoints : d'une part, la nécessité de financer le journal par des publicités et, d'autre part, la conscience naissante de la création d'une sphère publique. L'idée s'impose peu à peu que l'ensemble de ce qui deviendra la société des citoyens au siècle suivant doit avoir accès à l'information, et parallèlement il devient plus commun de penser que l'on peut faire se rencontrer les gens par le biais d'une publication. Aussi peut-on trouver dans les publications du xixe siècle un cocher, un valet ou une femme de chambre, mais aussi une calèche à partager pour tel ou tel voyage.

Le xxe siècle voit l'essor des petites annonces de rencontre, sous l'influence des personal ads américaines. Pour la France, si le Minitel puis Internet sont devenus le support privilégié de cette pratique, la petite annonce n'a pourtant pas quitté la presse écrite, comme le prouvent les colonnes du Chasseur français ou de Libération.
    </p>
  </body>
</html>
";
        
        $__internal_8ce367b8821f77085df760b9f26d008e631f594ac80d643bd688f9c3a84c640f->leave($__internal_8ce367b8821f77085df760b9f26d008e631f594ac80d643bd688f9c3a84c640f_prof);

        
        $__internal_40aab09dd4e8ed50a71680f57b395361bc9337d5d55a5a00b7c3994678d83cbc->leave($__internal_40aab09dd4e8ed50a71680f57b395361bc9337d5d55a5a00b7c3994678d83cbc_prof);

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
        return array (  33 => 7,  25 => 1,);
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
    <title>Bienvenue sur ma première page </title>
  </head>
  <body>
    <h1>Hello {{prenom}}!</h1>

    <p>
     L'histoire des petites annonces n'est pas dissociable de celle de la presse. Lorsque Théophraste Renaudot crée La Gazette en 1631 avec l'appui du cardinal de Richelieu, il organise dans ce premier journal français un bureau d'adresses et de renseignement. La petite annonce naît donc de deux mouvements conjoints : d'une part, la nécessité de financer le journal par des publicités et, d'autre part, la conscience naissante de la création d'une sphère publique. L'idée s'impose peu à peu que l'ensemble de ce qui deviendra la société des citoyens au siècle suivant doit avoir accès à l'information, et parallèlement il devient plus commun de penser que l'on peut faire se rencontrer les gens par le biais d'une publication. Aussi peut-on trouver dans les publications du xixe siècle un cocher, un valet ou une femme de chambre, mais aussi une calèche à partager pour tel ou tel voyage.

Le xxe siècle voit l'essor des petites annonces de rencontre, sous l'influence des personal ads américaines. Pour la France, si le Minitel puis Internet sont devenus le support privilégié de cette pratique, la petite annonce n'a pourtant pas quitté la presse écrite, comme le prouvent les colonnes du Chasseur français ou de Libération.
    </p>
  </body>
</html>
", "MAPlatformBundle:Advert:index.html.twig", "C:\\xampp\\htdocs\\Symfony\\src\\MA\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
