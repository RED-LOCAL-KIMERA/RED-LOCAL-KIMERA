<?php

/* @Live/_actionsList.twig */
class __TwigTemplate_dec74cc6949c9564290c2f28b351e3b2c9aecd67add591edbbde911e7238ef01 extends Twig_Template
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
        $context["previousAction"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 3
            echo "
    ";
            // line 4
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Live.renderAction", $context["action"], (isset($context["previousAction"]) ? $context["previousAction"] : $this->getContext($context, "previousAction")), (isset($context["visitInfo"]) ? $context["visitInfo"] : $this->getContext($context, "visitInfo"))));
            echo "

";
            // line 6
            $context["previousAction"] = $context["action"];
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["visitInfo"]) ? $context["visitInfo"] : null), "truncatedActionsCount", array(), "any", true, true)) {
            // line 10
            echo "    <li class=\"more\">
        <span class=\"icon-info\"></span>
        ";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_MorePagesNotDisplayed")), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  44 => 10,  42 => 9,  39 => 8,  33 => 6,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set previousAction = false %}
{% for action in actionDetails %}

    {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

{% set previousAction = action %}
{% endfor %}

{% if visitInfo.truncatedActionsCount is defined %}
    <li class=\"more\">
        <span class=\"icon-info\"></span>
        {{ 'Live_MorePagesNotDisplayed'|translate }}
    </li>
{% endif %}", "@Live/_actionsList.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\Live\\templates\\_actionsList.twig");
    }
}
