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
class __TwigTemplate_d42006d4f78713a45f94686a5079c5a435a46783403fcd36b0d83d297a9846fe extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
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
        return array (  93 => 24,  82 => 19,  78 => 18,  71 => 16,  65 => 15,  59 => 14,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "task/index.html.twig", "/var/www/templates/task/index.html.twig");
    }
}
