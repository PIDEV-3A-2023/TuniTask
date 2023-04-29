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

/* quizs/add.html.twig */
class __TwigTemplate_d9a9e1f52550dc2189528ee0421fd7cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/add.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "quizs/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    <head>
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
    </head>
    <div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
        <h1>Create a new quiz</h1>
        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "myForm", "style" => "max-width: 600px; margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 20px;"]]);
        echo "
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "quizTitle", [], "any", false, false, false, 50), 'label');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "quizTitle", [], "any", false, false, false, 51), 'widget', ["attr" => ["style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"]]);
        echo "
            ";
        // line 52
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "quizTitle", [], "any", false, false, false, 52), 'errors')) {
            // line 53
            echo "                <div class=\"error-message\" style=\"color: red;\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "quizTitle", [], "any", false, false, false, 53), 'errors');
            echo "</div>
            ";
        }
        // line 55
        echo "        </div>
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "quizDescription", [], "any", false, false, false, 57), 'label');
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "quizDescription", [], "any", false, false, false, 58), 'widget', ["attr" => ["style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"]]);
        echo "
            ";
        // line 59
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "quizDescription", [], "any", false, false, false, 59), 'errors')) {
            // line 60
            echo "                <div class=\"error-message\" style=\"color: red;\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "quizDescription", [], "any", false, false, false, 60), 'errors');
            echo "</div>
            ";
        }
        // line 62
        echo "        </div>
        <div style=\"margin-bottom: 20px;\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "score", [], "any", false, false, false, 64), 'label');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "score", [], "any", false, false, false, 65), 'widget', ["attr" => ["style" => "width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;"]]);
        echo "
            ";
        // line 66
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "score", [], "any", false, false, false, 66), 'errors')) {
            // line 67
            echo "                <div class=\"error-message\" style=\"color: red;\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "score", [], "any", false, false, false, 67), 'errors');
            echo "</div>
            ";
        }
        // line 69
        echo "        </div>
        <button type=\"submit\" class=\"btn btn-primary\" onclick=\"
                event.preventDefault();
                swal({
                title: 'Are you sure?',
                text: 'you will add a new quiz',
                icon: 'warning',
                buttons: ['Cancel', 'Yes, create quiz'],
                dangerMode: true,
                }).then((willCreate) => {
                if (willCreate) {
                document.getElementById('";
        // line 80
        echo "myForm";
        echo "').submit();
                }
                });
                \">
            Create
        </button>

        ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "quizs/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 87,  149 => 80,  136 => 69,  130 => 67,  128 => 66,  124 => 65,  120 => 64,  116 => 62,  110 => 60,  108 => 59,  104 => 58,  100 => 57,  96 => 55,  90 => 53,  88 => 52,  84 => 51,  80 => 50,  75 => 48,  68 => 43,  58 => 42,  35 => 1,);
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
{#        }#}

{#        input[type=\"text\"], textarea {#}
{#            width: 100%;#}
{#            padding: 10px;#}
{#            border: 1px solid #ddd;#}
{#            border-radius: 5px;#}
{#            margin-bottom: 20px;#}
{#            font-size: 16px;#}
{#        }#}

{#        .error-message {#}
{#            color: red;#}
{#            margin-top: 10px;#}
{#        }#}
{#    </style>#}
{#{% endblock %}#}

{% block body %}
    <head>
        <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.jsAhmed\"></script>
    </head>
    <div class=\"container\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;\">
        <h1>Create a new quiz</h1>
        {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'myForm', 'style': 'max-width: 600px; margin: 0 auto; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; padding: 20px;'}}) }}
        <div style=\"margin-bottom: 20px;\">
            {{ form_label(form.quizTitle) }}
            {{ form_widget(form.quizTitle, {'attr': {'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;'}}) }}
            {% if form_errors(form.quizTitle) %}
                <div class=\"error-message\" style=\"color: red;\">{{ form_errors(form.quizTitle) }}</div>
            {% endif %}
        </div>
        <div style=\"margin-bottom: 20px;\">
            {{ form_label(form.quizDescription) }}
            {{ form_widget(form.quizDescription, {'attr': {'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;'}}) }}
            {% if form_errors(form.quizDescription) %}
                <div class=\"error-message\" style=\"color: red;\">{{ form_errors(form.quizDescription) }}</div>
            {% endif %}
        </div>
        <div style=\"margin-bottom: 20px;\">
            {{ form_label(form.score) }}
            {{ form_widget(form.score, {'attr': {'style': 'width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd;'}}) }}
            {% if form_errors(form.score) %}
                <div class=\"error-message\" style=\"color: red;\">{{ form_errors(form.score) }}</div>
            {% endif %}
        </div>
        <button type=\"submit\" class=\"btn btn-primary\" onclick=\"
                event.preventDefault();
                swal({
                title: 'Are you sure?',
                text: 'you will add a new quiz',
                icon: 'warning',
                buttons: ['Cancel', 'Yes, create quiz'],
                dangerMode: true,
                }).then((willCreate) => {
                if (willCreate) {
                document.getElementById('{{ 'myForm' }}').submit();
                }
                });
                \">
            Create
        </button>

        {{ form_end(form) }}
    </div>
{% endblock %}
", "quizs/add.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\quizs\\add.html.twig");
    }
}
