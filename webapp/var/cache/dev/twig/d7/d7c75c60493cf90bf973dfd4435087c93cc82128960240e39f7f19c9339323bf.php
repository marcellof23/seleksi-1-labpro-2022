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

/* jury/jury_macros.twig */
class __TwigTemplate_1ebfdd4dfd9ccb345aa182f0a5efe1afd7ae14c5ff94306d36392ccd42473434 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/jury_macros.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/jury_macros.twig"));

        // line 14
        echo "
";
        // line 20
        echo "

";
        // line 25
        echo "
";
        // line 57
        echo "
";
        // line 153
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_select2_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "select2_extrahead"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "select2_extrahead"));

            // line 2
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2-bootstrap.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
            echo "\"></script>
    <script>
        \$(function () {
            \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

            \$('select[multiple]').select2();
        });
    </script>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_toggle_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_extrahead"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_extrahead"));

            // line 16
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-toggle.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-toggle.min.js"), "html", null, true);
            echo "\"></script>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_jscolor_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "jscolor_extrahead"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "jscolor_extrahead"));

            // line 23
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jscolor.js"), "html", null, true);
            echo "\"></script>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_table_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_extrahead"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_extrahead"));

            // line 27
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dataTables.bootstrap4.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dataTables.bootstrap4.min.js"), "html", null, true);
            echo "\"></script>
    <style>
        .data-table td a, .data-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .data-table th {
            white-space: nowrap;
        }

        .data-table td {
            white-space: nowrap;
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .dataTables_filter {
            text-align: inherit;
        }

        .table-wrapper {
            display: inline-block;
        }
    </style>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_table($__data__ = null, $__fields__ = null, $__num_actions__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "fields" => $__fields__,
            "num_actions" => $__num_actions__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table"));

            // line 59
            echo "
    <div class=\"table-wrapper\">
        <table class=\"data-table table table-sm table-striped\" style=\"width:auto\">
            <thead class=\"\">
            <tr>";
            // line 64
            $context["default_sort"] = 0;
            // line 65
            $context["default_sort_order"] = "asc";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 66, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 67
                if (((twig_get_attribute($this->env, $this->source, $context["column"], "default_sort", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["column"], "default_sort", [], "any", false, false, false, 67), false)) : (false))) {
                    // line 68
                    $context["default_sort"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 68);
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "default_sort_order", [], "any", true, true, false, 69)) {
                        // line 70
                        $context["default_sort_order"] = twig_get_attribute($this->env, $this->source, $context["column"], "default_sort_order", [], "any", false, false, false, 70);
                    }
                }
                // line 73
                echo "
                    <th scope=\"col\" class=\"";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", true, true, false, 75) && twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", false, false, false, 75))) {
                    echo "sortable";
                }
                // line 76
                if (( !twig_get_attribute($this->env, $this->source, $context["column"], "search", [], "any", true, true, false, 76) || twig_get_attribute($this->env, $this->source, $context["column"], "search", [], "any", false, false, false, 76))) {
                    echo " searchable";
                }
                echo "\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 77);
                // line 78
                echo "</th>";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            if (((isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 80, $this->source); })()) > 0)) {
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 81, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 82
                    echo "
                        <th scope=\"col\"></th>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 86
            echo "
            </tr>
            </thead>
            <tbody>";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 90, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 91
                echo "
                <tr class=\"";
                // line 92
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", false, false, false, 92), "")) : ("")), "html", null, true);
                echo "\"";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", true, true, false, 93)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", false, false, false, 93), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 94, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 95
                    $context["item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "data", [], "any", false, false, false, 95), $context["key"], [], "any", false, false, false, 95);
                    // line 96
                    echo "
                        <td
                           class=\"";
                    // line 98
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssclass", [], "any", true, true, false, 98)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssclass", [], "any", false, false, false, 98), "")) : ("")), "html", null, true);
                    if (($context["key"] == "status")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->statusClass(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "value", [], "any", false, false, false, 98)), "html", null, true);
                    }
                    echo "\"";
                    // line 99
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", true, true, false, 99)) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 99, $this->source); })()), "title", [], "any", false, false, false, 99), "html", null, true);
                        echo "\"";
                    }
                    // line 100
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sortvalue", [], "any", true, true, false, 100)) {
                        echo " data-sort=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 100, $this->source); })()), "sortvalue", [], "any", false, false, false, 100), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    // line 101
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 101)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 101, $this->source); })()), "link", [], "any", false, false, false, 101), "html", null, true);
                        echo "\">";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 102
