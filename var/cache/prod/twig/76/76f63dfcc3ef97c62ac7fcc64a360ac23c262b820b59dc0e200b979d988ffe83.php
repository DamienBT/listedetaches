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

/* home/home.html.twig */
class __TwigTemplate_499d107bd75808fbd08e073b4318343ed605d5a13c9170db41df66f080d75f22 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t";
        // line 7
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["notifications"] ?? null)), 0))) {
            // line 8
            echo "\t\t\t\t\t<h1>liste des taches ce jour
\t\t\t\t\t</h1>
\t\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 11
                echo "\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "</p>

\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t\t";
        }
        // line 15
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-8\">
\t\t\t\t";
        // line 18
        $this->loadTemplate("task/index.html.twig", "home/home.html.twig", 18)->display($context);
        // line 19
        echo "\t\t\t</div>
\t\t\t<div id=\"form\" class=\"col-4\">

\t\t\t\t";
        // line 22
        $this->loadTemplate("task/_form.html.twig", "home/home.html.twig", 22)->display($context);
        // line 23
        echo "\t\t\t</div>

\t\t</div>

\t</div>
";
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  90 => 22,  85 => 19,  83 => 18,  78 => 15,  75 => 14,  65 => 11,  61 => 10,  57 => 8,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/home.html.twig", "/var/www/templates/home/home.html.twig");
    }
}
