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

/* team/partials/submission.html.twig */
class __TwigTemplate_5e147ec07c0db6cffefd353d62b9d5def6eee31f46c44b5ee445f21e189f3b3e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        // line 1
        if (((twig_test_empty((isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 1, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 1, $this->source); })()), "submission", [], "any", false, false, false, 1), "submittime", [], "any", false, false, false, 1) >= twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 1, $this->source); })()), "endtime", [], "any", false, false, false, 1))) || ((isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 1, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 1, $this->source); })()), "verified", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
";
        } else {
            // line 4
            echo "    <div class=\"container\">
        ";
            // line 5
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 5, $this->source); })()), "valid", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        ";
            }
            // line 10
            echo "
        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 16, $this->source); })()), "submission", [], "any", false, false, false, 16), "contestProblem", [], "any", false, false, false, 16), "shortname", [], "any", false, false, false, 16), "html", null, true);
            echo "</span> -
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 17, $this->source); })()), "submission", [], "any", false, false, false, 17), "contestProblem", [], "any", false, false, false, 17), "problem", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 22, $this->source); })()), "submission", [], "any", false, false, false, 22), "submittime", [], "any", false, false, false, 22), null, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 22, $this->source); })())), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 26, $this->source); })()), "submission", [], "any", false, false, false, 26), "language", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 30, $this->source); })()), "result", [], "any", false, false, false, 30) == "compiler-error")) {
                // line 31
                echo "                    <span class=\"badge badge-danger\">failed</span>
                ";
            } else {
                // line 33
                echo "                    <span class=\"badge badge-success\">successful</span>
                ";
            }
            // line 35
            echo "            </div>
        </div>

        ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 38, $this->source); })()), "result", [], "any", false, false, false, 38) != "compiler-error")) {
                // line 39
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Run result: ";
                // line 41
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 41, $this->source); })()), "result", [], "any", false, false, false, 41));
                echo "
                </div>
            </div>
        ";
            }
            // line 45
            echo "
        ";
            // line 46
            if ((isset($context["allowDownload"]) || array_key_exists("allowDownload", $context) ? $context["allowDownload"] : (function () { throw new RuntimeError('Variable "allowDownload" does not exist.', 46, $this->source); })())) {
                // line 47
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a class=\"btn btn-primary\" href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 49, $this->source); })()), "submission", [], "any", false, false, false, 49), "submitid", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-download\"></i> Download submission
                    </a>
                </div>
            </div>
        ";
            }
            // line 55
            echo "
        ";
            // line 56
            if ((((isset($context["showCompile"]) || array_key_exists("showCompile", $context) ? $context["showCompile"] : (function () { throw new RuntimeError('Variable "showCompile" does not exist.', 56, $this->source); })()) == 2) || (((isset($context["showCompile"]) || array_key_exists("showCompile", $context) ? $context["showCompile"] : (function () { throw new RuntimeError('Variable "showCompile" does not exist.', 56, $this->source); })()) == 1) && (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 56, $this->source); })()), "result", [], "any", false, false, false, 56) == "compiler-error")))) {
                // line 57
                echo "            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            ";
                // line 59
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 59, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 59))) {
                    // line 60
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 60, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 60), "html", null, true);
                    echo "</pre>
            ";
                } else {
                    // line 62
                    echo "                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            ";
                }
                // line 64
                echo "        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if (((isset($context["showSampleOutput"]) || array_key_exists("showSampleOutput", $context) ? $context["showSampleOutput"] : (function () { throw new RuntimeError('Variable "showSampleOutput" does not exist.', 66, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 66, $this->source); })()), "result", [], "any", false, false, false, 66) != "compiler-error"))) {
                // line 67
                echo "            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            ";
                // line 70
                if (twig_test_empty((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 70, $this->source); })()))) {
                    // line 71
                    echo "                <p class=\"nodata\">No sample cases available.</p>
            ";
                } else {
                    // line 73
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 73, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                        // line 74
                        echo "                    <h5 id=\"run-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 74), "rank", [], "any", false, false, false, 74), "html", null, true);
                        echo "\" class=\"text-center mt-4\">Run ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 74), "rank", [], "any", false, false, false, 74), "html", null, true);
                        echo "</h5>

                    ";
                        // line 76
                        $context["judgingRun"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 76), "judgingRuns", [], "any", false, false, false, 76), "first", [], "any", false, false, false, 76);
                        // line 77
                        echo "                    ";
                        if ((((isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 77, $this->source); })()) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 77, $this->source); })()), "runresult", [], "any", false, false, false, 77) == null))) {
                            // line 78
                            echo "                        <p class=\"nodata\">Run not finished yet.</p>
                    ";
                        } else {
                            // line 80
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 81
                            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 81, $this->source); })()), 4)) : (4)), "html", null, true);
                            echo "\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>";
                            // line 85
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 85), "description", [0 => true], "method", false, false, false, 85), "html", null, true);
                            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>";
                            // line 89
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 89, $this->source); })()), "runtime", [], "any", false, false, false, 89), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                                <span class=\"sol sol_";
                            // line 94
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 94, $this->source); })()), "runresult", [], "any", false, false, false, 94) != "correct")) {
                                echo " in";
                            }
                            echo "correct\">
                                                    ";
                            // line 95
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 95, $this->source); })()), "runresult", [], "any", false, false, false, 95), "html", null, true);
                            echo "
                                                </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h6 class=\"text-center\">Program output</h6>
                        ";
                            // line 104
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 104))) {
                                // line 105
                                echo "                            <pre class=\"output_text\">
";
                                // line 106
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 106), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 108
                                echo "                            <p class=\"nodata\">There was no program output.</p>
                        ";
                            }
                            // line 110
                            echo "
                        <h6 class=\"text-center\">Diff output</h6>
                        ";
                            // line 112
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 112))) {
                                // line 113
                                echo "                            <pre class=\"output_text\">
";
                                // line 114
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 114), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 116
                                echo "                            <p class=\"nodata\">There was no diff output.</p>
                        ";
                            }
                            // line 118
                            echo "
                        <h6 class=\"text-center\">Error output (info/debug/errors)</h6>
                        ";
                            // line 120
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 120))) {
                                // line 121
                                echo "                            <pre class=\"output_text\">
";
                                // line 122
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 122), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 124
                                echo "                            <p class=\"nodata\">There was no stderr output.</p>
                        ";
                            }
                            // line 126
                            echo "                    ";
                        }
                        // line 127
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "            ";
                }
                echo " ";
                // line 129
                echo "        ";
            }
            echo " ";
            // line 130
            echo "    </div>
