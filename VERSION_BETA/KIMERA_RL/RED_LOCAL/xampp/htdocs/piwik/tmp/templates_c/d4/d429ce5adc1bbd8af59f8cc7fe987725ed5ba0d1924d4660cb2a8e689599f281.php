<?php

/* @CoreHome/_singleWidget.twig */
class __TwigTemplate_d3954cbead679e122f4175fec05ee85d87fbb91034cc828ca13994e462f219f4 extends Twig_Template
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
        echo "<div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html_attr");
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_singleWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div piwik-content-block content-title=\"{{ title|translate|e('html_attr') }}\">
    {{ content|raw }}
</div>", "@CoreHome/_singleWidget.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\CoreHome\\templates\\_singleWidget.twig");
    }
}
