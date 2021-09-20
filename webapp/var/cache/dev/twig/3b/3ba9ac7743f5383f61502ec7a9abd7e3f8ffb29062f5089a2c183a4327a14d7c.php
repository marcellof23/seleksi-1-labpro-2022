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

/* jury/problem_testcases.html.twig */
class __TwigTemplate_f5e7859fb127fea163bd31baff5868dff4a25fc37f43ccba9bb46e85d4a1af4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_testcases.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_testcases.html.twig", 1);
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

        echo "Testcases for p";
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
    <h1>Testcases for p";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "probid", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"mb-2\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Back to problem p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            $context["formStart"] = "<form method=\"post\" enctype=\"multipart/form-data\">";
            // line 22
            echo "        ";
            echo (isset($context["formStart"]) || array_key_exists("formStart", $context) ? $context["formStart"] : (function () { throw new RuntimeError('Variable "formStart" does not exist.', 22, $this->source); })());
            echo "
    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (twig_test_empty((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "        <p class=\"nodata\">No testcase(s) yet.</p>
    ";
        } else {
            // line 28
            echo "        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "                    <th/>
                ";
            }
            // line 34
            echo "                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                ";
            // line 39
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 40
                echo "                    <th>upload new</th>
                ";
            }
            // line 42
            echo "                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["rank"] => $context["testcase"]) {
                // line 47
                echo "                <tr>
                    ";
                // line 48
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 49
                    echo "                        <td rowspan=\"2\">
                            <a href=\"";
                    // line 50
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_testcase_delete", ["testcaseId" => twig_get_attribute($this->env, $this->source, $context["testcase"], "testcaseid", [], "any", false, false, false, 50)]), "html", null, true);
                    echo "\"
                               title=\"delete testcase ";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "testcaseid", [], "any", false, false, false, 51), "html", null, true);
                    echo "\"
                               onclick=\"confirm('Proceed with the deletion of testcase ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "testcaseid", [], "any", false, false, false, 52), "html", null, true);
                    echo "?');\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                        </td>
                    ";
                }
                // line 57
                echo "                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 58, $this->source); })()), "probid", [], "any", false, false, false, 58), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 58), "direction" => "up"]), "html", null, true);
                echo "\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 60), "html", null, true);
                echo "<br>
                        <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 61, $this->source); })()), "probid", [], "any", false, false, false, 61), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 61), "direction" => "down"]), "html", null, true);
                echo "\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 65), "html", null, true);
                echo "]\" value=\"sample\"
                               ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["testcase"], "sample", [], "any", false, false, false, 66)) {
                    echo "checked";
                }
                echo " />
                    </td>
                    <td class=\"filename\">
                        <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 69, $this->source); })()), "probid", [], "any", false, false, false, 69), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 69), "type" => "input"]), "html", null, true);
                echo "\">
                            p";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 70, $this->source); })()), "probid", [], "any", false, false, false, 70), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 70), "html", null, true);
                echo ".in
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 74
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 74, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 74), [], "array", false, false, false, 74), "input_size", [], "any", false, false, false, 74));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumInput", [], "any", false, false, false, 77), "html", null, true);
                echo "
                    </td>
                    ";
                // line 79
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 80
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 81), "html", null, true);
                    echo "]\" id=\"update_input_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 81), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 82), "html", null, true);
                    echo "\">new input file</label>
                        </div></td>
                    ";
                }
                // line 85
                echo "                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">";
                // line 86
                echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 86));
                echo "</span>
                        ";
                // line 87
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 88
                    echo "                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 88), "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 88), "html", null, true);
                    echo "</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        ";
                }
                // line 91
                echo "                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 95, $this->source); })()), "probid", [], "any", false, false, false, 95), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 95), "type" => "output"]), "html", null, true);
                echo "\">
                            p";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 96, $this->source); })()), "probid", [], "any", false, false, false, 96), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 96), "html", null, true);
                echo ".out
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 100
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 100, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 100), [], "array", false, false, false, 100), "output_size", [], "any", false, false, false, 100));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumOutput", [], "any", false, false, false, 103), "html", null, true);
                echo "
                    </td>
                    ";
                // line 105
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 106
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), "html", null, true);
                    echo "]\" id=\"update_output_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 108), "html", null, true);
                    echo "\">new output file</label>
                        </div></td>
                    ";
                }
                // line 111
                echo "                    <td class=\"testimage\">
                        ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 112, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 112), [], "array", false, false, false, 112), "image_size", [], "any", false, false, false, 112) > 0)) {
                    // line 113
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 113, $this->source); })()), "probid", [], "any", false, false, false, 113), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 113), "type" => "image"]), "html", null, true);
                    echo "\">
                                <span class=\"filename\">p";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 114, $this->source); })()), "probid", [], "any", false, false, false, 114), "html", null, true);
                    echo ".t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 114, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), [], "array", false, false, false, 114), "image_type", [], "any", false, false, false, 114), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                    // line 116
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 117
                        echo "                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 119), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 119), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 120), "html", null, true);
                        echo "\">replace image</label>
                            </div>
                            ";
                    }
                    // line 123
                    echo "                        ";
                } else {
                    // line 124
                    echo "                            ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 125
                        echo "                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 126
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 126), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 126), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 127
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 127), "html", null, true);
                        echo "\">add an image</label>
                            </div>
                            ";
                    } else {
                        // line 130
                        echo "                            <span class=\"nodata\">No image</span>
                            ";
                    }
                    // line 132
                    echo "                        ";
                }
                // line 133
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rank'], $context['testcase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "            </tbody>
        </table>
    ";
        }
        // line 139
        echo "
    ";
        // line 140
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 141
            echo "        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    ";
        }
        // line 188
        echo "
    ";
        // line 189
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 190
            echo "        ";
            // line 191
            echo "        ";
            $context["formEnd"] = "</form>";
            // line 192
            echo "        ";
            echo (isset($context["formEnd"]) || array_key_exists("formEnd", $context) ? $context["formEnd"] : (function () { throw new RuntimeError('Variable "formEnd" does not exist.', 192, $this->source); })());
            echo "
    ";
        }
        // line 194
        echo "
    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem_testcases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 194,  500 => 192,  497 => 191,  495 => 190,  493 => 189,  490 => 188,  441 => 141,  439 => 140,  436 => 139,  431 => 136,  423 => 133,  420 => 132,  416 => 130,  410 => 127,  404 => 126,  401 => 125,  398 => 124,  395 => 123,  389 => 120,  383 => 119,  379 => 117,  377 => 116,  368 => 114,  363 => 113,  361 => 112,  358 => 111,  352 => 108,  346 => 107,  343 => 106,  341 => 105,  336 => 103,  330 => 100,  321 => 96,  317 => 95,  311 => 91,  302 => 88,  300 => 87,  296 => 86,  293 => 85,  287 => 82,  281 => 81,  278 => 80,  276 => 79,  271 => 77,  265 => 74,  256 => 70,  252 => 69,  244 => 66,  240 => 65,  233 => 61,  229 => 60,  224 => 58,  221 => 57,  213 => 52,  209 => 51,  205 => 50,  202 => 49,  200 => 48,  197 => 47,  193 => 46,  187 => 42,  183 => 40,  181 => 39,  174 => 34,  170 => 32,  168 => 31,  163 => 28,  159 => 26,  157 => 25,  154 => 24,  148 => 22,  145 => 21,  143 => 20,  141 => 19,  133 => 16,  125 => 13,  122 => 12,  112 => 11,  100 => 8,  95 => 7,  85 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Testcases for p{{ problem.probid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Testcases for p{{ problem.probid }} - {{ problem.name }}</h1>

    <div class=\"mb-2\">
        <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">Back to problem p{{ problem.probid }}</a>
    </div>

    {% if is_granted('ROLE_ADMIN') %}
        {# We use a variable here so indeting doesn't get screwed up #}
        {% set formStart = '<form method=\"post\" enctype=\"multipart/form-data\">' %}
        {{ formStart | raw }}
    {% endif %}

    {% if testcases is empty %}
        <p class=\"nodata\">No testcase(s) yet.</p>
    {% else %}
        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                {% if is_granted('ROLE_ADMIN') %}
                    <th/>
                {% endif %}
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>upload new</th>
                {% endif %}
                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            {% for rank, testcase in testcases %}
                <tr>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td rowspan=\"2\">
                            <a href=\"{{  path('jury_testcase_delete', {'testcaseId': testcase.testcaseid}) }}\"
                               title=\"delete testcase {{ testcase.testcaseid }}\"
                               onclick=\"confirm('Proceed with the deletion of testcase {{ testcase.testcaseid }}?');\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                        </td>
                    {% endif %}
                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'up'}) }}\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        {{ testcase.rank }}<br>
                        <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'down'}) }}\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[{{ testcase.rank }}]\" value=\"sample\"
                               {% if testcase.sample %}checked{% endif %} />
                    </td>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'input'}) }}\">
                            p{{ problem.probid }}.t{{ testcase.rank }}.in
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].input_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumInput }}
                    </td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[{{ testcase.rank }}]\" id=\"update_input_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_{{testcase.rank}}\">new input file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">{{ testcase.description(true) | descriptionExpand }}</span>
                        {% if is_granted('ROLE_ADMIN') %}
                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[{{ testcase.rank }}]\">{{ testcase.description(true) }}</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'output'}) }}\">
                            p{{ problem.probid }}.t{{ testcase.rank }}.out
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].output_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumOutput }}
                    </td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[{{ testcase.rank }}]\" id=\"update_output_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_{{testcase.rank}}\">new output file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testimage\">
                        {% if testcaseData[testcase.rank].image_size > 0 %}
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'image'}) }}\">
                                <span class=\"filename\">p{{ problem.probid }}.t{{ testcase.rank }}.{{ testcaseData[testcase.rank].image_type }}</span>
                            </a>
                            {% if is_granted('ROLE_ADMIN') %}
                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">replace image</label>
                            </div>
                            {% endif %}
                        {% else %}
                            {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">add an image</label>
                            </div>
                            {% else %}
                            <span class=\"nodata\">No image</span>
                            {% endif %}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        {# We use a variable here so indeting doesn't get screwed up #}
        {% set formEnd = '</form>' %}
        {{ formEnd | raw }}
    {% endif %}

    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

{% endblock %}
", "jury/problem_testcases.html.twig", "/domjudge/webapp/templates/jury/problem_testcases.html.twig");
    }
}
