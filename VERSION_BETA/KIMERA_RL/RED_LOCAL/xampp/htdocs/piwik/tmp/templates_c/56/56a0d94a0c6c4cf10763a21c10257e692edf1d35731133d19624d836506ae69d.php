<?php

/* @Live/ajaxTotalVisitors.twig */
class __TwigTemplate_313429848ac06f2a6e16cba4138f2bcf3f25d436adf273664af5f33b78e4b6c4 extends Twig_Template
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
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/ajaxTotalVisitors.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Live/ajaxTotalVisitors.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"@Live/_totalVisitors.twig\" %}", "@Live/ajaxTotalVisitors.twig", "C:\\KIMERA_RL\\RED_LOCAL\\xampp\\htdocs\\piwik\\plugins\\Live\\templates\\ajaxTotalVisitors.twig");
    }
}
