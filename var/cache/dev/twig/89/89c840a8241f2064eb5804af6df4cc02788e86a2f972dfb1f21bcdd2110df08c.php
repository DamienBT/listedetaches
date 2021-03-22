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

/* task/_form.html.twig */
class __TwigTemplate_4103dd6e98fe5c0e551253488c3c0eb5642a2b7b06ed3a776bb499e9a46f3bfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/_form.html.twig"));

        // line 21
        echo "

<div class=\"form-group\">
\t<label for=\"name\">Nom de l'evenement</label>
\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"task_name\">

</div>

<div class=\"form-group\">
\t<label for=\"name\">Description</label>

\t<input type=\"text\" class=\"form-control\" name=\"description\" id=\"task_description\">
</div>

<div class=\"form-group\">
\t<label for=\"name\">Date event</label>

\t<input type=\"datetime\" class=\"form-control datetimepicker\" name=\"beginAt\" id=\"task_beginAt\">
</div>

<div class=\"form-group\">
\t<btn class=\"btn btn-success\" data-action=\"create\" id=\"buttonSend\">Envoyer</btn>
\t<btn class=\"btn btn-success\" data-action=\"save\" id=\"buttonEdit\">Modifier</btn>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "task/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{form_start(taskType)}}

<div class=\"form-group\">
\t{{form_row(taskType.name, { 'label': 'Nom de l\\'évènement ', 'attr': {'class': 'form-control'}})}}
</div>

<div class=\"form-group\">

\t{{form_row(taskType.description, { 'label': 'Description', 'attr': {'class': 'form-control'}})}}
</div>

<div class=\"form-group\">

\t{{form_row(taskType.beginAt, { 'label': 'Date de l\\'evenement', 'attr': {'class': 'form-control datetimepicker'}})}}
</div>

<div class=\"form-group\">
\t<button class=\"btn btn-success\" data-action=\"create\" id=\"buttonSend\">Envoyer</button>
</div>
{{form_end(taskType)}} #}


<div class=\"form-group\">
\t<label for=\"name\">Nom de l'evenement</label>
\t<input type=\"text\" class=\"form-control\" name=\"name\" id=\"task_name\">

</div>

<div class=\"form-group\">
\t<label for=\"name\">Description</label>

\t<input type=\"text\" class=\"form-control\" name=\"description\" id=\"task_description\">
</div>

<div class=\"form-group\">
\t<label for=\"name\">Date event</label>

\t<input type=\"datetime\" class=\"form-control datetimepicker\" name=\"beginAt\" id=\"task_beginAt\">
</div>

<div class=\"form-group\">
\t<btn class=\"btn btn-success\" data-action=\"create\" id=\"buttonSend\">Envoyer</btn>
\t<btn class=\"btn btn-success\" data-action=\"save\" id=\"buttonEdit\">Modifier</btn>

</div>
", "task/_form.html.twig", "/var/www/templates/task/_form.html.twig");
    }
}
