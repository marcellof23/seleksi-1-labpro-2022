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

/* jury/config.html.twig */
class __TwigTemplate_a501c5698da8a1190891c7bce657bcf4eddedc527faae8156bb3741d98330a3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
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

        echo "Configuration - ";
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
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <h1>Configuration</h1>

    <form method=\"post\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 29
                echo "                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 31), "html", null, true);
                echo "
                                    ";
                // line 32
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 32) == "bool")) {
                    // line 33
                    echo "                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "\"
                                            ";
                    // line 36
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 36) == 1)) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 38
$context["option"], "type", [], "any", false, false, false, 38) == "int")) {
                    // line 39
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 39))) {
                        // line 40
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                   style=\"margin-left:5px;width:15em;text-align:right;display:inline-block;\"
                                                   name=\"config_";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 42), "html", null, true);
                        echo "\">
                                                ";
                        // line 43
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 43));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 44
                            echo "                                                    <option ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 44) == $context["value"])) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 46
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 48
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                                   type=\"number\"
                                                   name=\"config_";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "\"
                                                   value=\"";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 52), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 54
                    echo "                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["option"], "type", [], "any", false, false, false, 55) == "string")) {
                    // line 56
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 56))) {
                        // line 57
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display: block;\"
                                                    name=\"config_";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "\">
                                                ";
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 60));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 61
                            echo "                                                    <option ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 61) == $context["value"])) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 63
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 65
                        echo "                                            <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                                   name=\"config_";
                        // line 66
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 66), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 66), "html", null, true);
                        echo "\"
                                                   value=\"";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 67), "html", null, true);
                        echo "\">
                                        ";
                    }
                    // line 69
                    echo "                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 69) == "array_keyval")) {
                    // line 70
                    echo "                                        <br/>
                                        ";
                    // line 71
                    $context["counter"] = 0;
                    // line 72
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 73
                        echo "                                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 73))) {
                            // line 74
                            echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:10em;text-align:right;display:inline-block;\"
                                                        name=\"config_";
                            // line 76
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 76), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 76, $this->source); })()), "html", null, true);
                            echo "][key]\">
                                                    ";
                            // line 77
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 77));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 78
                                echo "                                                        <option ";
                                if (($context["key"] == $context["value"])) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 80
                            echo "                                                </select>
                                            ";
                        } else {
                            // line 82
                            echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                       value=\"";
                            // line 84
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"
                                                       name=\"config_";
                            // line 85
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 85), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 85, $this->source); })()), "html", null, true);
                            echo "][key]\"
                                                       id=\"config_";
                            // line 86
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 86), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 86, $this->source); })()), "html", null, true);
                            echo "__key_\">
                                            ";
                        }
                        // line 88
                        echo "                                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 88))) {
                            // line 89
                            echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:30em;display:inline-block;\"
                                                        name=\"config_";
                            // line 91
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 91), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 91, $this->source); })()), "html", null, true);
                            echo "][val]\">
                                                    ";
                            // line 92
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 92));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 93
                                echo "                                                        <option ";
                                if (($context["val"] == $context["value"])) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 95
                            echo "                                                </select>
                                            ";
                        } else {
                            // line 97
                            echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                       value=\"";
                            // line 99
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                       name=\"config_";
                            // line 100
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 100, $this->source); })()), "html", null, true);
                            echo "][val]\"
                                                       id=\"config_";
                            // line 101
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 101), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 101, $this->source); })()), "html", null, true);
                            echo "__val\">
                                                ";
                        }
                        // line 103
                        echo "                                            <br/>
                                            ";
                        // line 104
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 104, $this->source); })()) + 1);
                        // line 105
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 106
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 106))) {
                        // line 107
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                    name=\"config_";
                        // line 109
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 109), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 109, $this->source); })()), "html", null, true);
                        echo "][key]\">
                                                ";
                        // line 110
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 110));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 111
                            echo "                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 113
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 115
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   name=\"config_";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 117), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 117, $this->source); })()), "html", null, true);
                        echo "][key]\"
                                                   id=\"config_";
                        // line 118
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 118), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 118, $this->source); })()), "html", null, true);
                        echo "__key_\">
                                        ";
                    }
                    // line 120
                    echo "                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 120))) {
                        // line 121
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display:inline-block;\"
                                                    name=\"config_";
                        // line 123
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 123, $this->source); })()), "html", null, true);
                        echo "][val]\">
                                                ";
                        // line 124
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 124));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 125
                            echo "                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 129
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   name=\"config_";
                        // line 131
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 131), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 131, $this->source); })()), "html", null, true);
                        echo "][val]\"
                                                   id=\"config_";
                        // line 132
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 132), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 132, $this->source); })()), "html", null, true);
                        echo "__val\">
                                            ";
                    }
                    // line 134
                    echo "                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 135
