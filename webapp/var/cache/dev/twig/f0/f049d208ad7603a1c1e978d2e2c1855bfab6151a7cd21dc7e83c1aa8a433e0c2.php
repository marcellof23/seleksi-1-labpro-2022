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

/* jury/submission.html.twig */
class __TwigTemplate_930743b57d3f4ca9b35802a6ae9a356a4ef9fe9f80f4e826c0e2eb469cb35629 extends \Twig\Template
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
        // line 2
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
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

        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 4, $this->source); })()), "submitid", [], "any", false, false, false, 4), "html", null, true);
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 27, $this->source); })()), "externalJudgements", [], "any", false, false, false, 27), "empty", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["externalJudgement"] = null;
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 30, $this->source); })()), "externalJudgements", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30);
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 38
        echo "
    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 41, $this->source); })()), "submitid", [], "any", false, false, false, 41), "html", null, true);
        echo "
            ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 42, $this->source); })()), "originalSubmission", [], "any", false, false, false, 42)) {
            // line 43
            echo "                ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 43, $this->source); })()), "originalSubmission", [], "any", false, false, false, 43), "submitid", [], "any", false, false, false, 43)]);
            // line 44
            echo "                (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["origSubmissionUrl"]) || array_key_exists("origSubmissionUrl", $context) ? $context["origSubmissionUrl"] : (function () { throw new RuntimeError('Variable "origSubmissionUrl" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 44, $this->source); })()), "originalSubmission", [], "any", false, false, false, 44), "submitid", [], "any", false, false, false, 44), "html", null, true);
            echo "</a>)
            ";
        }
        // line 46
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 46, $this->source); })()), "resubmissions", [], "any", false, false, false, 46))) {
            // line 47
            echo "                (resubmitted as";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 48, $this->source); })()), "resubmissions", [], "any", false, false, false, 48));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 49
                $context["resubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 49)]);
                // line 50
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["resubmissionUrl"]) || array_key_exists("resubmissionUrl", $context) ? $context["resubmissionUrl"] : (function () { throw new RuntimeError('Variable "resubmissionUrl" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 50), "html", null, true);
                echo "</a>";
                // line 51
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo ")
            ";
        }
        // line 55
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 55, $this->source); })()), "valid", [], "any", false, false, false, 55)) {
            // line 56
            echo "                (ignored)
            ";
        }
        // line 58
        echo "        </h1>
        ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 60, $this->source); })()), "valid", [], "any", false, false, false, 60)) {
                // line 61
                echo "                ";
                $context["action"] = "ignore";
                // line 62
                echo "            ";
            } else {
                // line 63
                echo "                ";
                $context["action"] = "unignore";
                // line 64
                echo "            ";
            }
            // line 65
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 65, $this->source); })()), "submitid", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"";
            // line 67
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 67, $this->source); })()), "valid", [], "any", false, false, false, 67)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 69, $this->source); })())), "html", null, true);
            echo " this submission\"
                       onclick=\"return confirm('Really ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 70, $this->source); })()), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 70, $this->source); })()), "submitid", [], "any", false, false, false, 70), "html", null, true);
            echo "?');\"/>
            </form>
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 74)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 74, $this->source); })()), "submitid", [], "any", false, false, false, 74)]));
        // line 75
        echo "    </div>

    ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 77, $this->source); })()), "valid", [], "any", false, false, false, 77)) {
            // line 78
            echo "        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 81, $this->source); })()), "contestProblem", [], "any", false, false, false, 81)) {
            // line 82
            echo "        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    ";
        }
        // line 86
        echo "
    ";
        // line 88
        echo "    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 91, $this->source); })()), "teamid", [], "any", false, false, false, 91), "cid" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 91, $this->source); })()), "cid", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\">
                ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 92, $this->source); })()), "team", [], "any", false, false, false, 92), "effectiveName", [], "any", false, false, false, 92), "html", null, true);
        echo " (t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 92, $this->source); })()), "teamid", [], "any", false, false, false, 92), "html", null, true);
        echo ")
            </a>
        </span>

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 98, $this->source); })()), "cid", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">
                ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 99, $this->source); })()), "contest", [], "any", false, false, false, 99), "shortname", [], "any", false, false, false, 99), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 105, $this->source); })()), "probid", [], "any", false, false, false, 105)]), "html", null, true);
        echo "\">
                ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 106, $this->source); })()), "contestProblem", [], "any", false, false, false, 106)) {
            // line 107
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 107, $this->source); })()), "contestProblem", [], "any", false, false, false, 107), "shortname", [], "any", false, false, false, 107), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 107, $this->source); })()), "problem", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            echo "
                ";
        } else {
            // line 109
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 109, $this->source); })()), "problem", [], "any", false, false, false, 109), "name", [], "any", false, false, false, 109), "html", null, true);
            echo "
                ";
        }
        // line 111
        echo "            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 116, $this->source); })()), "langid", [], "any", false, false, false, 116)]), "html", null, true);
        echo "\">
                ";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 117, $this->source); })()), "language", [], "any", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 123, $this->source); })()), "submittime", [], "any", false, false, false, 123), "%Y-%m-%d %H:%M:%S (%Z)"), "html", null, true);
        echo "\">
                ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 124, $this->source); })()), "submittime", [], "any", false, false, false, 124), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 124, $this->source); })()), "contest", [], "any", false, false, false, 124)), "html", null, true);
        echo "
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            ";
        // line 130
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 130, $this->source); })()), "problem", [], "any", false, false, false, 130), "timelimit", [], "any", false, false, false, 130) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 130, $this->source); })()), "language", [], "any", false, false, false, 130), "timeFactor", [], "any", false, false, false, 130)), "html", null, true);
        echo "s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 135, $this->source); })()), "submitid", [], "any", false, false, false, 135)]), "html", null, true);
        echo "\">
                View source code
            </a>
        </span>

        ";
        // line 140
        if ( !twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 140, $this->source); })()))) {
            // line 141
            echo "            <span>
                <i class=\"fas fa-link\" title=\"External link:\"></i>
                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 143, $this->source); })())), "html", null, true);
            echo "\" target=\"_blank\">
                    View in external CCS
                </a>
            </span>
        ";
        }
        // line 148
        echo "    </div>

    ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 150, $this->source); })()), "externalid", [], "any", false, false, false, 150)) {
            // line 151
            echo "        <div class=\"mb-2\">
            External ID:
            ";
            // line 153
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 153, $this->source); })()))) {
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 154, $this->source); })()), "externalid", [], "any", false, false, false, 154), "html", null, true);
            } else {
                // line 156
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 156, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 157, $this->source); })()), "externalid", [], "any", false, false, false, 157), "html", null, true);
                // line 158
                echo "</a>";
            }
            // line 160
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 160, $this->source); })()))) {
                // line 161
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 161, $this->source); })()), "result", [], "any", false, false, false, 161));
                echo "
            ";
            }
            // line 163
            echo "        </div>
    ";
        }
        // line 165
        echo "
    ";
        // line 166
        if ((((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 166, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 166, $this->source); })()), "result", [], "any", false, false, false, 166))) &&  !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 166, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 166, $this->source); })()), "result", [], "any", false, false, false, 166))) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 166, $this->source); })()), "result", [], "any", false, false, false, 166) != twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 166, $this->source); })()), "result", [], "any", false, false, false, 166)))) {
            // line 167
            echo "        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                ";
            // line 172
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 172, $this->source); })()))) {
                // line 173
                echo "                    ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 173, $this->source); })()), "result", [], "any", false, false, false, 173));
                echo " by the external CCS
                ";
            } else {
                // line 175
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 175, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 176
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 176, $this->source); })()), "result", [], "any", false, false, false, 176));
                echo " by the external CCS
                    </a>
                ";
            }
            // line 179
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 179, $this->source); })()), "result", [], "any", false, false, false, 179));
            echo "
                by DOMjudge.
            </p>
        </div>

        ";
            // line 184
            $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 184)->display(twig_array_merge($context, ["label" => "Shadow difference verified", "judging" =>             // line 186
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 186, $this->source); })()), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_difference_verify", ["extjudgementid" => twig_get_attribute($this->env, $this->source,             // line 187
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 187, $this->source); })()), "extjudgementid", [], "any", false, false, false, 187)]), "show_form" => true, "show_icat" => false]));
            // line 190
            echo "    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if ((( !(isset($context["sameTestcaseIds"]) || array_key_exists("sameTestcaseIds", $context) ? $context["sameTestcaseIds"] : (function () { throw new RuntimeError('Variable "sameTestcaseIds" does not exist.', 192, $this->source); })()) &&  !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 192, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 192, $this->source); })()), "result", [], "any", false, false, false, 192)))) {
            // line 193
            echo "        <div class=\"alert alert-danger\">The problem's testcases have changed since this judging has been performed. We recommend rejudging the whole problem.</div>
    ";
        }
        // line 195
        echo "
    ";
        // line 196
        if (((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 196, $this->source); })())) > 1) || ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 196, $this->source); })())) == 1) && (null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 196, $this->source); })()))))) {
            // line 197
            echo "        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 211, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 212
                echo "                ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 212, $this->source); })()), "submitid", [], "any", false, false, false, 212), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 212)]);
                // line 213
                echo "                <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 213)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                    <td>
                        <a href=\"";
                // line 215
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 215, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 216
                if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 216, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 216, $this->source); })()), "judgingid", [], "any", false, false, false, 216) == twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 216)))) {
                    // line 217
                    echo "                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            ";
                } else {
                    // line 219
                    echo "                                &nbsp;
                            ";
                }
                // line 221
                echo "                        </a>
                    </td>
                    <td><a href=\"";
                // line 223
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 223, $this->source); })()), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 223), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 224
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 224, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 224), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 224, $this->source); })()), "contest", [], "any", false, false, false, 224)), "html", null, true);
                echo "</a></td>
                    <td>
                        <a href=\"";
                // line 226
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 226, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 227
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 227, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 227), [], "array", false, false, false, 227))) {
                    // line 228
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 228, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 228), [], "array", false, false, false, 228), "html", null, true);
                    echo "s
                            ";
                }
                // line 230
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 233
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 233, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 234
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 234))) {
                    // line 235
                    echo "                                ";
                    echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "judgehost", [], "any", false, false, false, 235), "hostname", [], "any", false, false, false, 235));
                    echo "
                            ";
                }
                // line 237
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 240
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 240, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 241
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 241), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 241), true);
                echo "
                            ";
                // line 242
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 242)) {
                    // line 243
                    echo "                                (&hellip;)
                            ";
                }
                // line 245
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 248
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 248, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 249
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 249))) {
                    // line 250
                    echo "                                r";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudgingid", [], "any", false, false, false, 250), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 250), "reason", [], "any", false, false, false, 250), "html", null, true);
                    echo ")
                            ";
                }
                // line 252
                echo "                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "            </tbody>
        </table>
    ";
        }
        // line 259
        echo "
    ";
        // line 260
        if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 260, $this->source); })()))) {
            // line 261
            echo "        <div class=\"alert alert-warning\">Not (re)judged yet</div>

        ";
            // line 263
            if ( !twig_test_empty((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 263, $this->source); })()))) {
                // line 264
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 264, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 265
                    echo "                <div class=\"alert alert-danger\">";
                    echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 267
                echo "        ";
            }
            // line 268
            echo "    ";
        }
        // line 269
        echo "
    ";
        // line 270
        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 270, $this->source); })())) ||  !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 270, $this->source); })())))) {
            // line 271
            echo "
        ";
            // line 272
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 272)->display($context);
            // line 273
            echo "
        ";
            // line 274
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 274, $this->source); })()))) {
                // line 275
                echo "
            ";
                // line 277
                echo "            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j";
                // line 279
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 279, $this->source); })()), "judgingid", [], "any", false, false, false, 279), "html", null, true);
                echo "
                    ";
                // line 280
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 280, $this->source); })()), "rejudging", [], "any", false, false, false, 280)) {
                    // line 281
                    echo "                        (rejudging
                        <a href=\"";
                    // line 282
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 282, $this->source); })()), "rejudgingid", [], "any", false, false, false, 282)]), "html", null, true);
                    echo "\">
                            r";
                    // line 283
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 283, $this->source); })()), "rejudgingid", [], "any", false, false, false, 283), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 283, $this->source); })()), "rejudging", [], "any", false, false, false, 283), "reason", [], "any", false, false, false, 283), "html", null, true);
                    echo ")
                    ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 284
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 284, $this->source); })()), "valid", [], "any", false, false, false, 284)) {
                    // line 285
                    echo "                        (Invalid)
                    ";
                }
                // line 287
                echo "                </h2>
                &nbsp;
                ";
                // line 289
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 289, $this->source); })()), "verified", [], "any", false, false, false, 289)) {
                    // line 290
                    echo "                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 290, $this->source); })()), "submitid", [], "any", false, false, false, 290), "jid" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 290, $this->source); })()), "judgingid", [], "any", false, false, false, 290)]), "html", null, true);
                    echo "\"
                          method=\"post\" style=\"display: inline;\">
                        ";
                    // line 292
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 292, $this->source); })()), "juryMember", [], "any", false, false, false, 292))) {
                        // line 293
                        echo "                            (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 293, $this->source); })()), "juryMember", [], "any", false, false, false, 293), "html", null, true);
                        echo ")
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        ";
                    }
                    // line 296
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 296, $this->source); })()), "user", [], "any", false, false, false, 296), "username", [], "any", false, false, false, 296) == twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 296, $this->source); })()), "juryMember", [], "any", false, false, false, 296))) {
                        // line 297
                        echo "                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    } else {
                        // line 299
                        echo "                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    }
                    // line 301
                    echo "                    </form>
                ";
                }
                // line 303
                echo "            </div>
        ";
            }
            // line 305
            echo "
        <div class=\"mb-2\">
            <div>
                Result:
                ";
            // line 309
            if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 309, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 309, $this->source); })()), "result", [], "any", false, false, false, 309)))) {
                // line 310
                if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 310, $this->source); })()), "judgehost", [], "any", false, false, false, 310)) {
                    // line 311
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 313
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 316
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 316, $this->source); })()), "result", [], "any", false, false, false, 316));
            }
            // line 318
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 318, $this->source); })()), "stillBusy", [], "any", false, false, false, 318)) {
                // line 319
                echo "(&hellip;)";
            }
            // line 321
            if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 321, $this->source); })()))) {
                // line 322
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 322, $this->source); })()), "submitid", [], "any", false, false, false, 322)]);
                // line 323
                echo "<span class=\"lastresult\">
                    (<a href=\"";
                // line 324
                echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 324, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 324, $this->source); })()), "submitid", [], "any", false, false, false, 324), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 324, $this->source); })()), "result", [], "any", false, false, false, 324), "html", null, true);
                echo ")";
                // line 325
                echo "</span>";
            }
            // line 327
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 327, $this->source); })()))) {
                // line 328
                echo "                    (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 328, $this->source); })()), "result", [], "any", false, false, false, 328));
                echo ")";
            }
            // line 330
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 330, $this->source); })()))) {
                // line 331
                echo ", Judgehost:
                    ";
                // line 332
                $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["hostname" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 332, $this->source); })()), "judgehost", [], "any", false, false, false, 332), "hostname", [], "any", false, false, false, 332)]);
                // line 333
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["judgehostLink"]) || array_key_exists("judgehostLink", $context) ? $context["judgehostLink"] : (function () { throw new RuntimeError('Variable "judgehostLink" does not exist.', 333, $this->source); })()), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 333, $this->source); })()), "judgehost", [], "any", false, false, false, 333), "hostname", [], "any", false, false, false, 333));
                echo "</a>,
                    <span class=\"judgetime\">Judging started: ";
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 334, $this->source); })()), "starttime", [], "any", false, false, false, 334), "%H:%M:%S"), "html", null, true);
                // line 335
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 335, $this->source); })()), "endtime", [], "any", false, false, false, 335)) {
                    // line 336
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 336, $this->source); })()), "starttime", [], "any", false, false, false, 336), twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 336, $this->source); })()), "endtime", [], "any", false, false, false, 336)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 337
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 337, $this->source); })()), "valid", [], "any", false, false, false, 337) || twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 337, $this->source); })()), "rejudging", [], "any", false, false, false, 337))) {
                    // line 338
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 338, $this->source); })()), "starttime", [], "any", false, false, false, 338)), "html", null, true);
                    echo "]";
                } else {
                    // line 340
                    echo "&nbsp;[aborted]";
                }
                // line 342
                echo "</span>
                ";
            }
            // line 344
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 344, $this->source); })()))) {
                // line 345
                echo "                    <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 345, $this->source); })()), "starttime", [], "any", false, false, false, 345), "%H:%M:%S"), "html", null, true);
                // line 346
                if (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 346, $this->source); })()), "endtime", [], "any", false, false, false, 346)) {
                    // line 347
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 347, $this->source); })()), "starttime", [], "any", false, false, false, 347), twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 347, $this->source); })()), "endtime", [], "any", false, false, false, 347)), "html", null, true);
                    echo "s";
                } else {
                    // line 349
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 349, $this->source); })()), "starttime", [], "any", false, false, false, 349)), "html", null, true);
                    echo "]";
                }
                // line 351
                echo ")</span>";
            }
            // line 353
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 353, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 353, $this->source); })()), "result", [], "any", false, false, false, 353) != "compiler-error"))) {
                // line 354
                echo ", max/sum runtime:
                    ";
                // line 355
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 355, $this->source); })()), "maxRuntime", [], "any", false, false, false, 355), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 355, $this->source); })()), "sumRuntime", [], "any", false, false, false, 355), 2, ".", ""), "html", null, true);
                echo "s";
                // line 356
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 356, $this->source); })()))) {
                    // line 357
                    echo "<span class=\"lastruntime\">
                        (<a href=\"";
                    // line 358
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 358, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 358, $this->source); })()), "submitid", [], "any", false, false, false, 358), "html", null, true);
                    echo "</a>:
                            ";
                    // line 359
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 359, $this->source); })()), "maxRuntime", [], "any", false, false, false, 359), 2, ".", ""), "html", null, true);
                    // line 360
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 360, $this->source); })()), "sumRuntime", [], "any", false, false, false, 360), 2, ".", ""), "html", null, true);
                    echo "s)
                    </span>";
                }
            }
            // line 364
            if ((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 364, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 364, $this->source); })()), "result", [], "any", false, false, false, 364) != "compiler-error")) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 364, $this->source); })()), "result", [], "any", false, false, false, 364) != null))) {
                // line 365
                echo ", external max/sum runtime:
                    ";
                // line 366
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 366, $this->source); })()), "maxRuntime", [], "any", false, false, false, 366), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 366, $this->source); })()), "sumRuntime", [], "any", false, false, false, 366), 2, ".", ""), "html", null, true);
                echo "s
                ";
            }
            // line 368
            echo "            </div>

            ";
            // line 371
            echo "            ";
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 371, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 371, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 371, $this->source); })()), "result", [], "any", false, false, false, 371) != "compiler-error")))) {
                // line 372
                echo "                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            ";
                // line 376
                if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 376, $this->source); })()))) {
                    // line 377
                    echo "                                ";
                    $context["judgingDone"] = false;
                    // line 378
                    echo "                            ";
                } else {
                    // line 379
                    echo "                                ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 379, $this->source); })()), "endtime", [], "any", false, false, false, 379));
                    // line 380
                    echo "                            ";
                }
                // line 381
                echo "                            ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 381, $this->source); })()), (isset($context["judgingDone"]) || array_key_exists("judgingDone", $context) ? $context["judgingDone"] : (function () { throw new RuntimeError('Variable "judgingDone" does not exist.', 381, $this->source); })()));
                echo "
                        </td>
                    </tr>
                    ";
                // line 384
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 384, $this->source); })()))) {
                    // line 385
                    echo "                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"";
                    // line 387
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 387, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 387, $this->source); })()), "submitid", [], "any", false, false, false, 387), "html", null, true);
                    echo "</a> runs:
                            </td>
                            <td>
                                ";
                    // line 390
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["lastRuns"]) || array_key_exists("lastRuns", $context) ? $context["lastRuns"] : (function () { throw new RuntimeError('Variable "lastRuns" does not exist.', 390, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 390, $this->source); })()), "endtime", [], "any", false, false, false, 390)));
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 394
                echo "                    ";
                if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 394, $this->source); })()))) {
                    // line 395
                    echo "                        <tr>
                            <td>external runs:</td>
                            <td>
                                ";
                    // line 398
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 398, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 398, $this->source); })()), "endtime", [], "any", false, false, false, 398)), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 402
                echo "                </table>

                ";
                // line 405
                echo "                ";
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 405, $this->source); })()))) {
                    // line 406
                    echo "                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"";
                    // line 408
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 408, $this->source); })()), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 408, $this->source); })()), "submitid", [], "any", false, false, false, 408), "html", null, true);
                    echo "</a>
                        ";
                    // line 409
                    if (twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 409, $this->source); })()), "verifyComment", [], "any", false, false, false, 409)) {
                        // line 410
                        echo "                            <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 410, $this->source); })()), "verifyComment", [], "any", false, false, false, 410), "html", null, true);
                        echo "')</span>
                        ";
                    }
                    // line 412
                    echo "                </span>
                ";
                }
                // line 414
                echo "            ";
            }
            // line 415
            echo "        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        ";
            // line 424
            echo "        ";
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 424, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 424, $this->source); })()), "result", [], "any", false, false, false, 424)))) {
                // line 425
                echo "            ";
                $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 425)->display(twig_array_merge($context, ["label" => "Verified", "judging" =>                 // line 427
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 427, $this->source); })()), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source,                 // line 428
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 428, $this->source); })()), "judgingid", [], "any", false, false, false, 428)]), "show_form" =>  !((                // line 429
(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 429, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 429, $this->source); })()), "verified", [], "any", false, false, false, 429)) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 429, $this->source); })()), "valid", [], "any", false, false, false, 429)), "show_icat" => true]));
                // line 431
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 431, $this->source); })()), "contestProblem", [], "any", false, false, false, 431)) {
                    // line 432
                    echo "                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '";
                    // line 436
                    echo twig_escape_filter($this->env, (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 436, $this->source); })()), "html", null, true);
                    echo "/insert_entry.php',
                                '";
                    // line 437
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 437, $this->source); })()), "user", [], "any", false, false, false, 437), "username", [], "any", false, false, false, 437), "html", null, true);
                    echo "',
                                '";
                    // line 438
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 438, $this->source); })()), "teamid", [], "any", false, false, false, 438), "html", null, true);
                    echo "',
                                '";
                    // line 439
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 439, $this->source); })()), "contestProblem", [], "any", false, false, false, 439), "shortname", [], "any", false, false, false, 439), "html", null, true);
                    echo "',
                                '";
                    // line 440
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 440, $this->source); })()), "externalid", [], "any", false, false, false, 440), "html", null, true);
                    echo "'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            ";
                }
                // line 448
                echo "        ";
            } elseif ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 448, $this->source); })()))) {
                // line 449
                echo "            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        ";
            }
            // line 451
            echo "
        ";
            // line 453
            echo "        ";
            $context["color"] = "#6666FF";
            // line 454
            echo "        ";
            $context["message"] = "not finished yet";
            // line 455
            echo "        ";
            $context["output"] = null;
            // line 456
            echo "        ";
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 456, $this->source); })()))) {
                // line 457
                echo "            ";
                $context["output"] = twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 457, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 457);
                // line 458
                echo "        ";
            }
            // line 459
            echo "        ";
            if ( !(null === (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 459, $this->source); })()))) {
                // line 460
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 460, $this->source); })()), "result", [], "any", false, false, false, 460) == "compiler-error")) {
                    // line 461
                    echo "                ";
                    $context["color"] = "red";
                    // line 462
                    echo "                ";
                    $context["message"] = "unsuccessful";
                    // line 463
                    echo "            ";
                } else {
                    // line 464
                    echo "                ";
                    $context["color"] = "#1daa1d";
                    // line 465
                    echo "                ";
                    $context["message"] = "successful";
                    // line 466
                    echo "                ";
                    if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 466, $this->source); })()))) {
                        // line 467
                        echo "                    ";
                        $context["message"] = ((((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 467, $this->source); })()) . " (with ") . $this->extensions['App\Twig\TwigExtension']->lineCount((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 467, $this->source); })()))) . " line(s) of output)");
                        // line 468
                        echo "                ";
                    }
                    // line 469
                    echo "            ";
                }
                // line 470
                echo "        ";
            }
            // line 471
            echo "        ";
            $context["header"] = (((("Compilation <span style=\"color: " . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 471, $this->source); })())) . ";\">") . (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 471, $this->source); })())) . "</span>");
            // line 472
            echo "        <h3>
            ";
            // line 473
            if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 473, $this->source); })()))) {
                // line 474
                echo "                <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                    ";
                // line 475
                echo (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 475, $this->source); })());
                echo "
                </a>
            ";
            } else {
                // line 478
                echo "                ";
                echo (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 478, $this->source); })());
                echo "
            ";
            }
            // line 480
            echo "        </h3>
        ";
            // line 481
            if (twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 481, $this->source); })()))) {
                // line 482
                echo "            <p class=\"nodata";
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 482, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 482, $this->source); })()), "result", [], "any", false, false, false, 482) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        ";
            } else {
                // line 485
                echo "            <pre class=\"output_text ";
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 485, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 485, $this->source); })()), "result", [], "any", false, false, false, 485) != "compiler-error"))) {
                    echo " d-none";
                }
                echo "\"
                id=\"detailcompile\">";
                // line 486
                echo twig_escape_filter($this->env, (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 486, $this->source); })()), "html", null, true);
                echo "</pre>
        ";
            }
            // line 488
            echo "
        ";
            // line 489
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 489, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 489, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 489, $this->source); })()), "result", [], "any", false, false, false, 489) != "compiler-error")))) {
                // line 490
                echo "            ";
                // line 491
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 491, $this->source); })()));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 492
                    echo "                ";
                    $context["externalRun"] = null;
                    // line 493
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 493)) {
                        // line 494
                        echo "                    ";
                        $context["externalRun"] = twig_get_attribute($this->env, $this->source, (isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 494, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 494);
                        // line 495
                        echo "                ";
                    }
                    // line 496
                    echo "                <div id=\"run-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 496), "html", null, true);
                    echo "\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run ";
                    // line 498
                    if ((twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 498) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 498), "runresult", [], "any", false, false, false, 498) == "correct"))) {
                        echo "run_correct";
                    }
                    echo "\">
                    <div class=\"card-header\">
                        Run #";
                    // line 500
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 500), "html", null, true);
                    echo "
                        ";
                    // line 501
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 501))) {
                        // line 502
                        echo "                            | <span style=\"font-family:monospace;\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 502), "html", null, true);
                        echo ".in</span>
                        ";
                    } else {
                        // line 504
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 504))) {
                            // line 505
                            echo "                                | ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 505), "html", null, true);
                            echo "
                            ";
                        }
                        // line 507
                        echo "                        ";
                    }
                    // line 508
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 508))) {
                        // line 509
                        echo "                            |
                            <span class=\"sol ";
                        // line 510
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 510), "runresult", [], "any", false, false, false, 510) == "correct")) {
                            echo "sol_correct";
                        } else {
                            echo "sol_incorrect";
                        }
                        echo "\">
                                ";
                        // line 511
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 511), "runresult", [], "any", false, false, false, 511), "html", null, true);
                        echo "
                            </span>
                            ";
                        // line 513
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 513), "runresult", [], "any", false, false, false, 513) == "timelimit")) {
                            // line 514
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 514, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 514), "terminated", [], "any", false, false, false, 514)) {
                                // line 515
                                echo "                                    <b>(terminated)</b>
                                ";
                            } else {
                                // line 517
                                echo "                                    <b>(finished late)</b>
                                ";
                            }
                            // line 519
                            echo "                            ";
                        }
                        // line 520
                        echo "                        ";
                    }
                    // line 521
                    echo "                        ";
                    if (( !(null === (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 521, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 521, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 521)))) {
                        // line 522
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 522, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 522))) {
                            // line 523
                            echo "                                (external:
                                <span class=\"sol ";
                            // line 524
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 524, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 524), "result", [], "any", false, false, false, 524) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 525
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 525, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 525), "result", [], "any", false, false, false, 525), "html", null, true);
                            // line 526
                            echo "</span>";
                            // line 527
                            echo ")
                            ";
                        }
                        // line 529
                        echo "                        ";
                    }
                    // line 530
                    echo "                        <span style=\"float: right;\">
                            <a href=\"";
                    // line 531
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 531, $this->source); })()), "probid", [], "any", false, false, false, 531), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 531), "type" => "input"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"";
                    // line 537
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 537, $this->source); })()), "probid", [], "any", false, false, false, 537), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 537), "type" => "output"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            ";
                    // line 543
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 543))) {
                        // line 544
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 544, $this->source); })()), "submitid", [], "any", false, false, false, 544), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 544), "runid", [], "any", false, false, false, 544), "contest" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 544, $this->source); })()), "cid", [], "any", false, false, false, 544)]), "html", null, true);
                        echo "\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        Team Output
                                    </button>
                                </a>
                            ";
                    }
                    // line 551
                    echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                    ";
                    // line 554
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 554))) {
                        // line 555
                        echo "                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        ";
                        // line 557
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 557, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 557), "cpu_time", [], "any", false, false, false, 557), "html", null, true);
                        echo "s CPU
                        ";
                        // line 558
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 558, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 558), "metadata", [], "any", false, false, false, 558))) {
                            // line 559
                            echo "                            , ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 559, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 559), "wall_time", [], "any", false, false, false, 559), "html", null, true);
                            echo "s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            ";
                            // line 561
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 561, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 561), "memory", [], "any", false, false, false, 561), "html", null, true);
                            echo "
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            ";
                            // line 564
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 564, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 564), "exitcode", [], "any", false, false, false, 564), "html", null, true);
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 564, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 564), "signal", [], "any", false, false, false, 564) > 0)) {
                                echo ",
                                signal: ";
                                // line 565
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 565, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 565), "signal", [], "any", false, false, false, 565), "html", null, true);
                                echo "
                            ";
                            }
                            // line 567
                            echo "                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-";
                            // line 568
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            <div class=\"collapse\" id=\"collapseExample-";
                            // line 572
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\">
                                  <div class=\"card card-body output_text\">";
                            // line 573
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 573, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 573), "metadata", [], "any", false, false, false, 573), "html", null, true);
                            echo "</div>
                            </div>
                        ";
                        }
                        // line 576
                        echo "                    </span>
                    ";
                    }
                    // line 578
                    echo "                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 578))) {
                        // line 579
                        echo "                        <p><em>
                            ";
                        // line 580
                        echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 580));
                        echo "
                        </em></p>
                    ";
                    }
                    // line 583
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 583, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 583), "image_thumb", [], "any", false, false, false, 583)) {
                        // line 584
                        echo "                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            ";
                        // line 585
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 585, $this->source); })()), "probid", [], "any", false, false, false, 585), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 585), "type" => "image"]);
                        // line 586
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 586, $this->source); })()), "html", null, true);
                        echo "\">
                                <img src=\"data:image/";
                        // line 587
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 587), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 587, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 587), "image_thumb", [], "any", false, false, false, 587)), "html", null, true);
                        echo "\"/>
                            </a>
                        </span>
                    ";
                    }
                    // line 591
                    echo "
                    ";
                    // line 592
                    $context["runDone"] = false;
                    // line 593
                    echo "                    ";
                    if ((( !(null === $context["run"]) &&  !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 593))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 593), "runresult", [], "any", false, false, false, 593)))) {
                        // line 594
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 595
                        echo "                    ";
                    }
                    // line 596
                    echo "                    ";
                    if ( !(isset($context["runDone"]) || array_key_exists("runDone", $context) ? $context["runDone"] : (function () { throw new RuntimeError('Variable "runDone" does not exist.', 596, $this->source); })())) {
                        // line 597
                        echo "                        <p class=\"nodata\">
                            ";
                        // line 598
                        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 598, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 598, $this->source); })()), "result", [], "any", false, false, false, 598))) {
                            // line 599
                            echo "                                Run not used for final result.
                            ";
                        } else {
                            // line 601
                            echo "                                Run not started/finished yet.
                            ";
                        }
                        // line 603
                        echo "                        </p>
                    ";
                    } else {
                        // line 605
                        echo "                        ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 605)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 605), "runresult", [], "any", false, false, false, 605)))) {
                            // line 606
                            echo "                            ";
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 606, $this->source); })())) {
                                // line 607
                                echo "                                <h5>Validator output</h5>
                                ";
                                // line 608
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 608, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 608), "output_diff", [], "any", false, false, false, 608))) {
                                    // line 609
                                    echo "                                    <p class=\"nodata\">There was no validator output.</p>
                                ";
                                } else {
                                    // line 611
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 612
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 612, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 612), "output_diff", [], "any", false, false, false, 612));
                                    echo "</pre>
                                ";
                                }
                                // line 614
                                echo "                            ";
                            } else {
                                // line 615
                                echo "                                <h5>Diff output</h5>
                                ";
                                // line 616
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 616, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 616), "output_diff", [], "any", false, false, false, 616))) {
                                    // line 617
                                    echo "                                    <p class=\"nodata\">There was no diff output.</p>
                                ";
                                } else {
                                    // line 619
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 620
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 620, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 620), "output_diff", [], "any", false, false, false, 620));
                                    echo "</pre>
                                ";
                                }
                                // line 622
                                echo "
                                ";
                                // line 623
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 623), "runresult", [], "any", false, false, false, 623) != "correct")) {
                                    // line 624
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff(twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 624, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 624));
                                    echo "
                                ";
                                }
                                // line 626
                                echo "                            ";
                            }
                            // line 627
                            echo "
                            ";
                            // line 628
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 628, $this->source); })())) {
                                // line 629
                                echo "                                <h5>Validator/Submission interaction</h5>
                                ";
                                // line 630
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 630, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 630), "output_run", [], "any", false, false, false, 630))) {
                                    // line 631
                                    echo "                                    <p class=\"nodata\">There was no interaction log.</p>
                                ";
                                } else {
                                    // line 633
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 633, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 633), "output_run", [], "any", false, false, false, 633));
                                    echo "
                                ";
                                }
                                // line 635
                                echo "                            ";
                            } else {
                                // line 636
                                echo "                                <h5>Program output</h5>
                                ";
                                // line 637
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 637, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 637), "output_run", [], "any", false, false, false, 637))) {
                                    // line 638
                                    echo "                                    <p class=\"nodata\">There was no program output.</p>
                                ";
                                } else {
                                    // line 640
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 641
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 641, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 641), "output_run", [], "any", false, false, false, 641));
                                    echo "</pre>
                                ";
                                }
                                // line 643
                                echo "                            ";
                            }
                            // line 644
                            echo "
                            <h5>Program error output</h5>
                            ";
                            // line 646
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 646, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 646), "output_error", [], "any", false, false, false, 646))) {
                                // line 647
                                echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                            } else {
                                // line 649
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 649, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 649), "output_error", [], "any", false, false, false, 649));
                                echo "</pre>
                            ";
                            }
                            // line 651
                            echo "
                            <h5>Judging system output (info/debug/errors)</h5>
                            ";
                            // line 653
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 653, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 653), "output_system", [], "any", false, false, false, 653))) {
                                // line 654
                                echo "                                <p class=\"nodata\">There was no judging system output.</p>
                            ";
                            } else {
                                // line 656
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 656, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 656), "output_system", [], "any", false, false, false, 656));
                                echo "</pre>
                            ";
                            }
                            // line 658
                            echo "                        ";
                        }
                        // line 659
                        echo "                    ";
                    }
                    // line 660
                    echo "
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['runIdx'], $context['run'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 664
                echo "
            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        ";
            }
            // line 675
            echo " ";
            // line 676
            echo "
    ";
        }
        // line 677
        echo " ";
        // line 678
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1680 => 678,  1678 => 677,  1674 => 676,  1672 => 675,  1658 => 664,  1649 => 660,  1646 => 659,  1643 => 658,  1637 => 656,  1633 => 654,  1631 => 653,  1627 => 651,  1621 => 649,  1617 => 647,  1615 => 646,  1611 => 644,  1608 => 643,  1603 => 641,  1600 => 640,  1596 => 638,  1594 => 637,  1591 => 636,  1588 => 635,  1582 => 633,  1578 => 631,  1576 => 630,  1573 => 629,  1571 => 628,  1568 => 627,  1565 => 626,  1559 => 624,  1557 => 623,  1554 => 622,  1549 => 620,  1546 => 619,  1542 => 617,  1540 => 616,  1537 => 615,  1534 => 614,  1529 => 612,  1526 => 611,  1522 => 609,  1520 => 608,  1517 => 607,  1514 => 606,  1511 => 605,  1507 => 603,  1503 => 601,  1499 => 599,  1497 => 598,  1494 => 597,  1491 => 596,  1488 => 595,  1485 => 594,  1482 => 593,  1480 => 592,  1477 => 591,  1468 => 587,  1463 => 586,  1461 => 585,  1458 => 584,  1455 => 583,  1449 => 580,  1446 => 579,  1443 => 578,  1439 => 576,  1433 => 573,  1429 => 572,  1422 => 568,  1419 => 567,  1414 => 565,  1409 => 564,  1403 => 561,  1397 => 559,  1395 => 558,  1391 => 557,  1387 => 555,  1385 => 554,  1380 => 551,  1369 => 544,  1367 => 543,  1358 => 537,  1349 => 531,  1346 => 530,  1343 => 529,  1339 => 527,  1337 => 526,  1335 => 525,  1327 => 524,  1324 => 523,  1321 => 522,  1318 => 521,  1315 => 520,  1312 => 519,  1308 => 517,  1304 => 515,  1301 => 514,  1299 => 513,  1294 => 511,  1286 => 510,  1283 => 509,  1280 => 508,  1277 => 507,  1271 => 505,  1268 => 504,  1262 => 502,  1260 => 501,  1256 => 500,  1249 => 498,  1243 => 496,  1240 => 495,  1237 => 494,  1234 => 493,  1231 => 492,  1226 => 491,  1224 => 490,  1222 => 489,  1219 => 488,  1214 => 486,  1207 => 485,  1198 => 482,  1196 => 481,  1193 => 480,  1187 => 478,  1181 => 475,  1178 => 474,  1176 => 473,  1173 => 472,  1170 => 471,  1167 => 470,  1164 => 469,  1161 => 468,  1158 => 467,  1155 => 466,  1152 => 465,  1149 => 464,  1146 => 463,  1143 => 462,  1140 => 461,  1137 => 460,  1134 => 459,  1131 => 458,  1128 => 457,  1125 => 456,  1122 => 455,  1119 => 454,  1116 => 453,  1113 => 451,  1109 => 449,  1106 => 448,  1095 => 440,  1091 => 439,  1087 => 438,  1083 => 437,  1079 => 436,  1073 => 432,  1070 => 431,  1068 => 429,  1067 => 428,  1066 => 427,  1064 => 425,  1061 => 424,  1051 => 415,  1048 => 414,  1044 => 412,  1038 => 410,  1036 => 409,  1030 => 408,  1026 => 406,  1023 => 405,  1019 => 402,  1012 => 398,  1007 => 395,  1004 => 394,  997 => 390,  989 => 387,  985 => 385,  983 => 384,  976 => 381,  973 => 380,  970 => 379,  967 => 378,  964 => 377,  962 => 376,  956 => 372,  953 => 371,  949 => 368,  942 => 366,  939 => 365,  937 => 364,  930 => 360,  928 => 359,  922 => 358,  919 => 357,  917 => 356,  912 => 355,  909 => 354,  907 => 353,  904 => 351,  899 => 349,  894 => 347,  892 => 346,  889 => 345,  887 => 344,  883 => 342,  880 => 340,  875 => 338,  873 => 337,  869 => 336,  867 => 335,  865 => 334,  858 => 333,  856 => 332,  853 => 331,  851 => 330,  846 => 328,  844 => 327,  841 => 325,  834 => 324,  831 => 323,  829 => 322,  827 => 321,  824 => 319,  822 => 318,  819 => 316,  815 => 313,  812 => 311,  810 => 310,  808 => 309,  802 => 305,  798 => 303,  794 => 301,  790 => 299,  786 => 297,  783 => 296,  776 => 293,  774 => 292,  768 => 290,  766 => 289,  762 => 287,  758 => 285,  756 => 284,  750 => 283,  746 => 282,  743 => 281,  741 => 280,  737 => 279,  733 => 277,  730 => 275,  728 => 274,  725 => 273,  723 => 272,  720 => 271,  718 => 270,  715 => 269,  712 => 268,  709 => 267,  700 => 265,  695 => 264,  693 => 263,  689 => 261,  687 => 260,  684 => 259,  679 => 256,  670 => 252,  662 => 250,  660 => 249,  656 => 248,  651 => 245,  647 => 243,  645 => 242,  641 => 241,  637 => 240,  632 => 237,  626 => 235,  624 => 234,  620 => 233,  615 => 230,  609 => 228,  607 => 227,  603 => 226,  596 => 224,  590 => 223,  586 => 221,  582 => 219,  578 => 217,  576 => 216,  572 => 215,  564 => 213,  561 => 212,  557 => 211,  541 => 197,  539 => 196,  536 => 195,  532 => 193,  530 => 192,  527 => 191,  524 => 190,  522 => 187,  521 => 186,  520 => 184,  511 => 179,  505 => 176,  500 => 175,  494 => 173,  492 => 172,  485 => 167,  483 => 166,  480 => 165,  476 => 163,  470 => 161,  468 => 160,  465 => 158,  463 => 157,  459 => 156,  456 => 154,  454 => 153,  450 => 151,  448 => 150,  444 => 148,  436 => 143,  432 => 141,  430 => 140,  422 => 135,  414 => 130,  405 => 124,  401 => 123,  392 => 117,  388 => 116,  381 => 111,  375 => 109,  367 => 107,  365 => 106,  361 => 105,  352 => 99,  348 => 98,  337 => 92,  333 => 91,  328 => 88,  325 => 86,  319 => 82,  317 => 81,  314 => 80,  310 => 78,  308 => 77,  304 => 75,  302 => 74,  299 => 73,  291 => 70,  287 => 69,  278 => 67,  272 => 65,  269 => 64,  266 => 63,  263 => 62,  260 => 61,  257 => 60,  255 => 59,  252 => 58,  248 => 56,  245 => 55,  241 => 53,  225 => 51,  219 => 50,  217 => 49,  200 => 48,  198 => 47,  195 => 46,  187 => 44,  184 => 43,  182 => 42,  178 => 41,  173 => 38,  167 => 35,  164 => 34,  162 => 33,  159 => 32,  156 => 31,  153 => 30,  150 => 29,  147 => 28,  145 => 27,  142 => 26,  132 => 25,  109 => 11,  105 => 10,  101 => 9,  97 => 8,  92 => 7,  82 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}
{% extends \"jury/base.html.twig\" %}

{% block title %}Submission s{{ submission.submitid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/nv.d3.min.css') }}\">
    <script src=\"{{ asset('js/d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/nv.d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/FileSaver.min.js') }}\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
{% endblock %}

{% block content %}

    {% if submission.externalJudgements.empty %}
        {% set externalJudgement = null %}
    {% else %}
        {% set externalJudgement = submission.externalJudgements.first %}
    {% endif %}

    {% if claimWarning %}
        <div class=\"alert alert-warning\">
            {{ claimWarning }}
        </div>
    {% endif %}

    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission {{ submission.submitid }}
            {% if submission.originalSubmission %}
                {% set origSubmissionUrl = path('jury_submission', {submitId: submission.originalSubmission.submitid}) %}
                (resubmit of <a href=\"{{ origSubmissionUrl }}\">s{{ submission.originalSubmission.submitid }}</a>)
            {% endif %}
            {% if submission.resubmissions is not empty %}
                (resubmitted as
                {%- for resubmission in submission.resubmissions -%}
                    {% set resubmissionUrl = path('jury_submission', {submitId: resubmission.submitid}) %}
                    <a href=\"{{ resubmissionUrl }}\">s{{ resubmission.submitid }}</a>
                    {%- if not loop.last -%},{%- endif -%}
                {%- endfor -%}
                )
            {% endif %}
            {% if not submission.valid %}
                (ignored)
            {% endif %}
        </h1>
        {% if is_granted('ROLE_ADMIN') %}
            {% if submission.valid %}
                {% set action = 'ignore' %}
            {% else %}
                {% set action = 'unignore' %}
            {% endif %}
            <form action=\"{{ path('jury_submission_update_status', {'submitId': submission.submitid}) }}\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"{% if submission.valid %}0{% else %}1{% endif %}\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"{{ action | upper }} this submission\"
                       onclick=\"return confirm('Really {{ action }} submission s{{ submission.submitid }}?');\"/>
            </form>
        {% endif %}

        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'submission', id: submission.submitid} %}
    </div>

    {% if not submission.valid %}
        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    {% endif %}

    {% if not submission.contestProblem %}
        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    {% endif %}

    {# Condensed submission info on a single line with icons #}
    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"{{ path('jury_team', {teamId: submission.teamid, cid: submission.cid}) }}\">
                {{ submission.team.effectiveName }} (t{{ submission.teamid }})
            </a>
        </span>

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"{{ path('jury_contest', {'contestId': submission.cid}) }}\">
                {{ submission.contest.shortname }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"{{ path('jury_problem', {'probId': submission.probid}) }}\">
                {% if submission.contestProblem %}
                    {{ submission.contestProblem.shortname }}: {{ submission.problem.name }}
                {% else %}
                    {{ submission.problem.name }}
                {% endif %}
            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"{{ path('jury_language', {'langId': submission.langid}) }}\">
                {{ submission.language.name }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"{{ submission.submittime | printtime('%Y-%m-%d %H:%M:%S (%Z)') }}\">
                {{ submission.submittime | printtime(null, submission.contest) }}
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            {{ submission.problem.timelimit * submission.language.timeFactor }}s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"{{ path('jury_submission_source', {submission: submission.submitid}) }}\">
                View source code
            </a>
        </span>

        {% if external_ccs_submission_url is not empty %}
            <span>
                <i class=\"fas fa-link\" title=\"External link:\"></i>
                <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                    View in external CCS
                </a>
            </span>
        {% endif %}
    </div>

    {% if submission.externalid %}
        <div class=\"mb-2\">
            External ID:
            {% if external_ccs_submission_url is empty %}
                {{- submission.externalid -}}
            {% else %}
                <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                    {{- submission.externalid -}}
                </a>
            {%- endif -%}
            {%- if externalJudgement is not null -%}
                , {{ externalJudgement.result | printValidJuryResult }}
            {% endif %}
        </div>
    {% endif %}

    {% if externalJudgement is not null and externalJudgement.result is not empty and selectedJudging is not null and selectedJudging.result is not empty and externalJudgement.result != selectedJudging.result %}
        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                {% if external_ccs_submission_url is empty %}
                    {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                {% else %}
                    <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                        {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                    </a>
                {% endif -%}
                , but as {{ selectedJudging.result | printValidJuryResult }}
                by DOMjudge.
            </p>
        </div>

        {% include 'jury/partials/verify_form.html.twig' with {
            label: 'Shadow difference verified',
            judging: externalJudgement,
            form_action: path('jury_shadow_difference_verify', {extjudgementid: externalJudgement.extjudgementid}),
            show_form: true,
            show_icat: false} %}
    {% endif %}

    {% if not sameTestcaseIds and selectedJudging is not null and selectedJudging.result is not empty %}
        <div class=\"alert alert-danger\">The problem's testcases have changed since this judging has been performed. We recommend rejudging the whole problem.</div>
    {% endif %}

    {% if judgings | length > 1 or (judgings | length == 1 and selectedJudging is null) %}
        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            {% for judging in judgings %}
                {% set link = path('jury_submission', {submitId: submission.submitid, jid: judging.judgingid}) %}
                <tr {% if not judging.valid %}class=\"disabled\"{% endif %}>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if selectedJudging is not null and selectedJudging.judgingid == judging.judgingid %}
                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            {% else %}
                                &nbsp;
                            {% endif %}
                        </a>
                    </td>
                    <td><a href=\"{{ link }}\">j{{ judging.judgingid }}</a></td>
                    <td><a href=\"{{ link }}\">{{ judging.starttime | printtime(null, submission.contest) }}</a></td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if maxRunTimes[judging.judgingId] is not null %}
                                {{ maxRunTimes[judging.judgingId] }}s
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if judging.judgehost is not null %}
                                {{ judging.judgehost.hostname | printHost }}
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {{ judging.result | printResult(judging.valid, true) }}
                            {% if judging.stillBusy %}
                                (&hellip;)
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if judging.rejudging is not null %}
                                r{{ judging.rejudgingid }} ({{ judging.rejudging.reason }})
                            {% endif %}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if selectedJudging is null %}
        <div class=\"alert alert-warning\">Not (re)judged yet</div>

        {% if unjudgableReasons is not empty %}
            {% for reason in unjudgableReasons %}
                <div class=\"alert alert-danger\">{{ reason }}</div>
            {% endfor %}
        {% endif %}
    {% endif %}

    {% if selectedJudging is not null or externalJudgement is not null %}

        {% include 'jury/partials/submission_graph.html.twig' %}

        {% if selectedJudging is not null %}

            {# Show judging information #}
            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j{{ selectedJudging.judgingid }}
                    {% if selectedJudging.rejudging %}
                        (rejudging
                        <a href=\"{{ path('jury_rejudging', {rejudgingId: selectedJudging.rejudgingid}) }}\">
                            r{{ selectedJudging.rejudgingid }}</a>, reason: {{ selectedJudging.rejudging.reason }})
                    {% elseif not selectedJudging.valid %}
                        (Invalid)
                    {% endif %}
                </h2>
                &nbsp;
                {% if not selectedJudging.verified %}
                    <form action=\"{{ path('jury_submission', {submitId: submission.submitid, jid: selectedJudging.judgingid}) }}\"
                          method=\"post\" style=\"display: inline;\">
                        {% if selectedJudging.juryMember is not empty %}
                            (claimed by {{ selectedJudging.juryMember }})
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        {% endif %}
                        {% if app.user.username == selectedJudging.juryMember %}
                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        {% else %}
                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        {% endif %}
                    </form>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"mb-2\">
            <div>
                Result:
                {% if selectedJudging is null or selectedJudging.result is empty %}
                    {%- if submission.judgehost %}
                        {{- '' | printValidJuryResult -}}
                    {%- else %}
                        {{- 'queued' | printValidJuryResult -}}
                    {%- endif %}
                {%- else %}
                    {{- selectedJudging.result | printValidJuryResult -}}
                {%- endif %}
                {%- if submission.stillBusy -%}
                    (&hellip;)
                {%- endif -%}
                {%- if lastJudging is not null -%}
                    {% set lastSubmissionLink = path('jury_submission', {submitId: lastSubmission.submitid}) %}{#-
                -#}<span class=\"lastresult\">
                    (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>: {{ lastJudging.result }}){#-
                -#}</span>
                {%- endif -%}
                {%- if externalJudgement is not null %}
                    (external: {{ externalJudgement.result | printValidJuryResult }})
                {%- endif %}
                {%- if selectedJudging is not null -%}
                    , Judgehost:
                    {% set judgehostLink = path('jury_judgehost', {hostname: selectedJudging.judgehost.hostname}) %}
                    <a href=\"{{ judgehostLink }}\">{{ selectedJudging.judgehost.hostname | printHost }}</a>,
                    <span class=\"judgetime\">Judging started: {{ selectedJudging.starttime | printtime('%H:%M:%S') }}
                        {%- if selectedJudging.endtime -%}
                            , finished in {{ selectedJudging.starttime | printtimediff(selectedJudging.endtime) }}s
                        {%- elseif selectedJudging.valid or selectedJudging.rejudging -%}
                            &nbsp;[still judging - busy {{ selectedJudging.starttime | printtimediff }}]
                        {%- else -%}
                            &nbsp;[aborted]
                        {%- endif -%}
                    </span>
                {% endif -%}
                {%- if externalJudgement is not null %}
                    <span class=\"judgetime\">(external judging started: {{ externalJudgement.starttime | printtime('%H:%M:%S') }}
                        {%- if externalJudgement.endtime -%}
                            , finished in {{ externalJudgement.starttime | printtimediff(externalJudgement.endtime) }}s
                        {%- else -%}
                            &nbsp;[still judging - busy {{ externalJudgement.starttime | printtimediff }}]
                        {%- endif -%}
                    )</span>
                {%- endif -%}
                {%- if selectedJudging is not null and selectedJudging.result != 'compiler-error' -%}
                    , max/sum runtime:
                    {{ selectedJudging.maxRuntime | number_format(2, '.', '') }}/{{ selectedJudging.sumRuntime | number_format(2, '.', '') }}s
                    {%- if lastJudging is not null -%}
                        <span class=\"lastruntime\">
                        (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>:
                            {{ lastJudging.maxRuntime | number_format(2, '.', '') }}{#-
                        -#}/{{ lastJudging.sumRuntime | number_format(2, '.', '') }}s)
                    </span>
                    {%- endif -%}
                {% endif -%}
                {%- if externalJudgement is not null and externalJudgement.result != 'compiler-error' and externalJudgement.result != null -%}
                    , external max/sum runtime:
                    {{ externalJudgement.maxRuntime | number_format(2, '.', '') }}/{{ externalJudgement.sumRuntime | number_format(2, '.', '') }}s
                {% endif %}
            </div>

            {# Display testcase results #}
            {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            {% if selectedJudging is null %}
                                {% set judgingDone = false %}
                            {% else %}
                                {% set judgingDone = selectedJudging.endtime is not empty %}
                            {% endif %}
                            {{ runs | displayTestcaseResults(judgingDone) }}
                        </td>
                    </tr>
                    {% if lastJudging is not null %}
                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a> runs:
                            </td>
                            <td>
                                {{ lastRuns | displayTestcaseResults(lastJudging.endtime is not empty) }}
                            </td>
                        </tr>
                    {% endif %}
                    {% if externalJudgement is not null %}
                        <tr>
                            <td>external runs:</td>
                            <td>
                                {{ externalRuns | displayTestcaseResults(externalJudgement.endtime is not empty, true) }}
                            </td>
                        </tr>
                    {% endif %}
                </table>

                {# Show JS toggle of previous submission results #}
                {% if lastJudging is not null %}
                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"{{ lastSubmissionLink }}\">submission s{{ lastSubmission.submitid }}</a>
                        {% if lastJudging.verifyComment %}
                            <span class=\"prevsubmit\">(verify comment: '{{ lastJudging.verifyComment }}')</span>
                        {% endif %}
                </span>
                {% endif %}
            {% endif %}
        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        {# Show verify info, but only when a result is known #}
        {% if selectedJudging is not null and selectedJudging.result is not empty %}
            {% include 'jury/partials/verify_form.html.twig' with {
                label: 'Verified',
                judging: selectedJudging,
                form_action: path('jury_judging_verify', {judgingId: selectedJudging.judgingid}),
                show_form: not (verificationRequired and selectedJudging.verified and selectedJudging.valid),
                show_icat: true} %}
            {% if submission.contestProblem %}
                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '{{ icat_url }}/insert_entry.php',
                                '{{ app.user.username }}',
                                '{{ submission.teamid }}',
                                '{{ submission.contestProblem.shortname }}',
                                '{{ submission.externalid }}'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            {% endif %}
        {% elseif selectedJudging is not null %}
            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        {% endif %}

        {# Display compile output #}
        {% set color = '#6666FF' %}
        {% set message = 'not finished yet' %}
        {% set output = null %}
        {% if selectedJudging is not null %}
            {% set output = selectedJudging.outputCompile(true) %}
        {% endif %}
        {% if output is not null %}
            {% if selectedJudging.result == 'compiler-error' %}
                {% set color = 'red' %}
                {% set message = 'unsuccessful' %}
            {% else %}
                {% set color = '#1daa1d' %}
                {% set message = 'successful' %}
                {% if output is not empty %}
                    {% set message = message ~ ' (with ' ~ (output | lineCount) ~ ' line(s) of output)' %}
                {% endif %}
            {% endif %}
        {% endif %}
        {% set header = 'Compilation <span style=\"color: ' ~ color ~ ';\">' ~ message ~ '</span>' %}
        <h3>
            {% if output is not empty %}
                <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                    {{ header | raw }}
                </a>
            {% else %}
                {{ header | raw }}
            {% endif %}
        </h3>
        {% if output is empty %}
            <p class=\"nodata{% if selectedJudging is null or selectedJudging.result != 'compiler-error' %} d-none{% endif %}\"
                id=\"detailcompile\">There were no compiler errors or warnings.</p>
        {% else %}
            <pre class=\"output_text {% if selectedJudging is null or selectedJudging.result != 'compiler-error' %} d-none{% endif %}\"
                id=\"detailcompile\">{{ output }}</pre>
        {% endif %}

        {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
            {# Show run info. Only when compilation was successful or we have an external judgement #}
            {% for runIdx, run in runs %}
                {% set externalRun = null %}
                {% if externalRuns[runIdx] is defined %}
                    {% set externalRun = externalRuns[runIdx] %}
                {% endif %}
                <div id=\"run-{{run.rank}}\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run {% if run.firstJudgingRun and run.firstJudgingRun.runresult == 'correct' %}run_correct{% endif %}\">
                    <div class=\"card-header\">
                        Run #{{ run.rank }}
                        {% if run.origInputFilename is not null %}
                            | <span style=\"font-family:monospace;\">{{ run.origInputFilename }}.in</span>
                        {% else %}
                            {% if run.description is not null %}
                                | {{ run.description }}
                            {% endif %}
                        {% endif %}
                        {% if run.firstJudgingRun is not null %}
                            |
                            <span class=\"sol {% if run.firstJudgingRun.runresult == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                {{ run.firstJudgingRun.runresult }}
                            </span>
                            {% if run.firstJudgingRun.runresult == 'timelimit' %}
                                {% if runsOutput[runIdx].terminated %}
                                    <b>(terminated)</b>
                                {% else %}
                                    <b>(finished late)</b>
                                {% endif %}
                            {% endif %}
                        {% endif %}
                        {% if externalRun is not null and externalRun.firstExternalRun is not null %}
                            {% if externalRun.firstExternalRun is not null %}
                                (external:
                                <span class=\"sol {% if externalRun.firstExternalRun.result == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                    {{ externalRun.firstExternalRun.result }}{#-
                                -#}</span>{#-
                                -#})
                            {% endif %}
                        {% endif %}
                        <span style=\"float: right;\">
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'input'}) }}\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'output'}) }}\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            {% if run.firstJudgingRun is not null %}
                                <a href=\"{{ path('jury_submission_team_output', {'submission': submission.submitid, 'run': run.firstJudgingRun.runid, 'contest': submission.cid}) }}\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        Team Output
                                    </button>
                                </a>
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"card-body\">
                    {% if run.firstJudgingRun is not null %}
                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        {{ runsOutput[runIdx].cpu_time }}s CPU
                        {% if runsOutput[runIdx].metadata is not null %}
                            , {{ runsOutput[runIdx].wall_time }}s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            {{ runsOutput[runIdx].memory }}
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            {{ runsOutput[runIdx].exitcode }}{% if runsOutput[runIdx].signal > 0 %},
                                signal: {{ runsOutput[runIdx].signal }}
                            {% endif %}
                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-{{ runIdx }}\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            <div class=\"collapse\" id=\"collapseExample-{{ runIdx }}\">
                                  <div class=\"card card-body output_text\">{{ runsOutput[runIdx].metadata }}</div>
                            </div>
                        {% endif %}
                    </span>
                    {% endif %}
                    {% if run.description is not null %}
                        <p><em>
                            {{ run.description(true) | descriptionExpand }}
                        </em></p>
                    {% endif %}
                    {% if runsOutput[runIdx].image_thumb %}
                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            {% set imgUrl = path('jury_problem_testcase_fetch', {'probId': submission.probid, 'rank': run.rank, 'type': 'image'}) %}
                            <a href=\"{{ imgUrl }}\">
                                <img src=\"data:image/{{ run.imageType }};base64,{{ runsOutput[runIdx].image_thumb | base64 }}\"/>
                            </a>
                        </span>
                    {% endif %}

                    {% set runDone = false %}
                    {% if run is not null and run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                        {% set runDone = true %}
                    {% endif %}
                    {% if not runDone %}
                        <p class=\"nodata\">
                            {% if selectedJudging is not null and selectedJudging.result %}
                                Run not used for final result.
                            {% else %}
                                Run not started/finished yet.
                            {% endif %}
                        </p>
                    {% else %}
                        {% if run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                            {% if combinedRunCompare %}
                                <h5>Validator output</h5>
                                {% if runsOutput[runIdx].output_diff is empty %}
                                    <p class=\"nodata\">There was no validator output.</p>
                                {% else %}
                                    <pre class=\"output_text\">
{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                {% endif %}
                            {% else %}
                                <h5>Diff output</h5>
                                {% if runsOutput[runIdx].output_diff is empty %}
                                    <p class=\"nodata\">There was no diff output.</p>
                                {% else %}
                                    <pre class=\"output_text\">
{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                {% endif %}

                                {% if run.firstJudgingRun.runresult != 'correct' %}
                                    {{ runsOutput[runIdx] | runDiff }}
                                {% endif %}
                            {% endif %}

                            {% if combinedRunCompare %}
                                <h5>Validator/Submission interaction</h5>
                                {% if runsOutput[runIdx].output_run is empty %}
                                    <p class=\"nodata\">There was no interaction log.</p>
                                {% else %}
                                    {{ runsOutput[runIdx].output_run | interactiveLog }}
                                {% endif %}
                            {% else %}
                                <h5>Program output</h5>
                                {% if runsOutput[runIdx].output_run is empty %}
                                    <p class=\"nodata\">There was no program output.</p>
                                {% else %}
                                    <pre class=\"output_text\">
{{ runsOutput[runIdx].output_run | parseRunDiff }}</pre>
                                {% endif %}
                            {% endif %}

                            <h5>Program error output</h5>
                            {% if runsOutput[runIdx].output_error is empty %}
                                <p class=\"nodata\">There was no stderr output.</p>
                            {% else %}
                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_error | parseRunDiff }}</pre>
                            {% endif %}

                            <h5>Judging system output (info/debug/errors)</h5>
                            {% if runsOutput[runIdx].output_system is empty %}
                                <p class=\"nodata\">There was no judging system output.</p>
                            {% else %}
                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_system | parseRunDiff }}</pre>
                            {% endif %}
                        {% endif %}
                    {% endif %}

                    </div>
                </div>
            {% endfor %}

            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        {% endif %} {# selectedJudging.result != 'compiler-error' #}

    {% endif %} {# selectedJudging is not null or externalJudgement is not null #}

{% endblock %}
", "jury/submission.html.twig", "/domjudge/webapp/templates/jury/submission.html.twig");
    }
}
