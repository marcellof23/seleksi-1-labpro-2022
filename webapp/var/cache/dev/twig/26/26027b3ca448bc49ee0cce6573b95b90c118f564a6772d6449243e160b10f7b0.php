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

/* jury/export/results_icpc.html.twig */
class __TwigTemplate_207929ba46ca1d4bb05daf4e3799475f297cc25dd61f9d82b7c6a96bd677b9a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/results_icpc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/results_icpc.html.twig"));

        // line 1
        if ( !(isset($context["download"]) || array_key_exists("download", $context) ? $context["download"] : (function () { throw new RuntimeError('Variable "download" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results-icpc", "download" => true, "sort_order" => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 2, $this->source); })())]), "html", null, true);
            echo "\">Download</a>
";
        }
        // line 4
        echo "
<div id=\"xwikicontent\">
    <style type=\"text/css\">
        table {
            border-collapse: collapse;
            border: 1px solid #ccc;
            border-bottom: 0;
            width: 52.7em;
            margin-bottom: 2em;
        }

        body {
            font-family: verdana, arial, tahoma, sans-serif;
        }

        table th {
            text-align: center;
            background: #247eca;
            color: white;
            padding: 0em;
            border: outset 2px #eee8aa;
        }

        table td {
            border-bottom: 1px solid #DDD;
            padding: .0em .0em .0em .5em;
        }

        table tr td.rank {
            background: transparent;
            border: 2px outset #ffffff;
        }

        table tr.gold td.rank {
            background: #f9d923;
            border: outset 2px #ffd700;
        }

        table tr.silver td.rank {
            background: Silver;
            border: 2px outset silver;
        }

        table tr.bronze td.rank {
            background: #c08e55;
            border: outset 2px #c9960c;
        }

        table td.name {
            padding-left: 1.2em;
        }

        table th.name {
            padding-left: 3em;
        }

        td.rank, td.solved {
            text-align: center;
            padding: 0px;
        }

        td.time {
            text-align: right;
            padding-right: 0.5em;
        }

        td.lastTime {
            text-align: right;
            padding-right: 1.2em;
        }

        table td.firstSol {
            text-align: right;
            padding: 0 1em;
        }

        table tr.even td {
            background: #F7F7F7;
        }

        table tr:hover td {
            background: #c4defa !important;
        }

        table tr td.r12 {
            background: #fdf993;
            border: 2px outset #DCDCDC;
        }

        table tr td.r11 {
            background: #fddd99;
            border: 2px outset #DCDCDC;
        }

        table tr td.r10 {
            background: #e9d923;
            border: 2px outset #DCDCDC;
        }

        table tr td.r9 {
            background: #e1d963;
            border: 2px outset #DCDCDC;
        }

        table tr td.r8 {
            background: #DDD7AA;
            border: 2px outset #DCDCDC;
        }

        table tr td.r7 {
            background: #d2d2d2;
            border: 2px outset #DCDCDC;
        }

        table tr td.r6 {
            background: #DDCDBD;
            border: 2px outset #DCDCDC;
        }

        table tr td.r5 {
            background: #e6e6e6;
            border: 2px outset #DCDCDC;
        }

        table tr td.r4 {
            background: #eee;
            border: 2px outset #f3f3f3;
        }

        table tr td.r3 {
            background: #F7f7f7;
            border: 2px outset #f7f7f7;
        }

        #uniTable td {
            border: 1px solid #DDD;
        }

        div.tail {
            font-size: .8em;
            color: #888;
            width: 65.875em;
            border: 1px solid #ccc;
        }

        span.right {
            float: right;
        }

        @media print {
            table#rankTable {
                page-break-after: always;
            }

            .gold td.rank::before {
                content: \"G \";
            }

            .silver td.rank::before {
                content: \"S \";
            }

            .bronze td.rank::before {
                content: \"B \";
            }
        }
    </style>


    <script type=\"text/javascript\"><!--
        function zebraTable(id) {
            var table = document.getElementById(id);
            if (table == null) {
                return;
            } else {
                for (var i = 0; i < table.rows.length; i++) {
                    if (i & 1) {
                        table.rows[i].className = table.rows[i].className + \" even\";
                    } else {
                        table.rows[i].className = table.rows[i].className + \" odd\";
                    }
                }
            }
        }

        --></script>
    <table cellspacing=\"0\" id=\"medalTable\">
        <tbody>
        <tr>
            <th><strong>Place</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Solved</strong></th>
            <th><strong>Time</strong></th>
            <th><strong>Last solved</strong></th>
        </tr>
        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["awarded"]) || array_key_exists("awarded", $context) ? $context["awarded"] : (function () { throw new RuntimeError('Variable "awarded" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["row"]) {
            // line 200
            echo "            <tr class=\"row";
            echo twig_escape_filter($this->env, ($context["idx"] + 1), "html", null, true);
            echo " row ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 200), "html", null, true);
            echo "\">
                <td class=\"rank\">";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rank", [], "any", false, false, false, 201), "html", null, true);
            echo "</td>
                <td class=\"name\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 202), "html", null, true);
            echo "</td>
                <td class=\"solved r";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 203), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 203), "html", null, true);
            echo "</td>
                <td class=\"time\">";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "total_time", [], "any", false, false, false, 204), "html", null, true);
            echo "</td>
                <td class=\"lastTime\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "max_time", [], "any", false, false, false, 205), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "        </tbody>
    </table>

    <table cellspacing=\"0\" id=\"rankTable\">
        <tbody>
        <tr>
            <th><strong>Place</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Solved</strong></th>
        </tr>
        ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ranked"]) || array_key_exists("ranked", $context) ? $context["ranked"] : (function () { throw new RuntimeError('Variable "ranked" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 219
            echo "            <tr class=\"row row\">
                <td class=\"rank\">";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "rank", [], "any", false, false, false, 220), "html", null, true);
            echo "</td>
                <td class=\"name\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 221), "html", null, true);
            echo "</td>
                <td class=\"solved r";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 222), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "solved", [], "any", false, false, false, 222), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "        </tbody>
    </table>

    <table cellspacing=\"0\" id=\"uniTable\">
        <tbody>
        <tr>
            <th colspan=\"2\">Honorable mention</th>
        </tr>
        ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["honorable"]) || array_key_exists("honorable", $context) ? $context["honorable"] : (function () { throw new RuntimeError('Variable "honorable" does not exist.', 233, $this->source); })()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 234
            echo "            <tr>
                ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 236
                echo "                    <td class=\"name\">";
                echo twig_escape_filter($this->env, $context["team"], "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "        </tbody>
    </table>

    <table cellspacing=\"0\" id=\"regionTable\">
        <tbody>
        <tr>
            <th>Region</th>
            <th>Champion</th>
        </tr>
        ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regionWinners"]) || array_key_exists("regionWinners", $context) ? $context["regionWinners"] : (function () { throw new RuntimeError('Variable "regionWinners" does not exist.', 249, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 250
            echo "            <tr>
                <td class=\"name\">";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "group", [], "any", false, false, false, 251), "html", null, true);
            echo "</td>
                <td class=\"name\">";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 252), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "        </tbody>
    </table>
    <table cellspacing=\"0\" id=\"firstTable\">
        <tbody>
        <tr>
            <th>Problem</th>
            <th>Team</th>
            <th>Time</th>
        </tr>
        ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["firstToSolve"]) || array_key_exists("firstToSolve", $context) ? $context["firstToSolve"] : (function () { throw new RuntimeError('Variable "firstToSolve" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 265
            echo "            <tr>
                <td class=\"name\">";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "problem_name", [], "any", false, false, false, 266), "html", null, true);
            echo "</td>
                <td class=\"name\">
                    ";
            // line 268
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 268))) {
                // line 269
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "team", [], "any", false, false, false, 269), "html", null, true);
                echo "
                    ";
            } else {
                // line 271
                echo "                        Not solved
                    ";
            }
            // line 273
            echo "                </td>
                <td class=\"name\">
                    ";
            // line 275
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 275))) {
                // line 276
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "time", [], "any", false, false, false, 276), "html", null, true);
                echo "
                    ";
            }
            // line 278
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "        </tbody>
    </table>

    <script type=\"text/javascript\">
        zebraTable('medalTable');
        zebraTable('rankTable');
        zebraTable('uniTable');
        zebraTable('regionTable');
        zebraTable('firstTable');
    </script>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/export/results_icpc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 281,  439 => 278,  433 => 276,  431 => 275,  427 => 273,  423 => 271,  417 => 269,  415 => 268,  410 => 266,  407 => 265,  403 => 264,  392 => 255,  383 => 252,  379 => 251,  376 => 250,  372 => 249,  361 => 240,  354 => 238,  345 => 236,  341 => 235,  338 => 234,  334 => 233,  324 => 225,  313 => 222,  309 => 221,  305 => 220,  302 => 219,  298 => 218,  286 => 208,  277 => 205,  273 => 204,  267 => 203,  263 => 202,  259 => 201,  252 => 200,  248 => 199,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not download %}
    <a href=\"{{ path('jury_html_export', {'type': 'results-icpc', 'download': true, 'sort_order': sortOrder}) }}\">Download</a>
{% endif %}

