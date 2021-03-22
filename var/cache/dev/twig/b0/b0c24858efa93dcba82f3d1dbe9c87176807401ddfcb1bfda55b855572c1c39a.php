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

/* task/index.html.twig */
class __TwigTemplate_6113c926974ca0d1ea411e804f9ef8589e19d10fa3587f913ec13e599ccd562a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        // line 1
        echo "<table class=\"table\">
\t<thead class=\"thead-light\">
\t\t<tr>
\t\t\t<th scope=\"col\">Tache</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">Date de la tache:</th>
\t\t\t<th scope=\"col\">Action</th>

\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new RuntimeError('Variable "tasks" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 13
            echo "\t\t\t<tr id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
\t\t\t\t<td class=\"columnName";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"columndesc";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
\t\t\t\t<td class=\"columndate";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "beginAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<btn class=\"btn btn-sm btn-info\" data-action=\"edit\" data-id=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">Editer</btn>
\t\t\t\t\t<btn class=\"btn btn-sm btn-danger\" data-action=\"delete\" data-id=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t</td>
\t\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
\t</tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  88 => 19,  84 => 18,  77 => 16,  71 => 15,  65 => 14,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
\t<thead class=\"thead-light\">
\t\t<tr>
\t\t\t<th scope=\"col\">Tache</th>
\t\t\t<th scope=\"col\">Description</th>
\t\t\t<th scope=\"col\">Date de la tache:</th>
\t\t\t<th scope=\"col\">Action</th>

\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for task in tasks %}
\t\t\t<tr id=\"{{task.id}}\">
\t\t\t\t<td class=\"columnName{{task.id}}\">{{task.name}}</td>
\t\t\t\t<td class=\"columndesc{{task.id}}\">{{task.description}}</td>
\t\t\t\t<td class=\"columndate{{task.id}}\">{{task.beginAt|date('d/m/Y')}}</td>
\t\t\t\t<td>
\t\t\t\t\t<btn class=\"btn btn-sm btn-info\" data-action=\"edit\" data-id=\"{{task.id}}\">Editer</btn>
\t\t\t\t\t<btn class=\"btn btn-sm btn-danger\" data-action=\"delete\" data-id=\"{{task.id}}\">Supprimer</a>
\t\t\t\t</td>
\t\t\t</tr>

\t\t{% endfor %}

\t</tbody>
</table>
", "task/index.html.twig", "/var/www/templates/task/index.html.twig");
    }
}
