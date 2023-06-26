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
class __TwigTemplate_7f1bb912b7925ba5fdc16ea934ebf589 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, ($context["toto"] ?? null), "html", null, true);
        // line 11
        echo "    </h3>
    <h3>
        bonjour la personne c'est : ";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["personne"] ?? null), "nom", [], "any", false, false, false, 13) . " ") . twig_get_attribute($this->env, $this->source, ($context["personne"] ?? null), "prenom", [], "any", false, false, false, 13)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["personnes"] ?? null));
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
        return array (  101 => 28,  92 => 25,  88 => 24,  80 => 22,  71 => 14,  69 => 13,  65 => 11,  61 => 10,  56 => 7,  53 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.html.twig", "C:\\Users\\madou\\OneDrive\\Bureau\\SYMFONY\\blog2\\templates\\test.html.twig");
    }
}