";
        }
        // line 131
        echo " ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 131,  312 => 130,  308 => 129,  304 => 128,  298 => 127,  295 => 126,  291 => 124,  286 => 122,  283 => 121,  281 => 120,  277 => 118,  273 => 116,  268 => 114,  265 => 113,  263 => 112,  259 => 110,  255 => 108,  250 => 106,  247 => 105,  245 => 104,  233 => 95,  227 => 94,  219 => 89,  212 => 85,  205 => 81,  202 => 80,  198 => 78,  195 => 77,  193 => 76,  185 => 74,  180 => 73,  176 => 71,  174 => 70,  169 => 67,  167 => 66,  164 => 65,  161 => 64,  157 => 62,  151 => 60,  149 => 59,  145 => 57,  143 => 56,  140 => 55,  131 => 49,  127 => 47,  125 => 46,  122 => 45,  115 => 41,  111 => 39,  109 => 38,  104 => 35,  100 => 33,  96 => 31,  94 => 30,  87 => 26,  80 => 22,  72 => 17,  68 => 16,  60 => 10,  54 => 6,  52 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if judging is empty or judging.submission.submittime >= current_team_contest.endtime or (verificationRequired and not judging.verified) %}
    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
{% else %}
    <div class=\"container\">
        {% if not judging.valid %}
            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        {% endif %}

        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            {{ judging.submission.contestProblem.shortname }}</span> -
                    {{ judging.submission.contestProblem.problem.name }}
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>{{ judging.submission.submittime | printtime(null, current_team_contest) }}</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>{{ judging.submission.language.name }}</b>
            </div>
            <div class=\"p-2\">
                Compilation:
                {% if judging.result == 'compiler-error' %}
                    <span class=\"badge badge-danger\">failed</span>
                {% else %}
                    <span class=\"badge badge-success\">successful</span>
                {% endif %}
            </div>
        </div>

        {% if judging.result != 'compiler-error' %}
            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Run result: {{ judging.result | printResult }}
                </div>
            </div>
        {% endif %}

        {% if allowDownload %}
            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a class=\"btn btn-primary\" href=\"{{ path('team_submission_download', {'submitId': judging.submission.submitid}) }}\">
                        <i class=\"fa fa-download\"></i> Download submission
                    </a>
                </div>
            </div>
        {% endif %}

        {% if showCompile == 2 or (showCompile == 1 and judging.result == 'compiler-error') %}
            <hr/>
            <h4 class=\"text-center\">Compilation output</h4>
            {% if judging.outputCompile(true) is not empty %}
                <pre class=\"output_text pre-scrollable\">{{ judging.outputCompile(true) }}</pre>
            {% else %}
                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            {% endif %}
        {% endif %}

        {% if showSampleOutput and judging.result != 'compiler-error' %}
            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            {% if runs is empty %}
                <p class=\"nodata\">No sample cases available.</p>
            {% else %}
                {% for run in runs %}
                    <h5 id=\"run-{{ run.0.rank }}\" class=\"text-center mt-4\">Run {{ run.0.rank }}</h5>

                    {% set judgingRun = run.0.judgingRuns.first %}
                    {% if judgingRun == null or judgingRun.runresult == null %}
                        <p class=\"nodata\">Run not finished yet.</p>
                    {% else %}
                        <div class=\"row\">
                            <div class=\"col-md-{{ size|default(4) }}\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ run.0.description(true) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>{{ judgingRun.runtime }} sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                                <span class=\"sol sol_{% if judgingRun.runresult != 'correct' %} in{% endif %}correct\">
                                                    {{ judgingRun.runresult }}
                                                </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h6 class=\"text-center\">Program output</h6>
                        {% if run.output_run is not empty %}
                            <pre class=\"output_text\">
{{ run.output_run }}</pre>
                        {% else %}
                            <p class=\"nodata\">There was no program output.</p>
                        {% endif %}

                        <h6 class=\"text-center\">Diff output</h6>
                        {% if run.output_diff is not empty %}
                            <pre class=\"output_text\">
{{ run.output_diff }}</pre>
                        {% else %}
                            <p class=\"nodata\">There was no diff output.</p>
                        {% endif %}

                        <h6 class=\"text-center\">Error output (info/debug/errors)</h6>
                        {% if run.output_error is not empty %}
                            <pre class=\"output_text\">
{{ run.output_error }}</pre>
                        {% else %}
                            <p class=\"nodata\">There was no stderr output.</p>
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %} {# not runs is empty #}
        {% endif %} {# showSampleOutput and judging.result != 'compiler-error' #}
    </div>
{% endif %} {# not (judging is empty or judging.submission.submittime >= current_team_contest.endtime or (verificationRequired and not judging.verified)) #}
", "team/partials/submission.html.twig", "/domjudge/webapp/templates/team/partials/submission.html.twig");
    }
}
