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

/* task/show.html.twig */
class __TwigTemplate_6e518b5bc91ee3837b2d1d6a9eba7514 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "task/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Taches : " . CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 3)), "html", null, true);
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
  <h1>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
  <p>Description: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "description", [], "any", false, false, false, 8), "html", null, true);
        yield "</p>
  <p>Estimation : ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "estimates", [], "any", false, false, false, 9), "html", null, true);
        yield " heures</p>
  <p>Date d'échéance : ";
        // line 10
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "dueDate", [], "any", false, false, false, 10)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "dueDate", [], "any", false, false, false, 10), "Y-m-d H:i:s"), "html", null, true)) : (yield "Non définie"));
        yield "</p>
  <p>Date de création : ";
        // line 11
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "createdAt", [], "any", false, false, false, 11)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "createdAt", [], "any", false, false, false, 11), "Y-m-d H:i:s"), "html", null, true)) : (yield "Non définie"));
        yield "</p>
  <p>Dernière mise à jour : ";
        // line 12
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "updatedAt", [], "any", false, false, false, 12)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "updatedAt", [], "any", false, false, false, 12), "Y-m-d H:i:s"), "html", null, true)) : (yield "Non définie"));
        yield "</p>
  
  ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "deletedAt", [], "any", false, false, false, 14) == null)) {
            // line 15
            yield "    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("task.edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Modifier</a>
    <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
      Supprimer
    </button>
  ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            yield "    <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
      Supprimer définitivement
    </button>
  ";
        }
        // line 24
        yield "
  ";
        // line 25
        yield from         $this->loadTemplate("partials/modal.html.twig", "task/show.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "task/show.html.twig";
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
        return array (  120 => 26,  118 => 25,  115 => 24,  109 => 20,  100 => 15,  98 => 14,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "task/show.html.twig", "E:\\S5\\Mr Rojo\\symfony\\49-sources\\taskmanager\\templates\\task\\show.html.twig");
    }
}
