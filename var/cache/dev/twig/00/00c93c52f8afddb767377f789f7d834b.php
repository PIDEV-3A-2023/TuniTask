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

/* quizs/index.html.twig */
class __TwigTemplate_2e36ab4eda4967476b0874c48ebe822f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "quizs/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <head>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/cssAhmed/flashy.cssAhmed"), "html", null, true);
        echo "\">
        <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href='//fonts.googleapis.com/cssAhmed?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.jsAhmed\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/jsAhmed/flashy.jsAhmed"), "html", null, true);
        echo "\"></script>
        ";
        // line 13
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "

    </head>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "flashbag", [], "any", false, false, false, 17), "get", [0 => "success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "<h1 style=\"color: #333; font-size: 32px; margin-bottom: 30px; text-align: center;\">Liste des Quizs</h1>
    <div style=\"color: #333; font-size: 20px; margin-bottom: 10px; text-align: center;\">
        <label for=\"searchInput\">Search Quiz</label>
        <input type=\"text\" id=\"searchInput\" name=\"searchInput\" oninput=\"
    const searchValue = event.target.value.trim().toLowerCase();
    const rows = document.querySelectorAll('.quiz-table tbody tr');
    rows.forEach(function(row) {
        const title = row.querySelector('td:nth-child(1)').textContent.trim().toLowerCase();
        const score = row.querySelector('td:nth-child(3)').textContent.trim().toLowerCase();
        if (title.includes(searchValue) || score.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
\">

    </div>
<table class=\"quiz-table\" style=\"border-collapse: collapse; width: 100%;\">
    <thead>
    <tr style=\"background-color: #f2f2f2;\">

        <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Title</th>
        <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Description</th>
        <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\"colspan=4\";>Score</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizs"]) || array_key_exists("quizs", $context) ? $context["quizs"] : (function () { throw new RuntimeError('Variable "quizs" does not exist.', 48, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 49
            echo "        <tr style=\"background-color: ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49) % 2 == 0)) ? ("#f2f2f2") : (""));
            echo ";\">

            <td style=\"padding: 10px; text-align: left;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "quizTitle", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
            <td style=\"padding: 10px; text-align: left;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "quizDescription", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
            <td style=\"padding: 10px; text-align: left;\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "score", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>

            <td style=\"padding: 10px; text-align: left;\">
                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_open", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Open</a>
            </td>
            <td style=\"padding: 10px; text-align: left;\">
                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Edit</a>
            </td>
            <td style=\"padding: 10px; text-align: left;\">
                <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" class=\"delete-link\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 62), "html", null, true);
            echo "\" style=\"display: inline-block; padding: 8px 16px; background-color: #dc3545; color: #fff; border-radius: 4px; text-decoration: none;\" onclick=\"event.preventDefault();
                        swal({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this quiz!',
                        icon: 'warning',
                        buttons: ['Cancel', 'Delete'],
                        dangerMode: true,
                        }).then((willDelete) => {
                        if (willDelete) {
                        window.location.href = '";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["quiz"], "idQuiz", [], "any", false, false, false, 71)]), "html", null, true);
            echo "';
                        }
                        });\">Delete</a>
            </td>
        </tr>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </tbody>
</table>

<div class=\"add-quiz-btn\" style=\"display: block; margin: 20px auto 0; text-align: center;\">
    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quizs_new");
        echo "\" style=\"display: inline-block; padding: 12px 24px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Add Quiz</a>
</div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 81,  216 => 77,  196 => 71,  182 => 62,  176 => 59,  170 => 56,  164 => 53,  160 => 52,  156 => 51,  150 => 49,  133 => 48,  103 => 20,  94 => 18,  90 => 17,  83 => 13,  79 => 12,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
    <head>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/cssAhmed/flashy.cssAhmed') }}\">
        <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href='//fonts.googleapis.com/cssAhmed?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.jsAhmed\"></script>
        <script src=\"{{ asset('bundles/mercuryseriesflashy/jsAhmed/flashy.jsAhmed') }}\"></script>
        {{ include('@MercurySeriesFlashy/flashy.html.twig') }}

    </head>

    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">{{ flashMessage }}</div>
    {% endfor %}
<h1 style=\"color: #333; font-size: 32px; margin-bottom: 30px; text-align: center;\">Liste des Quizs</h1>
    <div style=\"color: #333; font-size: 20px; margin-bottom: 10px; text-align: center;\">
        <label for=\"searchInput\">Search Quiz</label>
        <input type=\"text\" id=\"searchInput\" name=\"searchInput\" oninput=\"
    const searchValue = event.target.value.trim().toLowerCase();
    const rows = document.querySelectorAll('.quiz-table tbody tr');
    rows.forEach(function(row) {
        const title = row.querySelector('td:nth-child(1)').textContent.trim().toLowerCase();
        const score = row.querySelector('td:nth-child(3)').textContent.trim().toLowerCase();
        if (title.includes(searchValue) || score.includes(searchValue)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
\">

    </div>
<table class=\"quiz-table\" style=\"border-collapse: collapse; width: 100%;\">
    <thead>
    <tr style=\"background-color: #f2f2f2;\">

        <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Title</th>
        <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\">Description</th>
        <th style=\"background-color: #333; color: #fff; padding: 10px; text-align: left;\"colspan=4\";>Score</th>
    </tr>
    </thead>
    <tbody>
    {% for quiz in quizs %}
        <tr style=\"background-color: {{ loop.index is even ? '#f2f2f2' : '' }};\">

            <td style=\"padding: 10px; text-align: left;\">{{ quiz.quizTitle }}</td>
            <td style=\"padding: 10px; text-align: left;\">{{ quiz.quizDescription }}</td>
            <td style=\"padding: 10px; text-align: left;\">{{ quiz.score }}</td>

            <td style=\"padding: 10px; text-align: left;\">
                <a href=\"{{ path('app_quizs_open', {'id': quiz.idQuiz}) }}\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Open</a>
            </td>
            <td style=\"padding: 10px; text-align: left;\">
                <a href=\"{{ path('app_quizs_edit', {'id': quiz.idQuiz}) }}\" style=\"display: inline-block; padding: 8px 16px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Edit</a>
            </td>
            <td style=\"padding: 10px; text-align: left;\">
                <a href=\"{{ path('app_quizs_delete', {'id': quiz.idQuiz}) }}\" class=\"delete-link\" data-id=\"{{ quiz.idQuiz }}\" style=\"display: inline-block; padding: 8px 16px; background-color: #dc3545; color: #fff; border-radius: 4px; text-decoration: none;\" onclick=\"event.preventDefault();
                        swal({
                        title: 'Are you sure?',
                        text: 'You will not be able to recover this quiz!',
                        icon: 'warning',
                        buttons: ['Cancel', 'Delete'],
                        dangerMode: true,
                        }).then((willDelete) => {
                        if (willDelete) {
                        window.location.href = '{{ path('app_quizs_delete', {'id': quiz.idQuiz}) }}';
                        }
                        });\">Delete</a>
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<div class=\"add-quiz-btn\" style=\"display: block; margin: 20px auto 0; text-align: center;\">
    <a href=\"{{ path('app_quizs_new') }}\" style=\"display: inline-block; padding: 12px 24px; background-color: #6a0995; color: #fff; border-radius: 4px; text-decoration: none;\">Add Quiz</a>
</div>



{% endblock %}

", "quizs/index.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\quizs\\index.html.twig");
    }
}
