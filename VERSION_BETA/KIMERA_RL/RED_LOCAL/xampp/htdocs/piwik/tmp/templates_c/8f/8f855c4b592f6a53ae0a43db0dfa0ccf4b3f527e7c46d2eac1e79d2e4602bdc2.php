<?php

/* @UsersManager/userSettings.twig */
class __TwigTemplate_4177e9c7797c5cfea3b8585ba52efc85ddcfa5346762c5eee68f3932956970cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/userSettings.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PersonalSettings")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
    <h2>";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenRegenerateConfirmSelf")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<div piwik-content-block content-title=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
        echo "\" feature=\"true\">
    <form id=\"userSettingsTable\" piwik-form ng-controller=\"PersonalSettingsController as personalSettings\">

        <div piwik-field uicontrol=\"text\" name=\"username\"
             title=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html_attr");
        echo "\"
             value=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), "html", null, true);
        echo "\" data-disabled=\"true\"
             ng-model=\"personalSettings.username\"
             inline-help=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourUsernameCannotBeChanged")), "html_attr");
        echo "\">
        </div>

        <div piwik-field uicontrol=\"text\" name=\"email\"
             ng-model=\"personalSettings.email\"
             ng-change=\"personalSettings.requirePasswordConfirmation()\"
             maxlength=\"100\"
             title=\"";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html_attr");
        echo "\"
             value=\"";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["userEmail"]) ? $context["userEmail"] : $this->getContext($context, "userEmail")), "html", null, true);
        echo "\">
        </div>

        <div id=\"languageHelp\" class=\"inline-help-node\">
            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/translations/\">
                ";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("LanguagesManager_AboutPiwikTranslations")), "html", null, true);
        echo "</a>
        </div>

        <div piwik-field uicontrol=\"select\" name=\"language\"
             ng-model=\"personalSettings.language\"
             title=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Language")), "html_attr");
        echo "\"
             options=\"";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["languageOptions"]) ? $context["languageOptions"] : $this->getContext($context, "languageOptions"))), "html", null, true);
        echo "\"
             inline-help=\"#languageHelp\"
             value=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentLanguageCode"]) ? $context["currentLanguageCode"] : $this->getContext($context, "currentLanguageCode")), "html", null, true);
        echo "\">
        </div>

        <div piwik-field uicontrol=\"select\" name=\"timeformat\"
             ng-model=\"personalSettings.timeformat\"
             title=\"";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeFormat")), "html_attr");
        echo "\"
             value=\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentTimeformat"]) ? $context["currentTimeformat"] : $this->getContext($context, "currentTimeformat")), "html", null, true);
        echo "\" options=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["timeFormats"]) ? $context["timeFormats"] : $this->getContext($context, "timeFormats"))), "html", null, true);
        echo "\">
        </div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultReport\"
             ng-model=\"personalSettings.defaultReport\"
             introduction=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportToLoadByDefault")), "html_attr");
        echo "\"
             title=\"";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html_attr");
        echo "\"
             value=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReport"]) ? $context["defaultReport"] : $this->getContext($context, "defaultReport")), "html", null, true);
        echo "\" options=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["defaultReportOptions"]) ? $context["defaultReportOptions"] : $this->getContext($context, "defaultReportOptions"))), "html", null, true);
        echo "\">
        </div>

        <div piwik-siteselector
             ng-model=\"personalSettings.site\"
             show-selected-site=\"true\"
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 61
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReportIdSite"]) ? $context["defaultReportIdSite"] : $this->getContext($context, "defaultReportIdSite")), "html", null, true);
        echo "\"
             sitename=\"";
        // line 62
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array((isset($context["defaultReportSiteName"]) ? $context["defaultReportSiteName"] : $this->getContext($context, "defaultReportSiteName"))));
        echo "\"
             switch-site-on-select=\"false\"
             show-all-sites-item=\"false\"
             showselectedsite=\"true\"
             id=\"defaultReportSiteSelector\"
        ></div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultDate\"
             ng-model=\"personalSettings.defaultDate\"
             introduction=\"";
        // line 71
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportDateToLoadByDefault")), "html_attr");
        echo "\"
             value=\"";
        // line 72
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultDate"]) ? $context["defaultDate"] : $this->getContext($context, "defaultDate")), "html", null, true);
        echo "\" options=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["availableDefaultDates"]) ? $context["availableDefaultDates"] : $this->getContext($context, "availableDefaultDates"))), "html", null, true);
        echo "\">
        </div>

        ";
        // line 75
        if (((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context)) && (isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")))) {
            // line 76
            echo "
            <div piwik-field uicontrol=\"password\" name=\"password\" autocomplete=\"off\"
                 ng-model=\"personalSettings.password\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 introduction=\"";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html_attr");
            echo "\"
                 title=\"";
            // line 81
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_NewPassword")), "html_attr");
            echo "\"
                 value=\"\" inline-help=\"";
            // line 82
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne")), "html_attr");
            echo "\">
            </div>

            <div piwik-field uicontrol=\"password\" name=\"passwordBis\" autocomplete=\"off\"
                 ng-model=\"personalSettings.passwordBis\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 title=\"";
            // line 88
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_NewPasswordRepeat")), "html_attr");
            echo "\"
                 value=\"\" inline-help=\"";
            // line 89
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TypeYourPasswordAgain")), "html_attr");
            echo "\">
            </div>
        ";
        }
        // line 92
        echo "
        ";
        // line 93
        if (( !(isset($context["isValidHost"]) || array_key_exists("isValidHost", $context)) ||  !(isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")))) {
            // line 94
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 95
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_InjectedHostCannotChangePwd", (isset($context["invalidHost"]) ? $context["invalidHost"] : $this->getContext($context, "invalidHost")))), "html", null, true);
            echo "
                ";
            // line 96
            if ( !(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EmailYourAdministrator", (isset($context["invalidHostMailLinkStart"]) ? $context["invalidHostMailLinkStart"] : $this->getContext($context, "invalidHostMailLinkStart")), "</a>"));
            }
            // line 97
            echo "            </div>
        ";
        }
        // line 99
        echo "
        <div piwik-save-button onconfirm=\"personalSettings.save()\"
             saving=\"personalSettings.loading\"></div>

        <div class=\"modal\" id=\"confirmChangesWithPassword\">
            <div class=\"modal-content\">
                <h2>";
        // line 105
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ConfirmWithPassword")), "html", null, true);
        echo "</h2>

                <div piwik-field uicontrol=\"password\" name=\"currentPassword\" autocomplete=\"off\"
                     ng-model=\"personalSettings.passwordCurrent\"
                     full-width=\"true\"
                     title=\"";
        // line 110
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourCurrentPassword")), "html_attr");
        echo "\"
                     value=\"\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"javascript:void(0)\" class=\"modal-action btn\" ng-click=\"personalSettings.save()\">";
        // line 115
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "</a>
                <a href=\"javascript:void(0)\" class=\"modal-action modal-close modal-no\"  ng-click=\"personalSettings.cancelSave()\">";
        // line 116
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
        echo "</a>
            </div>
        </div>

    </form>
</div>

<div piwik-content-block
     content-title=\"";
        // line 124
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenAuth")), "html_attr");
        echo "\">
    <pre piwik-select-on-focus id=\"token_auth_user\" piwik-show-sensitive-data=\"";
        // line 125
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["userTokenAuth"]) ? $context["userTokenAuth"] : $this->getContext($context, "userTokenAuth")), "html", null, true);
        echo "\"></pre>

    <button class=\"btn btn-link\"
            ng-controller=\"PersonalSettingsController as personalSettings\"
            ng-click=\"personalSettings.regenerateTokenAuth()\">";
        // line 129
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TokenRegenerateTitle")), "html", null, true);
        echo "</button>
</div>

";
        // line 132
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.userSettings.afterTokenAuth"));
        echo "

<div piwik-plugin-settings mode=\"user\"></div>

<div piwik-content-block
     content-title=\"";
        // line 137
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExcludeVisitsViaCookie")), "html_attr");
        echo "\">
    <p>
        ";
        // line 139
        if ((isset($context["ignoreCookieSet"]) ? $context["ignoreCookieSet"] : $this->getContext($context, "ignoreCookieSet"))) {
            // line 140
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", (isset($context["piwikHost"]) ? $context["piwikHost"] : $this->getContext($context, "piwikHost")), "</strong>"));
            echo "
        ";
        } else {
            // line 142
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>"));
            echo "
        ";
        }
        // line 144
        echo "    </p>
    <span style=\"margin-left:20px;\">
    <a href='";
        // line 146
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("ignoreSalt" => (isset($context["ignoreSalt"]) ? $context["ignoreSalt"] : $this->getContext($context, "ignoreSalt")), "module" => "UsersManager", "action" => "setIgnoreCookie"))), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if ((isset($context["ignoreCookieSet"]) ? $context["ignoreCookieSet"] : $this->getContext($context, "ignoreCookieSet"))) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToDeleteTheCookie")), "html", null, true);
            echo "
        ";
        } else {
            // line 147
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToSetTheCookieOnDomain", (isset($context["piwikHost"]) ? $context["piwikHost"] : $this->getContext($context, "piwikHost")))), "html", null, true);
        }
        // line 148
        echo "        <br/>
    </a></span>
