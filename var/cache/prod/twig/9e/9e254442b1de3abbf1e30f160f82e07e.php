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
class __TwigTemplate_222bef561e55684769a4b143c4384241 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "article/lesArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " les articles ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
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
        if (twig_test_empty(($context["articles"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["articles"] ?? null)));
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
        return array (  182 => 57,  178 => 55,  168 => 51,  164 => 50,  161 => 49,  157 => 47,  151 => 45,  149 => 44,  146 => 43,  140 => 41,  138 => 40,  134 => 39,  130 => 38,  123 => 33,  118 => 31,  114 => 30,  111 => 29,  107 => 28,  103 => 26,  97 => 22,  95 => 21,  89 => 17,  78 => 14,  71 => 12,  66 => 10,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/lesArticles.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\article\\lesArticles.html.twig");
    }
}
