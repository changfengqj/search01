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

/* themes/bootstrap_business/templates/node--page.html.twig */
class __TwigTemplate_ed08c1b661d57d07431e5a3d9344cef5 extends Template
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
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67), 67, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 71, $this->source)))) : ("")), "clearfix"];
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
<article";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ">
    <header>
      ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 78, $this->source), "html", null, true);
        echo "
      ";
        // line 79
        if ( !($context["page"] ?? null)) {
            // line 80
            echo "        <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title title"], "method", false, false, true, 80), 80, $this->source), "html", null, true);
            echo ">
          <a href=\"";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 81, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 81, $this->source), "html", null, true);
            echo "</a>
        </h2>
      ";
        }
        // line 84
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 84, $this->source), "html", null, true);
        echo "
      ";
        // line 85
        if (($context["display_submitted"] ?? null)) {
            // line 86
            echo "        <div class=\"meta submitted\">
          ";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 87, $this->source), "html", null, true);
            echo "
          <span class=\"glyphicon glyphicon-calendar\"></span> ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 88, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 91
        echo "    </header>

    <div";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node__content", "clearfix"], "method", false, false, true, 93), 93, $this->source), "html", null, true);
        echo ">
      <div class=\"first-content\">
        ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_images", [], "any", false, false, true, 95)) {
            // line 96
            echo "          <div id=\"images\" class=\"col-md-6\">
            ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_images", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 100
        echo "
        
        <div id=\"brief\" class=\"col-md-6\">
          <h2 class=\"title\">";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 103, $this->source), "html", null, true);
        echo "</h2>
          ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subject", [], "any", false, false, true, 104)) {
            // line 105
            echo "            <div class=\"subject\">
              ";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subject", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 109
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_no", [], "any", false, false, true, 109)) {
            // line 110
            echo "            <div class=\"no\">
              ";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_no", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 114
        echo "
          ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 115)) {
            // line 116
            echo "            <div class=\"price\">
              ";
            // line 117
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_price", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 120
        echo "
          ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_size", [], "any", false, false, true, 121)) {
            // line 122
            echo "            <div class=\"size\">
              ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_size", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 126
        echo "
          ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_artists_engravers", [], "any", false, false, true, 127)) {
            // line 128
            echo "            <div class=\"artists_engravers\">
              ";
            // line 129
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_artists_engravers", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 132
        echo "
          ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_condition", [], "any", false, false, true, 133)) {
            // line 134
            echo "            <div class=\"condition\">
              ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_condition", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 138
        echo "
          ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_medium", [], "any", false, false, true, 139)) {
            // line 140
            echo "            <div class=\"medium\">
              ";
            // line 141
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_medium", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 144
        echo "
          

          
        </div>
      </div>

      <div id=\"detail\" class=\"col-md-12\">
        <h2>Description</h2>
        ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 153)) {
            // line 154
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 156
        echo "      </div>
      

    </div>

    ";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 161)) {
            // line 162
            echo "      <footer class=\"link-wrapper\">
        ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
      </footer>
    ";
        }
        // line 166
        echo "</article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "display_submitted", "author_picture", "date", "content_attributes", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/node--page.html.twig";
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
        return array (  253 => 166,  247 => 163,  244 => 162,  242 => 161,  235 => 156,  229 => 154,  227 => 153,  216 => 144,  210 => 141,  207 => 140,  205 => 139,  202 => 138,  196 => 135,  193 => 134,  191 => 133,  188 => 132,  182 => 129,  179 => 128,  177 => 127,  174 => 126,  168 => 123,  165 => 122,  163 => 121,  160 => 120,  154 => 117,  151 => 116,  149 => 115,  146 => 114,  140 => 111,  137 => 110,  134 => 109,  128 => 106,  125 => 105,  123 => 104,  119 => 103,  114 => 100,  108 => 97,  105 => 96,  103 => 95,  98 => 93,  94 => 91,  88 => 88,  84 => 87,  81 => 86,  79 => 85,  74 => 84,  66 => 81,  61 => 80,  59 => 79,  55 => 78,  50 => 76,  46 => 75,  44 => 71,  43 => 70,  42 => 69,  41 => 68,  40 => 67,  39 => 65,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap_business/templates/node--page.html.twig", "/var/www/html/themes/bootstrap_business/templates/node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "if" => 79);
        static $filters = array("clean_class" => 67, "escape" => 75);
        static $functions = array("attach_library" => 75);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                ['attach_library']
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