<div id=\"xwikicontent\">
    <style type=\"text/css\">
        table {
            border-collapse: collapse;
            border: 1px solid #ccc;
            border-bottom: 0;
            width: 52.7em;
            margin-bottom: 2em;
        }

        body {
            font-family: verdana, arial, tahoma, sans-serif;
        }

        table th {
            text-align: center;
            background: #247eca;
            color: white;
            padding: 0em;
            border: outset 2px #eee8aa;
        }

        table td {
            border-bottom: 1px solid #DDD;
            padding: .0em .0em .0em .5em;
        }

        table tr td.rank {
            background: transparent;
            border: 2px outset #ffffff;
        }

        table tr.gold td.rank {
            background: #f9d923;
            border: outset 2px #ffd700;
        }

        table tr.silver td.rank {
            background: Silver;
            border: 2px outset silver;
        }

        table tr.bronze td.rank {
            background: #c08e55;
            border: outset 2px #c9960c;
        }

        table td.name {
            padding-left: 1.2em;
        }

        table th.name {
            padding-left: 3em;
        }

        td.rank, td.solved {
            text-align: center;
            padding: 0px;
        }

        td.time {
            text-align: right;
            padding-right: 0.5em;
        }

        td.lastTime {
            text-align: right;
            padding-right: 1.2em;
        }

        table td.firstSol {
            text-align: right;
            padding: 0 1em;
        }

        table tr.even td {
            background: #F7F7F7;
        }

        table tr:hover td {
            background: #c4defa !important;
        }

        table tr td.r12 {
            background: #fdf993;
            border: 2px outset #DCDCDC;
        }

        table tr td.r11 {
            background: #fddd99;
            border: 2px outset #DCDCDC;
        }

        table tr td.r10 {
            background: #e9d923;
            border: 2px outset #DCDCDC;
        }

        table tr td.r9 {
            background: #e1d963;
            border: 2px outset #DCDCDC;
        }

        table tr td.r8 {
            background: #DDD7AA;
            border: 2px outset #DCDCDC;
        }

        table tr td.r7 {
            background: #d2d2d2;
            border: 2px outset #DCDCDC;
        }

        table tr td.r6 {
            background: #DDCDBD;
            border: 2px outset #DCDCDC;
        }

        table tr td.r5 {
            background: #e6e6e6;
            border: 2px outset #DCDCDC;
        }

        table tr td.r4 {
            background: #eee;
            border: 2px outset #f3f3f3;
        }

        table tr td.r3 {
            background: #F7f7f7;
            border: 2px outset #f7f7f7;
        }

        #uniTable td {
            border: 1px solid #DDD;
        }

        div.tail {
            font-size: .8em;
            color: #888;
            width: 65.875em;
            border: 1px solid #ccc;
        }

        span.right {
            float: right;
        }

        @media print {
            table#rankTable {
                page-break-after: always;
            }

            .gold td.rank::before {
                content: \"G \";
            }

            .silver td.rank::before {
                content: \"S \";
            }

            .bronze td.rank::before {
                content: \"B \";
            }
        }
    </style>


    <script type=\"text/javascript\"><!--
        function zebraTable(id) {
            var table = document.getElementById(id);
            if (table == null) {
                return;
            } else {
                for (var i = 0; i < table.rows.length; i++) {
                    if (i & 1) {
                        table.rows[i].className = table.rows[i].className + \" even\";
                    } else {
                        table.rows[i].className = table.rows[i].className + \" odd\";
                    }
                }
            }
        }

        --></script>
    <table cellspacing=\"0\" id=\"medalTable\">
        <tbody>
        <tr>
            <th><strong>Place</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Solved</strong></th>
            <th><strong>Time</strong></th>
            <th><strong>Last solved</strong></th>
        </tr>
        {% for idx, row in awarded %}
            <tr class=\"row{{ idx + 1 }} row {{ row.class }}\">
                <td class=\"rank\">{{ row.rank }}</td>
                <td class=\"name\">{{ row.team }}</td>
                <td class=\"solved r{{ row.solved }}\">{{ row.solved }}</td>
                <td class=\"time\">{{ row.total_time }}</td>
                <td class=\"lastTime\">{{ row.max_time }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <table cellspacing=\"0\" id=\"rankTable\">
        <tbody>
        <tr>
            <th><strong>Place</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Solved</strong></th>
        </tr>
        {% for row in ranked %}
            <tr class=\"row row\">
                <td class=\"rank\">{{ row.rank }}</td>
                <td class=\"name\">{{ row.team }}</td>
                <td class=\"solved r{{ row.solved }}\">{{ row.solved }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <table cellspacing=\"0\" id=\"uniTable\">
        <tbody>
        <tr>
            <th colspan=\"2\">Honorable mention</th>
        </tr>
        {% for row in honorable|batch(2) %}
            <tr>
                {% for team in row %}
                    <td class=\"name\">{{ team }}</td>
                {% endfor %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <table cellspacing=\"0\" id=\"regionTable\">
        <tbody>
        <tr>
            <th>Region</th>
            <th>Champion</th>
        </tr>
        {% for row in regionWinners %}
            <tr>
                <td class=\"name\">{{ row.group }}</td>
                <td class=\"name\">{{ row.team }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <table cellspacing=\"0\" id=\"firstTable\">
        <tbody>
        <tr>
            <th>Problem</th>
            <th>Team</th>
            <th>Time</th>
        </tr>
        {% for row in firstToSolve %}
            <tr>
                <td class=\"name\">{{ row.problem_name }}</td>
                <td class=\"name\">
                    {% if row.team is not null %}
                        {{ row.team }}
                    {% else %}
                        Not solved
                    {% endif %}
                </td>
                <td class=\"name\">
                    {% if row.time is not null %}
                        {{ row.time }}
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <script type=\"text/javascript\">
        zebraTable('medalTable');
        zebraTable('rankTable');
        zebraTable('uniTable');
        zebraTable('regionTable');
        zebraTable('firstTable');
    </script>
</div>
", "jury/export/results_icpc.html.twig", "/domjudge/webapp/templates/jury/export/results_icpc.html.twig");
    }
}
