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

/* article/unArticle.html.twig */
class __TwigTemplate_19bf9b4d35e0f985fc71a282cce6f8f6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/unArticle.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/unArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " page article ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_modifier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Modifier</a>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_supprimer", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">Supprimer</a>

    <div class=\"justify-content-center text-center mt-5\">


        <img class=\"img-fluid\" width=\"50%\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imagesArticle/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <h2> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), "html", null, true);
        echo " </h2>
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "auteur", [], "any", false, false, false, 15)) {
            // line 16
            echo "            <h4>écrit par: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "auteur", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo " </h4>
        ";
        } else {
            // line 18
            echo "            <h6 class=\"text-muted\">auteur anonyme</h6>
        ";
        }
        // line 20
        echo "        <h6 class=\"text-muted\"> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "dateDeCreation", [], "any", false, false, false, 20), "d/m/Y à H\\hi"), "html", null, true);
        echo " </h6>

        ";
        // line 22
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "dateDeModification", [], "any", false, false, false, 22))) {
            // line 23
            echo "        <h6 class=\"text-muted\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "dateDeModification", [], "any", false, false, false, 23), "d/m/Y à H\\hi"), "html", null, true);
            echo " </h6>
        ";
        }
        // line 25
        echo "        <p> ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "contenu", [], "any", false, false, false, 25);
        echo "</p>
    </div>

    <hr>
    <div>
        <h3>commentaires</h3>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCommentaire"]) || array_key_exists("formCommentaire", $context) ? $context["formCommentaire"] : (function () { throw new RuntimeError('Variable "formCommentaire" does not exist.', 31, $this->source); })()), 'form');
        echo "
    </div>

    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 35
            echo "        <div class=\"border border-primary rounded container mb-2\">
            <h6 class=\"text-muted\">écrit par : toto</h6>
            <h6 class=\"text-muted\">le : ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateDeCreation", [], "any", false, false, false, 37), "d-m-Y à H\\hi"), "html", null, true);
            echo "</h6>
            <p>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 38);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/unArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  154 => 38,  150 => 37,  146 => 35,  142 => 34,  136 => 31,  126 => 25,  120 => 23,  118 => 22,  112 => 20,  108 => 18,  102 => 16,  100 => 15,  96 => 14,  90 => 13,  82 => 8,  78 => 7,  75 => 6,  68 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %} page article {{ article.id }} {% endblock %}

{% block content %}

    <a href=\"{{ path('app_article_modifier', {id: article.id}) }}\">Modifier</a>
    <a href=\"{{ path('app_article_supprimer', {id: article.id}) }}\">Supprimer</a>

    <div class=\"justify-content-center text-center mt-5\">


        <img class=\"img-fluid\" width=\"50%\" src=\"{{ asset('imagesArticle/' ~ article.image) }}\" alt=\"{{ article.titre }}\">
        <h2> {{ article.titre }} </h2>
        {% if article.auteur %}
            <h4>écrit par: {{ article.auteur.fullName }} </h4>
        {% else %}
            <h6 class=\"text-muted\">auteur anonyme</h6>
        {% endif %}
        <h6 class=\"text-muted\"> {{ article.dateDeCreation | date(\"d/m/Y \\à H\\\\hi\") }} </h6>

        {% if article.dateDeModification is not null %}
        <h6 class=\"text-muted\"> {{ article.dateDeModification | date(\"d/m/Y \\à H\\\\hi\") }} </h6>
        {% endif %}
        <p> {{ article.contenu | raw }}</p>
    </div>

    <hr>
    <div>
        <h3>commentaires</h3>
        {{ form(formCommentaire) }}
    </div>

    {% for commentaire in commentaires  %}
        <div class=\"border border-primary rounded container mb-2\">
            <h6 class=\"text-muted\">écrit par : toto</h6>
            <h6 class=\"text-muted\">le : {{ commentaire.dateDeCreation | date(\"d-m-Y \\à H\\\\hi\") }}</h6>
            <p>{{ commentaire.contenu | raw }}</p>
        </div>
    {% endfor %}

{% endblock %}", "article/unArticle.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\article\\unArticle.html.twig");
    }
}
