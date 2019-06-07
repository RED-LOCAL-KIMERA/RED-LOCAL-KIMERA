<?php

/* @Live/_profileSummary.twig */
class __TwigTemplate_965a674b9580bfff98bedcd686a0cdca810a4c4953ccd5d974151ab71c79304d extends Twig_Template
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
        ob_start();
        // line 2
        echo "    ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalUniquePageViews", array()), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnUniquePageviews")), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalRevisitedPages", array()), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_RevisitedPages")), "html", null, true);
        echo "
";
        $context["pageviewDetails"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Summary")), "html", null, true);
        echo "</h1>
    <div>
        ";
        // line 8
        if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "hasMoreVisits", array())) {
            // line 9
            echo "            <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LimitedSummary", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisits", array())) . "</strong>")));
            echo "</p>
        ";
        }
        // line 11
        echo "        ";
        if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViews", array()) != $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array()))) {
            // line 12
            echo "            ";
            $context["actionDetails"] = array();
            // line 13
            echo "            ";
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViews", array()) > 0)) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (((((("<span title=\"" . (isset($context["pageviewDetails"]) ? $context["pageviewDetails"] : $this->getContext($context, "pageviewDetails"))) . "\">") . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViews", array())) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnPageviews"))) . "</span>")));
            }
            // line 14
            echo "            ";
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalEvents", array(), "any", true, true) && ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEvents", array()) > 0))) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalEvents", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Events")))));
            }
            // line 15
            echo "            ";
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalDownloads", array()) > 0)) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalDownloads", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Downloads")))));
            }
            // line 16
            echo "            ";
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalOutlinks", array()) > 0)) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalOutlinks", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Outlinks")))));
            }
            // line 17
            echo "            ";
            if (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalSearches", array()) > 0)) {
                $context["actionDetails"] = twig_array_merge((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), array(0 => (($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalSearches", array()) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnSearches")))));
            }
            // line 18
            echo "            <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummaryWithActionDetails", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisitDurationPretty", array())) . "</strong>"), "", "", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array())), "</strong>", twig_join_filter((isset($context["actionDetails"]) ? $context["actionDetails"] : $this->getContext($context, "actionDetails")), ", "), ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisits", array())), "</strong>"));
            echo "</p>
        ";
        } else {
            // line 20
            echo "            <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummary", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisitDurationPretty", array())) . "</strong>"), "", "", ((("<strong title=\"" . (isset($context["pageviewDetails"]) ? $context["pageviewDetails"] : $this->getContext($context, "pageviewDetails"))) . "\">") . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalActions", array())), "</strong>", ("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalVisits", array())), "</strong>"));
            echo "</p>
        ";
        }
        // line 22
        echo "        ";
        if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalGoalConversions", array(), "any", true, true)) {
            // line 23
            echo "        <p>";
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo "<strong>";
            }
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ConvertedNGoals", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array()))), "html", null, true);
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                echo "</strong>";
            }
            // line 24
            if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalGoalConversions", array())) {
                // line 25
                echo "            ";
                ob_start();
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalConversionsByGoal", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                    // line 27
                    $context["idGoal"] = twig_slice($this->env, $context["idGoal"], 7, null);
                    // line 28
                    if ($this->getAttribute((isset($context["goals"]) ? $context["goals"] : null), $context["idGoal"], array(), "array", true, true)) {
                        // line 29
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            echo ", ";
                        }
                        echo \Piwik\piwik_escape_filter($this->env, $context["totalConversions"], "html", null, true);
                        echo " ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["goals"]) ? $context["goals"] : $this->getContext($context, "goals")), $context["idGoal"], array(), "array"), "name", array(), "array"), "html", null, true);
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                $context["goalList"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 33
                echo "            ";
                if ((isset($context["goalList"]) ? $context["goalList"] : $this->getContext($context, "goalList"))) {
                    echo "(";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["goalList"]) ? $context["goalList"] : $this->getContext($context, "goalList")), "html", null, true);
                    echo ")";
                }
            }
            // line 34
            echo ".</p>
        ";
        }
        // line 36
        echo "        ";
        if ((($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalSearches", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "totalSearches", array()), 0)) : (0))) {
            // line 37
            echo "        <p>
            ";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchKeywords")), "html", null, true);
            echo ":";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "searches", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                echo " <strong title=\"";
                if (($this->getAttribute($context["entry"], "searches", array()) == 1)) {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_OneSearch")), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_Searches", $this->getAttribute($context["entry"], "searches", array()))), "html", null, true);
                }
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "keyword", array()), "html", null, true);
                echo "</strong>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </p>
        ";
        }
        // line 42
        echo "        ";
        if ($this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : null), "averagePageGenerationTime", array(), "any", true, true)) {
            // line 43
            echo "        <p title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_CalculatedOverNPageViews", $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "totalPageViewsWithTiming", array()))), "html", null, true);
            echo "\">
            ";
            // line 44
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AveragePageGenerationTime", (("<strong>" . $this->getAttribute((isset($context["visitorData"]) ? $context["visitorData"] : $this->getContext($context, "visitorData")), "averagePageGenerationTime", array())) . "s</strong>")));
            echo "
        </p>
        ";
        }
        // line 47
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Live/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 47,  226 => 44,  221 => 43,  218 => 42,  214 => 40,  173 => 39,  170 => 38,  167 => 37,  164 => 36,  160 => 34,  152 => 33,  131 => 29,  129 => 28,  127 => 27,  110 => 26,  107 => 25,  105 => 24,  96 => 23,  93 => 22,  87 => 20,  81 => 18,  76 => 17,  71 => 16,  66 => 15,  61 => 14,  56 => 13,  53 => 12,  50 => 11,  44 => 9,  42 => 8,  37 => 6,  33 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set pageviewDetails %}
    {{ visitorData.totalUniquePageViews }} {{ 'General_ColumnUniquePageviews'|translate }}, {{ visitorData.totalRevisitedPages }} {{ 'Actions_RevisitedPages'|translate }}
{% endset %}