$context["row"], "link", [], "any", true, true, false, 102)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 102), "html", null, true);
                        echo "\">";
                    }
                    // line 103
                    echo "                                    ";
                    if (($context["key"] == "status")) {
                        // line 104
                        echo $this->extensions['App\Twig\TwigExtension']->statusIcon(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 104), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 104), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 104), "")) : ("")))));
                    } else {
                        // line 106
                        echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 106)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 106), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 106)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 106), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 106)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 106), "")) : (""))));
                    }
                    // line 108
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 108) || twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", true, true, false, 108))) {
                        echo "</a>";
                    }
                    // line 109
                    echo "                        </td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "actions", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 112
                    echo "
                        <td>";
                    // line 114
                    if ($context["action"]) {
                        // line 115
                        echo "
                                <a href=\"";
                        // line 116
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", false, false, false, 116), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 116), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["action"], "ajaxModal", [], "any", true, true, false, 116) && twig_get_attribute($this->env, $this->source, $context["action"], "ajaxModal", [], "any", false, false, false, 116))) {
                            echo "data-ajax-modal";
                        }
                        echo ">
                                    <i class=\"fas fa-";
                        // line 117
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 117), "html", null, true);
                        echo "\"></i>
                                </a>";
                    }
                    // line 120
                    echo "
                        </td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "
            </tbody>
        </table>
    </div>
    <script>
        \$().ready(function () {
            \$('.data-table').DataTable({
                \"paging\": false,
                \"retrieve\": true,
                \"searching\": ";
            // line 135
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "searching", [], "any", true, true, false, 135)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "searching", [], "any", false, false, false, 135), "true")) : ("true")), "html", null, true);
            echo ",
                \"ordering\": ";
            // line 136
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ordering", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ordering", [], "any", false, false, false, 136), "true")) : ("true")), "html", null, true);
            echo ",
                \"order\": [[ ";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["default_sort"]) || array_key_exists("default_sort", $context) ? $context["default_sort"] : (function () { throw new RuntimeError('Variable "default_sort" does not exist.', 137, $this->source); })()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, (isset($context["default_sort_order"]) || array_key_exists("default_sort_order", $context) ? $context["default_sort_order"] : (function () { throw new RuntimeError('Variable "default_sort_order" does not exist.', 137, $this->source); })()), "html", null, true);
            echo "']],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['sortable'], bSortable: true},
                    {aTargets: ['searchable'], bSearchable: true},
                    {aTargets: ['_all'], bSortable: false, bSearchable: false}
                ],
            });
        });
    </script>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 154
    public function macro_collection_scripts(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_scripts"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_scripts"));

            // line 155
            echo "    <script>
        var \$collectionHolder;

        \$(function () {
            \$collectionHolder = \$('[data-collection-holder]');
            \$collectionHolder.data('index', \$collectionHolder.find('tr').length);
            \$('[data-add]').on('click', function () {
                addCollectionItem(\$collectionHolder);
            });

            \$('[data-delete]').on('click', function () {
                \$(this).closest('tr').remove();
            });

            function addCollectionItem(\$collectionHolder) {
                var prototype = \$('[data-prototype]').text();
                var index = \$collectionHolder.data('index');
                prototype = prototype.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$prototype = \$(prototype);
                \$prototype.find('[data-delete]').on('click', function () {
                    \$(this).closest('tr').remove();
                });

                \$collectionHolder.append(\$prototype);

                if (\$collectionHolder.data('after-add')) {
                    window[\$collectionHolder.data('after-add')]();
                }
            }
        });
    </script>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/jury_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 155,  545 => 154,  512 => 137,  508 => 136,  504 => 135,  493 => 126,  486 => 123,  479 => 120,  474 => 117,  464 => 116,  461 => 115,  459 => 114,  456 => 112,  452 => 111,  446 => 109,  442 => 108,  439 => 106,  436 => 104,  433 => 103,  427 => 102,  422 => 101,  415 => 100,  409 => 99,  402 => 98,  398 => 96,  396 => 95,  392 => 94,  385 => 93,  382 => 92,  379 => 91,  375 => 90,  370 => 86,  362 => 82,  358 => 81,  356 => 80,  342 => 78,  340 => 77,  335 => 76,  331 => 75,  328 => 73,  324 => 70,  322 => 69,  320 => 68,  318 => 67,  301 => 66,  299 => 65,  297 => 64,  291 => 59,  269 => 58,  227 => 30,  223 => 29,  219 => 28,  216 => 27,  198 => 26,  180 => 23,  162 => 22,  145 => 18,  141 => 17,  138 => 16,  120 => 15,  96 => 5,  92 => 4,  88 => 3,  85 => 2,  67 => 1,  56 => 153,  53 => 57,  50 => 25,  46 => 20,  43 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro select2_extrahead() %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/select2-bootstrap.min.css') }}\">
    <script src=\"{{ asset('js/select2.min.js') }}\"></script>
    <script>
        \$(function () {
            \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

            \$('select[multiple]').select2();
        });
    </script>
{% endmacro %}

