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

/* jury/contest.html.twig */
class __TwigTemplate_5aabc21ca46f7e2e06cc7687134331f65afacc18891841eea4e2afa3d4ce7fc2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contest.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest.html.twig", 1);
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

        echo "Contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 4, $this->source); })()), "cid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Contest ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <div class=\"alert alert-success\">
            This is an active contest
        </div>
    ";
        }
        // line 20
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 20, $this->source); })()), "enabled", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <div class=\"alert alert-danger\">
            This contest is disabled
        </div>
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 25, $this->source); })()), "finalizetime", [], "any", false, false, false, 25))) {
            // line 26
            echo "        <div class=\"alert alert-info\">
            This contest is final
        </div>
    ";
        }
        // line 30
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 36, $this->source); })()), "cid", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 38
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 38, $this->source); })()))) {
            // line 39
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 41, $this->source); })()), "externalid", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 44
        echo "                <tr>
                    <th>Short name</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 46, $this->source); })()), "shortname", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 54, $this->source); })()), "activatetimeString", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 59, $this->source); })()), "starttimeEnabled", [], "any", false, false, false, 59)) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 60, $this->source); })()), "starttimeString", [], "any", false, false, false, 60), "html", null, true);
            echo "
                        ";
        } else {
            // line 62
            echo "                            <span class=\"ignore\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 62, $this->source); })()), "starttimeString", [], "any", false, false, false, 62), "html", null, true);
            echo "</span> <em>delayed</em>
                        ";
        }
        // line 64
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>";
        // line 68
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", false, false, false, 68), "-")) : ("-")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 72, $this->source); })()), "endtimeString", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>";
        // line 76
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", false, false, false, 76), "-")) : ("-")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 80, $this->source); })()), "deactivatetimeString", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 84, $this->source); })()), "processBalloons", [], "any", false, false, false, 84)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 88, $this->source); })()), "public", [], "any", false, false, false, 88)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 92, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 92)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 97, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 97)) {
            // line 98
            echo "                            <em>all teams</em>
                        ";
        } else {
            // line 100
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 100, $this->source); })()), "teams", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 101
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\">
                                    ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 102), "html", null, true);
                echo " (t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 102), "html", null, true);
                echo ")
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 106, $this->source); })()), "teamCategories", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 107
                echo "                                All teams from
                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">
                                    ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 109), "html", null, true);
                echo "
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        ";
        }
        // line 114
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 120, $this->source); })()), "finalizetime", [], "any", false, false, false, 120)) {
            // line 121
            echo "        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 128, $this->source); })()), "finalizetime", [], "any", false, false, false, 128), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 132, $this->source); })()), "b", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
            // line 136
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 136, $this->source); })()), "finalizecomment", [], "any", false, false, false, 136), "html", null, true));
            echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if ((isset($context["allowRemovedIntervals"]) || array_key_exists("allowRemovedIntervals", $context) ? $context["allowRemovedIntervals"] : (function () { throw new RuntimeError('Variable "allowRemovedIntervals" does not exist.', 143, $this->source); })())) {
            // line 144
            echo "        <h2>Removed intervals</h2>
        ";
            // line 145
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 145, $this->source); })()), "removedIntervals", [], "any", false, false, false, 145)))) {
                // line 146
                echo "            <p class=\"nodata\">None.</p>
        ";
            } else {
                // line 148
                echo "            ";
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 149
                    echo "                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 149, $this->source); })()), 'form_start');
                    echo "
            ";
                }
                // line 151
                echo "            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["removedIntervals"]) || array_key_exists("removedIntervals", $context) ? $context["removedIntervals"] : (function () { throw new RuntimeError('Variable "removedIntervals" does not exist.', 165, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["removedInterval"]) {
                    // line 166
                    echo "                            <tr>
                                <td>";
                    // line 167
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 167), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 168
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttimeString", [], "any", false, false, false, 168), "html", null, true);
                    echo "</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>";
                    // line 170
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtimeString", [], "any", false, false, false, 170), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 171
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttime", [], "any", false, false, false, 171), twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtime", [], "any", false, false, false, 171)), "html", null, true);
                    echo "</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"";
                    // line 174
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_remove_interval", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 174, $this->source); })()), "cid", [], "any", false, false, false, 174), "intervalId" => twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 174)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['removedInterval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 180
                    echo "                            <tr>
                                <td>new</td>
                                <td>
                                    ";
                    // line 183
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 183, $this->source); })()), "starttimeString", [], "any", false, false, false, 183), 'errors');
                    echo "
                                    ";
                    // line 184
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 184, $this->source); })()), "starttimeString", [], "any", false, false, false, 184), 'widget');
                    echo "
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    ";
                    // line 188
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 188, $this->source); })()), "endtimeString", [], "any", false, false, false, 188), 'errors');
                    echo "
                                    ";
                    // line 189
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 189, $this->source); })()), "endtimeString", [], "any", false, false, false, 189), 'widget');
                    echo "
                                </td>
                                <td></td>
                                <td>";
                    // line 192
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 192, $this->source); })()), "add", [], "any", false, false, false, 192), 'widget');
                    echo "</td>
                            </tr>
                        ";
                }
                // line 195
                echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
                // line 199
                if ((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context))) {
                    // line 200
                    echo "                <small class=\"text-muted\">Use the format <b><tt>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</tt></b> for
                    start/end times.
                </small>
                ";
                    // line 203
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 203, $this->source); })()), 'form_end');
                    echo "
            ";
                }
                // line 205
                echo "        ";
            }
            // line 206
            echo "
        <script>
            \$(function () {
                \$('.remove-interval-button').on('click', function () {
                    if (confirm('Really delete interval?')) {
                        var \$form = \$('<form method=\"post\" />');
                        \$form.attr('action', \$(this).data('submit-url'));
                        \$form.submit();
                    }
                    return false;
                });
            });
        </script>

    ";
        }
        // line 221
        echo "
    <h2 class=\"mt-2\">Problems</h2>

    ";
        // line 224
        if (twig_test_empty((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 224, $this->source); })()))) {
            // line 225
            echo "        <p class=\"nodata\">No problems added yet</p>
    ";
        } else {
            // line 227
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 244, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 245
                echo "                        <tr>
                            ";
                // line 246
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 246)]);
                // line 247
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 247, $this->source); })()), "html", null, true);
                echo "\">p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 247), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 248
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 248, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 248), "name", [], "any", false, false, false, 248), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 249
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 249, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 249), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 250
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 250, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 250), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 251
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 251, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 251)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 252
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 252, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 252)), "html", null, true);
                echo "</a></td>
                            ";
                // line 253
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 253))) {
                    // line 254
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 254, $this->source); })()), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 256
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 256), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 257
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 257, $this->source); })()), "html", null, true);
                    echo "\">
                                        <div class=\"circle\" style=\"background-color: ";
                    // line 258
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 258), "html", null, true);
                    echo "\"></div>
                                    </a>
                                </td>
                            ";
                }
                // line 262
                echo "                            <td>
                                <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 263, $this->source); })()), "html", null, true);
                echo "\">
                                    ";
                // line 264
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 264))) {
                    // line 265
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 265)), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 267
                    echo "                                        -
                                    ";
                }
                // line 269
                echo "                                </a>
                            </td>
                            <td>
                                ";
                // line 272
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 273
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_delete", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 273, $this->source); })()), "cid", [], "any", false, false, false, 273), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 273)]), "html", null, true);
                    echo "\" data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 277
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 285
        echo "
    <p>";
        // line 287
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 288
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_edit", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 288, $this->source); })()), "cid", [], "any", false, false, false, 288)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 289
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_delete", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 289, $this->source); })()), "cid", [], "any", false, false, false, 289)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 291
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 291, $this->source); })()), "finalizetime", [], "any", false, false, false, 291)) {
            // line 292
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 292, $this->source); })()), "cid", [], "any", false, false, false, 292)]), "Update finalization", "secondary", "lock");
            echo "
        ";
        } else {
            // line 294
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 294, $this->source); })()), "cid", [], "any", false, false, false, 294)]), "Finalize this contest", "secondary", "lock");
            echo "
        ";
        }
        // line 296
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/contest.html.twig", 296)->display(twig_array_merge($context, ["table" => "contest", "id" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 296, $this->source); })()), "cid", [], "any", false, false, false, 296), "buttonClass" => "btn-secondary"]));
        // line 297
        echo "    </p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 297,  699 => 296,  693 => 294,  687 => 292,  684 => 291,  679 => 289,  675 => 288,  673 => 287,  670 => 285,  663 => 280,  655 => 277,  647 => 273,  645 => 272,  640 => 269,  636 => 267,  630 => 265,  628 => 264,  624 => 263,  621 => 262,  614 => 258,  610 => 257,  605 => 256,  599 => 254,  597 => 253,  591 => 252,  585 => 251,  579 => 250,  573 => 249,  567 => 248,  560 => 247,  558 => 246,  555 => 245,  551 => 244,  532 => 227,  528 => 225,  526 => 224,  521 => 221,  504 => 206,  501 => 205,  496 => 203,  491 => 200,  489 => 199,  483 => 195,  477 => 192,  471 => 189,  467 => 188,  460 => 184,  456 => 183,  451 => 180,  448 => 179,  437 => 174,  431 => 171,  427 => 170,  422 => 168,  418 => 167,  415 => 166,  411 => 165,  395 => 151,  389 => 149,  386 => 148,  382 => 146,  380 => 145,  377 => 144,  375 => 143,  372 => 142,  363 => 136,  356 => 132,  349 => 128,  340 => 121,  338 => 120,  330 => 114,  327 => 113,  317 => 109,  313 => 108,  310 => 107,  305 => 106,  293 => 102,  288 => 101,  283 => 100,  279 => 98,  277 => 97,  269 => 92,  262 => 88,  255 => 84,  248 => 80,  241 => 76,  234 => 72,  227 => 68,  221 => 64,  215 => 62,  209 => 60,  207 => 59,  199 => 54,  192 => 50,  185 => 46,  181 => 44,  175 => 41,  171 => 39,  169 => 38,  164 => 36,  156 => 30,  150 => 26,  147 => 25,  141 => 21,  138 => 20,  132 => 16,  130 => 15,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Contest {{ contest.cid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Contest {{ contest.name }}</h1>

    {% if isActive %}
        <div class=\"alert alert-success\">
            This is an active contest
        </div>
    {% endif %}
    {% if not contest.enabled %}
        <div class=\"alert alert-danger\">
            This contest is disabled
        </div>
    {% endif %}
    {% if contest.finalizetime is not empty %}
        <div class=\"alert alert-info\">
            This contest is final
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c{{ contest.cid }}</td>
                </tr>
                {% if showExternalId(contest) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ contest.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Short name</th>
                    <td>{{ contest.shortname }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ contest.name }}</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>{{ contest.activatetimeString }}</td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        {% if contest.starttimeEnabled %}
                            {{ contest.starttimeString }}
                        {% else %}
                            <span class=\"ignore\">{{ contest.starttimeString }}</span> <em>delayed</em>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>{{ contest.freezetimeString|default('-') }}</td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>{{ contest.endtimeString }}</td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>{{ contest.unfreezetimeString|default('-') }}</td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>{{ contest.deactivatetimeString }}</td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>{{ contest.processBalloons | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>{{ contest.public | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>{{ contest.openToAllTeams | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        {% if contest.openToAllTeams %}
                            <em>all teams</em>
                        {% else %}
                            {% for team in contest.teams %}
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">
                                    {{ team.effectiveName }} (t{{ team.teamid }})
                                </a>
                                <br>
                            {% endfor %}
                            {% for category in contest.teamCategories %}
                                All teams from
                                <a href=\"{{ path('jury_team_category', {'categoryId': category.categoryid}) }}\">
                                    {{ category.name }}
                                </a>
                                <br>
                            {% endfor %}
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    {% if contest.finalizetime %}
        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>{{ contest.finalizetime | printtime('%Y-%m-%d %H:%M:%S (%Z)') }}</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>{{ contest.b }}</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>{{ contest.finalizecomment | nl2br }}</td>
                    </tr>
                </table>
            </div>
        </div>
    {% endif %}

    {% if allowRemovedIntervals %}
        <h2>Removed intervals</h2>
        {% if not is_granted('ROLE_ADMIN') and contest.removedIntervals is empty %}
            <p class=\"nodata\">None.</p>
        {% else %}
            {% if removedIntervalForm is defined %}
                {{ form_start(removedIntervalForm) }}
            {% endif %}
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for removedInterval in removedIntervals %}
                            <tr>
                                <td>{{ removedInterval.intervalid }}</td>
                                <td>{{ removedInterval.starttimeString }}</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>{{ removedInterval.endtimeString }}</td>
                                <td>{{ removedInterval.starttime | printtimediff(removedInterval.endtime) }}</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"{{ path('jury_contest_remove_interval', {'contestId': contest.cid, 'intervalId': removedInterval.intervalid}) }}\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        {% endfor %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <tr>
                                <td>new</td>
                                <td>
                                    {{ form_errors(removedIntervalForm.starttimeString) }}
                                    {{ form_widget(removedIntervalForm.starttimeString) }}
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    {{ form_errors(removedIntervalForm.endtimeString) }}
                                    {{ form_widget(removedIntervalForm.endtimeString) }}
                                </td>
                                <td></td>
                                <td>{{ form_widget(removedIntervalForm.add) }}</td>
                            </tr>
                        {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>
            {% if removedIntervalForm is defined %}
                <small class=\"text-muted\">Use the format <b><tt>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</tt></b> for
                    start/end times.
                </small>
                {{ form_end(removedIntervalForm) }}
            {% endif %}
        {% endif %}

        <script>
            \$(function () {
                \$('.remove-interval-button').on('click', function () {
                    if (confirm('Really delete interval?')) {
                        var \$form = \$('<form method=\"post\" />');
                        \$form.attr('action', \$(this).data('submit-url'));
                        \$form.submit();
                    }
                    return false;
                });
            });
        </script>

    {% endif %}

    <h2 class=\"mt-2\">Problems</h2>

    {% if problems is empty %}
        <p class=\"nodata\">No problems added yet</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for problem in problems %}
                        <tr>
                            {% set link = path('jury_problem', {'probId': problem.probid}) %}
                            <td><a href=\"{{ link }}\">p{{ problem.probid }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.problem.name }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.shortname }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.points }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.allowSubmit | printYesNo }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.allowJudge | printYesNo }}</a></td>
                            {% if problem.color is empty %}
                                <td><a href=\"{{ link }}\">&nbsp;</a></td>
                            {% else %}
                                <td title=\"{{ problem.color }}\">
                                    <a href=\"{{ link }}\">
                                        <div class=\"circle\" style=\"background-color: {{ problem.color }}\"></div>
                                    </a>
                                </td>
                            {% endif %}
                            <td>
                                <a href=\"{{ link }}\">
                                    {% if problem.lazyEvalResults is not null %}
                                        {{ problem.lazyEvalResults | printYesNo }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </a>
                            </td>
                            <td>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{ path('jury_contest_problem_delete', {'contestId': contest.cid, 'probId': problem.probid}) }}\" data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endif %}

    <p>
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_contest_edit', {'contestId': contest.cid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_contest_delete', {'contestId': contest.cid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {% if contest.finalizetime %}
            {{ button(path('jury_contest_finalize', {'contestId': contest.cid}), 'Update finalization', 'secondary', 'lock') }}
        {% else %}
            {{ button(path('jury_contest_finalize', {'contestId': contest.cid}), 'Finalize this contest', 'secondary', 'lock') }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'contest', id: contest.cid, buttonClass: 'btn-secondary'} %}
    </p>

{% endblock %}
", "jury/contest.html.twig", "/domjudge/webapp/templates/jury/contest.html.twig");
    }
}
