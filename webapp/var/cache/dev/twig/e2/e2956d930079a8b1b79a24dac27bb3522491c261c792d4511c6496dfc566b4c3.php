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

/* jury/team.html.twig */
class __TwigTemplate_b64c73bb75e23660197bb2b5f505c214ee63cd6929b71554e8c4031f9fa6630e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 4, $this->source); })()), "teamid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>Team ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 13, $this->source); })()), "effectiveName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 20, $this->source); })()), "teamid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>ICPC ID</th>
                    <td>
                        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 25, $this->source); })()), "icpcid", [], "any", false, false, false, 25)) {
            // line 26
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 26, $this->source); })()), "icpcid", [], "any", false, false, false, 26), "html", null, true);
            echo "
                        ";
        } else {
            // line 28
            echo "                            -
                        ";
        }
        // line 30
        echo "                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Display name</th>
                    <td>
                        ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "displayName", [], "any", false, false, false, 39)) {
            // line 40
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 40, $this->source); })()), "displayName", [], "any", false, false, false, 40), "html", null, true);
            echo "
                        ";
        } else {
            // line 42
            echo "                            -
                        ";
        }
        // line 44
        echo "                    </td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 49
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "users", [], "any", false, false, false, 49)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 49, $this->source); })()), "users", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), "firstLogin", [], "any", false, false, false, 49))) {
            // line 50
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 50, $this->source); })()), "users", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "firstLogin", [], "any", false, false, false, 50), "%a %d %b %Y %T %Z"), "html", null, true);
            echo "
                        ";
        } else {
            // line 52
            echo "                            -
                        ";
        }
        // line 54
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        ";
        // line 59
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 59, $this->source); })()), "users", [], "any", false, false, false, 59)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 59, $this->source); })()), "users", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), "lastIpAddress", [], "any", false, false, false, 59))) {
            // line 60
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 60, $this->source); })()), "users", [], "any", false, false, false, 60), "first", [], "any", false, false, false, 60), "lastIpAddress", [], "any", false, false, false, 60), true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            -
                        ";
        }
        // line 64
        echo "                    </td>
                </tr>
                ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 66, $this->source); })()), "penalty", [], "any", false, false, false, 66)) {
            // line 67
            echo "                    <tr>
                        <th>Penalty time</th>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 69, $this->source); })()), "penalty", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 72
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 72, $this->source); })()), "room", [], "any", false, false, false, 72)) {
            // line 73
            echo "                    <tr>
                        <th>Location</th>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 75, $this->source); })()), "room", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <th>User</th>
                    <td>
                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 81, $this->source); })()), "users", [], "any", false, false, false, 81));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 82
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, $context["user"], "userid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 84, $this->source); })()), "teamid", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">
                                <i class=\"fas fa-user-plus\"></i> add user
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 98, $this->source); })()), "category", [], "any", false, false, false, 98), "categoryid", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">
                            ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 99, $this->source); })()), "category", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
        echo "
                        </a>
                    </td>
                </tr>
                ";
        // line 103
        if (((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 103, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 103, $this->source); })()), "affiliation", [], "any", false, false, false, 103))) {
            // line 104
            echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                            ";
            // line 107
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 107, $this->source); })()), "affiliation", [], "any", false, false, false, 107), "affilid", [], "any", false, false, false, 107);
            // line 108
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 108, $this->source); })()), "affiliation", [], "any", false, false, false, 108))) {
                // line 109
                echo "                                ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 109, $this->source); })()), "affiliation", [], "any", false, false, false, 109), "externalid", [], "any", false, false, false, 109);
                // line 110
                echo "                            ";
            }
            // line 111
            echo "                            ";
            $context["affiliationLogo"] = (("images/affiliations/" . (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 111, $this->source); })())) . ".png");
            // line 112
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 112, $this->source); })()))) {
                // line 113
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 113, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 113, $this->source); })()), "affiliation", [], "any", false, false, false, 113), "shortname", [], "any", false, false, false, 113), "html", null, true);
                echo "\"
                                     title=\"";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 114, $this->source); })()), "affiliation", [], "any", false, false, false, 114), "shortname", [], "any", false, false, false, 114), "html", null, true);
                echo "\" class=\"affiliation-logo\"/>
                            ";
            }
            // line 116
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 116, $this->source); })()), "affiliation", [], "any", false, false, false, 116), "affilid", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">
                                ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 117, $this->source); })()), "affiliation", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 122
        echo "                ";
        if ((((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 122, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 122, $this->source); })()), "affiliation", [], "any", false, false, false, 122)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 122, $this->source); })()), "affiliation", [], "any", false, false, false, 122), "country", [], "any", false, false, false, 122))) {
            // line 123
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 126
            $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 126, $this->source); })()), "affiliation", [], "any", false, false, false, 126), "country", [], "any", false, false, false, 126)) . ".png");
            // line 127
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 127, $this->source); })()))) {
                // line 128
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["countryFlag"]) || array_key_exists("countryFlag", $context) ? $context["countryFlag"] : (function () { throw new RuntimeError('Variable "countryFlag" does not exist.', 128, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 128, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 128, $this->source); })()), "affiliation", [], "any", false, false, false, 128), "country", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "html", null, true);
                echo "\"
                                     title=\"";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 129, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 129, $this->source); })()), "affiliation", [], "any", false, false, false, 129), "country", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "html", null, true);
                echo "\" class=\"countryflag\"/>
                            ";
            }
            // line 131
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 131, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 131, $this->source); })()), "affiliation", [], "any", false, false, false, 131), "country", [], "any", false, false, false, 131), [], "array", false, false, false, 131), "html", null, true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 135
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 135, $this->source); })()), "contests", [], "any", false, false, false, 135)) > 0)) {
            // line 136
            echo "                <tr>
                    <th>Contests</th>
                    <td>
                        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 139, $this->source); })()), "contests", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["ucontest"]) {
                // line 140
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["ucontest"], "cid", [], "any", false, false, false, 140)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ucontest"], "shortname", [], "any", false, false, false, 140), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ucontest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "                    </td>
                </tr>
                ";
        }
        // line 145
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 145, $this->source); })()), "comments", [], "any", false, false, false, 145))) {
            // line 146
            echo "                <tr>
                    <th>Comments</th>
                    <td>
                        ";
            // line 149
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 149, $this->source); })()), "comments", [], "any", false, false, false, 149), "html", null, true));
            echo "
                    </td>
                </tr>
                ";
        }
        // line 153
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 153, $this->source); })()), "members", [], "any", false, false, false, 153))) {
            // line 154
            echo "                    <tr>
                        <th>Members</th>
                        <td>";
            // line 156
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 156, $this->source); })()), "members", [], "any", false, false, false, 156), "html", null, true));
            echo "</td>
                    </tr>
                ";
        }
        // line 159
        echo "            </table>
        </div>
    ";
        // line 161
        $context["teamImage"] = (("images/teams/" . twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 161, $this->source); })()), "teamId", [], "any", false, false, false, 161)) . ".jpg");
        // line 162
        echo "    ";
        if ($this->extensions['App\Twig\TwigExtension']->assetExists((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 162, $this->source); })()))) {
            // line 163
            echo "        <div class=\"col\">
        <img id=\"teampicture\" src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 164, $this->source); })())), "html", null, true);
            echo "\" alt=\"Picture of team ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 164, $this->source); })()), "name", [], "any", false, false, false, 164), "html", null, true);
            echo "\"
             title=\"Picture of team ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 165, $this->source); })()), "effectiveName", [], "any", false, false, false, 165), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 168
        echo "    </div>

    <p>";
        // line 171
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 172
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 172, $this->source); })()), "teamid", [], "any", false, false, false, 172)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 173
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 173, $this->source); })()), "teamid", [], "any", false, false, false, 173)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 175
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 175, $this->source); })()), "teamid", [], "any", false, false, false, 175)]), "Send message", "secondary", "envelope");
        echo "
        ";
        // line 176
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 176)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 176, $this->source); })()), "teamid", [], "any", false, false, false, 176), "buttonClass" => "btn-secondary"]));
        // line 177
        echo "    </p>

    <div data-ajax-refresh-target>
        ";
        // line 180
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 180)->display($context);
        // line 181
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 181,  491 => 180,  486 => 177,  484 => 176,  479 => 175,  474 => 173,  470 => 172,  468 => 171,  464 => 168,  458 => 165,  452 => 164,  449 => 163,  446 => 162,  444 => 161,  440 => 159,  434 => 156,  430 => 154,  427 => 153,  420 => 149,  415 => 146,  412 => 145,  407 => 142,  396 => 140,  392 => 139,  387 => 136,  384 => 135,  376 => 131,  371 => 129,  364 => 128,  361 => 127,  359 => 126,  354 => 123,  351 => 122,  343 => 117,  338 => 116,  333 => 114,  326 => 113,  323 => 112,  320 => 111,  317 => 110,  314 => 109,  311 => 108,  309 => 107,  304 => 104,  302 => 103,  295 => 99,  291 => 98,  279 => 88,  268 => 84,  258 => 82,  253 => 81,  248 => 78,  242 => 75,  238 => 73,  235 => 72,  229 => 69,  225 => 67,  223 => 66,  219 => 64,  215 => 62,  209 => 60,  207 => 59,  200 => 54,  196 => 52,  190 => 50,  188 => 49,  181 => 44,  177 => 42,  171 => 40,  169 => 39,  161 => 34,  155 => 30,  151 => 28,  145 => 26,  143 => 25,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Team {{ team.teamid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Team {{ team.effectiveName }}</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ team.teamid }}</td>
                </tr>
                <tr>
                    <th>ICPC ID</th>
                    <td>
                        {% if team.icpcid %}
                            {{ team.icpcid }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ team.name }}</td>
                </tr>
                <tr>
                    <th>Display name</th>
                    <td>
                        {% if team.displayName %}
                            {{ team.displayName }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        {% if team.users is not empty and team.users.first.firstLogin %}
                            {{ team.users.first.firstLogin | printtime('%a %d %b %Y %T %Z') }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        {% if team.users is not empty and team.users.first.lastIpAddress %}
                            {{ team.users.first.lastIpAddress | printHost(true) }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                {% if team.penalty %}
                    <tr>
                        <th>Penalty time</th>
                        <td>{{ team.penalty }}</td>
                    </tr>
                {% endif %}
                {% if team.room %}
                    <tr>
                        <th>Location</th>
                        <td>{{ team.room }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>User</th>
                    <td>
                        {% for user in team.users %}
                            <a href=\"{{ path('jury_user', {'userId': user.userid}) }}\">{{ user.username }}</a>
                        {% else %}
                            <a href=\"{{ path('jury_user_add', {'team': team.teamid}) }}\">
                                <i class=\"fas fa-user-plus\"></i> add user
                            </a>
                        {% endfor %}
                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        <a href=\"{{ path('jury_team_category', {'categoryId': team.category.categoryid}) }}\">
                            {{ team.category.name }}
                        </a>
                    </td>
                </tr>
                {% if showAffiliations and team.affiliation %}
                    <tr>
                        <th>Affiliation</th>
                        <td>
                            {% set affiliationId = team.affiliation.affilid %}
                            {% if showExternalId(team.affiliation) %}
                                {% set affiliationId = team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationLogo = 'images/affiliations/' ~ affiliationId ~ '.png' %}
                            {% if affiliationLogo | assetExists %}
                                <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ team.affiliation.shortname }}\"
                                     title=\"{{ team.affiliation.shortname }}\" class=\"affiliation-logo\"/>
                            {% endif %}
                            <a href=\"{{ path('jury_team_affiliation', {'affilId': team.affiliation.affilid}) }}\">
                                {{ team.affiliation.name }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if showFlags and team.affiliation and team.affiliation.country %}
                    <tr>
                        <th>Country</th>
                        <td>
                            {% set countryFlag = 'images/countries/' ~ team.affiliation.country ~ '.png' %}
                            {% if countryFlag | assetExists %}
                                <img src=\"{{ asset(countryFlag) }}\" alt=\"{{ alpha3_countries[team.affiliation.country] }}\"
                                     title=\"{{ alpha3_countries[team.affiliation.country] }}\" class=\"countryflag\"/>
                            {% endif %}
                            {{ alpha3_countries[team.affiliation.country] }}
                        </td>
                    </tr>
                {% endif %}
                {% if team.contests|length > 0 %}
                <tr>
                    <th>Contests</th>
                    <td>
                        {% for ucontest in team.contests %}
                            <a href=\"{{ path('jury_contest', {'contestId': ucontest.cid}) }}\">{{ ucontest.shortname }}</a>
                        {% endfor %}
                    </td>
                </tr>
                {% endif %}
                {% if team.comments is not empty %}
                <tr>
                    <th>Comments</th>
                    <td>
                        {{ team.comments | nl2br }}
                    </td>
                </tr>
                {% endif %}
                {% if team.members is not empty %}
                    <tr>
                        <th>Members</th>
                        <td>{{ team.members | nl2br }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    {% set teamImage = 'images/teams/' ~ team.teamId ~ '.jpg' %}
    {% if teamImage | assetExists %}
        <div class=\"col\">
        <img id=\"teampicture\" src=\"{{ asset(teamImage) }}\" alt=\"Picture of team {{ team.name }}\"
             title=\"Picture of team {{ team.effectiveName }}\">
        </div>
    {% endif %}
    </div>

    <p>
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_team_edit', {'teamId': team.teamid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_delete', {'teamId': team.teamid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {{ button(path('jury_clarification_send', {'teamto': team.teamid}), 'Send message', 'secondary', 'envelope') }}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'team', id: team.teamid, buttonClass: 'btn-secondary'} %}
    </p>

    <div data-ajax-refresh-target>
        {% include 'jury/partials/team_score_and_submissions.html.twig' %}
    </div>

{% endblock %}
", "jury/team.html.twig", "/domjudge/webapp/templates/jury/team.html.twig");
    }
}
