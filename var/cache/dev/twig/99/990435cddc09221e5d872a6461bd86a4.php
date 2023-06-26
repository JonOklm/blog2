<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test.html.twig */
class __TwigTemplate_9d44353648fe6902ee821ad691ea88b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 6
        echo "    ";
        $context["prenom"] = "Hocine";
        // line 7
        echo "

    <h3>
        bonjour je suis ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["toto"]) || array_key_exists("toto", $context) ? $context["toto"] : (function () { throw new RuntimeError('Variable "toto" does not exist.', 10, $this->source); })()), "html", null, true);
        // line 11
        echo "    </h3>
    <h3>
        bonjour la personne c'est : ";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13)), "html", null, true);
        // line 14
        echo "    </h3>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
        ";
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            echo " 
            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nom", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "prenom", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  101 => 25,  97 => 24,  89 => 22,  80 => 14,  78 => 13,  74 => 11,  70 => 10,  65 => 7,  62 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    {# ceci est un commentaire. declaration d'une variable en twig #}
    {% set prenom = \"Hocine\" %}


    <h3>
        bonjour je suis {{ prenom }}  {{ toto }}{# on appel une variable entre double accolades #}
    </h3>
    <h3>
        bonjour la personne c'est : {{ personne.nom ~ ' ' ~ personne.prenom }}{# lorsque ma variable est un tableau on acceder à un element avec le point \".\"  , le tilde ~ est pour la concatenation #}
    </h3>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
        </tr>
        {# lorsque ma variable est un tableau multidimentionnel, je le parcours avec une boucle twig {% for row in array %}  row qui représente une ligne du tableau, sera remplacé par la variable de votre choix et array par le tableau qu'on veut parcourir #}
        {% for personne in personnes %} 
            <tr>
                <td>{{ personne.nom }}</td>
                <td>{{ personne.prenom }}</td>
            </tr>
        {% endfor %}

    </table>

{% endblock body %}", "test.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\test.html.twig");
    }
}
