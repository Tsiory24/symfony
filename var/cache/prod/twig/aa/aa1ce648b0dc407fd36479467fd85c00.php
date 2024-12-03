<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* task/index.html.twig */
class __TwigTemplate_82bef7e984c33401e9080f358ff7de9f extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Les taches";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container\">
    <form method=\"get\" class=\"mb-4\">
        <div class=\"row\">
            ";
        // line 10
        yield "            <div class=\"col-md-4\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Recherche par titre\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchTitle"] ?? null), "html", null, true);
        yield "\">
            </div>

            ";
        // line 15
        yield "            <div class=\"col-md-3\">
                <input type=\"number\" name=\"min_estimate\" class=\"form-control\" placeholder=\"Estimation Min\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minEstimate"] ?? null), "html", null, true);
        yield "\">
            </div>

            ";
        // line 20
        yield "            <div class=\"col-md-3\">
                <input type=\"number\" name=\"max_estimate\" class=\"form-control\" placeholder=\"Estimation Max\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["maxEstimate"] ?? null), "html", null, true);
        yield "\">
            </div>

            ";
        // line 25
        yield "            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
            </div>
        </div>
    </form>

    <div class=\"d-flex justify-content-between my-2\">
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task.create");
        yield "\" class=\"btn btn-primary\">Créer une tache</a>
        <p>Total estimation : ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalEstimates"] ?? null), "html", null, true);
        yield "</p>
    </div>


    <ul class=\"list-group\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 39
            yield "            <a class=\"list-group-item list-group-item-action\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("task.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["task"], "id", [], "any", false, false, false, 39), "slug" => CoreExtension::getAttribute($this->env, $this->source, $context["task"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 39), "html", null, true);
            yield " (Estimation : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "estimates", [], "any", false, false, false, 39), "html", null, true);
            yield ")</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['task'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </ul>

    ";
        // line 51
        yield "
    ";
        // line 52
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["tasks"] ?? null));
        yield "

</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "task/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  147 => 52,  144 => 51,  140 => 41,  127 => 39,  123 => 38,  115 => 33,  111 => 32,  102 => 25,  96 => 21,  93 => 20,  87 => 16,  84 => 15,  78 => 11,  75 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "task/index.html.twig", "E:\\S5\\Mr Rojo\\symfony\\49-sources\\taskmanager\\templates\\task\\index.html.twig");
    }
}
