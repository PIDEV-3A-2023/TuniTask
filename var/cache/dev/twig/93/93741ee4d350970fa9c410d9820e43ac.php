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

/* questions/index.html.twig */
class __TwigTemplate_0f6cfb45afb76656365348cd72213415 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "questions/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "questions/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/cssAhmed/flashy.cssAhmed"), "html", null, true);
        echo "\">
        <link href=\"//fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href='//fonts.googleapis.com/cssAhmed?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.jsAhmed\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/jsAhmed/flashy.jsAhmed"), "html", null, true);
        echo "\"></script>
        ";
        // line 11
        echo twig_include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
        echo "
    </head>

    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    <h1 style=\"font-size: 32px; font-weight: bold; margin-bottom: 24px; display: flex;justify-content: center; align-items: center;\">Quiz:  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 17, $this->source); })()), "quizTitle", [], "any", false, false, false, 17)), "html", null, true);
        echo "</h1>

    <table style=\"border-collapse: collapse; width: 100%;\">
        <thead>
        <tr style=\"background-color: #f2f2f2;\">
            <th style=\"border: 1px solid #ddd; padding: 8px;\" colspan=\"4\">Question</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 27
            echo "            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "questionText", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_answers", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 30, $this->source); })()), "idQuiz", [], "any", false, false, false, 30), "questionId" => twig_get_attribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" style=\"display: inline-block; background-color: #6a0995; color: #fff; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Answer Question</a>

                </td>
                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions_edit", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 34, $this->source); })()), "idQuiz", [], "any", false, false, false, 34), "questionId" => twig_get_attribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" style=\"display: inline-block; background-color: #6a0995; color: #fff; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Edit</a>
                </td>
                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions_delete", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 37, $this->source); })()), "idQuiz", [], "any", false, false, false, 37), "questionId" => twig_get_attribute($this->env, $this->source, $context["question"], "idQuestion", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" style=\"display: inline-block; background-color: #f44336; color: white; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Delete</a>

                </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>
    <div style=\"margin-top: 24px; text-align: center;\">
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions_add", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 46, $this->source); })()), "idQuiz", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" style=\"display: inline-block; background-color: #6a0995; color: #fff; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Add Question</a>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "questions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  152 => 43,  140 => 37,  134 => 34,  127 => 30,  122 => 28,  119 => 27,  115 => 26,  102 => 17,  93 => 15,  89 => 14,  83 => 11,  79 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
    <h1 style=\"font-size: 32px; font-weight: bold; margin-bottom: 24px; display: flex;justify-content: center; align-items: center;\">Quiz:  {{ quiz.quizTitle | upper }}</h1>

    <table style=\"border-collapse: collapse; width: 100%;\">
        <thead>
        <tr style=\"background-color: #f2f2f2;\">
            <th style=\"border: 1px solid #ddd; padding: 8px;\" colspan=\"4\">Question</th>
        </tr>
        </thead>
        <tbody>
        {% for question in questions %}
            <tr>
                <td style=\"border: 1px solid #ddd; padding: 8px;\">{{ question.questionText }}</td>
                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"{{ path('app_question_answers', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\" style=\"display: inline-block; background-color: #6a0995; color: #fff; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Answer Question</a>

                </td>
                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"{{ path('app_questions_edit', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\" style=\"display: inline-block; background-color: #6a0995; color: #fff; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Edit</a>
                </td>
                <td style=\"text-align: center; border: 1px solid #ddd; padding: 8px;\">
                    <a href=\"{{ path('app_questions_delete', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\" style=\"display: inline-block; background-color: #f44336; color: white; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Delete</a>

                </td>

            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div style=\"margin-top: 24px; text-align: center;\">
        <a href=\"{{ path('app_questions_add', {'quizId': quiz.idQuiz}) }}\" style=\"display: inline-block; background-color: #6a0995; color: #fff; padding: 8px 16px; text-align: center; text-decoration: none; border-radius: 4px;\">Add Question</a>

    </div>
{% endblock %}
", "questions/index.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\questions\\index.html.twig");
    }
}
