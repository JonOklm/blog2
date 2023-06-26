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

/* article/lesArticles.html.twig */
class __TwigTemplate_9087b8bf77c798e11f1c478ffee536a6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/lesArticles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/lesArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " les articles ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Les articles:</h1>

    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
        echo "\">Tous les Articles</a>
        </li>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo "    
            <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_article", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul> 

    <div class=\"row d-flex justify-content-center text-center\">

        ";
        // line 21
        if (twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "            <div class=\"alert alert-danger\">
                <p>cette categorie n'a pas d'articles pour le moment ! 
            </div>
        ";
        } else {
            // line 26
            echo "            

            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 28, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 29
                echo "                <div class=\"card m-1\" style=\"width: 18rem;\">    
                    ";
                // line 30
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 30))) {
                    echo "    
                        <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("imagesArticle/" . twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 31))), "html", null, true);
                    echo "\" class=\"card-img-top\" alt=\"\">
                    ";
                }
                // line 33
                echo "                    <div class=\"card-body\">
                        <div>
                            <a href=\"\"><i class=\"fas fa-edit mx-1 text-success\"></i></a>
                            <a href=\"\">supprimer</a>
                        </div>
                        <h5 class=\"card-title\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 38), "html", null, true);
                echo "</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">crée le: ";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeCreation", [], "any", false, false, false, 39), "d/m/Y à H\\hi"), "html", null, true);
                echo "</h6>
                        ";
                // line 40
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["article"], "dateDeModification", [], "any", false, false, false, 40))) {
                    // line 41
                    echo "                            <h6 class=\"card-subtitle mb-2 text-muted\">modifié le:";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeModification", [], "any", false, false, false, 41), "d/m/Y à H\\hi"), "html", null, true);
                    echo "</h6>
                        ";
                }
                // line 43
                echo "
                        ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                            <h4>écrit par: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "auteur", [], "any", false, false, false, 45), "fullName", [], "any", false, false, false, 45), "html", null, true);
                    echo " </h4>
                        ";
                } else {
                    // line 47
                    echo "                            <h6 class=\"text-muted\">auteur anonyme</h6>
                        ";
                }
                // line 49
                echo "
                        <p class=\"card-text\">";
                // line 50
                echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 50), 0, 100);
                echo "...</p>
                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fiche_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-primary card-link\">lire l'article</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
        ";
        }
        // line 57
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/lesArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 57,  193 => 55,  183 => 51,  179 => 50,  176 => 49,  172 => 47,  166 => 45,  164 => 44,  161 => 43,  155 => 41,  153 => 40,  149 => 39,  145 => 38,  138 => 33,  133 => 31,  129 => 30,  126 => 29,  122 => 28,  118 => 26,  112 => 22,  110 => 21,  104 => 17,  93 => 14,  86 => 12,  81 => 10,  75 => 6,  68 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %} {{ parent() }} les articles {% endblock %}

{% block content %}
    <h1>Les articles:</h1>

    <ul class=\"nav nav-tabs\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"{{ path(\"app_articles\") }}\">Tous les Articles</a>
        </li>
        {% for categorie in categories %}    
            <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"{{ path('app_categorie_article',{slug: categorie.slug}) }}\">{{ categorie.nom }}</a>
            </li>
        {% endfor %}
    </ul> 

    <div class=\"row d-flex justify-content-center text-center\">

        {% if articles is empty %}
            <div class=\"alert alert-danger\">
                <p>cette categorie n'a pas d'articles pour le moment ! 
            </div>
        {% else %}
            

            {% for article in articles | reverse %}
                <div class=\"card m-1\" style=\"width: 18rem;\">    
                    {% if article.image is not null %}    
                        <img src=\"{{ asset('imagesArticle/' ~ article.image) }}\" class=\"card-img-top\" alt=\"\">
                    {% endif %}
                    <div class=\"card-body\">
                        <div>
                            <a href=\"\"><i class=\"fas fa-edit mx-1 text-success\"></i></a>
                            <a href=\"\">supprimer</a>
                        </div>
                        <h5 class=\"card-title\">{{ article.titre }}</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">crée le: {{ article.dateDeCreation | date(\"d/m/Y \\à H\\\\hi\")}}</h6>
                        {% if article.dateDeModification is not null %}
                            <h6 class=\"card-subtitle mb-2 text-muted\">modifié le:{{ article.dateDeModification | date(\"d/m/Y \\à H\\\\hi\")}}</h6>
                        {% endif %}

                        {% if article.auteur %}
                            <h4>écrit par: {{ article.auteur.fullName }} </h4>
                        {% else %}
                            <h6 class=\"text-muted\">auteur anonyme</h6>
                        {% endif %}

                        <p class=\"card-text\">{{ article.contenu | slice(0,100) | raw }}...</p>
                        <a href=\"{{ path(\"app_fiche_article\", {id: article.id} ) }}\" class=\"btn btn-primary card-link\">lire l'article</a>
                    </div>
                </div>
            {% endfor %}

        {% endif %}
    </div>
{% endblock %}
", "article/lesArticles.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\article\\lesArticles.html.twig");
    }
}