$context["option"], "type", [], "any", false, false, false, 135) == "array_val")) {
                    // line 136
                    echo "                                        <br/>
                                        ";
                    // line 137
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 137))) {
                        // line 138
                        echo "                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display:inline-block;\"
                                                    multiple
                                                    name=\"config_";
                        // line 141
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141), "html", null, true);
                        echo "[]\"
                                                    id=\"config_";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 142), "html", null, true);
                        echo "\">
                                                ";
                        // line 143
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 143));
                        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                            // line 144
                            echo "                                                    <option ";
                            if (twig_in_filter($context["value"], twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 144))) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</option>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 146
                        echo "                                            </select>
                                        ";
                    } else {
                        // line 148
                        echo "                                            ";
                        $context["counter"] = 0;
                        // line 149
                        echo "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 149));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            // line 150
                            echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                       value=\"";
                            // line 152
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                       name=\"config_";
                            // line 153
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 153), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 153, $this->source); })()), "html", null, true);
                            echo "]\"
                                                       id=\"config_";
                            // line 154
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 154), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 154, $this->source); })()), "html", null, true);
                            echo "_\">
                                                <br/>
                                                ";
                            // line 156
                            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 156, $this->source); })()) + 1);
                            // line 157
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 158
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   name=\"config_";
                        // line 160
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 160, $this->source); })()), "html", null, true);
                        echo "]\"
                                                   id=\"config_";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 161, $this->source); })()), "html", null, true);
                        echo "_\">
                                            <br/>
                                        ";
                    }
                    // line 164
                    echo "                                    ";
                }
                // line 165
                echo "                                    <small class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 165), "html", null, true);
                echo "</small>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                    </ul>
                </div>
            </div>
            <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 174,  640 => 169,  629 => 165,  626 => 164,  618 => 161,  612 => 160,  608 => 158,  602 => 157,  600 => 156,  593 => 154,  587 => 153,  583 => 152,  579 => 150,  574 => 149,  571 => 148,  567 => 146,  552 => 144,  548 => 143,  544 => 142,  540 => 141,  535 => 138,  533 => 137,  530 => 136,  528 => 135,  525 => 134,  518 => 132,  512 => 131,  508 => 129,  504 => 127,  493 => 125,  489 => 124,  483 => 123,  479 => 121,  476 => 120,  469 => 118,  463 => 117,  459 => 115,  455 => 113,  444 => 111,  440 => 110,  434 => 109,  430 => 107,  427 => 106,  421 => 105,  419 => 104,  416 => 103,  409 => 101,  403 => 100,  399 => 99,  395 => 97,  391 => 95,  376 => 93,  372 => 92,  366 => 91,  362 => 89,  359 => 88,  352 => 86,  346 => 85,  342 => 84,  338 => 82,  334 => 80,  319 => 78,  315 => 77,  309 => 76,  305 => 74,  302 => 73,  297 => 72,  295 => 71,  292 => 70,  289 => 69,  284 => 67,  278 => 66,  275 => 65,  271 => 63,  256 => 61,  252 => 60,  246 => 59,  242 => 57,  239 => 56,  237 => 55,  234 => 54,  229 => 52,  223 => 51,  218 => 48,  214 => 46,  199 => 44,  195 => 43,  189 => 42,  185 => 40,  182 => 39,  180 => 38,  173 => 36,  167 => 35,  163 => 33,  161 => 32,  157 => 31,  153 => 29,  149 => 28,  142 => 24,  138 => 22,  134 => 21,  129 => 18,  119 => 17,  102 => 9,  98 => 8,  93 => 7,  83 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Configuration - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.toggle_extrahead() }}
    {{ macros.select2_extrahead() }}
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
{% endblock %}

