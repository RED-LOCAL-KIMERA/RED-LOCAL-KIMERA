<?php

/* @Morpheus/javascriptCode.twig */
class __TwigTemplate_21a418d57ffb5457e1b712e98427f37bf1dea9a6bc5fa7e31c8d60dc00f7f7c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Matomo -->
<script type=\"text/javascript\">
  var _paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    ";
        // line 11
        if ((isset($context["loadAsync"]) ? $context["loadAsync"] : $this->getContext($context, "loadAsync"))) {
            echo "var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);";
        }
        // line 13
        echo "
  })();
</script>
";
        // line 16
        if ( !(isset($context["loadAsync"]) ? $context["loadAsync"] : $this->getContext($context, "loadAsync"))) {
            echo "<script type='text/javascript' src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
";
        }
        // line 18
        if ((isset($context["trackNoScript"]) ? $context["trackNoScript"] : $this->getContext($context, "trackNoScript"))) {
            echo "<noscript><p><img src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
";
        }
        // line 20
        echo "<!-- End Matomo Code -->
";
    }

    public function getTemplateName()
    {
        return "@Morpheus/javascriptCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  46 => 18,  41 => 16,  36 => 13,  31 => 11,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Matomo -->
<script type=\"text/javascript\">
  var _paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    {% if loadAsync %}var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);{% endif %}

  })();
</script>
{% if not loadAsync %}<script type='text/javascript' src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
{% endif %}
{% if trackNoScript %}<noscript><p><img src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
{% endif %}
<!-- End Matomo Code -->
", "@Morpheus/javascriptCode.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\Morpheus\\templates\\javascriptCode.twig");
    }
}
