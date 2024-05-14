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

/* themes/contrib/flexi_style/templates/page/page.html.twig */
class __TwigTemplate_7361dd9f1d360d7296a05f7eb366a541 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "
<div class=\"layout-container\">
  ";
        // line 51
        $this->loadTemplate("@flexi_style/components/header.html.twig", "themes/contrib/flexi_style/templates/page/page.html.twig", 51)->display($context);
        // line 52
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 52)) {
            // line 53
            echo "    <div class=\"flex-banner\">
      <div class=\"container-fluid\">
        ";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 59)) {
            // line 60
            echo "    <div class=\"flex-breadcrumb bg-light py-5 m-bottom-3\">
      <div class=\"container\">
        ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 66
        echo "
\t<main id=\"main\" class=\"flex-main m-top-5 m-bottom-5\" role=\"main\">
    ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 68)) {
            // line 69
            echo "      <div class=\"flex-highlighted\">
        <div class=\"container\">
          ";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 76)) {
            // line 77
            echo "      <div class=\"flex-help\">
        <div class=\"container\">
          ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 84)) {
            // line 85
            echo "      <div class=\"flex-featured\">
        <div class=\"container\">
          ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 91
        echo "
    <div class=\"flex-main-container container\">
      <div class=\"fs-row\">
        ";
        // line 95
        $context["content_classes"] = [(((twig_get_attribute($this->env, $this->source,         // line 96
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 96) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 96))) ? ("fs-col-6") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 97
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 97) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 97)))) ? ("fs-col-9") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 98
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 98) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 98)))) ? ("fs-col-9") : ("")), (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 99
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 99)))) ? ("fs-col-12") : (""))];
        // line 102
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 102)) {
            // line 103
            echo "          <aside class=\"fs-col-3 flex-sidebar flex-sidebar-first\" role=\"complementary\">
            ";
            // line 104
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 107
        echo "
        <div";
        // line 108
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_classes"] ?? null), "flex-content"], "method", false, false, true, 108), 108, $this->source), "html", null, true);
        echo ">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 111
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
        </div>

        ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 114)) {
            // line 115
            echo "          <aside class=\"fs-col-3 flex-sidebar flex-sidebar-second\" role=\"complementary\">
            ";
            // line 116
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 119
        echo "      </div>
    </div>
    ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 121)) {
            // line 122
            echo "      <div class=\"flex-content-bottom\">
        <div class=\"container\">
          ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 128
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 128)) {
            // line 129
            echo "      <div class=\"flex-featured-bottom\">
        <div class=\"container-fluid\">
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 135
        echo "  </main>
  ";
        // line 136
        $this->loadTemplate("@flexi_style/components/footer.html.twig", "themes/contrib/flexi_style/templates/page/page.html.twig", 136)->display($context);
        // line 137
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "content_attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/flexi_style/templates/page/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  207 => 137,  205 => 136,  202 => 135,  195 => 131,  191 => 129,  188 => 128,  181 => 124,  177 => 122,  175 => 121,  171 => 119,  165 => 116,  162 => 115,  160 => 114,  153 => 111,  148 => 108,  145 => 107,  139 => 104,  136 => 103,  133 => 102,  131 => 99,  130 => 98,  129 => 97,  128 => 96,  127 => 95,  122 => 91,  115 => 87,  111 => 85,  109 => 84,  106 => 83,  99 => 79,  95 => 77,  93 => 76,  90 => 75,  83 => 71,  79 => 69,  77 => 68,  73 => 66,  66 => 62,  62 => 60,  59 => 59,  52 => 55,  48 => 53,  45 => 52,  43 => 51,  39 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/flexi_style/templates/page/page.html.twig", "/var/www/html/web/themes/contrib/flexi_style/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 51, "if" => 52, "set" => 95);
        static $filters = array("escape" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
