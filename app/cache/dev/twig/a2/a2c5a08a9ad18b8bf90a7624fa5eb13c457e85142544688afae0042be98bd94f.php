<?php

/* base.html.twig */
class __TwigTemplate_62d97bbd176fadbd2bc29bafa9923d5c160d701a423d088678568cd74311bb11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85bd40e56ac57bcd0a01cf90e8461ead1495a38c6d1b2a8ddae3102c0fdab5f3 = $this->env->getExtension("native_profiler");
        $__internal_85bd40e56ac57bcd0a01cf90e8461ead1495a38c6d1b2a8ddae3102c0fdab5f3->enter($__internal_85bd40e56ac57bcd0a01cf90e8461ead1495a38c6d1b2a8ddae3102c0fdab5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_85bd40e56ac57bcd0a01cf90e8461ead1495a38c6d1b2a8ddae3102c0fdab5f3->leave($__internal_85bd40e56ac57bcd0a01cf90e8461ead1495a38c6d1b2a8ddae3102c0fdab5f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6273fa82d38f24bc27230508d153a842113073a0925980c5dfaf82b406fc6ce = $this->env->getExtension("native_profiler");
        $__internal_b6273fa82d38f24bc27230508d153a842113073a0925980c5dfaf82b406fc6ce->enter($__internal_b6273fa82d38f24bc27230508d153a842113073a0925980c5dfaf82b406fc6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b6273fa82d38f24bc27230508d153a842113073a0925980c5dfaf82b406fc6ce->leave($__internal_b6273fa82d38f24bc27230508d153a842113073a0925980c5dfaf82b406fc6ce_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87ecee90dbbaec180046f16f2ae72dd0c89938c93427f6b7d9f96426a8d52703 = $this->env->getExtension("native_profiler");
        $__internal_87ecee90dbbaec180046f16f2ae72dd0c89938c93427f6b7d9f96426a8d52703->enter($__internal_87ecee90dbbaec180046f16f2ae72dd0c89938c93427f6b7d9f96426a8d52703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_87ecee90dbbaec180046f16f2ae72dd0c89938c93427f6b7d9f96426a8d52703->leave($__internal_87ecee90dbbaec180046f16f2ae72dd0c89938c93427f6b7d9f96426a8d52703_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6dd68f43ea8f82b79b07f1d21783f3c70c8d4c0af74d44887c8cf144fe16b9e = $this->env->getExtension("native_profiler");
        $__internal_e6dd68f43ea8f82b79b07f1d21783f3c70c8d4c0af74d44887c8cf144fe16b9e->enter($__internal_e6dd68f43ea8f82b79b07f1d21783f3c70c8d4c0af74d44887c8cf144fe16b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e6dd68f43ea8f82b79b07f1d21783f3c70c8d4c0af74d44887c8cf144fe16b9e->leave($__internal_e6dd68f43ea8f82b79b07f1d21783f3c70c8d4c0af74d44887c8cf144fe16b9e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60ad56ec19cb05f5fef77a12b15fc661e923173c1679db271a84abf624aa914c = $this->env->getExtension("native_profiler");
        $__internal_60ad56ec19cb05f5fef77a12b15fc661e923173c1679db271a84abf624aa914c->enter($__internal_60ad56ec19cb05f5fef77a12b15fc661e923173c1679db271a84abf624aa914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60ad56ec19cb05f5fef77a12b15fc661e923173c1679db271a84abf624aa914c->leave($__internal_60ad56ec19cb05f5fef77a12b15fc661e923173c1679db271a84abf624aa914c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