</div>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 148,  329 => 147,  321 => 146,  317 => 144,  311 => 142,  305 => 140,  303 => 139,  298 => 137,  290 => 132,  284 => 129,  277 => 125,  273 => 124,  262 => 116,  258 => 115,  250 => 110,  242 => 105,  234 => 99,  230 => 97,  226 => 96,  222 => 95,  219 => 94,  217 => 93,  214 => 92,  208 => 89,  204 => 88,  195 => 82,  191 => 81,  187 => 80,  181 => 76,  179 => 75,  171 => 72,  167 => 71,  155 => 62,  151 => 61,  139 => 54,  135 => 53,  131 => 52,  121 => 47,  117 => 46,  109 => 41,  104 => 39,  100 => 38,  92 => 33,  84 => 28,  80 => 27,  70 => 20,  65 => 18,  61 => 17,  54 => 13,  48 => 10,  44 => 9,  40 => 8,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UsersManager_PersonalSettings'|translate }}{% endset %}

{% block content %}

<div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
    <h2>{{ 'UsersManager_TokenRegenerateConfirmSelf'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

<div piwik-content-block content-title=\"{{ title|e('html_attr') }}\" feature=\"true\">
    <form id=\"userSettingsTable\" piwik-form ng-controller=\"PersonalSettingsController as personalSettings\">

        <div piwik-field uicontrol=\"text\" name=\"username\"
             title=\"{{ 'General_Username'|translate|e('html_attr') }}\"
             value=\"{{ userLogin }}\" data-disabled=\"true\"
             ng-model=\"personalSettings.username\"
             inline-help=\"{{ 'UsersManager_YourUsernameCannotBeChanged'|translate|e('html_attr') }}\">
        </div>

        <div piwik-field uicontrol=\"text\" name=\"email\"
             ng-model=\"personalSettings.email\"
             ng-change=\"personalSettings.requirePasswordConfirmation()\"
             maxlength=\"100\"
             title=\"{{ 'UsersManager_Email'|translate|e('html_attr') }}\"
             value=\"{{ userEmail }}\">
        </div>

        <div id=\"languageHelp\" class=\"inline-help-node\">
            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/translations/\">
                {{ 'LanguagesManager_AboutPiwikTranslations'|translate }}</a>
        </div>

        <div piwik-field uicontrol=\"select\" name=\"language\"
             ng-model=\"personalSettings.language\"
             title=\"{{ 'General_Language'|translate|e('html_attr') }}\"
             options=\"{{ languageOptions|json_encode }}\"
             inline-help=\"#languageHelp\"
             value=\"{{ currentLanguageCode }}\">
        </div>

        <div piwik-field uicontrol=\"select\" name=\"timeformat\"
             ng-model=\"personalSettings.timeformat\"
             title=\"{{ 'General_TimeFormat'|translate|e('html_attr') }}\"
             value=\"{{ currentTimeformat }}\" options=\"{{ timeFormats|json_encode }}\">
        </div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultReport\"
             ng-model=\"personalSettings.defaultReport\"
             introduction=\"{{ 'UsersManager_ReportToLoadByDefault'|translate|e('html_attr') }}\"
             title=\"{{ 'General_AllWebsitesDashboard'|translate|e('html_attr') }}\"
             value=\"{{ defaultReport }}\" options=\"{{ defaultReportOptions|json_encode }}\">
        </div>

        <div piwik-siteselector
             ng-model=\"personalSettings.site\"
             show-selected-site=\"true\"
             class=\"sites_autocomplete\"
             siteid=\"{{ defaultReportIdSite }}\"
             sitename=\"{{ defaultReportSiteName|rawSafeDecoded }}\"
             switch-site-on-select=\"false\"
             show-all-sites-item=\"false\"
             showselectedsite=\"true\"
             id=\"defaultReportSiteSelector\"
        ></div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultDate\"
             ng-model=\"personalSettings.defaultDate\"
             introduction=\"{{ 'UsersManager_ReportDateToLoadByDefault'|translate|e('html_attr') }}\"
             value=\"{{ defaultDate }}\" options=\"{{ availableDefaultDates|json_encode }}\">
        </div>

        {% if isValidHost is defined and isValidHost %}

            <div piwik-field uicontrol=\"password\" name=\"password\" autocomplete=\"off\"
                 ng-model=\"personalSettings.password\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 introduction=\"{{ 'General_ChangePassword'|translate|e('html_attr') }}\"
                 title=\"{{ 'Login_NewPassword'|translate|e('html_attr') }}\"
                 value=\"\" inline-help=\"{{ 'UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne'|translate|e('html_attr') }}\">
            </div>

            <div piwik-field uicontrol=\"password\" name=\"passwordBis\" autocomplete=\"off\"
                 ng-model=\"personalSettings.passwordBis\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 title=\"{{ 'Login_NewPasswordRepeat'|translate|e('html_attr') }}\"
                 value=\"\" inline-help=\"{{ 'UsersManager_TypeYourPasswordAgain'|translate|e('html_attr') }}\">
            </div>
        {% endif %}

        {% if isValidHost is not defined or not isValidHost %}
            <div class=\"alert alert-danger\">
                {{ 'UsersManager_InjectedHostCannotChangePwd'|translate(invalidHost) }}
                {% if not isSuperUser %}{{ 'UsersManager_EmailYourAdministrator'|translate(invalidHostMailLinkStart,'</a>')|raw }}{% endif %}
            </div>
        {% endif %}

        <div piwik-save-button onconfirm=\"personalSettings.save()\"
             saving=\"personalSettings.loading\"></div>

        <div class=\"modal\" id=\"confirmChangesWithPassword\">
            <div class=\"modal-content\">
                <h2>{{ 'UsersManager_ConfirmWithPassword'|translate }}</h2>

                <div piwik-field uicontrol=\"password\" name=\"currentPassword\" autocomplete=\"off\"
                     ng-model=\"personalSettings.passwordCurrent\"
                     full-width=\"true\"
                     title=\"{{ 'UsersManager_YourCurrentPassword'|translate|e('html_attr') }}\"
                     value=\"\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"javascript:void(0)\" class=\"modal-action btn\" ng-click=\"personalSettings.save()\">{{ 'General_Ok'|translate }}</a>
                <a href=\"javascript:void(0)\" class=\"modal-action modal-close modal-no\"  ng-click=\"personalSettings.cancelSave()\">{{ 'General_Cancel'|translate }}</a>
            </div>
        </div>

    </form>
</div>

<div piwik-content-block
     content-title=\"{{ 'UsersManager_TokenAuth'|translate|e('html_attr') }}\">
    <pre piwik-select-on-focus id=\"token_auth_user\" piwik-show-sensitive-data=\"{{ userTokenAuth }}\"></pre>

    <button class=\"btn btn-link\"
            ng-controller=\"PersonalSettingsController as personalSettings\"
            ng-click=\"personalSettings.regenerateTokenAuth()\">{{ 'UsersManager_TokenRegenerateTitle'|translate }}</button>
</div>

{{ postEvent('Template.userSettings.afterTokenAuth') }}

<div piwik-plugin-settings mode=\"user\"></div>

<div piwik-content-block
     content-title=\"{{ 'UsersManager_ExcludeVisitsViaCookie'|translate|e('html_attr') }}\">
    <p>
        {% if ignoreCookieSet %}
            {{ 'UsersManager_YourVisitsAreIgnoredOnDomain'|translate(\"<strong>\", piwikHost, \"</strong>\")|raw }}
        {% else %}
            {{ 'UsersManager_YourVisitsAreNotIgnored'|translate(\"<strong>\",\"</strong>\")|raw }}
        {% endif %}
    </p>
    <span style=\"margin-left:20px;\">
    <a href='{{ linkTo({'ignoreSalt':ignoreSalt, 'module': 'UsersManager', 'action':'setIgnoreCookie'}) }}#excludeCookie'>&rsaquo; {% if ignoreCookieSet %}{{ 'UsersManager_ClickHereToDeleteTheCookie'|translate }}
        {% else %}{{'UsersManager_ClickHereToSetTheCookieOnDomain'|translate(piwikHost) }}{% endif %}
        <br/>
    </a></span>
</div>

{% endblock %}
", "@UsersManager/userSettings.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\UsersManager\\templates\\userSettings.twig");
    }
}
