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

/* answers/add.html.twig */
class __TwigTemplate_4de40e1329ae6a31cda7455679ea6179 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "answers/add.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "answers/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "<div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
    <h1 style=\"color: #4c0673; font-size: 32px; margin-bottom: 30px; text-align: center;\">Add a New Answer</h1>

    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "style" => "width: 800px; height: 300px; margin: 0 auto; background-color: #f5f5f5; border: 1px solid #ddd; border-radius: 10px; padding: 20px;"]]);
        echo "
    <div class=\"form-group\">
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "answer", [], "any", false, false, false, 101), 'label');
        echo "
        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "answer", [], "any", false, false, false, 102), 'widget', ["attr" => ["placeholder" => "Enter answer", "required" => "required", "style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; font-size: 16px;"]]);
        echo "

        <div class=\"form-error-message\">
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "answer", [], "any", false, false, false, 105), 'errors');
        echo "
        </div>
    </div>
    <div style=\"display: block;  margin-top: 20px;\">
        <span style=\"font-size: 16px;\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "isCorrect", [], "any", false, false, false, 109), 'label');
        echo "</span>
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "isCorrect", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-check-input", "style" => "width: auto; height: auto; margin-left: 10px;"]]);
        echo "
        <div class=\"form-error-message\">
            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "isCorrect", [], "any", false, false, false, 112), 'errors');
        echo "
        </div>
    </div>
    <div class=\"form-actions\">
        <button type=\"submit\" style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Save</button>
    </div>
    ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "

    <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_questions", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 120, $this->source); })()), "getIdQuiz", [], "method", false, false, false, 120)]), "html", null, true);
        echo "\" style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Back to Questions</a>
</div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "answers/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 120,  113 => 118,  104 => 112,  99 => 110,  95 => 109,  88 => 105,  82 => 102,  78 => 101,  73 => 99,  68 => 96,  58 => 95,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}
{#{% block stylesheets %}#}
{#    <style>#}
{#        h1 {#}
{#            color: #333;#}
{#            font-size: 32px;#}
{#            margin-bottom: 30px;#}
{#            text-align: center;#}
{#        }#}

{#        form {#}
{#            max-width: 600px;#}
{#            margin: 0 auto;#}
{#            background-color: #fff;#}
{#            border: 1px solid #ddd;#}
{#            border-radius: 10px;#}
{#            padding: 20px;#}
{#        }#}

{#        label {#}
{#            display: block;#}
{#            margin-bottom: 10px;#}
{#            font-size: 16px;#}
{#        }#}

{#        input[type=\"text\"], textarea {#}
{#            width: 100%;#}
{#            padding: 10px;#}
{#            border: 1px solid #ddd;#}
{#            border-radius: 5px;#}
{#            margin-bottom: 20px;#}
{#            font-size: 16px;#}
{#        }#}

{#        input[type=\"radio\"] {#}
{#            margin-right: 10px;#}
{#        }#}

{#        .error-message {#}
{#            color: red;#}
{#            margin-top: 10px;#}
{#        }#}

{#        .form-group {#}
{#            margin-bottom: 20px;#}
{#        }#}

{#        .form-group label {#}
{#            font-weight: bold;#}
{#            margin-bottom: 5px;#}
{#        }#}

{#        .form-group input[type=\"text\"], .form-group textarea {#}
{#            width: 100%;#}
{#            padding: 10px;#}
{#            border: 1px solid #ddd;#}
{#            border-radius: 5px;#}
{#            margin-bottom: 10px;#}
{#            font-size: 16px;#}
{#        }#}

{#        .form-group .form-error-message {#}
{#            color: red;#}
{#            margin-top: 5px;#}
{#        }#}

{#        .form-actions {#}
{#            text-align: center;#}
{#            margin-top: 20px;#}
{#        }#}

{#        .form-actions button[type=\"submit\"] {#}
{#            padding: 10px 20px;#}
{#            font-size: 16px;#}
{#            background-color: #337ab7;#}
{#            color: #fff;#}
{#            border: none;#}
{#            border-radius: 5px;#}
{#            cursor: pointer;#}
{#        }#}

{#        .form-actions button[type=\"submit\"]:hover {#}
{#            background-color: #286090;#}
{#        }#}

{#        .back-link {#}
{#            display: block;#}
{#            text-align: center;#}
{#            margin-top: 20px;#}
{#            font-size: 16px;#}
{#        }#}
{#    </style>#}
{#{% endblock %}#}

{% block body %}
<div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
    <h1 style=\"color: #4c0673; font-size: 32px; margin-bottom: 30px; text-align: center;\">Add a New Answer</h1>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'style': 'width: 800px; height: 300px; margin: 0 auto; background-color: #f5f5f5; border: 1px solid #ddd; border-radius: 10px; padding: 20px;'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.answer) }}
        {{ form_widget(form.answer, {'attr': {'placeholder': 'Enter answer', 'required': 'required', 'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; font-size: 16px;'}}) }}

        <div class=\"form-error-message\">
            {{ form_errors(form.answer) }}
        </div>
    </div>
    <div style=\"display: block;  margin-top: 20px;\">
        <span style=\"font-size: 16px;\">{{ form_label(form.isCorrect) }}</span>
        {{ form_widget(form.isCorrect, {'attr': {'class': 'form-check-input','style': 'width: auto; height: auto; margin-left: 10px;'}}) }}
        <div class=\"form-error-message\">
            {{ form_errors(form.isCorrect) }}
        </div>
    </div>
    <div class=\"form-actions\">
        <button type=\"submit\" style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Save</button>
    </div>
    {{ form_end(form) }}

    <a href=\"{{ path('app_questions', {'quizId': quiz.getIdQuiz()}) }}\" style=\"margin: 20px; background-color: #333; color: #fff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 16px; cursor: pointer;\">Back to Questions</a>
</div>

    {% endblock %}
", "answers/add.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\answers\\add.html.twig");
    }
}
