<?php

/* @Referrers/campaignBuilder.twig */
class __TwigTemplate_13f657e1f5e7781cd231edd8158d4be8e51eadfb3f231dfc43a67db98d48ba53 extends Twig_Template
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
        echo "<div class=\"widgetBody\">
    <p>";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_URLCampaignBuilderIntro", "<a href=\"https://matomo.org/docs/tracking-campaigns-url-builder/\" rel=\"noreferrer noopener\">", "</a>", "<a href=\"https://matomo.org/docs/tracking-campaigns/\" rel=\"noreferrer noopener\">", "</a>"));
        echo "</p>
    <div matomo-campaign-builder has-extra-plugin=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["hasExtraPlugin"]) ? $context["hasExtraPlugin"] : $this->getContext($context, "hasExtraPlugin")), "html_attr");
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Referrers/campaignBuilder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widgetBody\">
    <p>{{ 'Referrers_URLCampaignBuilderIntro'|translate('<a href=\"https://matomo.org/docs/tracking-campaigns-url-builder/\" rel=\"noreferrer noopener\">', '</a>', '<a href=\"https://matomo.org/docs/tracking-campaigns/\" rel=\"noreferrer noopener\">', '</a>')|raw }}</p>
    <div matomo-campaign-builder has-extra-plugin=\"{{ hasExtraPlugin|e('html_attr') }}\"></div>
</div>", "@Referrers/campaignBuilder.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\Referrers\\templates\\campaignBuilder.twig");
    }
}
