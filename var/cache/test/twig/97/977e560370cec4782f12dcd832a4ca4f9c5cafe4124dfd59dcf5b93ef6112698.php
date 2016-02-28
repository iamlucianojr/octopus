<?php

/* base.html.twig */
class __TwigTemplate_f0cfd5f738061d063c1d7ba12b6acb71452faf8fa57f86dcc7e5be68523f17e7 extends Twig_Template
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
        $__internal_5130c1d5a606ad6526a70f7366f387cdbebb632619ea6ef45256e9131e433868 = $this->env->getExtension("native_profiler");
        $__internal_5130c1d5a606ad6526a70f7366f387cdbebb632619ea6ef45256e9131e433868->enter($__internal_5130c1d5a606ad6526a70f7366f387cdbebb632619ea6ef45256e9131e433868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5130c1d5a606ad6526a70f7366f387cdbebb632619ea6ef45256e9131e433868->leave($__internal_5130c1d5a606ad6526a70f7366f387cdbebb632619ea6ef45256e9131e433868_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc217fac6b8d329a4ce76c8819316650ddc1d44099813961d7e7ed1e8191dd87 = $this->env->getExtension("native_profiler");
        $__internal_cc217fac6b8d329a4ce76c8819316650ddc1d44099813961d7e7ed1e8191dd87->enter($__internal_cc217fac6b8d329a4ce76c8819316650ddc1d44099813961d7e7ed1e8191dd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc217fac6b8d329a4ce76c8819316650ddc1d44099813961d7e7ed1e8191dd87->leave($__internal_cc217fac6b8d329a4ce76c8819316650ddc1d44099813961d7e7ed1e8191dd87_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9512542d1c9960f0c81754fb464b1dedcdb5f74d119ee6878352d207d670660e = $this->env->getExtension("native_profiler");
        $__internal_9512542d1c9960f0c81754fb464b1dedcdb5f74d119ee6878352d207d670660e->enter($__internal_9512542d1c9960f0c81754fb464b1dedcdb5f74d119ee6878352d207d670660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9512542d1c9960f0c81754fb464b1dedcdb5f74d119ee6878352d207d670660e->leave($__internal_9512542d1c9960f0c81754fb464b1dedcdb5f74d119ee6878352d207d670660e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e9b49c0cdc8d6c627e55925e7226a691699796af9c29f5d1eec29ac72a07395 = $this->env->getExtension("native_profiler");
        $__internal_2e9b49c0cdc8d6c627e55925e7226a691699796af9c29f5d1eec29ac72a07395->enter($__internal_2e9b49c0cdc8d6c627e55925e7226a691699796af9c29f5d1eec29ac72a07395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e9b49c0cdc8d6c627e55925e7226a691699796af9c29f5d1eec29ac72a07395->leave($__internal_2e9b49c0cdc8d6c627e55925e7226a691699796af9c29f5d1eec29ac72a07395_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ebf5fb6df53bf20fd26850a37c77d8aa52ec0bde7863f71914af79904f16ea1 = $this->env->getExtension("native_profiler");
        $__internal_2ebf5fb6df53bf20fd26850a37c77d8aa52ec0bde7863f71914af79904f16ea1->enter($__internal_2ebf5fb6df53bf20fd26850a37c77d8aa52ec0bde7863f71914af79904f16ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ebf5fb6df53bf20fd26850a37c77d8aa52ec0bde7863f71914af79904f16ea1->leave($__internal_2ebf5fb6df53bf20fd26850a37c77d8aa52ec0bde7863f71914af79904f16ea1_prof);

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