{% macro toggle_extrahead() %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-toggle.min.css') }}\">
    <script src=\"{{ asset('js/bootstrap-toggle.min.js') }}\"></script>
{% endmacro %}


{% macro jscolor_extrahead() %}
    <script src=\"{{ asset('js/jscolor.js') }}\"></script>
{% endmacro %}

{% macro table_extrahead() %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/dataTables.bootstrap4.min.css') }}\">
    <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('js/dataTables.bootstrap4.min.js') }}\"></script>
    <style>
        .data-table td a, .data-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .data-table th {
            white-space: nowrap;
        }

        .data-table td {
            white-space: nowrap;
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .dataTables_filter {
            text-align: inherit;
        }

        .table-wrapper {
            display: inline-block;
        }
    </style>
{% endmacro %}

{% macro table(data, fields, num_actions, options) %}

    <div class=\"table-wrapper\">
        <table class=\"data-table table table-sm table-striped\" style=\"width:auto\">
            <thead class=\"\">
            <tr>
                {%- set default_sort = 0 %}
                {%- set default_sort_order = 'asc' %}
                {%- for key,column in fields %}
                    {%- if column.default_sort|default(false) %}
                        {%- set default_sort = loop.index0 %}
                        {%- if column.default_sort_order is defined %}
                            {%- set default_sort_order = column.default_sort_order %}
                        {%- endif %}
                    {%- endif %}

                    <th scope=\"col\" class=\"
                        {%- if column.sort is defined and column.sort %}sortable{%- endif %}
                        {%- if (column.search is not defined) or column.search %} searchable{%- endif %}\">
                        {{- column.title | raw -}}
                    </th>
                {%- endfor %}
                {%- if num_actions > 0 %}
                    {%- for i in 1..num_actions %}

                        <th scope=\"col\"></th>
                    {%- endfor %}
                {%- endif %}

            </tr>
            </thead>
            <tbody>
            {%- for row in data %}

                <tr class=\"{{ row.cssclass|default('') }}\"
                        {%- if row.style is defined %} style=\"{{ row.style }}\"{% endif %}>
                    {%- for key,column in fields %}
                        {%- set item = attribute(row.data, key) %}

                        <td
                           class=\"{{ item.cssclass|default('') }}{% if key == \"status\" %} {{ item.value|statusClass() }}{% endif %}\"
                                {%- if item.title is defined %} title=\"{{ item.title }}\"{% endif %}
                                {%- if item.sortvalue is defined %} data-sort=\"{{ item.sortvalue }}\"{% endif %}>
                            {%- if item.link is defined %}<a href=\"{{ item.link }}\">
                                {%- elseif row.link is defined %}<a href=\"{{ row.link }}\">{% endif %}
                                    {% if key == \"status\" %}
                                    {{- (item.value|default(item.default|default('')))|statusIcon()|raw -}}
                                    {% else %}
                                    {{- (item.value|default(item.default|default('')))|raw -}}
                                    {% endif %}
                                    {%- if item.link is defined or row.link is defined -%}</a>{% endif %}
                        </td>
                    {%- endfor %}
                    {%- for action in row.actions %}

                        <td>
                            {%- if action %}

                                <a href=\"{{ action.link }}\" title=\"{{ action.title }}\" {% if action.ajaxModal is defined and action.ajaxModal %}data-ajax-modal{% endif %}>
                                    <i class=\"fas fa-{{ action.icon }}\"></i>
                                </a>
                            {%- endif %}

                        </td>
                    {%- endfor %}

                </tr>
            {%- endfor %}

            </tbody>
        </table>
    </div>
    <script>
        \$().ready(function () {
            \$('.data-table').DataTable({
                \"paging\": false,
                \"retrieve\": true,
                \"searching\": {{ options.searching | default('true') }},
                \"ordering\": {{ options.ordering | default('true') }},
                \"order\": [[ {{ default_sort }}, '{{ default_sort_order }}']],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['sortable'], bSortable: true},
                    {aTargets: ['searchable'], bSearchable: true},
                    {aTargets: ['_all'], bSortable: false, bSearchable: false}
                ],
            });
        });
    </script>
{% endmacro %}

{% macro collection_scripts() %}
    <script>
        var \$collectionHolder;

        \$(function () {
            \$collectionHolder = \$('[data-collection-holder]');
            \$collectionHolder.data('index', \$collectionHolder.find('tr').length);
            \$('[data-add]').on('click', function () {
                addCollectionItem(\$collectionHolder);
            });

            \$('[data-delete]').on('click', function () {
                \$(this).closest('tr').remove();
            });

            function addCollectionItem(\$collectionHolder) {
                var prototype = \$('[data-prototype]').text();
                var index = \$collectionHolder.data('index');
                prototype = prototype.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$prototype = \$(prototype);
                \$prototype.find('[data-delete]').on('click', function () {
                    \$(this).closest('tr').remove();
                });

                \$collectionHolder.append(\$prototype);

                if (\$collectionHolder.data('after-add')) {
                    window[\$collectionHolder.data('after-add')]();
                }
            }
        });
    </script>
{% endmacro %}
", "jury/jury_macros.twig", "/domjudge/webapp/templates/jury/jury_macros.twig");
    }
}
