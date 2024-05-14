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

/* @flexi_style/components/footer.html.twig */
class __TwigTemplate_b6caae6ea984e71044fbc72a51846439 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 1)) {
            // line 2
            echo "  ";
            $context["footer_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
            // line 3
            echo "  ";
            $context["footer_bottom_attribute"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        }
        // line 5
        $context["footerClasses"] = ["flex-footer",         // line 7
($context["footer_bg"] ?? null),         // line 8
($context["footer_classes"] ?? null)];
        // line 11
        $context["footerBottomClasses"] = ["flex-footer-bottom",         // line 13
($context["footer_bottom_bg"] ?? null),         // line 14
($context["footer_bottom_classes"] ?? null)];
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 17)) {
            // line 18
            echo "  <footer";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["footer_attribute"] ?? null), "setAttribute", ["id", "footer"], "method", false, false, true, 18), "setAttribute", ["role", "contentinfo"], "method", false, false, true, 18), "addClass", [($context["footerClasses"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
            echo ">
    ";
            // line 19
            if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 19) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 19)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 19)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 19))) {
                // line 20
                echo "      <div class=\"flex-footer-top py-4\">
        <div class=\"container\">
          ";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "
          ";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "
          ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
          ";
                // line 25
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 29
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_bottom_attribute"] ?? null), "addClass", [($context["footerBottomClasses"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ">
      <div class=\"container\">
        ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "footer_bg", "footer_classes", "footer_bottom_bg", "footer_bottom_classes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@flexi_style/components/footer.html.twig";
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
        return array (  94 => 31,  88 => 29,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 20,  63 => 19,  58 => 18,  56 => 17,  54 => 14,  53 => 13,  52 => 11,  50 => 8,  49 => 7,  48 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@flexi_style/components/footer.html.twig", "/var/www/html/web/themes/contrib/flexi_style/templates/components/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 18);
        static $functions = array("create_attribute" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['create_attribute']
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
