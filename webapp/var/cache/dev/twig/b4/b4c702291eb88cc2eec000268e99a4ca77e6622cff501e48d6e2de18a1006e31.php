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

/* jury/team_category.html.twig */
class __TwigTemplate_2e6c90818c173d99279bdf97a47f9cc2819795525ec6a2c7cd7c902bdce6d9a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_category.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_category.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_category.html.twig", 1);
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

        echo "Category ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 4, $this->source); })()), "categoryid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Category ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 13, $this->source); })()), "categoryid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 20, $this->source); })()), "categoryid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Sortorder</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 28, $this->source); })()), "sortorder", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 30, $this->source); })()), "color", [], "any", false, false, false, 30)) {
            // line 31
            echo "                    <tr>
                        <th>Color</th>
                        <td style=\"background-color: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 33, $this->source); })()), "color", [], "any", false, false, false, 33), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 33, $this->source); })()), "color", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 36
        echo "                <tr>
                    <th>Visible</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 38, $this->source); })()), "visible", [], "any", false, false, false, 38)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Allow self-registration</th>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 42, $this->source); })()), "allowSelfRegistration", [], "any", false, false, false, 42)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 49
            echo "<p>
            ";
            // line 50
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 50, $this->source); })()), "categoryid", [], "any", false, false, false, 50)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 51
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_delete", ["categoryId" => twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 51, $this->source); })()), "categoryid", [], "any", false, false, false, 51)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 54
        echo "
    <h2>Teams in ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "</h2>
    ";
        // line 56
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 56, $this->source); })()), "teams", [], "any", false, false, false, 56))) {
            // line 57
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 59
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 69, $this->source); })()), "teams", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 70
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 72), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 75), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                    </tbody>
                </table>
            </div>
        </div>

        <h2>Submissions for ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</h2>

        <div data-ajax-refresh-target>";
            // line 87
            $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/team_category.html.twig", 87)->display(twig_array_merge($context, ["showTestcases" => false]));
            // line 88
            echo "        </div>
    ";
        }
        // line 90
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/team_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 90,  268 => 88,  266 => 87,  261 => 84,  254 => 79,  242 => 75,  234 => 72,  230 => 70,  226 => 69,  214 => 59,  210 => 57,  208 => 56,  204 => 55,  201 => 54,  195 => 51,  191 => 50,  188 => 49,  186 => 48,  179 => 42,  172 => 38,  168 => 36,  160 => 33,  156 => 31,  154 => 30,  149 => 28,  142 => 24,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Category {{ teamCategory.categoryid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Category {{ teamCategory.categoryid }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ teamCategory.categoryid }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ teamCategory.name }}</td>
                </tr>
                <tr>
                    <th>Sortorder</th>
                    <td>{{ teamCategory.sortorder }}</td>
                </tr>
                {% if teamCategory.color %}
                    <tr>
                        <th>Color</th>
                        <td style=\"background-color: {{ teamCategory.color }};\">{{ teamCategory.color }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Visible</th>
                    <td>{{ teamCategory.visible | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Allow self-registration</th>
                    <td>{{ teamCategory.allowSelfRegistration | printYesNo }}</td>
                </tr>
            </table>
        </div>
    </div>

    {%- if is_granted('ROLE_ADMIN') -%}
        <p>
            {{ button(path('jury_team_category_edit', {'categoryId': teamCategory.categoryid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_category_delete', {'categoryId': teamCategory.categoryid}), 'Delete', 'danger', 'trash-alt', true) }}
        </p>
    {% endif %}

    <h2>Teams in {{ teamCategory.name }}</h2>
    {% if teamCategory.teams is empty %}
        <p class=\"nodata\">no teams</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for team in teamCategory.teams %}
                        <tr>
                            <td>
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team.teamid }}</a>
                            </td>
                            <td>
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team.effectiveName }}</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <h2>Submissions for {{ teamCategory.name }}</h2>

        <div data-ajax-refresh-target>
            {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
        </div>
    {% endif %}

{% endblock %}
", "jury/team_category.html.twig", "/domjudge/webapp/templates/jury/team_category.html.twig");
    }
}
