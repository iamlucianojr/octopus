<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d71dc00461018aa1a624537c7023b3a10bfe9316cf1caffad01b26eb65bb4696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f687d82cf0b0208c1446b5b552d3b2b410ba93e5828742ed6e7954e1f6680aa1 = $this->env->getExtension("native_profiler");
        $__internal_f687d82cf0b0208c1446b5b552d3b2b410ba93e5828742ed6e7954e1f6680aa1->enter($__internal_f687d82cf0b0208c1446b5b552d3b2b410ba93e5828742ed6e7954e1f6680aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f687d82cf0b0208c1446b5b552d3b2b410ba93e5828742ed6e7954e1f6680aa1->leave($__internal_f687d82cf0b0208c1446b5b552d3b2b410ba93e5828742ed6e7954e1f6680aa1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18472d4c366071ffb4a7a420ebf5e7dae3f029a3381dca1ec2384d439ef0ea66 = $this->env->getExtension("native_profiler");
        $__internal_18472d4c366071ffb4a7a420ebf5e7dae3f029a3381dca1ec2384d439ef0ea66->enter($__internal_18472d4c366071ffb4a7a420ebf5e7dae3f029a3381dca1ec2384d439ef0ea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18472d4c366071ffb4a7a420ebf5e7dae3f029a3381dca1ec2384d439ef0ea66->leave($__internal_18472d4c366071ffb4a7a420ebf5e7dae3f029a3381dca1ec2384d439ef0ea66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6324fe6d48a406790e063aee86cb68b2a9f14f867f3457ad6bcadfec7b39a1b8 = $this->env->getExtension("native_profiler");
        $__internal_6324fe6d48a406790e063aee86cb68b2a9f14f867f3457ad6bcadfec7b39a1b8->enter($__internal_6324fe6d48a406790e063aee86cb68b2a9f14f867f3457ad6bcadfec7b39a1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6324fe6d48a406790e063aee86cb68b2a9f14f867f3457ad6bcadfec7b39a1b8->leave($__internal_6324fe6d48a406790e063aee86cb68b2a9f14f867f3457ad6bcadfec7b39a1b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e8332ff482a6fa711f83609900468f49c2c0dd63c9741e68aa9e753f13ef970 = $this->env->getExtension("native_profiler");
        $__internal_6e8332ff482a6fa711f83609900468f49c2c0dd63c9741e68aa9e753f13ef970->enter($__internal_6e8332ff482a6fa711f83609900468f49c2c0dd63c9741e68aa9e753f13ef970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6e8332ff482a6fa711f83609900468f49c2c0dd63c9741e68aa9e753f13ef970->leave($__internal_6e8332ff482a6fa711f83609900468f49c2c0dd63c9741e68aa9e753f13ef970_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
