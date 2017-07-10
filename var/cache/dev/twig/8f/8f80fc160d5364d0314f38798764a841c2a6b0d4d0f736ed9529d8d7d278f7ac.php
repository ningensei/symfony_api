<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8d1d04b360468299389cc3c36f26af9582935bc93e3c0d65191be82de98cdb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1d04b360468299389cc3c36f26af9582935bc93e3c0d65191be82de98cdb8a->enter($__internal_8d1d04b360468299389cc3c36f26af9582935bc93e3c0d65191be82de98cdb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3d2a8ab622e42ad576980ed992fcb18f2cf254807c4f4e145d4628d83ee88650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2a8ab622e42ad576980ed992fcb18f2cf254807c4f4e145d4628d83ee88650->enter($__internal_3d2a8ab622e42ad576980ed992fcb18f2cf254807c4f4e145d4628d83ee88650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1d04b360468299389cc3c36f26af9582935bc93e3c0d65191be82de98cdb8a->leave($__internal_8d1d04b360468299389cc3c36f26af9582935bc93e3c0d65191be82de98cdb8a_prof);

        
        $__internal_3d2a8ab622e42ad576980ed992fcb18f2cf254807c4f4e145d4628d83ee88650->leave($__internal_3d2a8ab622e42ad576980ed992fcb18f2cf254807c4f4e145d4628d83ee88650_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b41f88e844cbee6d1c5ab30a4ccc07c4b431f1f77c07edb99e49b91734c0f00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41f88e844cbee6d1c5ab30a4ccc07c4b431f1f77c07edb99e49b91734c0f00b->enter($__internal_b41f88e844cbee6d1c5ab30a4ccc07c4b431f1f77c07edb99e49b91734c0f00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cad50b61c246dd74532d5fbd402b144e1852d97e4d14c7bb2aad17c4db6847a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad50b61c246dd74532d5fbd402b144e1852d97e4d14c7bb2aad17c4db6847a4->enter($__internal_cad50b61c246dd74532d5fbd402b144e1852d97e4d14c7bb2aad17c4db6847a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cad50b61c246dd74532d5fbd402b144e1852d97e4d14c7bb2aad17c4db6847a4->leave($__internal_cad50b61c246dd74532d5fbd402b144e1852d97e4d14c7bb2aad17c4db6847a4_prof);

        
        $__internal_b41f88e844cbee6d1c5ab30a4ccc07c4b431f1f77c07edb99e49b91734c0f00b->leave($__internal_b41f88e844cbee6d1c5ab30a4ccc07c4b431f1f77c07edb99e49b91734c0f00b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9f052e0493d1dbcfa8ee24a871d58b4f5276292dba97a29586107f30f6ed506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f052e0493d1dbcfa8ee24a871d58b4f5276292dba97a29586107f30f6ed506->enter($__internal_d9f052e0493d1dbcfa8ee24a871d58b4f5276292dba97a29586107f30f6ed506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_623ea2767872fa34f7d9bb5fefa0fc606af4fe32f1486b6dd07e2d79abbf218d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623ea2767872fa34f7d9bb5fefa0fc606af4fe32f1486b6dd07e2d79abbf218d->enter($__internal_623ea2767872fa34f7d9bb5fefa0fc606af4fe32f1486b6dd07e2d79abbf218d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_623ea2767872fa34f7d9bb5fefa0fc606af4fe32f1486b6dd07e2d79abbf218d->leave($__internal_623ea2767872fa34f7d9bb5fefa0fc606af4fe32f1486b6dd07e2d79abbf218d_prof);

        
        $__internal_d9f052e0493d1dbcfa8ee24a871d58b4f5276292dba97a29586107f30f6ed506->leave($__internal_d9f052e0493d1dbcfa8ee24a871d58b4f5276292dba97a29586107f30f6ed506_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_036781ac73e424f6bc77aff33e3a7c8b924f4857c442a723c60f602fd2137652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036781ac73e424f6bc77aff33e3a7c8b924f4857c442a723c60f602fd2137652->enter($__internal_036781ac73e424f6bc77aff33e3a7c8b924f4857c442a723c60f602fd2137652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9886609ed1abd816e7054b8697c2b6bba73eec01712905e70ac06f2190899865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9886609ed1abd816e7054b8697c2b6bba73eec01712905e70ac06f2190899865->enter($__internal_9886609ed1abd816e7054b8697c2b6bba73eec01712905e70ac06f2190899865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9886609ed1abd816e7054b8697c2b6bba73eec01712905e70ac06f2190899865->leave($__internal_9886609ed1abd816e7054b8697c2b6bba73eec01712905e70ac06f2190899865_prof);

        
        $__internal_036781ac73e424f6bc77aff33e3a7c8b924f4857c442a723c60f602fd2137652->leave($__internal_036781ac73e424f6bc77aff33e3a7c8b924f4857c442a723c60f602fd2137652_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vagrant/symfony/symfony_api/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