{% block content %}
    <h1>Configuration</h1>

    <form method=\"post\">
        {% for category in options %}
            <div class=\"card\">
                <div class=\"card-header\">
                    {{ category.name }} Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        {% for option in category.data %}
                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    {{ option.name }}
                                    {% if option.type == 'bool' %}
                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                            {% if option.value == 1 %} checked=\"checked\"{% endif %}>
                                        <br/>
                                    {% elseif option.type == 'int' %}
                                        {% if option.options is not null %}
                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                   style=\"margin-left:5px;width:15em;text-align:right;display:inline-block;\"
                                                   name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\">
                                                {% for value, label in option.options %}
                                                    <option {% if option.value == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                {% endfor %}
                                            </select>
                                        {% else %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                                   type=\"number\"
                                                   name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                                   value=\"{{ option.value }}\">
                                        {% endif %}
                                        <br/>
                                    {% elseif option.type == 'string' %}
                                        {% if option.options is not null %}
                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display: block;\"
                                                    name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\">
                                                {% for value, label in option.options %}
                                                    <option {% if option.value == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                {% endfor %}
                                            </select>
                                        {% else %}
                                            <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                                   name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                                   value=\"{{ option.value }}\">
                                        {% endif %}
                                    {% elseif option.type == 'array_keyval' %}
                                        <br/>
                                        {% set counter = 0 %}
                                        {% for key,val in option.value %}
                                            {% if option.key_options is not null %}
                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:10em;text-align:right;display:inline-block;\"
                                                        name=\"config_{{ option.name }}[{{ counter }}][key]\">
                                                    {% for value, label in option.key_options %}
                                                        <option {% if key == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                    {% endfor %}
                                                </select>
                                            {% else %}
                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                       value=\"{{ key }}\"
                                                       name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                                       id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                            {% endif %}
                                            {% if option.value_options is not null %}
                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:30em;display:inline-block;\"
                                                        name=\"config_{{ option.name }}[{{ counter }}][val]\">
                                                    {% for value, label in option.value_options %}
                                                        <option {% if val == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                    {% endfor %}
                                                </select>
                                            {% else %}
                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                       value=\"{{ val }}\"
                                                       name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                                       id=\"config_{{ option.name }}_{{ counter }}__val\">
                                                {% endif %}
                                            <br/>
                                            {% set counter = counter + 1 %}
                                        {% endfor %}
                                        {% if option.key_options is not null %}
                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                    name=\"config_{{ option.name }}[{{ counter }}][key]\">
                                                {% for value, label in option.key_options %}
                                                    <option value=\"{{ value }}\">{{ label }}</option>
                                                {% endfor %}
                                            </select>
                                        {% else %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                        {% endif %}
                                        {% if option.value_options is not null %}
                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display:inline-block;\"
                                                    name=\"config_{{ option.name }}[{{ counter }}][val]\">
                                                {% for value, label in option.value_options %}
                                                    <option value=\"{{ value }}\">{{ label }}</option>
                                                {% endfor %}
                                            </select>
                                        {% else %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}__val\">
                                            {% endif %}
                                        <br/>
                                    {% elseif option.type == 'array_val' %}
                                        <br/>
                                        {% if option.options is not null %}
                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                    style=\"width:30em;display:inline-block;\"
                                                    multiple
                                                    name=\"config_{{ option.name }}[]\"
                                                    id=\"config_{{ option.name }}\">
                                                {% for value in option.options %}
                                                    <option {% if value in option.value %}selected{% endif %} value=\"{{ value }}\">{{ value }}</option>
                                                {% endfor %}
                                            </select>
                                        {% else %}
                                            {% set counter = 0 %}
                                            {% for val in option.value %}
                                                <input class=\"form-control form-control-sm\"
                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                       value=\"{{ val }}\"
                                                       name=\"config_{{ option.name }}[{{ counter }}]\"
                                                       id=\"config_{{ option.name }}_{{ counter }}_\">
                                                <br/>
                                                {% set counter = counter + 1 %}
                                            {% endfor %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   name=\"config_{{ option.name }}[{{ counter }}]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}_\">
                                            <br/>
                                        {% endif %}
                                    {% endif %}
                                    <small class=\"text-muted\">{{ option.description }}</small>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <br/>
        {% endfor %}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
{% endblock %}
", "jury/config.html.twig", "/domjudge/webapp/templates/jury/config.html.twig");
    }
}
