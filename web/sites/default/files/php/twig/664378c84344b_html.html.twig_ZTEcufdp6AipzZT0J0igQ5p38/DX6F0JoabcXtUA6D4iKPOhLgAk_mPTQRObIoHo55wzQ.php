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

/* themes/contrib/flexi_style/templates/layout/html.html.twig */
class __TwigTemplate_d22e4ba26415b8828e94ca9d856c2ff4 extends Template
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
        // line 29
        $context["body_classes"] = [((        // line 30
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 31
($context["root_path"] ?? null)) ? ("page-frontpage") : (("page-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 31, $this->source))))), ((        // line 32
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 32, $this->source)))) : ("")), ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), ((( !twig_get_attribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34))) ? ("no-sidebars") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 35
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 35)) ? ("sidebar-first") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 36
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 36)) ? ("sidebar-second") : ("")), (((twig_get_attribute($this->env, $this->source,         // line 37
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 37) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 37))) ? ("both-sidebars") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 38
($context["user"] ?? null), "hasPermission", ["administer"], "method", false, false, true, 38)) ? ("admin") : ("")), twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 39
($context["user"] ?? null), "getRoles", [], "method", false, false, true, 39), 39, $this->source), " role_"),         // line 40
($context["header_position"] ?? null), ($this->sandbox->ensureToStringAllowed(        // line 41
($context["fonts"] ?? null), 41, $this->source) . "-regular")];
        // line 44
        echo "<!DOCTYPE html>
<html";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 45, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 47, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 48, $this->source), " | "));
        echo "</title>
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"/";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-57x57.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"/";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-60x60.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"/";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-72x72.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"/";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-76x76.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"/";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-114x114.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"/";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-120x120.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"/";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-144x144.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"/";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-152x152.png\" />
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/apple-icon-180x180.png\" />
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"/";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/android-icon-192x192.png\" />
    <link rel=\"icon\" href=\"/";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/favicon.ico\" />
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/favicon-16x16.png\" />
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/favicon-32x32.png\" />
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"/";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/favicon-96x96.png\" />
    <link rel=\"manifest\" href=\"/";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/manifest.json\" />
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\" />
    <meta name=\"theme-color\" content=\"#066db2\" />
    <meta name=\"msapplication-TileImage\" content=\"/";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/images/icons/ms-icon-144x144.png\" />
    <css-placeholder token=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 67, $this->source), "html", null, true);
        echo "\">
    <style> ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_style"] ?? null), 68, $this->source), "html", null, true);
        echo " </style>
    <js-placeholder token=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 69, $this->source), "html", null, true);
        echo "\">
    <script src=\"/";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath(), "html", null, true);
        echo "/sw.js\"></script>
  </head>
  <body";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 76, $this->source), "html", null, true);
        echo "
    ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 77, $this->source), "html", null, true);
        echo "
    ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 78, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 79, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "page", "user", "header_position", "fonts", "html_attributes", "placeholder_token", "head_title", "global_style", "attributes", "page_top", "page_bottom"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/flexi_style/templates/layout/html.html.twig";
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
        return array (  174 => 79,  170 => 78,  166 => 77,  162 => 76,  157 => 74,  152 => 72,  147 => 70,  143 => 69,  139 => 68,  135 => 67,  131 => 66,  125 => 63,  121 => 62,  117 => 61,  113 => 60,  109 => 59,  105 => 58,  101 => 57,  97 => 56,  93 => 55,  89 => 54,  85 => 53,  81 => 52,  77 => 51,  73 => 50,  69 => 49,  65 => 48,  61 => 47,  56 => 45,  53 => 44,  51 => 41,  50 => 40,  49 => 39,  48 => 38,  47 => 37,  46 => 36,  45 => 35,  44 => 34,  43 => 33,  42 => 32,  41 => 31,  40 => 30,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/flexi_style/templates/layout/html.html.twig", "/var/www/html/web/themes/contrib/flexi_style/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29);
        static $filters = array("clean_class" => 31, "join" => 39, "escape" => 45, "safe_join" => 48, "t" => 74);
        static $functions = array("active_theme_path" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'join', 'escape', 'safe_join', 't'],
                ['active_theme_path']
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
