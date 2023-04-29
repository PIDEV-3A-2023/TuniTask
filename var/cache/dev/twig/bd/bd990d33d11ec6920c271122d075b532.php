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

/* answers/indexfreelancer.html.twig */
class __TwigTemplate_c2bfbbddf7243dbe0f16b3f34682bae3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/indexfreelancer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/indexfreelancer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "answers/indexfreelancer.html.twig", 1);
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
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
    </head>
    <div style=\"display:flex;align-items: center;justify-content: center;flex-direction: column\">
        <h1 style=\"text-align: center;margin-bottom: 30px;\">Quiz: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 8, $this->source); })()), "quizTitle", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
        <h2 style=\"text-align: center;margin-bottom: 30px;\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 9, $this->source); })()), "questionText", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>

        <form id=\"quizForm\" method=\"POST\">
            <table style=\"border-collapse: collapse;width: 100%;max-width: 800px;margin: 0 auto;\">
                <thead>
                <tr style=\"background-color: #f2f2f2;\">
                    <th style=\"padding: 12px;border: 1px solid #ddd;text-align: left;\">Answer</th>
                    <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Is It Correct?</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) || array_key_exists("answers", $context) ? $context["answers"] : (function () { throw new RuntimeError('Variable "answers" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 21
            echo "                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px;border: 1px solid #ddd;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">
                            <input type=\"checkbox\" name=\"answers[]\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "isCorrect", [], "any", false, false, false, 24), "html", null, true);
            echo "\" />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>

            <div style=\"display: flex; justify-content: center; margin-top: 20px;\">
                <button type=\"submit\" onclick=\"event.preventDefault(); var total = 0; var checkboxes = document.getElementsByName('answers[]'); var correctAnswers = 0; for (var i = 0; i < checkboxes.length; i++) {if (checkboxes[i].checked) {total += 1; if (checkboxes[i].value === '1') { correctAnswers += 1; }}} if (correctAnswers === total && total !== 0) {swal({title: 'Correct!',text: 'You got it right!',icon: 'success',button: 'Next'}).then(function() {
                        \$.ajax({
                        url: '";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_quiz_score", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 34, $this->source); })()), "idQuiz", [], "any", false, false, false, 34)]), "html", null, true);
        echo "',
                        type: 'POST',
                        data: {score: 1},
                        success: function(response) {
                        window.location.href = '";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 38, $this->source); })()), "idQuiz", [], "any", false, false, false, 38), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 38, $this->source); })()), "idQuestion", [], "any", false, false, false, 38)]), "html", null, true);
        echo "';
                        }
                        });
                        });} else {swal('Oops!', 'Sorry, that\\'s not quite right. Try again!', 'error');}\" style=\"display: inline-block;margin-left:10px; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Check answer</button>

                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 43, $this->source); })()), "idQuiz", [], "any", false, false, false, 43), "questionId" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 43, $this->source); })()), "idQuestion", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" style=\"display: inline-block;margin-left:10px; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Next</a>
            </div>
        </form>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "answers/indexfreelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  129 => 38,  122 => 34,  114 => 28,  104 => 24,  99 => 22,  96 => 21,  92 => 20,  78 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <head>
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
    </head>
    <div style=\"display:flex;align-items: center;justify-content: center;flex-direction: column\">
        <h1 style=\"text-align: center;margin-bottom: 30px;\">Quiz: {{ quiz.quizTitle }}</h1>
        <h2 style=\"text-align: center;margin-bottom: 30px;\">{{ question.questionText }}</h2>

        <form id=\"quizForm\" method=\"POST\">
            <table style=\"border-collapse: collapse;width: 100%;max-width: 800px;margin: 0 auto;\">
                <thead>
                <tr style=\"background-color: #f2f2f2;\">
                    <th style=\"padding: 12px;border: 1px solid #ddd;text-align: left;\">Answer</th>
                    <th style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">Is It Correct?</th>
                </tr>
                </thead>
                <tbody>
                {% for answer in answers %}
                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px;border: 1px solid #ddd;\">{{ answer.answer }}</td>
                        <td style=\"padding: 12px;border: 1px solid #ddd;text-align: center;\">
                            <input type=\"checkbox\" name=\"answers[]\" value=\"{{ answer.isCorrect }}\" />
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

            <div style=\"display: flex; justify-content: center; margin-top: 20px;\">
                <button type=\"submit\" onclick=\"event.preventDefault(); var total = 0; var checkboxes = document.getElementsByName('answers[]'); var correctAnswers = 0; for (var i = 0; i < checkboxes.length; i++) {if (checkboxes[i].checked) {total += 1; if (checkboxes[i].value === '1') { correctAnswers += 1; }}} if (correctAnswers === total && total !== 0) {swal({title: 'Correct!',text: 'You got it right!',icon: 'success',button: 'Next'}).then(function() {
                        \$.ajax({
                        url: '{{ path('update_quiz_score', {'quizId': quiz.idQuiz}) }}',
                        type: 'POST',
                        data: {score: 1},
                        success: function(response) {
                        window.location.href = '{{ path('app_questions', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}';
                        }
                        });
                        });} else {swal('Oops!', 'Sorry, that\\'s not quite right. Try again!', 'error');}\" style=\"display: inline-block;margin-left:10px; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Check answer</button>

                <a href=\"{{ path('app_questions', {'quizId': quiz.idQuiz, 'questionId': question.idQuestion}) }}\" style=\"display: inline-block;margin-left:10px; padding: 10px 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; text-decoration: none; font-weight: bold; margin-top: 20px;\">Next</a>
            </div>
        </form>
    </div>
{% endblock %}
", "answers/indexfreelancer.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\answers\\indexfreelancer.html.twig");
    }
}
