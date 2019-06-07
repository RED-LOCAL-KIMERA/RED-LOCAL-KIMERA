<?php

/* @TwoFactorAuth/userSettings.twig */
class __TwigTemplate_cc544993d18a80cba8bcba57c0695f958bb8ab3554529e042ca936d38e01f34c extends Twig_Template
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
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_TwoFactorAuthentication")), "html", null, true);
        echo " (";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_TwoFAShort")), "html", null, true);
        echo ")\" class=\"userSettings2FA\">

    <p>
        ";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_TwoFactorAuthenticationIntro", "<a href=\"https://matomo.org/faq/general/faq_27245\" rel=\"noreferrer noopener\">", "</a>"));
        echo "
    </p>

    ";
        // line 8
        if ((isset($context["isEnabled"]) ? $context["isEnabled"] : $this->getContext($context, "isEnabled"))) {
            // line 9
            echo "        <p><strong class=\"twoFaStatusEnabled\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_TwoFactorAuthenticationIsEnabled")), "html", null, true);
            echo "</strong></p>

        <p>
        ";
            // line 12
            if ((isset($context["isForced"]) ? $context["isForced"] : $this->getContext($context, "isForced"))) {
                // line 13
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_TwoFactorAuthenticationRequired")), "html", null, true);
                echo "
            <br />
            <br />
            <a class=\"btn btn-link enable2FaLink\" href=\"";
                // line 16
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "TwoFactorAuth", "action" => "setupTwoFactorAuth"))), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_ConfigureDifferentDevice")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 18
                echo "            <a class=\"btn btn-link enable2FaLink\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "TwoFactorAuth", "action" => "setupTwoFactorAuth"))), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_ConfigureDifferentDevice")), "html", null, true);
                echo "</a>
            <a href=\"";
                // line 19
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "TwoFactorAuth", "action" => "disableTwoFactorAuth", "disableNonce" => (isset($context["disableNonce"]) ? $context["disableNonce"] : $this->getContext($context, "disableNonce"))))), "html", null, true);
                echo "\" style=\"display:none;\" id=\"disable2fa\">disable2fa</a>
            <input type=\"button\"
                   class=\"btn btn-link disable2FaLink\"
                   onclick=\"twoFactorAuth.confirmDisable2FA('";
                // line 22
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["disableNonce"]) ? $context["disableNonce"] : $this->getContext($context, "disableNonce")), "url"), "html", null, true);
                echo "');\"
                   value=\"";
                // line 23
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_DisableTwoFA")), "html", null, true);
                echo "\">
        ";
            }
            // line 25
            echo "            <a class=\"btn btn-link showRecoveryCodesLink\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "TwoFactorAuth", "action" => "showRecoveryCodes"))), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_ShowRecoveryCodes")), "html", null, true);
            echo "</a>
        </p>
    ";
        } else {
            // line 28
            echo "        <p><strong>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_TwoFactorAuthenticationIsDisabled")), "html", null, true);
            echo "</strong>
            <br />
            <br />
           <a class=\"btn btn-link enable2FaLink\" href=\"";
            // line 31
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "TwoFactorAuth", "action" => "setupTwoFactorAuth"))), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_EnableTwoFA")), "html", null, true);
            echo "</a>
        </p>
    ";
        }
        // line 34
        echo "
    <div id=\"confirmDisable2FA\" class=\"ui-confirm\">
        <h2>";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("TwoFactorAuth_ConfirmDisableTwoFA")), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@TwoFactorAuth/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  115 => 37,  111 => 36,  107 => 34,  99 => 31,  92 => 28,  83 => 25,  78 => 23,  74 => 22,  68 => 19,  61 => 18,  54 => 16,  47 => 13,  45 => 12,  38 => 9,  36 => 8,  30 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div piwik-content-block
     content-title=\"{{ 'TwoFactorAuth_TwoFactorAuthentication'|translate }} ({{ 'TwoFactorAuth_TwoFAShort'|translate }})\" class=\"userSettings2FA\">

    <p>
        {{ 'TwoFactorAuth_TwoFactorAuthenticationIntro'|translate('<a href=\"https://matomo.org/faq/general/faq_27245\" rel=\"noreferrer noopener\">', '</a>')|raw }}
    </p>

    {% if isEnabled %}
        <p><strong class=\"twoFaStatusEnabled\">{{ 'TwoFactorAuth_TwoFactorAuthenticationIsEnabled'|translate }}</strong></p>

        <p>
        {% if isForced %}
            {{ 'TwoFactorAuth_TwoFactorAuthenticationRequired'|translate }}
            <br />
            <br />
            <a class=\"btn btn-link enable2FaLink\" href=\"{{ linkTo({'module': 'TwoFactorAuth', 'action': 'setupTwoFactorAuth'}) }}\">{{ 'TwoFactorAuth_ConfigureDifferentDevice'|translate }}</a>
        {% else %}
            <a class=\"btn btn-link enable2FaLink\" href=\"{{ linkTo({'module': 'TwoFactorAuth', 'action': 'setupTwoFactorAuth'}) }}\">{{ 'TwoFactorAuth_ConfigureDifferentDevice'|translate }}</a>
            <a href=\"{{ linkTo({'module': 'TwoFactorAuth', 'action': 'disableTwoFactorAuth', 'disableNonce': disableNonce}) }}\" style=\"display:none;\" id=\"disable2fa\">disable2fa</a>
            <input type=\"button\"
                   class=\"btn btn-link disable2FaLink\"
                   onclick=\"twoFactorAuth.confirmDisable2FA('{{ disableNonce|e('url') }}');\"
                   value=\"{{ 'TwoFactorAuth_DisableTwoFA'|translate }}\">
        {% endif %}
            <a class=\"btn btn-link showRecoveryCodesLink\" href=\"{{ linkTo({'module': 'TwoFactorAuth', 'action': 'showRecoveryCodes'}) }}\">{{ 'TwoFactorAuth_ShowRecoveryCodes'|translate }}</a>
        </p>
    {% else %}
        <p><strong>{{ 'TwoFactorAuth_TwoFactorAuthenticationIsDisabled'|translate }}</strong>
            <br />
            <br />
           <a class=\"btn btn-link enable2FaLink\" href=\"{{ linkTo({'module': 'TwoFactorAuth', 'action': 'setupTwoFactorAuth'}) }}\">{{ 'TwoFactorAuth_EnableTwoFA'|translate }}</a>
        </p>
    {% endif %}

    <div id=\"confirmDisable2FA\" class=\"ui-confirm\">
        <h2>{{ 'TwoFactorAuth_ConfirmDisableTwoFA'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

</div>
", "@TwoFactorAuth/userSettings.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\TwoFactorAuth\\templates\\userSettings.twig");
    }
}
