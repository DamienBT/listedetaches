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
class __TwigTemplate_c78be4fb272091c1aca8f324dbd898894cca27e5c57c09c02255366415705be7 extends Template
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
    }

    public function getTemplateName()
    {
        return "task/_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "task/_form.html.twig", "/var/www/templates/task/_form.html.twig");
    }
}
