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

/* answers/index.html.twig */
class __TwigTemplate_85c4707b88f8bcbd60f9dec7bbe93164 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "answers/index.html.twig", 1);
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
    <div style=\"display:flex;align-items: center;justify-content: center;flex-direction: column\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        <h1 style=\"text-align: center;margin-bottom: 30px;\">Quiz: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 17, $this->source); })()), "quizTitle", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
        <h2 style=\"text-align: center;margin-bottom: 30px;\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 18, $this->source); })()), "questionText", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>

        <table style=\"border-collapse: collapse;width: 100%;max-width: 800px;margin: 0 auto;\">
            <thead>
            <tr style=\"background-color: #f2f2f2;\">
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: left;\">Answer</th>
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Is It Correct?</th>
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Edit</th>
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Delete</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 31
            echo "                <tr style=\"border-bottom: 1px solid #ddd;\">
                    <td style=\"padding: 12px;border: 1px solid #ddd;\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["answer"], "isCorrect", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
            echo "</td>
";
            // line 35
            echo "
                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_answers_edit", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 36, $this->source); })()), "idQuiz", [], "any", false, false, false, 36), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 36, $this->source); })()), "idQuestion", [], "any", false, false, false, 36), "answerId" => twig_get_attribute($this->env, $this->source, $context["answer"], "idAnswer", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" style=\"display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold;\">Edit</a></td>
                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\"><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_answers_delete", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 37, $this->source); })()), "idQuiz", [], "any", false, false, false, 37), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 37, $this->source); })()), "idQuestion", [], "any", false, false, false, 37), "answerId" => twig_get_attribute($this->env, $this->source, $context["answer"], "idAnswer", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" style=\"display: inline-block; padding: 10px 20px; background-color: #ff0000; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold;\">Delete</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>

        <div style=\"display: flex; justify-content: center; margin-top: 20px;\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_question_answers_add", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 44, $this->source); })()), "idQuiz", [], "any", false, false, false, 44), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 44, $this->source); })()), "idQuestion", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\"  style=\"display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Add answer</a>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 45, $this->source); })()), "idQuiz", [], "any", false, false, false, 45), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 45, $this->source); })()), "idQuestion", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\"  style=\"display: inline-block;margin-left:10px; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Back to question</a>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "answers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 45,  159 => 44,  153 => 40,  144 => 37,  140 => 36,  137 => 35,  133 => 33,  129 => 32,  126 => 31,  122 => 30,  107 => 18,  102 => 17,  93 => 15,  89 => 14,  83 => 11,  79 => 10,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
    <div style=\"display:flex;align-items: center;justify-content: center;flex-direction: column\">
        {% for flashMessage in app.session.flashbag.get('success') %}
            <div class=\"alert alert-success\">{{ flashMessage }}</div>
        {% endfor %}
        <h1 style=\"text-align: center;margin-bottom: 30px;\">Quiz: {{ quiz.quizTitle }}</h1>
        <h2 style=\"text-align: center;margin-bottom: 30px;\">{{ question.questionText }}</h2>

        <table style=\"border-collapse: collapse;width: 100%;max-width: 800px;margin: 0 auto;\">
            <thead>
            <tr style=\"background-color: #f2f2f2;\">
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: left;\">Answer</th>
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Is It Correct?</th>
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Edit</th>
                <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Delete</th>
            </tr>
            </thead>
            <tbody>
            {% for answer in answers %}
                <tr style=\"border-bottom: 1px solid #ddd;\">
                    <td style=\"padding: 12px;border: 1px solid #ddd;\">{{ answer.answer }}</td>
                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">{{ answer.isCorrect ? 'Yes' : 'No' }}</td>
{#                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\"><a href=\"#\" style=\"display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold;\">Check Answer</a></td>#}

                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\"><a href=\"{{ path('app_answers_edit', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion, 'answerId': answer.idAnswer}) }}\" style=\"display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold;\">Edit</a></td>
                    <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\"><a href=\"{{ path('app_answers_delete', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion, 'answerId': answer.idAnswer}) }}\" style=\"display: inline-block; padding: 10px 20px; background-color: #ff0000; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold;\">Delete</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <div style=\"display: flex; justify-content: center; margin-top: 20px;\">
            <a href=\"{{ path('app_question_answers_add', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\"  style=\"display: inline-block; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Add answer</a>
            <a href=\"{{ path('app_questions', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\"  style=\"display: inline-block;margin-left:10px; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Back to question</a>
        </div>
    </div>

{% endblock %}

", "answers/index.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\answers\\index.html.twig");
    }
}
