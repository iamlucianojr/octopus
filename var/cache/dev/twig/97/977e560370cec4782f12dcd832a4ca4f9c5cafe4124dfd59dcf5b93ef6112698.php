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
        $__internal_d1f51ecc4a65e877a8bbf54e7e61dbe1a6bca47b08de381e9a068619b909d6a3 = $this->env->getExtension("native_profiler");
        $__internal_d1f51ecc4a65e877a8bbf54e7e61dbe1a6bca47b08de381e9a068619b909d6a3->enter($__internal_d1f51ecc4a65e877a8bbf54e7e61dbe1a6bca47b08de381e9a068619b909d6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d1f51ecc4a65e877a8bbf54e7e61dbe1a6bca47b08de381e9a068619b909d6a3->leave($__internal_d1f51ecc4a65e877a8bbf54e7e61dbe1a6bca47b08de381e9a068619b909d6a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4189cb37e42574083416f3ffd272472ee88ade91e2bf3f59ec7d84ee4b2ea729 = $this->env->getExtension("native_profiler");
        $__internal_4189cb37e42574083416f3ffd272472ee88ade91e2bf3f59ec7d84ee4b2ea729->enter($__internal_4189cb37e42574083416f3ffd272472ee88ade91e2bf3f59ec7d84ee4b2ea729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4189cb37e42574083416f3ffd272472ee88ade91e2bf3f59ec7d84ee4b2ea729->leave($__internal_4189cb37e42574083416f3ffd272472ee88ade91e2bf3f59ec7d84ee4b2ea729_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe2fb1cfd8d7064385d98dc183abf6769e59db07492ba01f294c617a3b20a497 = $this->env->getExtension("native_profiler");
        $__internal_fe2fb1cfd8d7064385d98dc183abf6769e59db07492ba01f294c617a3b20a497->enter($__internal_fe2fb1cfd8d7064385d98dc183abf6769e59db07492ba01f294c617a3b20a497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe2fb1cfd8d7064385d98dc183abf6769e59db07492ba01f294c617a3b20a497->leave($__internal_fe2fb1cfd8d7064385d98dc183abf6769e59db07492ba01f294c617a3b20a497_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7facd1717177add3af15b87d4df7163f1d5b993dec78543be4db4bf699e23a1 = $this->env->getExtension("native_profiler");
        $__internal_b7facd1717177add3af15b87d4df7163f1d5b993dec78543be4db4bf699e23a1->enter($__internal_b7facd1717177add3af15b87d4df7163f1d5b993dec78543be4db4bf699e23a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7facd1717177add3af15b87d4df7163f1d5b993dec78543be4db4bf699e23a1->leave($__internal_b7facd1717177add3af15b87d4df7163f1d5b993dec78543be4db4bf699e23a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_086804e100210b2fa052a66223af68390fbd4d0036522005524e1af334a638be = $this->env->getExtension("native_profiler");
        $__internal_086804e100210b2fa052a66223af68390fbd4d0036522005524e1af334a638be->enter($__internal_086804e100210b2fa052a66223af68390fbd4d0036522005524e1af334a638be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_086804e100210b2fa052a66223af68390fbd4d0036522005524e1af334a638be->leave($__internal_086804e100210b2fa052a66223af68390fbd4d0036522005524e1af334a638be_prof);

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