<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>{{ 'General_Summary'|translate }}</h1>
    <div>
        {% if visitorData.hasMoreVisits %}
            <p>{{ 'Live_LimitedSummary'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalPageViews != visitorData.totalActions %}
            {% set actionDetails = [] %}
            {% if visitorData.totalPageViews > 0 %}{% set actionDetails = actionDetails|merge(['<span title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalPageViews ~ ' ' ~ 'General_ColumnPageviews'|translate ~ '</span>']) %}{% endif %}
            {% if visitorData.totalEvents is defined and visitorData.totalEvents > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalEvents ~ ' ' ~ 'Events_Events'|translate]) %}{% endif %}
            {% if visitorData.totalDownloads > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalDownloads ~ ' ' ~ 'General_Downloads'|translate]) %}{% endif %}
            {% if visitorData.totalOutlinks > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalOutlinks ~ ' ' ~ 'General_Outlinks'|translate]) %}{% endif %}
            {% if visitorData.totalSearches > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalSearches ~ ' ' ~ 'Actions_ColumnSearches'|translate]) %}{% endif %}
            <p>{{ 'Live_VisitSummaryWithActionDetails'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong>' ~ visitorData.totalActions, '</strong>', actionDetails|join(', ') , '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% else %}
            <p>{{ 'Live_VisitSummary'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalActions,  '</strong>', '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalGoalConversions is defined %}
        <p>{% if visitorData.totalGoalConversions %}<strong>{% endif %}{{ 'Live_ConvertedNGoals'|translate(visitorData.totalGoalConversions) }}{% if visitorData.totalGoalConversions %}</strong>{% endif %}
        {%- if visitorData.totalGoalConversions %}
            {% set goalList %}
            {%- for idGoal, totalConversions in visitorData.totalConversionsByGoal -%}
                {%- set idGoal = idGoal[7:] -%}
                {% if goals[idGoal] is defined %}
                    {%- if not loop.first %}, {% endif -%}{{- totalConversions }} {{ goals[idGoal]['name'] -}}
                {% endif %}
            {%- endfor -%}
            {% endset %}
            {% if goalList %}({{ goalList }}){% endif %}
        {%- endif %}.</p>
        {% endif %}
        {% if visitorData.totalSearches|default(0) %}
        <p>
            {{ 'Actions_WidgetSearchKeywords'|translate }}:
            {%- for entry in visitorData.searches %} <strong title=\"{% if entry.searches == 1 %}{{ 'Actions_OneSearch'|translate }}{% else %}{{ 'UserCountryMap_Searches'|translate(entry.searches) }}{% endif %}\">{{ entry.keyword }}</strong>{% if not loop.last %},{% endif %}{% endfor %}
        </p>
        {% endif %}
        {% if visitorData.averagePageGenerationTime is defined %}
        <p title=\"{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithTiming) }}\">
            {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageGenerationTime ~ 's</strong>')|raw }}
        </p>
        {% endif %}
    </div>
</div>", "@Live/_profileSummary.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\Live\\templates\\_profileSummary.twig");
    }
}
