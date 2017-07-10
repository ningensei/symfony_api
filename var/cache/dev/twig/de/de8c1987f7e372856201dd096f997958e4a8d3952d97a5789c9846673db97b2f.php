<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
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
        $__internal_0176b58db4d0857f349324d315891265c440c3b42da8a199457e58b5b66ac1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0176b58db4d0857f349324d315891265c440c3b42da8a199457e58b5b66ac1ed->enter($__internal_0176b58db4d0857f349324d315891265c440c3b42da8a199457e58b5b66ac1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7453628755f706c2b7a401e1cec27144d753f02d02ea75ce1af5ca5abcb87840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7453628755f706c2b7a401e1cec27144d753f02d02ea75ce1af5ca5abcb87840->enter($__internal_7453628755f706c2b7a401e1cec27144d753f02d02ea75ce1af5ca5abcb87840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0176b58db4d0857f349324d315891265c440c3b42da8a199457e58b5b66ac1ed->leave($__internal_0176b58db4d0857f349324d315891265c440c3b42da8a199457e58b5b66ac1ed_prof);

        
        $__internal_7453628755f706c2b7a401e1cec27144d753f02d02ea75ce1af5ca5abcb87840->leave($__internal_7453628755f706c2b7a401e1cec27144d753f02d02ea75ce1af5ca5abcb87840_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca120865fa3423a5ff2bd97ac01b33d64194b2ef08652655080b9c3922057b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca120865fa3423a5ff2bd97ac01b33d64194b2ef08652655080b9c3922057b6a->enter($__internal_ca120865fa3423a5ff2bd97ac01b33d64194b2ef08652655080b9c3922057b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_842809cec599f71ea9a9c5603316b282166514c8eda20080cd5dc01bdfd3df30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842809cec599f71ea9a9c5603316b282166514c8eda20080cd5dc01bdfd3df30->enter($__internal_842809cec599f71ea9a9c5603316b282166514c8eda20080cd5dc01bdfd3df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_842809cec599f71ea9a9c5603316b282166514c8eda20080cd5dc01bdfd3df30->leave($__internal_842809cec599f71ea9a9c5603316b282166514c8eda20080cd5dc01bdfd3df30_prof);

        
        $__internal_ca120865fa3423a5ff2bd97ac01b33d64194b2ef08652655080b9c3922057b6a->leave($__internal_ca120865fa3423a5ff2bd97ac01b33d64194b2ef08652655080b9c3922057b6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8176daca34f057232134fda3e41ef0d16f44caea5e96fff9634de7addf2093cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8176daca34f057232134fda3e41ef0d16f44caea5e96fff9634de7addf2093cc->enter($__internal_8176daca34f057232134fda3e41ef0d16f44caea5e96fff9634de7addf2093cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5587e738448a13d8fe4be8d16f9e45d3fa804647d0ef4a057e8b83ebcdffe7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5587e738448a13d8fe4be8d16f9e45d3fa804647d0ef4a057e8b83ebcdffe7e2->enter($__internal_5587e738448a13d8fe4be8d16f9e45d3fa804647d0ef4a057e8b83ebcdffe7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5587e738448a13d8fe4be8d16f9e45d3fa804647d0ef4a057e8b83ebcdffe7e2->leave($__internal_5587e738448a13d8fe4be8d16f9e45d3fa804647d0ef4a057e8b83ebcdffe7e2_prof);

        
        $__internal_8176daca34f057232134fda3e41ef0d16f44caea5e96fff9634de7addf2093cc->leave($__internal_8176daca34f057232134fda3e41ef0d16f44caea5e96fff9634de7addf2093cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb3c28e833b94bfe2c744da197554f35ac415072fcef3db98c3692c2ce696553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3c28e833b94bfe2c744da197554f35ac415072fcef3db98c3692c2ce696553->enter($__internal_bb3c28e833b94bfe2c744da197554f35ac415072fcef3db98c3692c2ce696553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b8bdb9871ec26a60d1d85c19b72b8238a92837f4335d7854df171b04a6438eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8bdb9871ec26a60d1d85c19b72b8238a92837f4335d7854df171b04a6438eb->enter($__internal_3b8bdb9871ec26a60d1d85c19b72b8238a92837f4335d7854df171b04a6438eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b8bdb9871ec26a60d1d85c19b72b8238a92837f4335d7854df171b04a6438eb->leave($__internal_3b8bdb9871ec26a60d1d85c19b72b8238a92837f4335d7854df171b04a6438eb_prof);

        
        $__internal_bb3c28e833b94bfe2c744da197554f35ac415072fcef3db98c3692c2ce696553->leave($__internal_bb3c28e833b94bfe2c744da197554f35ac415072fcef3db98c3692c2ce696553_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/symfony/symfony_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
