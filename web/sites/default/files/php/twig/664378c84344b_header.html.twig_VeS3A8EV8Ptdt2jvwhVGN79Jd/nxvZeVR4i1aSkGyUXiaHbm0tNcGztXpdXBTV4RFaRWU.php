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

/* @flexi_style/components/header.html.twig */
class __TwigTemplate_60db47ae031a63f7fda911f684162561 extends Template
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
        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 1)) {
            // line 2
            echo "  ";
            $context["top_header_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 3
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flexi_style/top_header"), "html", null, true);
            echo "
";
        }
        // line 5
        $context["topHeaderClasses"] = ["flex-secondary-menu",         // line 7
($context["top_header_bg"] ?? null),         // line 8
($context["top_header_classes"] ?? null)];
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 11)) {
            // line 12
            echo "  ";
            $context["header_nav_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 14
        $context["headerClasses"] = ["flex-header",         // line 16
($context["header_classes"] ?? null)];
        // line 19
        echo "
<header";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", "header"], "method", false, false, true, 20), "setAttribute", ["role", "banner"], "method", false, false, true, 20), "addClass", [($context["headerClasses"] ?? null)], "method", false, false, true, 20), 20, $this->source), "html", null, true);
        echo ">
  ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 21)) {
            // line 22
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header_attribute"] ?? null), "addClass", [($context["topHeaderClasses"] ?? null)], "method", false, false, true, 22), 22, $this->source), "html", null, true);
            echo ">
      <div class=\"container\">
        <a href=\"#\" role=\"button\" class=\"btn-toggle toggle-top btn-link\" href=\"#secondary-nav\" data-target=\"toggle\">
          <span class=\"bars\">
            <span class=\"bar\"></span>
            <span class=\"bar\"></span>
            <span class=\"bar\"></span>
          </span>
        </a>
        <div id=\"secondary-nav\" class=\"secondary-nav\">
          ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 38) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 38))) {
            // line 39
            echo "    ";
            if ((($context["header_style"] ?? null) == "style-1")) {
                // line 40
                echo "      <div class=\"flex-primary-menu header-style-1\">
        <div class=\"container\">
          <div class=\"flex-header-item\">
            ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 43)) {
                    // line 44
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 46
                echo "            <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["header_nav_attribute"] ?? null), "setAttribute", ["id", "primary-nav"], "method", false, false, true, 46), "addClass", ["primary-nav", "bg-white", ($context["header_style"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                echo ">
              ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 47)) {
                    // line 48
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                    echo "
              ";
                }
                // line 50
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 50)) {
                    // line 51
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "
              ";
                }
                // line 53
                echo "            </div>
            ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 54) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 54))) {
                    // line 55
                    echo "              <button type=\"button\" role=\"button\" class=\"btn-toggle text-primary btn-link\" href=\"#primary-nav\" data-target=\"toggle\">
                ";
                    // line 56
                    if ((($context["icons"] ?? null) == "fontawesome")) {
                        // line 57
                        echo "                  <i class=\"fa-solid fa-bars fa-2x\"></i>
                ";
                    } elseif ((                    // line 58
($context["icons"] ?? null) == "google-material")) {
                        // line 59
                        echo "                  <span class=\"material-icons md-36\">menu_open</span>
                ";
                    } else {
                        // line 61
                        echo "                  <span class=\"bars\">
                    <span class=\"bar\"></span>
                    <span class=\"bar\"></span>
                    <span class=\"bar\"></span>
                  </span>
                ";
                    }
                    // line 67
                    echo "              </button>
            ";
                }
                // line 69
                echo "          </div>
        </div>
      </div>
    ";
            } elseif ((            // line 72
($context["header_style"] ?? null) == "style-2")) {
                // line 73
                echo "      <div class=\"flex-primary-menu header-style-2\">
        <div class=\"container\">
          <div class=\"flex-header-item\">
            ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 76)) {
                    // line 77
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 79
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 79) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 79))) {
                    // line 80
                    echo "              <div class=\"flex-header-right d-flex\">
                ";
                    // line 81
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 81)) {
                        // line 82
                        echo "                  ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "
                ";
                    }
                    // line 84
                    echo "                <button type=\"button\" role=\"button\" class=\"btn-toggle text-primary btn-link m-left-2\" href=\"#primary-nav\" data-target=\"toggle\">
                  ";
                    // line 85
                    if ((($context["icons"] ?? null) == "fontawesome")) {
                        // line 86
                        echo "                    <i class=\"fa-solid fa-bars fa-2x\"></i>
                  ";
                    } elseif ((                    // line 87
($context["icons"] ?? null) == "google-material")) {
                        // line 88
                        echo "                    <span class=\"material-icons md-36\">menu_open</span>
                  ";
                    } else {
                        // line 90
                        echo "                    <span class=\"bars\">
                      <span class=\"bar\"></span>
                      <span class=\"bar\"></span>
                      <span class=\"bar\"></span>
                    </span>
                  ";
                    }
                    // line 96
                    echo "                </button>
              </div>
            ";
                }
                // line 99
                echo "          </div>
        </div>
        <div";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["header_nav_attribute"] ?? null), "addClass", ["primary-nav", ($context["header_style"] ?? null), ($context["header_navbar_bg"] ?? null)], "method", false, false, true, 101), "setAttribute", ["id", "primary-nav"], "method", false, false, true, 101), 101, $this->source), "html", null, true);
                echo ">
          <div class=\"container\">
            ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 103)) {
                    // line 104
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 106
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "
          </div>
        </div>
      </div>
    ";
            } elseif ((            // line 110
($context["header_style"] ?? null) == "style-3")) {
                // line 111
                echo "      <div class=\"flex-primary-menu header-style-3\">
        <div class=\"container\">
          <div class=\"flex-header-item\">
            ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 114)) {
                    // line 115
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 117
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 117) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 117))) {
                    // line 118
                    echo "              <div class=\"flex-header-right d-flex\">
                ";
                    // line 119
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 119)) {
                        // line 120
                        echo "                  ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "
                ";
                    }
                    // line 122
                    echo "                <button type=\"button\" role=\"button\" class=\"btn-toggle text-primary btn-link m-left-2\" title=\"Close\" href=\"#primary-nav\" data-target=\"toggle\">
                  ";
                    // line 123
                    if ((($context["icons"] ?? null) == "fontawesome")) {
                        // line 124
                        echo "                    <i class=\"fa-solid fa-bars fa-2x\"></i>
                  ";
                    } elseif ((                    // line 125
($context["icons"] ?? null) == "google-material")) {
                        // line 126
                        echo "                    <span class=\"material-icons md-36\">menu_open</span>
                  ";
                    } else {
                        // line 128
                        echo "                    <span class=\"bars\">
                      <span class=\"bar\"></span>
                      <span class=\"bar\"></span>
                      <span class=\"bar\"></span>
                    </span>
                  ";
                    }
                    // line 134
                    echo "                </button>
              </div>
            ";
                }
                // line 137
                echo "          </div>
        </div>
        <div";
                // line 139
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["header_nav_attribute"] ?? null), "addClass", ["primary-nav", ($context["header_style"] ?? null), ($context["header_navbar_bg"] ?? null)], "method", false, false, true, 139), "setAttribute", ["id", "primary-nav"], "method", false, false, true, 139), 139, $this->source), "html", null, true);
                echo ">
          <button type=\"button\" role=\"button\" class=\"btn-toggle ";
                // line 140
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_navbar_bg"] ?? null), 140, $this->source), "html", null, true);
                echo "\" href=\"#primary-nav\" data-target=\"toggle\">
            ";
                // line 141
                if ((($context["icons"] ?? null) == "fontawesome")) {
                    // line 142
                    echo "              <i class=\"fa-solid fa-close fa-2x\"></i>
            ";
                } elseif ((                // line 143
($context["icons"] ?? null) == "google-material")) {
                    // line 144
                    echo "              <span class=\"material-icons md-36\">close</span>
            ";
                } else {
                    // line 146
                    echo "              <span class=\"bars\">
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
                <span class=\"bar\"></span>
              </span>
            ";
                }
                // line 152
                echo "          </button>
          ";
                // line 153
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 153)) {
                    // line 154
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 156
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 160
            echo "  ";
        }
        // line 161
        echo "</header>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "top_header_bg", "top_header_classes", "header_classes", "attributes", "header_style", "icons", "header_navbar_bg"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@flexi_style/components/header.html.twig";
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
        return array (  363 => 161,  360 => 160,  352 => 156,  346 => 154,  344 => 153,  341 => 152,  333 => 146,  329 => 144,  327 => 143,  324 => 142,  322 => 141,  318 => 140,  314 => 139,  310 => 137,  305 => 134,  297 => 128,  293 => 126,  291 => 125,  288 => 124,  286 => 123,  283 => 122,  277 => 120,  275 => 119,  272 => 118,  269 => 117,  263 => 115,  261 => 114,  256 => 111,  254 => 110,  246 => 106,  240 => 104,  238 => 103,  233 => 101,  229 => 99,  224 => 96,  216 => 90,  212 => 88,  210 => 87,  207 => 86,  205 => 85,  202 => 84,  196 => 82,  194 => 81,  191 => 80,  188 => 79,  182 => 77,  180 => 76,  175 => 73,  173 => 72,  168 => 69,  164 => 67,  156 => 61,  152 => 59,  150 => 58,  147 => 57,  145 => 56,  142 => 55,  140 => 54,  137 => 53,  131 => 51,  128 => 50,  122 => 48,  120 => 47,  115 => 46,  109 => 44,  107 => 43,  102 => 40,  99 => 39,  97 => 38,  94 => 37,  86 => 32,  72 => 22,  70 => 21,  66 => 20,  63 => 19,  61 => 16,  60 => 14,  56 => 12,  54 => 11,  52 => 8,  51 => 7,  50 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@flexi_style/components/header.html.twig", "/var/www/html/web/themes/contrib/flexi_style/templates/components/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 3);
        static $functions = array("create_attribute" => 2, "attach_library" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['create_attribute', 'attach_library']
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
