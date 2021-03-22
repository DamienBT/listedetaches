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

/* base.html.twig */
class __TwigTemplate_4523edae4f9a7817297f91129abbee7fb51a9c9a4eb4a0917ff70379b7341bd6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css\" integrity=\"sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==\" crossorigin=\"anonymous\"/>
\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\" integrity=\"sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"assets/js/script.js\"></script>
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
\t\t";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "\t</head>
\t<body>
\t\t";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "\t\t<script>
\t\t\t\$(document).ready(function (init) { // add
\$(\"btn#buttonEdit\").hide();

check();
function resetState() {
\$(\"btn#buttonSend\").show();
\$(\"btn#buttonEdit\").hide();

\$(\"#task_name\").val(\"\");
\$(\"#task_description\").val(\"\");
\$(\"#task_beginAt\").val(\"\");

}

// delete

function check() {


\$(\"btn[data-action='delete'\").on(\"click\", function (e) {
let dataid = \$(this).attr(\"data-id\");
let url = '/delete-tache/' + dataid;

let row = \$(this).closest(\"tr\");
\$.ajax({type: \"POST\", url: url, success: function () {}})
\$(row).remove();

return false;
});

// edit

\$(\"btn[data-action='save'\").on(\"click\", function (e) {
let date = \$(\"#task_beginAt\").val();
let name = \$(\"#task_name\").val();
let desc = \$(\"#task_description\").val();
let id = \$(this).attr(\"data-id\");
json = {
name: name,
desc: desc,
date: date
}
\$.ajax({
type: \"POST\",
url: '/edit-tache/' + id,
data: json
})
\$(\"td.columnName\" + id).empty();
\$(\"td.columndesc\" + id).empty();
\$(\"td.columndate\" + id).empty();
\$(\"td.columnName\" + id).text(name);
\$(\"td.columndesc\" + id).text(desc);
\$(\"td.columndate\" + id).text(date);
resetState();

return false;
});


\$(\"btn[data-action='create'\").on(\"click\", function (e) {
var id = null;
let date = \$(\"#task_beginAt\").val();
let name = \$(\"#task_name\").val();
let desc = \$(\"#task_description\").val();
json = {
name: name,
desc: desc,
date: date
}
\$.ajax({
type: \"POST\",
url: '/nouvelle-tache',
data: json,
success: function (data) {
updateTask(data, name, desc, date);
console.log(data.id);
location.reload();
}
})
resetState();
return false;

});

\$(\"btn[data-action='edit'\").on(\"click\", function (e) {
console.log('test');
let id = \$(this).attr(\"data-id\");
let name = \$(\"td.columnName\" + id).text();
let desc = \$(\"td.columndesc\" + id).text();
let date = \$(\"td.columndate\" + id).text();

\$(\"#task_name\").val(name);
\$(\"#task_description\").val(desc);
\$(\"#task_beginAt\").val(date);
\$(\"btn#buttonSend\").hide();
\$(\"btn#buttonEdit\").show();
\$(\"btn#buttonEdit\").attr('data-id', id);
})

return false;

}

function updateTask(data, name, desc, date) {
\$('.table').append('<tr id=\"' + data.id + '\"><td class=\"columnName' + data.id + '\">' + name + '</td><td class=\"columndesc' + data.id + '\">' + desc + '</td><td class=\"columndate' + data.id + '\">' + date + '</td><td><btn class=\"btn btn-sm btn-info\" data-action=\"edit\" data-id=\"' + data.id + '\">Editer</btn> <btn class=\"btn btn-sm btn-danger\" data-action=\"delete\" data-id=\"' + data.id + '\">Supprimer</btn></td></tr >');
\$(\"td.columnName\" + data.id).text(name);
\$(\"td.columndesc\" + data.id).text(desc);
\$(\"td.columndate\" + data.id).text(date);
}
// checkdata


});
\t\t</script>
\t</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t\t";
        // line 18
        echo "\t\t";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 21,  211 => 18,  209 => 17,  205 => 16,  199 => 14,  193 => 6,  72 => 22,  70 => 21,  66 => 19,  64 => 16,  61 => 15,  59 => 14,  50 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
