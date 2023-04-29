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

/* quizs/pdf.html.twig */
class __TwigTemplate_5bcc64d6d3d6f4a4f8d8868a46a439cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quizs/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Certificate of Completion</title>

    <style>
        /* Add CSS styles to make the certificate look more professional */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .certificate {
            border: 2px solid #ccc;
            padding: 20px;
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0px 0px 10px #888888;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            color: #555;
        }
        p {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
            color: #888;
        }
        footer {
            background-color: #ccc;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            color: #555;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<footer>Tunitask</footer>
<div class=\"certificate\">
";
        // line 51
        echo "    <h1 >Certificate of Completion</h1>
    <p>Congratulations! You have completed the ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 52, $this->source); })()), "quizTitle", [], "any", false, false, false, 52), "html", null, true);
        echo " quiz with a score of ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 52, $this->source); })()), "score", [], "any", false, false, false, 52), "html", null, true);
        echo ".</p>
</div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "quizs/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  94 => 51,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Certificate of Completion</title>

    <style>
        /* Add CSS styles to make the certificate look more professional */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .certificate {
            border: 2px solid #ccc;
            padding: 20px;
            max-width: 800px;
            background-color: #fff;
            box-shadow: 0px 0px 10px #888888;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
            color: #555;
        }
        p {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
            color: #888;
        }
        footer {
            background-color: #ccc;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            color: #555;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<footer>Tunitask</footer>
<div class=\"certificate\">
{#    <img src=\"{{ asset('./img/logo.png') }}\" style=\"width: 150px; height: 150px;\">#}
    <h1 >Certificate of Completion</h1>
    <p>Congratulations! You have completed the {{ quiz.quizTitle }} quiz with a score of {{ quiz.score }}.</p>
</div>

</body>
</html>
", "quizs/pdf.html.twig", "C:\\Users\\Ahmed\\Desktop\\webtaskk\\templates\\quizs\\pdf.html.twig");
    }
}
