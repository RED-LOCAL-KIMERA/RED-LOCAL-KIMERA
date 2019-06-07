<?php

/* @CoreHome/_dataTableActions.twig */
class __TwigTemplate_0161af3901d8a984958729f19354d9bac04febee52da45112cd70996762f5cf3 extends Twig_Template
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
        echo " ";
        $context["randomIdForDropdown"] = twig_random($this->env, 999999);
        // line 2
        echo "
    ";
        // line 3
        if (($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_footer", array()) && $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_footer_icons", array()))) {
            // line 4
            echo "
        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-activates='dropdownConfigure";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) ? $context["randomIdForDropdown"] : $this->getContext($context, "randomIdForDropdown")), "html", null, true);
            echo "'><span class=\"icon-configure\"></span></a>

        ";
            // line 9
            $context["activeFooterIcon"] = "";
            // line 10
            echo "        ";
            $context["numIcons"] = 0;
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <ul id='dropdownVisualizations";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) ? $context["randomIdForDropdown"] : $this->getContext($context, "randomIdForDropdown")), "html", null, true);
            echo "' class='dropdown-content dataTableFooterIcons'>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footerIcons"]) ? $context["footerIcons"] : $this->getContext($context, "footerIcons")));
            foreach ($context['_seq'] as $context["_key"] => $context["footerIconGroup"]) {
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["footerIconGroup"], "buttons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["footerIcon"]) {
                    if ($this->getAttribute($context["footerIcon"], "icon", array())) {
                        // line 15
                        echo "                        <li>
                            ";
                        // line 16
                        $context["numIcons"] = ((isset($context["numIcons"]) ? $context["numIcons"] : $this->getContext($context, "numIcons")) + 1);
                        // line 17
                        echo "                            ";
                        $context["isActiveEcommerceView"] = ($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : null), "abandonedCarts", array(), "any", true, true) && ((($this->getAttribute(                        // line 18
$context["footerIcon"], "id", array()) == "ecommerceOrder") && ($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "abandonedCarts", array()) == 0)) || (($this->getAttribute(                        // line 19
$context["footerIcon"], "id", array()) == "ecommerceAbandonedCart") && ($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "abandonedCarts", array()) == 1))));
                        // line 20
                        echo "                            <a class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIconGroup"], "class", array()), "html", null, true);
                        echo " tableIcon ";
                        if ((($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "viewDataTable", array()) == $this->getAttribute($context["footerIcon"], "id", array())) || (isset($context["isActiveEcommerceView"]) ? $context["isActiveEcommerceView"] : $this->getContext($context, "isActiveEcommerceView")))) {
                            echo "activeIcon";
                            $context["activeFooterIcon"] = $this->getAttribute($context["footerIcon"], "icon", array());
                        }
                        echo "\"
                               data-footer-icon-id=\"";
                        // line 21
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "id", array()), "html", null, true);
                        echo "\">
                                ";
                        // line 22
                        if ((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($context["footerIcon"], "icon", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "icon-") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) {
                            // line 23
                            echo "                                    <span title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", array()), "html", null, true);
                            echo "\" class=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "icon", array()), "html", null, true);
                            echo "\"></span>
                                ";
                        } else {
                            // line 25
                            echo "                                    <img width=\"16\" height=\"16\" title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", array()), "html", null, true);
                            echo "\" src=\"";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "icon", array()), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 27
                        echo "                                ";
                        if ($this->getAttribute($context["footerIcon"], "title", array(), "any", true, true)) {
                            echo "<span>";
                            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["footerIcon"], "title", array()), "html", null, true);
                            echo "</span>";
                        }
                        // line 28
                        echo "                            </a>
                        </li>
                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    <li class=\"divider\"></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIconGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ul>
        ";
            $context["visualizationIcons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_periods", array())) {
                // line 37
                echo "            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"";
                // line 39
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ChangePeriod")), "html_attr");
                echo "\"
               data-activates=\"dropdownPeriods";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) ? $context["randomIdForDropdown"] : $this->getContext($context, "randomIdForDropdown")), "html", null, true);
                echo "\">
                <span class=\"icon-calendar\"></span>
            </a>
            <ul id='dropdownPeriods";
                // line 43
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) ? $context["randomIdForDropdown"] : $this->getContext($context, "randomIdForDropdown")), "html", null, true);
                echo "' class='dropdown-content dataTablePeriods'>
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "selectable_periods", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["selectablePeriod"]) {
                    // line 45
                    echo "                    <li>
                        <a data-period=\"";
                    // line 46
                    echo \Piwik\piwik_escape_filter($this->env, $context["selectablePeriod"], "html", null, true);
                    echo "\" class=\"tableIcon ";
                    if (((($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : null), "period", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : null), "period", array()), "")) : ("")) == $context["selectablePeriod"])) {
                        echo "activeIcon\"";
                    }
                    echo "\"><span>";
                    echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "translations", array(), "any", false, true), $context["selectablePeriod"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "translations", array(), "any", false, true), $context["selectablePeriod"], array(), "array"), $context["selectablePeriod"])) : ($context["selectablePeriod"])), "html", null, true);
                    echo "</span></a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectablePeriod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "            </ul>
        ";
            }
            // line 51
            echo "
        ";
            // line 52
            if (((isset($context["activeFooterIcon"]) ? $context["activeFooterIcon"] : $this->getContext($context, "activeFooterIcon")) && ((isset($context["numIcons"]) ? $context["numIcons"] : $this->getContext($context, "numIcons")) > 1))) {
                // line 53
                echo "            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-activates=\"dropdownVisualizations";
                // line 55
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) ? $context["randomIdForDropdown"] : $this->getContext($context, "randomIdForDropdown")), "html", null, true);
                echo "\">
                ";
                // line 56
                if ((is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = (isset($context["activeFooterIcon"]) ? $context["activeFooterIcon"] : $this->getContext($context, "activeFooterIcon"))) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "icon-") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || 0 === strpos($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9)))) {
                    // line 57
                    echo "                    <span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ChangeVisualization")), "html_attr");
                    echo "\" class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activeFooterIcon"]) ? $context["activeFooterIcon"] : $this->getContext($context, "activeFooterIcon")), "html", null, true);
                    echo "\"></span>
                ";
                } else {
                    // line 59
                    echo "                    <img title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ChangeVisualization")), "html_attr");
                    echo "\" width=\"16\" height=\"16\" src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activeFooterIcon"]) ? $context["activeFooterIcon"] : $this->getContext($context, "activeFooterIcon")), "html", null, true);
                    echo "\"/>
                ";
                }
                // line 61
                echo "            </a>
            ";
                // line 62
                echo (isset($context["visualizationIcons"]) ? $context["visualizationIcons"] : $this->getContext($context, "visualizationIcons"));
                echo "
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_export", array())) {
                // line 66
                echo "            ";
                $context["requestParams"] = twig_jsonencode_filter($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "request_parameters_to_modify", array()));
                // line 67
                echo "
            ";
                // line 68
                $context["formats"] = array("CSV" => "CSV", "TSV" => "TSV (Excel)", "XML" => "XML", "JSON" => "Json", "PHP" => "PHP", "HTML" => "HTML");
                // line 69
                echo "            ";
                if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_export_as_rss_feed", array())) {
                    // line 70
                    echo "                ";
                    $context["formats"] = twig_array_merge((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), array("RSS" => "RSS"));
                    // line 71
                    echo "            ";
                }
                // line 72
                echo "
            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"";
                // line 74
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "title", array()), "html_attr");
                echo "\" request-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["requestParams"]) ? $context["requestParams"] : $this->getContext($context, "requestParams")), "html_attr");
                echo "\"
               api-method=\"";
                // line 75
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "apiMethodToRequestDataTable", array()), "html", null, true);
                echo "\" report-formats=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats"))), "html_attr");
                echo "\"
               href='javascript:;' title=\"";
                // line 76
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportThisReport")), "html_attr");
                echo "\"
               ><span class=\"icon-export\"></span></a>
        ";
            }
            // line 79
            echo "
        ";
            // line 80
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_export_as_image_icon", array())) {
                // line 81
                echo "            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"";
                // line 83
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportAsImage")), "html", null, true);
                echo "\">
                <span class=\"icon-image\"></span>
            </a>
        ";
            }
            // line 87
            echo "
        ";
            // line 88
            if ((call_user_func_array($this->env->getFunction('isPluginLoaded')->getCallable(), array("Annotations")) &&  !$this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "hide_annotations_view", array()))) {
                // line 89
                echo "            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"";
                // line 90
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_Annotations")), "html_attr");
                echo "\"
            ><span class=\"icon-annotation\"></span></a>
        ";
            }
            // line 93
            echo "
        ";
            // line 94
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_search", array())) {
                // line 95
                echo "            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"";
                // line 96
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html_attr");
                echo "\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"";
                // line 98
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CloseSearch")), "html_attr");
                echo "\"></span>
                <input id=\"widgetSearch_";
                // line 99
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "report_id", array()), "html", null, true);
                echo "\"
                       title=\"";
                // line 100
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_DataTableHowToSearch")), "html_attr");
                echo "\"
                       type=\"text\"
                       class=\"dataTableSearchInput browser-default\" />
            </a>
        ";
            }
            // line 105
            echo "
        <ul id='dropdownConfigure";
            // line 106
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) ? $context["randomIdForDropdown"] : $this->getContext($context, "randomIdForDropdown")), "html", null, true);
            echo "' class='dropdown-content tableConfiguration'>
            ";
            // line 107
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_flatten_table", array())) {
                // line 108
                echo "                ";
                if (($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : null), "flat", array(), "any", true, true) && ($this->getAttribute((isset($context["clientSideParameters"]) ? $context["clientSideParameters"] : $this->getContext($context, "clientSideParameters")), "flat", array()) == 1))) {
                    // line 109
                    echo "                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                ";
                }
                // line 113
                echo "                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
            ";
            }
            // line 117
            echo "            ";
            if (( !(isset($context["isDataTableEmpty"]) ? $context["isDataTableEmpty"] : $this->getContext($context, "isDataTableEmpty")) && (($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "show_totals_row", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "show_totals_row", array()), 0)) : (0)))) {
                // line 118
                echo "                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            ";
            }
            // line 122
            echo "            ";
            if ($this->getAttribute((isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties")), "show_exclude_low_population", array())) {
                // line 123
                echo "                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            ";
            }
            // line 127
            echo "            ";
            if ( !twig_test_empty((($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "show_pivot_by_subtable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["properties"]) ? $context["properties"] : null), "show_pivot_by_subtable", array()))) : ("")))) {
                // line 128
                echo "                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            ";
            }
            // line 132
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableActions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 132,  365 => 128,  362 => 127,  356 => 123,  353 => 122,  347 => 118,  344 => 117,  338 => 113,  332 => 109,  329 => 108,  327 => 107,  323 => 106,  320 => 105,  312 => 100,  308 => 99,  304 => 98,  299 => 96,  296 => 95,  294 => 94,  291 => 93,  285 => 90,  282 => 89,  280 => 88,  277 => 87,  270 => 83,  266 => 81,  264 => 80,  261 => 79,  255 => 76,  249 => 75,  243 => 74,  239 => 72,  236 => 71,  233 => 70,  230 => 69,  228 => 68,  225 => 67,  222 => 66,  220 => 65,  217 => 64,  212 => 62,  209 => 61,  201 => 59,  193 => 57,  191 => 56,  187 => 55,  183 => 53,  181 => 52,  178 => 51,  174 => 49,  159 => 46,  156 => 45,  152 => 44,  148 => 43,  142 => 40,  138 => 39,  134 => 37,  132 => 36,  129 => 35,  125 => 33,  118 => 31,  109 => 28,  102 => 27,  94 => 25,  86 => 23,  84 => 22,  80 => 21,  70 => 20,  68 => 19,  67 => 18,  65 => 17,  63 => 16,  60 => 15,  54 => 14,  50 => 13,  45 => 12,  42 => 11,  39 => 10,  37 => 9,  32 => 7,  27 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% set randomIdForDropdown = random(999999) %}

    {% if properties.show_footer and properties.show_footer_icons %}

        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-activates='dropdownConfigure{{ randomIdForDropdown }}'><span class=\"icon-configure\"></span></a>

        {% set activeFooterIcon = '' %}
        {% set numIcons = 0 %}
        {% set visualizationIcons %}
            <ul id='dropdownVisualizations{{ randomIdForDropdown }}' class='dropdown-content dataTableFooterIcons'>
                {% for footerIconGroup in footerIcons %}
                    {% for footerIcon in footerIconGroup.buttons if footerIcon.icon %}
                        <li>
                            {% set numIcons = numIcons + 1 %}
                            {% set isActiveEcommerceView = clientSideParameters.abandonedCarts is defined and
                            ((footerIcon.id == 'ecommerceOrder' and clientSideParameters.abandonedCarts == 0) or
                            (footerIcon.id == 'ecommerceAbandonedCart' and clientSideParameters.abandonedCarts == 1)) %}
                            <a class=\"{{ footerIconGroup.class }} tableIcon {% if clientSideParameters.viewDataTable == footerIcon.id or isActiveEcommerceView %}activeIcon{% set activeFooterIcon = footerIcon.icon %}{% endif %}\"
                               data-footer-icon-id=\"{{ footerIcon.id }}\">
                                {% if footerIcon.icon starts with 'icon-' %}
                                    <span title=\"{{ footerIcon.title }}\" class=\"{{ footerIcon.icon }}\"></span>
                                {% else %}
                                    <img width=\"16\" height=\"16\" title=\"{{ footerIcon.title }}\" src=\"{{ footerIcon.icon }}\"/>
                                {% endif %}
                                {% if footerIcon.title is defined %}<span>{{ footerIcon.title }}</span>{% endif %}
                            </a>
                        </li>
                    {% endfor %}
                    <li class=\"divider\"></li>
                {% endfor %}
            </ul>
        {% endset %}

        {% if properties.show_periods %}
            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"{{ 'CoreHome_ChangePeriod'|translate|e('html_attr') }}\"
               data-activates=\"dropdownPeriods{{ randomIdForDropdown }}\">
                <span class=\"icon-calendar\"></span>
            </a>
            <ul id='dropdownPeriods{{ randomIdForDropdown }}' class='dropdown-content dataTablePeriods'>
                {% for selectablePeriod in properties.selectable_periods %}
                    <li>
                        <a data-period=\"{{ selectablePeriod }}\" class=\"tableIcon {% if (clientSideParameters.period|default('')) == selectablePeriod %}activeIcon\"{% endif %}\"><span>{{ properties.translations[selectablePeriod]|default(selectablePeriod) }}</span></a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}

        {% if activeFooterIcon and numIcons > 1 %}
            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-activates=\"dropdownVisualizations{{ randomIdForDropdown }}\">
                {% if activeFooterIcon starts with 'icon-' %}
                    <span title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" class=\"{{ activeFooterIcon }}\"></span>
                {% else %}
                    <img title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" width=\"16\" height=\"16\" src=\"{{ activeFooterIcon }}\"/>
                {% endif %}
            </a>
            {{ visualizationIcons|raw }}
        {% endif %}

        {% if properties.show_export %}
            {% set requestParams = properties.request_parameters_to_modify|json_encode %}

            {% set formats = {\"CSV\":\"CSV\",\"TSV\":\"TSV (Excel)\",\"XML\":\"XML\",\"JSON\":\"Json\",\"PHP\":\"PHP\",\"HTML\":\"HTML\"} %}
            {% if properties.show_export_as_rss_feed %}
                {% set formats = formats|merge({\"RSS\": \"RSS\"}) %}
            {% endif %}

            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"{{ properties.title|e('html_attr') }}\" request-params=\"{{ requestParams|e('html_attr') }}\"
               api-method=\"{{ properties.apiMethodToRequestDataTable }}\" report-formats=\"{{ formats|json_encode|e('html_attr') }}\"
               href='javascript:;' title=\"{{ 'General_ExportThisReport'|translate|e('html_attr') }}\"
               ><span class=\"icon-export\"></span></a>
        {% endif %}

        {% if properties.show_export_as_image_icon %}
            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"{{ 'General_ExportAsImage'|translate }}\">
                <span class=\"icon-image\"></span>
            </a>
        {% endif %}

        {% if isPluginLoaded('Annotations') and not properties.hide_annotations_view %}
            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"{{ 'Annotations_Annotations'|translate|e('html_attr') }}\"
            ><span class=\"icon-annotation\"></span></a>
        {% endif %}

        {% if properties.show_search %}
            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"{{ 'General_Search'|translate|e('html_attr') }}\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"{{ 'CoreHome_CloseSearch'|translate|e('html_attr') }}\"></span>
                <input id=\"widgetSearch_{{ properties.report_id }}\"
                       title=\"{{ 'CoreHome_DataTableHowToSearch'|translate|e('html_attr') }}\"
                       type=\"text\"
                       class=\"dataTableSearchInput browser-default\" />
            </a>
        {% endif %}

        <ul id='dropdownConfigure{{ randomIdForDropdown }}' class='dropdown-content tableConfiguration'>
            {% if properties.show_flatten_table %}
                {% if clientSideParameters.flat is defined and clientSideParameters.flat == 1 %}
                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                {% endif %}
                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
            {% endif %}
            {% if not isDataTableEmpty and properties.show_totals_row|default(0) %}
                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            {% endif %}
            {% if properties.show_exclude_low_population %}
                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            {% endif %}
            {% if properties.show_pivot_by_subtable|default is not empty %}
                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            {% endif %}
        </ul>
    {% endif %}", "@CoreHome/_dataTableActions.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\CoreHome\\templates\\_dataTableActions.twig");
    }
}
