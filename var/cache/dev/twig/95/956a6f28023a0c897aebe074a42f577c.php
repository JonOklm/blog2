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

/* auteur/lesAuteurs.html.twig */
class __TwigTemplate_228b69375505ec96756ee7f0a2fa1171 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/lesAuteurs.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "auteur/lesAuteurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "liste auteurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Liste des Auteurs</h1>

<table class=\"table text-center\">
    <thead class=\"thead-dark\">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "nom", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "prenom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_auteur_update", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\"> <i class=\"fas fa-edit mx-1 text-center text-success\" title=\"editer\"></i></a>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_auteur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer l\\auteur ?')\"><i class=\"fas fa-trash mx-1 text-center text-danger\" title=\"supprimer\"></i></a>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_auteur", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\"> <i class=\"fas fa-eye mx-1 text-center\" title=\"voir\"></i></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "auteur/lesAuteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  111 => 25,  107 => 24,  103 => 23,  98 => 21,  94 => 20,  91 => 19,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}liste auteurs{% endblock %}

{% block content %}
<h1>Liste des Auteurs</h1>

<table class=\"table text-center\">
    <thead class=\"thead-dark\">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        {% for auteur in auteurs %}
        <tr>
            <td>{{ auteur.nom }}</td>
            <td>{{ auteur.prenom }}</td>
            <td>
                <a href=\"{{ path('app_auteur_update', {id: auteur.id}) }}\"> <i class=\"fas fa-edit mx-1 text-center text-success\" title=\"editer\"></i></a>
                <a href=\"{{ path('app_auteur_delete', {id: auteur.id}) }}\" onClick=\"return confirm('êtes vous sûr de vouloir supprimer l\\auteur ?')\"><i class=\"fas fa-trash mx-1 text-center text-danger\" title=\"supprimer\"></i></a>
                <a href=\"{{ path(\"app_auteur\", {id: auteur.id} ) }}\"> <i class=\"fas fa-eye mx-1 text-center\" title=\"voir\"></i></a>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>

{% endblock %}", "auteur/lesAuteurs.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\auteur\\lesAuteurs.html.twig");
    }
}
