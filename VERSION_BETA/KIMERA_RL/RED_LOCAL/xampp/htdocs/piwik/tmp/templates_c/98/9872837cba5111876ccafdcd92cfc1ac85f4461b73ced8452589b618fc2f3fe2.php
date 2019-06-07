<?php

/* @ProfessionalServices/promoServicesWidget.twig */
class __TwigTemplate_8a60d04c02bf7bb4ce7e67b409d0c04cac0a9253b4de521fc8a00b9278a9af1d extends Twig_Template
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
        echo "<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkUrl"]) ? $context["ctaLinkUrl"] : $this->getContext($context, "ctaLinkUrl")), "html_attr");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaTitle"]) ? $context["ctaTitle"] : $this->getContext($context, "ctaTitle")), "html", null, true);
        echo "</h2>
        <p class=\"text\">
            <span>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaText"]) ? $context["ctaText"] : $this->getContext($context, "ctaText")), "html", null, true);
        echo "</span>
            <br /><br />
            <a class=\"btn\" href=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkUrl"]) ? $context["ctaLinkUrl"] : $this->getContext($context, "ctaLinkUrl")), "html_attr");
        echo "\" target=\"_blank\" rel=\"noreferrer noopener\">
                ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["ctaLinkTitle"]) ? $context["ctaLinkTitle"] : $this->getContext($context, "ctaLinkTitle")), "html", null, true);
        echo "
            </a>
        </p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProfessionalServices/promoServicesWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"promoWidget\">
    <div class=\"promo\">
        <a href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\"><img class=\"icon\" src=\"plugins/ProfessionalServices/images/promo.png\"></a>
        <h2>{{ ctaTitle }}</h2>
        <p class=\"text\">
            <span>{{ ctaText }}</span>
            <br /><br />
            <a class=\"btn\" href=\"{{ ctaLinkUrl|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                {{ ctaLinkTitle }}
            </a>
        </p>
    </div>
</div>
", "@ProfessionalServices/promoServicesWidget.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\ProfessionalServices\\templates\\promoServicesWidget.twig");
    }
}
