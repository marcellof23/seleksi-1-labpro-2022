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

/* jury/problem.html.twig */
class __TwigTemplate_d601d5d8d29d91de884fa1a86eadc5de76faced042d78f169b7ba84052a139ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem.html.twig", 1);
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

        echo "Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 4, $this->source); })()), "probid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Problem ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>p";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 20, $this->source); })()), "probid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Name</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Testcases</th>
                    <td>
                        ";
        // line 35
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 35, $this->source); })()), "testcases", [], "any", false, false, false, 35))) {
            // line 36
            echo "                            <em>no testcases</em>
                        ";
        } else {
            // line 38
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 38, $this->source); })()), "testcases", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38), "html", null, true);
            echo "
                        ";
        }
        // line 40
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 40, $this->source); })()), "probid", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">details / edit</a>
                    </td>
                </tr>
                <tr>
                    <th>Timelimit</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 45, $this->source); })()), "timelimit", [], "any", false, false, false, 45), "html", null, true);
        echo " sec</td>
                </tr>
                <tr>
                    <th>Memory limit</th>
                    <td>
                        ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 50, $this->source); })()), "memlimit", [], "any", false, false, false, 50) == null)) {
            // line 51
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 51, $this->source); })()), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 53
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 53, $this->source); })()), "memlimit", [], "any", false, false, false, 53), "html", null, true);
            echo " kB
                        ";
        }
        // line 55
        echo "                    </td>
                </tr>
                <tr>
                    <th>Output limit</th>
                    <td>
                        ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 60, $this->source); })()), "outputlimit", [], "any", false, false, false, 60) == null)) {
            // line 61
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["defaultOutputLimit"]) || array_key_exists("defaultOutputLimit", $context) ? $context["defaultOutputLimit"] : (function () { throw new RuntimeError('Variable "defaultOutputLimit" does not exist.', 61, $this->source); })()), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 63
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 63, $this->source); })()), "outputlimit", [], "any", false, false, false, 63), "html", null, true);
            echo " kB
                        ";
        }
        // line 65
        echo "                    </td>
                </tr>
                ";
        // line 67
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 67, $this->source); })()), "problemtextType", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <tr>
                        <th>Problem text</th>
                        <td>
                            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 71, $this->source); })()), "probid", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                                <i title=\"view problem description\"
                                   class=\"fas fa-file-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 73, $this->source); })()), "problemtextType", [], "any", false, false, false, 73), "html", null, true);
            echo "\"></i>
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <th>Run script</th>
                    <td class=\"filename\">
                        ";
        // line 81
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 81, $this->source); })()), "runExecutable", [], "any", false, false, false, 81))) {
            // line 82
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 82, $this->source); })()), "runExecutable", [], "any", false, false, false, 82), "execid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 82, $this->source); })()), "runExecutable", [], "any", false, false, false, 82), "execid", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 84
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => (isset($context["defaultRunExecutable"]) || array_key_exists("defaultRunExecutable", $context) ? $context["defaultRunExecutable"] : (function () { throw new RuntimeError('Variable "defaultRunExecutable" does not exist.', 84, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["defaultRunExecutable"]) || array_key_exists("defaultRunExecutable", $context) ? $context["defaultRunExecutable"] : (function () { throw new RuntimeError('Variable "defaultRunExecutable" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "</a>
                            (default)
                        ";
        }
        // line 87
        echo "                    </td>
                </tr>
\t\t";
        // line 89
        if (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 89, $this->source); })()), "combinedRunCompare", [], "any", false, false, false, 89)) {
            // line 90
            echo "                  <tr>
                     <th>Compare script</th>
                     <td>Run script combines run and compare script.</td>
                  </tr>
                ";
        } else {
            // line 95
            echo "                  <tr>
                      <th>Compare script</th>
                      <td class=\"filename\">
                          ";
            // line 98
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 98, $this->source); })()), "compareExecutable", [], "any", false, false, false, 98))) {
                // line 99
                echo "                              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 99, $this->source); })()), "compareExecutable", [], "any", false, false, false, 99), "execid", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 99, $this->source); })()), "compareExecutable", [], "any", false, false, false, 99), "execid", [], "any", false, false, false, 99), "html", null, true);
                echo "</a>
                          ";
            } else {
                // line 101
                echo "                              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => (isset($context["defaultCompareExecutable"]) || array_key_exists("defaultCompareExecutable", $context) ? $context["defaultCompareExecutable"] : (function () { throw new RuntimeError('Variable "defaultCompareExecutable" does not exist.', 101, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["defaultCompareExecutable"]) || array_key_exists("defaultCompareExecutable", $context) ? $context["defaultCompareExecutable"] : (function () { throw new RuntimeError('Variable "defaultCompareExecutable" does not exist.', 101, $this->source); })()), "html", null, true);
                echo "</a>
                              (default)
                          ";
            }
            // line 104
            echo "                      </td>
                  </tr>
                ";
        }
        // line 107
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 107, $this->source); })()), "specialCompareArgs", [], "any", false, false, false, 107))) {
            // line 108
            echo "                    <tr>
                        <th>Compare script arguments</th>
                        <td class=\"filename\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 110, $this->source); })()), "specialCompareArgs", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 113
        echo "            </table>
        </div>
    </div>

    <p>";
        // line 118
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 119
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_edit", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 119, $this->source); })()), "probid", [], "any", false, false, false, 119)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 120
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_delete", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 120, $this->source); })()), "probid", [], "any", false, false, false, 120)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 122
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/problem.html.twig", 122)->display(twig_array_merge($context, ["table" => "problem", "id" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 122, $this->source); })()), "probid", [], "any", false, false, false, 122), "buttonClass" => "btn-secondary"]));
        // line 123
        echo "    </p>

    <h2>Contests</h2>

    ";
        // line 127
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 127, $this->source); })()), "contestProblems", [], "any", false, false, false, 127))) {
            // line 128
            echo "        <p class=\"nodata\">No contests defined</p>
    ";
        } else {
            // line 130
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"data-table table table-hover table-striped table-sm\">
                    <thead class=\"thead-light\">
                    <tr>
                        <th>CID</th>
                        <th>Contest<br/>shortname</th>
                        <th>Contest<br/>name</th>
                        <th>Problem<br/>shortname</th>
                        <th>Allow<br/>submit</th>
                        <th>Allow<br/>judge</th>
                        <th>Colour</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 145, $this->source); })()), "contestProblems", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["contestProblem"]) {
                // line 146
                echo "                        ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 146)]);
                // line 147
                echo "                        <tr>
                            <td><a href=\"";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 148, $this->source); })()), "html", null, true);
                echo "\">c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 148), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 149
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 149, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 149), "shortname", [], "any", false, false, false, 149), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 150
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 150, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 150), "name", [], "any", false, false, false, 150), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 151
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 151, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "shortname", [], "any", false, false, false, 151), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 152
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 152, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowSubmit", [], "any", false, false, false, 152)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 153
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 153, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowJudge", [], "any", false, false, false, 153)), "html", null, true);
                echo "</a></td>
                            ";
                // line 154
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 154))) {
                    // line 155
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 155, $this->source); })()), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 157
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 157), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 158
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 158, $this->source); })()), "html", null, true);
                    echo "\">
                                        <div class=\"circle\" style=\"background-color: ";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 159), "html", null, true);
                    echo "\"></div>
                                    </a>
                                </td>
                            ";
                }
                // line 163
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contestProblem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 170
        echo "
    <h2>Submissions for ";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 171, $this->source); })()), "name", [], "any", false, false, false, 171), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 174
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/problem.html.twig", 174)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 175
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 175,  472 => 174,  467 => 171,  464 => 170,  457 => 165,  450 => 163,  443 => 159,  439 => 158,  434 => 157,  428 => 155,  426 => 154,  420 => 153,  414 => 152,  408 => 151,  402 => 150,  396 => 149,  390 => 148,  387 => 147,  384 => 146,  380 => 145,  363 => 130,  359 => 128,  357 => 127,  351 => 123,  348 => 122,  343 => 120,  339 => 119,  337 => 118,  331 => 113,  325 => 110,  321 => 108,  318 => 107,  313 => 104,  304 => 101,  296 => 99,  294 => 98,  289 => 95,  282 => 90,  280 => 89,  276 => 87,  267 => 84,  259 => 82,  257 => 81,  252 => 78,  244 => 73,  239 => 71,  234 => 68,  232 => 67,  228 => 65,  222 => 63,  216 => 61,  214 => 60,  207 => 55,  201 => 53,  195 => 51,  193 => 50,  185 => 45,  176 => 40,  170 => 38,  166 => 36,  164 => 35,  156 => 30,  152 => 28,  146 => 25,  142 => 23,  140 => 22,  135 => 20,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Problem {{ problem.probid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Problem {{ problem.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>p{{ problem.probid }}</td>
                </tr>
                {% if showExternalId(problem) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ problem.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Name</th>
                    <td>{{ problem.name }}</td>
                </tr>
                <tr>
                    <th>Testcases</th>
                    <td>
                        {% if problem.testcases is empty %}
                            <em>no testcases</em>
                        {% else %}
                            {{ problem.testcases.count }}
                        {% endif %}
                        <a href=\"{{ path('jury_problem_testcases', {'probId': problem.probid}) }}\">details / edit</a>
                    </td>
                </tr>
                <tr>
                    <th>Timelimit</th>
                    <td>{{ problem.timelimit }} sec</td>
                </tr>
                <tr>
                    <th>Memory limit</th>
                    <td>
                        {% if problem.memlimit == null %}
                            {{ defaultMemoryLimit }} kB (default)
                        {% else %}
                            {{ problem.memlimit }} kB
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Output limit</th>
                    <td>
                        {% if problem.outputlimit == null %}
                            {{ defaultOutputLimit }} kB (default)
                        {% else %}
                            {{ problem.outputlimit }} kB
                        {% endif %}
                    </td>
                </tr>
                {% if problem.problemtextType is not empty %}
                    <tr>
                        <th>Problem text</th>
                        <td>
                            <a href=\"{{ path('jury_problem_text', {'probId': problem.probid}) }}\">
                                <i title=\"view problem description\"
                                   class=\"fas fa-file-{{ problem.problemtextType }}\"></i>
                            </a>
                        </td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Run script</th>
                    <td class=\"filename\">
                        {% if problem.runExecutable is not empty %}
                            <a href=\"{{ path('jury_executable', {'execId': problem.runExecutable.execid}) }}\">{{ problem.runExecutable.execid }}</a>
                        {% else %}
                            <a href=\"{{ path('jury_executable', {'execId': defaultRunExecutable}) }}\">{{ defaultRunExecutable }}</a>
                            (default)
                        {% endif %}
                    </td>
                </tr>
\t\t{% if problem.combinedRunCompare %}
                  <tr>
                     <th>Compare script</th>
                     <td>Run script combines run and compare script.</td>
                  </tr>
                {% else %}
                  <tr>
                      <th>Compare script</th>
                      <td class=\"filename\">
                          {% if problem.compareExecutable is not empty %}
                              <a href=\"{{ path('jury_executable', {'execId': problem.compareExecutable.execid}) }}\">{{ problem.compareExecutable.execid }}</a>
                          {% else %}
                              <a href=\"{{ path('jury_executable', {'execId': defaultCompareExecutable}) }}\">{{ defaultCompareExecutable }}</a>
                              (default)
                          {% endif %}
                      </td>
                  </tr>
                {% endif %}
                {% if problem.specialCompareArgs is not empty %}
                    <tr>
                        <th>Compare script arguments</th>
                        <td class=\"filename\">{{ problem.specialCompareArgs }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    </div>

    <p>
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_problem_edit', {'probId': problem.probid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_problem_delete', {'probId': problem.probid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'problem', id: problem.probid, buttonClass: 'btn-secondary'} %}
    </p>

    <h2>Contests</h2>

    {% if problem.contestProblems is empty %}
        <p class=\"nodata\">No contests defined</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"data-table table table-hover table-striped table-sm\">
                    <thead class=\"thead-light\">
                    <tr>
                        <th>CID</th>
                        <th>Contest<br/>shortname</th>
                        <th>Contest<br/>name</th>
                        <th>Problem<br/>shortname</th>
                        <th>Allow<br/>submit</th>
                        <th>Allow<br/>judge</th>
                        <th>Colour</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for contestProblem in problem.contestProblems %}
                        {% set link = path('jury_contest', {'contestId': contestProblem.cid}) %}
                        <tr>
                            <td><a href=\"{{ link }}\">c{{ contestProblem.cid }}</a></td>
                            <td><a href=\"{{ link }}\">{{ contestProblem.contest.shortname }}</a></td>
                            <td><a href=\"{{ link }}\">{{ contestProblem.contest.name }}</a></td>
                            <td><a href=\"{{ link }}\">{{ contestProblem.shortname }}</a></td>
                            <td><a href=\"{{ link }}\">{{ contestProblem.allowSubmit | printYesNo }}</a></td>
                            <td><a href=\"{{ link }}\">{{ contestProblem.allowJudge | printYesNo }}</a></td>
                            {% if contestProblem.color is empty %}
                                <td><a href=\"{{ link }}\">&nbsp;</a></td>
                            {% else %}
                                <td title=\"{{ contestProblem.color }}\">
                                    <a href=\"{{ link }}\">
                                        <div class=\"circle\" style=\"background-color: {{ contestProblem.color }}\"></div>
                                    </a>
                                </td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endif %}

    <h2>Submissions for {{ problem.name }}</h2>

    <div data-ajax-refresh-target>
        {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
    </div>

{% endblock %}
", "jury/problem.html.twig", "/domjudge/webapp/templates/jury/problem.html.twig");
    }
}
